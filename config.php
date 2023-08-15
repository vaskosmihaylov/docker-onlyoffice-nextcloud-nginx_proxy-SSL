<?php
$CONFIG = array (
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'memcache.distributed' => '\\OC\\Memcache\\Redis',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'redis' => 
  array (
    'host' => 'redis',
    'password' => '',
    'port' => 6379,
  ),
  'instanceid' => 'oc5wgf9tmt9w',
  'passwordsalt' => '6DnHtFHdn/zezxHgJMcUKeZRnGwylS',
  'secret' => 'zhedMLkmEObL7BzjsyW90EZlzvJgX9Gdmx+Xzejs31Hk6En4',
  'trusted_domains' => 
  array (
    0 => 'office.kdplaw.eu',
    1 => 'nginx-server',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '27.0.2.1',
  'overwrite.cli.url' => 'https://office.kdplaw.eu',
  'dbname' => 'nextcloud',
  'dbhost' => 'db',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud',
  'dbpassword' => '8a5c46d4cc6f0ef980b0d1b20977e99f',
  'installed' => true,
  'onlyoffice' => 
  array (
    'DocumentServerUrl' => '/ds-vpath/',
    'DocumentServerInternalUrl' => 'http://onlyoffice-document-server/',
    'StorageUrl' => 'http://nginx-server/',
    'jwt_secret' => 'mysecret',
  ),
  'allow_local_remote_servers' => 'true',
);
