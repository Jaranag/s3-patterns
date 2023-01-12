<?php

include 'CouponGenerator.php';

$newBMW1 = new BmwCouponGenerator;
$newBMW2 = new BmwCouponGenerator;
$newBMW3 = new BmwCouponGenerator;


$newMercedes1 = new MercedesCouponGenerator;
$newMercedes2 = new MercedesCouponGenerator;
$newMercedes3 = new MercedesCouponGenerator;


$newBMW1->addSeasonDiscount();
$newBMW2->addStockDiscount();

$newBMW1->couponGenerator();
$newBMW2->couponGenerator();
$newBMW3->couponGenerator();

$newMercedes1->addSeasonDiscount();
$newMercedes1->addStockDiscount();
$newMercedes2->addSeasonDiscount();

$newMercedes1->couponGenerator();
$newMercedes2->couponGenerator();
$newMercedes3->couponGenerator();