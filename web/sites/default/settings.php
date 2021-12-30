<?php
$databases['default']['default'] = array (
  'database' => 'drupal9',
  'username' => 'root',
  'password' => 'root',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
$settings['hash_salt'] = 'IouScbVQ_uItqVzuE8CF5AzgstoADKPuCmn7VrWa-1hYXeTzokej8nejBL9M4whnbhXufNfI2g';
$settings['config_sync_directory'] = 'sites/default/files/config_VnNERgManPWuPuMBHcUycNrkPhPS4CA_gIj6NNsy2aoNKUsYwODXho9L3A7WWTWudHWnOYZ5lA/sync';

if (file_exists(__DIR__ . '/settings.local.php')) {
  include __DIR__ . '/settings.local.php';
}