(function ($, Drupal, once) {
  'use strict';

  Drupal.behaviors.encryptedLogin = {
    attach: function (context, settings) {
      once(
        'encrypted-login',
        '.user-login-form, .user-register-form',
        context
      ).forEach(function (formElement) {

        var $form = $(formElement);
        var publicKey =
          settings.encrypted_login &&
          settings.encrypted_login.public_key;

        if (!publicKey) {
          console.error(
            'Encrypted login: RSA public key was not provided by Drupal.'
          );
          return;
        }

        $form.on('submit.encryptedLogin', async function (event) {
          event.preventDefault();

          var isRegistration = $form.hasClass('user-register-form');

          /*
           * ------------------------------------------------------------
           * Get username
           * ------------------------------------------------------------
           *
           * Login:
           *   #edit-name
           *
           * Registration:
           *   Usually #edit-name as well.
           */
          var $username = $form.find('#edit-name');
          var username = $username.val();

          /*
           * ------------------------------------------------------------
           * Get password
           * ------------------------------------------------------------
           */
          var $password = isRegistration
            ? $form.find('#edit-pass-pass1')
            : $form.find('#edit-pass');

          var password = $password.val();

          if (!username) {
            $username.trigger('focus');
            return;
          }

          if (!password) {
            $password.trigger('focus');
            return;
          }

          try {

            /*
             * ----------------------------------------------------------
             * Check Web Crypto API
             * ----------------------------------------------------------
             */
            if (
              !window.crypto ||
              !window.crypto.subtle ||
              !window.crypto.getRandomValues
            ) {
              throw new Error(
                'Web Crypto API is unavailable. Use HTTPS.'
              );
            }

            /*
             * ----------------------------------------------------------
             * Check JSEncrypt
             * ----------------------------------------------------------
             */
            if (typeof JSEncrypt === 'undefined') {
              throw new Error(
                'JSEncrypt library is not loaded.'
              );
            }

            /*
             * ----------------------------------------------------------
             * Generate a fresh AES-256 key
             * ----------------------------------------------------------
             *
             * 32 bytes = 256 bits.
             */
            var aesKeyBytes = new Uint8Array(32);
            window.crypto.getRandomValues(aesKeyBytes);

            /*
             * ----------------------------------------------------------
             * Generate a fresh 12-byte GCM IV
             * ----------------------------------------------------------
             */
            var ivBytes = new Uint8Array(12);
            window.crypto.getRandomValues(ivBytes);

            /*
             * ----------------------------------------------------------
             * Import AES key
             * ----------------------------------------------------------
             */
            var cryptoKey = await window.crypto.subtle.importKey(
              'raw',
              aesKeyBytes,
              {
                name: 'AES-GCM'
              },
              false,
              ['encrypt']
            );

            /*
             * ----------------------------------------------------------
             * Create credentials object
             * ----------------------------------------------------------
             *
             * Username and password are encrypted together.
             */
            var credentials = JSON.stringify({
              username: username,
              password: password
            });

            /*
             * Convert JSON string to bytes.
             */
            var plaintext = new TextEncoder().encode(credentials);
 console.log("datapassplaintext",plaintext);
            /*
             * ----------------------------------------------------------
             * AES-256-GCM encryption
             * ----------------------------------------------------------
             *
             * Web Crypto appends the 16-byte authentication tag
             * to the ciphertext.
             *
             * Result:
             *
             *     IV (12 bytes)
             *     +
             *     ciphertext
             *     +
             *     authentication tag (16 bytes)
             */
            var encryptedBuffer =
              await window.crypto.subtle.encrypt(
                {
                  name: 'AES-GCM',
                  iv: ivBytes,
                  tagLength: 128
                },
                cryptoKey,
                plaintext
              );

            var encryptedBytes =
              new Uint8Array(encryptedBuffer);

            /*
             * ----------------------------------------------------------
             * Combine:
             *
             * IV || ciphertext || authentication tag
             * ----------------------------------------------------------
             */
            var combined = new Uint8Array(
              ivBytes.length + encryptedBytes.length
            );

            combined.set(ivBytes, 0);
            combined.set(
              encryptedBytes,
              ivBytes.length
            );

            /*
             * ----------------------------------------------------------
             * Convert encrypted credentials to Base64
             * ----------------------------------------------------------
             */
            var encryptedCredentials =
              uint8ArrayToBase64(combined);
console.log(" encryptedCredentials",encryptedCredentials);

            /*
             * ----------------------------------------------------------
             * Convert AES key to Base64
             * ----------------------------------------------------------
             *
             * RSA will encrypt this Base64 representation.
             */
            var aesKeyBase64 =
              uint8ArrayToBase64(aesKeyBytes);

            /*
             * ----------------------------------------------------------
             * RSA encrypt the AES key
             * ----------------------------------------------------------
             *
             * JSEncrypt 2.3.1 uses RSA PKCS#1 v1.5.
             */
            var rsa = new JSEncrypt();

            rsa.setPublicKey(publicKey);

            var encryptedAesKey =
              rsa.encrypt(aesKeyBase64);

            if (!encryptedAesKey) {
              throw new Error(
                'RSA encryption of AES key failed.'
              );
            }

            /*
             * ----------------------------------------------------------
             * Put encrypted values into hidden Drupal fields.
             * ----------------------------------------------------------
             */
            $form
              .find('#edit-encrypted-credentials')
              .val(encryptedCredentials);

            $form
              .find('#edit-encrypted-aes-key')
              .val(encryptedAesKey);

            /*
             * ----------------------------------------------------------
             * IMPORTANT:
             *
             * Remove plaintext username/password before submitting.
             * ----------------------------------------------------------
             */

            $username.val('');

            if (isRegistration) {
              $form
                .find(
                  '#edit-pass-pass1, #edit-pass-pass2'
                )
                .val('');
            }
            else {
              $form
                .find('#edit-pass')
                .val('');
            }

            /*
             * ----------------------------------------------------------
             * Remove our submit handler.
             * ----------------------------------------------------------
             */
            $form.off('submit.encryptedLogin');

            /*
             * ----------------------------------------------------------
             * Submit normally.
             *
             * HTMLFormElement.prototype.submit() bypasses the submit
             * event, so our handler will not execute again.
             * ----------------------------------------------------------
             */
            HTMLFormElement.prototype.submit.call(
              formElement
            );
          }
          catch (error) {

            console.error(
              'Encrypted login/registration failed:',
              error
            );

            /*
             * Restore username.
             */
            $username.val(username);

            /*
             * Restore password.
             */
            if (isRegistration) {
              $form
                .find(
                  '#edit-pass-pass1, #edit-pass-pass2'
                )
                .val(password);
            }
            else {
              $form
                .find('#edit-pass')
                .val(password);
            }

            alert(
              'Unable to prepare secure credentials. ' +
              'Please try again.\n\n' +
              error.message
            );
          }
        });
      });
    }
  };

  /**
   * Converts Uint8Array to Base64.
   */
  function uint8ArrayToBase64(bytes) {
    var binary = '';
    var chunkSize = 0x8000;

    for (
      var i = 0;
      i < bytes.length;
      i += chunkSize
    ) {
      binary += String.fromCharCode.apply(
        null,
        bytes.subarray(
          i,
          Math.min(i + chunkSize, bytes.length)
        )
      );
    }

    return window.btoa(binary);
  }

})(jQuery, Drupal, once);
