<?php

mcrypt_encrypt();
openssl_public_encrypt($i,$e,$k);
openssl_public_encrypt($i,$e,$k, OPENSSL_PKCS1_PADDING);