<?php
/*
// vecchia maniera di definire gli array
$my_arr_old = array('ciao', 'a', 'tutti', 5);
var_dump($my_arr_old);


$my_arr = ['ciao', 'a', 'tutti', 5];
$my_arr[] = 'pushato';

$my_arr_chiavi = [
	10 => 'ciao',
	1 => 'a',
	25 => 'tutti',
	'ciao' => 5
];
$my_arr_chiavi[] = 'pushato';

$student = [
	'name' 	=> 'Pinco',
	'age'		=> 25,
	'exams'	=> 12,
];
$student['lastname'] = 'Pallino';

var_dump($my_arr);
var_dump($my_arr_chiavi);
var_dump($student);

var_dump($my_arr_chiavi['ciao']);
var_dump($student['name']);
*/

$name = 'ciao';

$team = [
	[
		"name"		=> "Fabio",
		"lastname"	=> "Forghieri",
		"role"		=> "Co-Founder",
   ],
   [
		"name"		=> "Michele",
		"lastname"	=> "Papagni",
		"role"		=> "Head of Teaching",
	],
	[
		"name"		=> "Pinco",
		"lastname"	=> "Pallino",
		"role"		=> "Teacher",
	],
];

$leaders = [
	'Mario Rossi',
	'Giallo Verdi',
]

?>

<h1><?= "{$team[1]['name']} {$team[1]['lastname']} - Leader: {$leaders[0]}" ?></h1>
