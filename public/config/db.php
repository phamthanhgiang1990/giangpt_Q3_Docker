<?php

return [
    /*  'class' => 'yii\db\Connection',
      'dsn' => 'mysql:host=192.168.33.16;port=6603;dbname=mysql',
      'username' => 'root',
      'password' => '123456',
      'charset' => 'utf8',*/

    'class'             => 'yii\db\Connection',
    'username'          => 'oneid',
    'enableSchemaCache' => true,
    'masters'           => [
        [
            'dsn'       => 'oci:dbname=//192.168.222.201:1521/oneid',
        ],
        [
            'dsn'       => 'oci:dbname=//192.168.222.201:1522/oneid',
        ],
    ],
    'masterConfig'      => [
        'username'          => 'oneid',
        'password'          => 'RjGqHbh0',
        'enableSchemaCache' => true,
        'attributes' => array(
            PDO::ATTR_PERSISTENT => true,
        ),
    ],
    'serverRetryInterval' => 10,


];
