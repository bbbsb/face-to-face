<?php
$abc = ['a', 'b', 'c'];
foreach ($abc as $k => $v) {
	$v = &$abc[$k];
}
var_dump($abc);


