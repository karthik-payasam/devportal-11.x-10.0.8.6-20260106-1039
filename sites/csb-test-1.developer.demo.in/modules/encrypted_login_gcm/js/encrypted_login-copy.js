(function ($, Drupal, once) {
  'use strict';

  Drupal.behaviors.encryptedLogin = {
    attach: function (context, settings) {
      once('encrypted-login', '.user-login-form, .user-register-form', context).forEach(function (formElement) {
        var $form = $(formElement);
        var publicKey = settings.encrypted_login && settings.encrypted_login.public_key;
console.log("publicKey",publicKey)
        if (!publicKey) {
          console.error('Encrypted login: RSA public key was not provided by Drupal.');
          return;
        }

        $form.on('submit.encryptedLogin', async function (event) {
          event.preventDefault();

          var isRegistration = $form.hasClass('user-register-form');
          var $password = isRegistration
            ? $form.find('#edit-pass-pass1')
            : $form.find('#edit-pass');
          var password = $password.val();

          if (!password) {
            $password.trigger('focus');
            return;
          }

          try {
            if (!window.crypto || !window.crypto.subtle || !window.crypto.getRandomValues) {
              throw new Error('Web Crypto API is unavailable. Use HTTPS.');
            }

            if (typeof JSEncrypt === 'undefined') {
              throw new Error('JSEncrypt library is not loaded.');
            }

            // AES-256-GCM: fresh 32-byte key and 12-byte nonce for every request.
            var aesKeyBytes = new Uint8Array(32);
            window.crypto.getRandomValues(aesKeyBytes);

            var ivBytes = new Uint8Array(12);
            window.crypto.getRandomValues(ivBytes);

            var cryptoKey = await window.crypto.subtle.importKey(
              'raw',
              aesKeyBytes,
              { name: 'AES-GCM' },
              false,
              ['encrypt']
            );

            var plaintext = new TextEncoder().encode(password);

            // Web Crypto appends the 128-bit GCM authentication tag to the
            // ciphertext. The server expects: IV(12) || ciphertext || tag(16).
            var encryptedBuffer = await window.crypto.subtle.encrypt(
              {
                name: 'AES-GCM',
                iv: ivBytes,
                tagLength: 128
              },
              cryptoKey,
              plaintext
            );

            var encryptedBytes = new Uint8Array(encryptedBuffer);
            var combined = new Uint8Array(ivBytes.length + encryptedBytes.length);
            combined.set(ivBytes, 0);
            combined.set(encryptedBytes, ivBytes.length);

            var encryptedPassword = uint8ArrayToBase64(combined);
            var aesKeyBase64 = uint8ArrayToBase64(aesKeyBytes);

            // RSA encrypts/wraps the random AES key.
            // JSEncrypt 2.3.1 uses RSA PKCS#1 v1.5 encryption.
            var rsa = new JSEncrypt();
            rsa.setPublicKey(publicKey);

            var encryptedAesKey = rsa.encrypt(aesKeyBase64);
            if (!encryptedAesKey) {
              throw new Error('RSA encryption of AES key failed.');
            }

            $form.find('#edit-encrypted-password').val(encryptedPassword);
            $form.find('#edit-encrypted-aes-key').val(encryptedAesKey);

            // Prevent plaintext password fields from being submitted.
            if (isRegistration) {
              $form.find('#edit-pass-pass1, #edit-pass-pass2').val('');
            }
            else {
              $form.find('#edit-pass').val('');
            }

            // Let Drupal perform its normal validation/submission once.
            $form.off('submit.encryptedLogin');
            HTMLFormElement.prototype.submit.call(formElement);
          }
          catch (error) {
            console.error('Encrypted login/registration failed:', error);

            if (isRegistration) {
              $form.find('#edit-pass-pass1, #edit-pass-pass2').val(password);
            }
            else {
              $form.find('#edit-pass').val(password);
            }

            alert('Unable to prepare secure password. Please try again.\n\n' + error.message);
          }
        });
      });
    }
  };

  function uint8ArrayToBase64(bytes) {
    var binary = '';
    var chunkSize = 0x8000;

    for (var i = 0; i < bytes.length; i += chunkSize) {
      binary += String.fromCharCode.apply(
        null,
        bytes.subarray(i, Math.min(i + chunkSize, bytes.length))
      );
    }

    return window.btoa(binary);
  }

})(jQuery, Drupal, once);
