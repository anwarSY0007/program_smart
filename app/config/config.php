<?php

// Definisikan direktori dasar aplikasi
define('APP_ROOT', dirname(__FILE__) . '/../app');

// Definisikan direktori controller
define('CONTROLLER_DIR', APP_ROOT . '/controllers');

// Definisikan direktori view
define('VIEW_DIR', APP_ROOT . '/views');

// Definisikan direktori model (jika ada)
define('MODEL_DIR', APP_ROOT . '/models');

// Definisikan URL dasar aplikasi
define('BASEURL', 'http://localhost/smart/public/');

// Database Config
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','db_spk_smart_3');
define('DB_CHARSET','utf8mb4');