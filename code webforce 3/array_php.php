<?php

	$tableau = ['Cherif', 'Matthias', 'Francois'];

	echo $tableau[0];
	echo $tableau[1];

	$tableau = [
		0 => 'Cherif',
		1 => 'Matthias',
		2 => 'francois'
	];

	echo $tableau[0] . '<br>';
	echo $tableau[1] . '<br>';
	echo $tableau[2] . '<br>';

	 $tableau2 =
	[
		'premierEleve' => 'Cherif',
		'deuxiemeEleve' => 'Mathias',
		'troisiemeEleve' => 'François'
	];

	echo $tableau2['premierEleve'] . '<br>';
	echo $tableau2['deuxiemeEleve'] . '<br>';
	echo $tableau2['troisiemeEleve'] . '<br>';

	foreach ($tableau2 as  $k => $t) {
		echo $k . ' : ' . $t . '<br>';
	}