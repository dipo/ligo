<?php

header('Content-Type: text/html; charset=UTF-8');

function get_rand($set) {
	shuffle($set);
	return $set[0];
}

$kas = array('Jānis', 'Janīts', 'Līga', 'Andris');

$darbv[0] = array('skrēja', 'smēja', 'jāja', 'pēra', 'lūdza', 'nesa');
$darbv[1] = array('dzēra', 'lēja', 'sūca', 'lūdza');
$darbv[2] = array('ēda', 'grieza', 'nesa', 'oda');

$ipv[0] = array('lielu', 'mazu', 'skaistu', 'jauku', 'jaunu', 'vecu', 'mīļu', 'lepnu', 'ašu', 'knašu', 'garu', 'greizu');
$ipv[1] = array('lielu', 'rūgtu', 'vecu', 'svaigu', 'gardu');
$ipv[2] = array('lielu', 'garu', 'vecu', 'greizu', 'gardu', 'zaļu');

$lietv[0] = array('putnu', 'lāci', 'meitu', 'beibi', 'briedi', 'zirgu');
$lietv[1] = array('alu', 'polšu');
$lietv[2] = array('maizi', 'sieru', 'desu');

$sec[0] = array('Uz', 'No', 'Pār', 'Zem');
$sec[1] = array('kalniņa', 'lodziņa', 'galdiņu', 'svārkiem\'i', 'tiltiņu', 'kājāmi');
$sec[2] = array('lūkodamies', 'dancojoti', 'skatīdamies', 'atpūšoties', 'staipoties\'i', 'veļoties\'i');

for($i = 0;$i<3;$i++) {

	$set_id = rand(0,2);

	echo get_rand($kas) . ' ' . get_rand($darbv[$set_id]) . ' ' . get_rand($ipv[$set_id]) . ' ' . get_rand($lietv[$set_id]) . '<br />';
	echo 'Līgo, Līgo!<br />';
	echo get_rand($sec[0]) . ' ' . get_rand($sec[1]) . ' ' . get_rand($sec[2]) . '<br />';
	echo 'Līgo!<br /><br />';

}

