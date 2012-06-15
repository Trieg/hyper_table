<?php

$test_data = array(
    array(
    	'firstname' => 'Sally',
    	'lastname' => 'Mally',
    	'created' => '2011-01-18 11:12:44'
    ),
    array(
    	'firstname' => 'Billy',
    	'lastname' => 'Mister',
    	'created' => '1985-09-12 08:08:53'
    ),
    array(
    	'firstname' => 'Tammy',
    	'lastname' => 'Wilkson',
    	'created' => '1969-06-14 05:09:32'
    )
);

include_once('hyper_table.php');

$table = new hyper_table();
$table->set_table(array(
    'id' => 'table_id',
    'class' => 'table_class',
    'style' => '',
    'border' => '5',
    'padding' => '10',
    'spacing' => '1'
));
$table->set_header(array(
	'columns' => array(
		'firstname' => array(
			'title' =>'First Name',
			'style' => 'width:140px;',
			'atag' => array(
				'href' => 'http://www.hello.com',
				'title' => 'title firstname',
				'class' => 'a_firstname'
			)
		),
        'lastname' => array(
			'title' =>'Last Name',
			'class' => 'last_class',
			'style' => 'width:180px;'
		),
		'created' => array(
			'title' => 'Date'
		)
	)
));
$table->set_body(array(
	'info' => $test_data,
	'funcs' => array(
		'created' => function($date) {
			return date('F j, Y, g:i a', strtotime($date));
		}
	)
));

echo $table->generate();

?>