<?php

return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
                'language'=>'en',
		'components'=>array(
                        'fixture'=>array(
				'class'=>'system.test.CDbFixtureManager',
			),
			'proddb'=>array(
                                'class'=>'CDbConnection',
                                'connectionString' => 'mysql:host=localhost;dbname=shubham',
                                'emulatePrepare' => true,
                                'username' => 'root',
                                'password' => 'india123',
                                'charset' => 'utf8',
			),
			'db'=>array(
                                'connectionString' => 'mysql:host=localhost;dbname=shubham',
			),
                        'urlManager' => array(
                                'showScriptName' => true,
                        ),
                        'authManager'=>array(
                                'connectionID'=>'proddb',
                        ),
                        'testdb'=>array(
                            'class'=>'CDbConnection',
                            'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdb.db',
                            'initSQLs'=>array(
                                'PRAGMA foreign_keys = ON',
                            ),
                       
                        ),
		),
	)
);
