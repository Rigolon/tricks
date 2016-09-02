<?php

$userdb=Array
(
    "teste1" => array
	(
		'uid' => '100',
		'name' => 'Sandra Shush',
		'url' => 'urlof100'
	),
    "teste2" => array
	(
		'uid' => '5465',
		'name' => 'Stefanie Mcmohn',
		'pic_square' => 'urlof100'
	),
    "teste3" => array
	(
		'uid' => '40489',
		'name' => 'Michael',
		'pic_square' => 'urlof40489'
	)
);

echo $key = array_search(
	40489,
	array_filter(
		array_combine(
			array_keys($userdb),
			array_column(
				$userdb, 'uid'
			)
		)
	)
);
