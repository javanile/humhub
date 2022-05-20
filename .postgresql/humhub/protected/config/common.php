<?php return 
array (
  'params' => 
  array (
    'enablePjax' => true,
  ),
  'components' => 
  array (
    'urlManager' => 
    array (
      'showScriptName' => false,
      'enablePrettyUrl' => true,
    ),
    'redis' => 
    array (
      'class' => 'yii\\redis\\Connection',
      'hostname' => 'redis',
      'port' => '6379',
      'database' => 0,
      'password' => 'redis_password',
    ),
    'cache' => 
    array (
      'class' => 'yii\\redis\\Cache',
    ),
    'queue' => 
    array (
      'class' => 'humhub\\modules\\queue\\driver\\Redis',
    ),
  ),
);
