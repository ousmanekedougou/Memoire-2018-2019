<?php

use Paydunya\Setup;
use Paydunya\Checkout\Store;

Setup::setMasterKey("AqF7wDeD-Tony-Tlrq-kyEU-RCjmhsDfiF0Y");
Setup::setPublicKey("test_public_HKXeQ87xySDCTsslSLNHDifMTCr");
Setup::setPrivateKey("test_private_ojlfOu4lPrJZjKmjBbXkkbze2PS");
Setup::setToken("5cDaergFBq36n88WSupa");
Setup::setMode("test"); // Optionnel. Utilisez cette option pour les paiements tests.


//Configuration des informations de votre service/entreprise
Store::setName("RV-Medical"); // Seul le nom est requis
Store::setTagline("Alergir la vie medical des Senegalais");
Store::setPhoneNumber("336530583");
Store::setPostalAddress("Dakar Niary Tally - Ecole Biscuiterie");
Store::setWebsiteUrl("http://fathomless-escarpment-76115.herokuapp.com");
Store::setLogoUrl("http://fathomless-escarpment-76115.herokuapp.com/logo.png");
Store::setCallbackUrl("http://fathomless-escarpment-76115.herokuapp.com");
