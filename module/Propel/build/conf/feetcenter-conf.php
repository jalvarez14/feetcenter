<?php
// This file generated by Propel 1.7.1 convert-conf target
// from XML runtime conf file /Applications/AMPPS/www/feetcenter/module/Propel/runtime-conf.xml
$conf = array (
  'datasources' => 
  array (
    'feetcent_feetcenter' => 
    array (
      'adapter' => 'mysql',
      'connection' => 
      array (
        'dsn' => 'mysql:host=localhost;dbname=feetcent_feetcenter',
        'user' => 'feetcent_admin',
        'password' => '3TZ7dyGs',
      ),
    ),
    'default' => 'feetcent_feetcenter',
  ),
  'generator_version' => '1.7.1',
);
$conf['classmap'] = include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'classmap-feetcenter-conf.php');
return $conf;