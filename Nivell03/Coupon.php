<?php

class couponGenerator {
    private $carCoupon;

    public function __construct(carCouponGenerator $carCoupon) {
        $this->carCoupon = $carCoupon;
    }

    public function getCoupon() {
        $discount = $this->carCoupon->addSeasonDiscount();
        $discount = $this->carCoupon->addStockDiscount();

        return $coupon = "Get {$discount}% off the price of your new car.";
    }

}

