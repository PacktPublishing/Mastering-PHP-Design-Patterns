<?php

/**
 * User: Junade Ali
 * Date: 16/05/2016
 * Time: 22:01
 */

require_once('Student.php');

$prototypeStudent = new Student();
$prototypeStudent->setName('Dave');
$prototypeStudent->setYear(2);
$prototypeStudent->setGrade('A*');

var_dump($prototypeStudent);

$theLesserChild = clone $prototypeStudent;
$theLesserChild->setName('Mike');
$theLesserChild->setGrade('B');

var_dump($theLesserChild);

$theChildProdigy = clone $prototypeStudent;
$theChildProdigy->setName('Bob');
$theChildProdigy->setYear(3);
$theChildProdigy->setGrade('A');

$theChildProdigy->danceSkills = "Outstanding";
$theChildProdigy->dance = function (string $style) {
    return "Dancing $style style.";
};

var_dump($theChildProdigy);
var_dump($theChildProdigy->dance->__invoke('Pogo'));
