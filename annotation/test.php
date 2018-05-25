<?php

include 'annotationBase.php';
include 'demoClass.php';

$anno = new annotationBase();

$anno->parseClassFile('demoClass.php');
