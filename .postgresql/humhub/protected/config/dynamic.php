<?php return array (
  'components' => 
  array (
    'db' => 
    array (
      'class' => 'yii\\db\\Connection',
      'dsn' => 'pgsql:host=db;dbname=humhub',
      'username' => 'humhub',
      'password' => 'Secret.1234',
      'schemaMap' => 
      array (
        'pgsql' => 'tigrov\\pgsql\\Schema',
      ),
    ),
    'cache' => 
    array (
      'class' => 'yii\\redis\\Cache',
      'keyPrefix' => 'humhub-console',
    ),
    'user' => 
    array (
    ),
    'mailer' => 
    array (
      'transport' => 
      array (
        'class' => 'Swift_SmtpTransport',
        'host' => 'mailer',
        'authMode' => 'null',
        'port' => '1025',
      ),
    ),
  ),
  'params' => 
  array (
    'installer' => 
    array (
      'db' => 
      array (
        'installer_hostname' => 'db',
        'installer_database' => 'humhub',
      ),
    ),
    'config_created_at' => 1653005833,
    'horImageScrollOnMobile' => '1',
  ),
  'name' => NULL,
  'language' => 'en-US',
); ?>