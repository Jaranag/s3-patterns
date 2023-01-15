<?php

include 'CouponGenerator.php';
include 'Coupon.php';


function couponObjectGenerator($car){
    if($car == "bmw") {
        $carObj = new bmwCouponGenerator;
    } else if($car == "mercedes") {
        $carObj = new mercedesCouponGenerator;
    }
      
    return $carObj;
}

$car = "bmw";
$carObj = couponObjectGenerator($car);
$couponGenerator = new couponGenerator($carObj);
echo $couponGenerator->getCoupon();

$car = "mercedes";
$carObj = couponObjectGenerator($car);
$couponGenerator = new couponGenerator($carObj);
echo $couponGenerator->getCoupon();