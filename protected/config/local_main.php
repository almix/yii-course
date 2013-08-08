<?php
return CMap::mergeArray(
    require(dirname(__FILE__).'/main.php'),
    array(
        'components'=>array(
            'db'=>array(
				'connectionString' => 'mysql:host=localhost;dbname=blog',
				'emulatePrepare' => true,
				'username' => 'root',
				'password' => 'root',
				'charset' => 'utf8',
				'tablePrefix' => 'tbl_',
			),
        ),
		
		'modules'=>array(
				// uncomment the following to enable the Gii tool

				'gii'=>array(
					'class'=>'system.gii.GiiModule',
					'password'=>'giiblog',
				 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
					'ipFilters'=>array('127.0.0.1', '::1'),
				),
		),

    )
);