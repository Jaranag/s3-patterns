<?php

include 'Tigger.php';

$tigger = Tigger::getInstance();

$tigger->roar();
$tigger->roar();
$tigger->roar();


$tigger->getCounter();

function test()
{
    $s1 = Tigger::getInstance();
    $s2 = Tigger::getInstance();
    if ($s1 === $s2) {
        echo "Singleton works, both variables contain the same instance.";
    } else {
        echo "Singleton failed, variables contain different instances.";
    }
}

test();