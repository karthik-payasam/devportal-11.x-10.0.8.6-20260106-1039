# Encrypted Login - AES-256-GCM

This Drupal 10/11 module protects the password transport from the browser to
the Drupal application using a hybrid encryption design:

1. Browser generates a fresh random 256-bit AES key.
2. Browser generates a fresh random 96-bit AES-GCM nonce (IV).
3. Password is encrypted with AES-256-GCM using a 128-bit authentication tag.
4. Browser RSA-encrypts the AES key with the Drupal RSA public key.
5. Server RSA-decrypts the AES key with the private key.
6. Server verifies the GCM authentication tag and decrypts the password.
7. Drupal's normal login/registration validation continues.

Payload format:

`base64(12-byte IV || ciphertext || 16-byte GCM authentication tag)`

The RSA-wrapped AES key remains Base64 encoded as produced by JSEncrypt.

Important: HTTPS/TLS is still required. This module is an additional
application-layer protection and does not replace TLS.

For production security reviews, consider migrating the RSA key wrapping from
RSAES-PKCS1-v1_5 to RSA-OAEP with SHA-256 if the browser RSA library and server
implementation support it.
