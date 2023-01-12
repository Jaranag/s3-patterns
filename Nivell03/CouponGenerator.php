<?php

interface CarCouponGenerator {
    public function addSeasonDiscount();
    public function addStockDiscount();
    public function couponGenerator();
}

class BmwCouponGenerator {

    private $discount = 0;
    private $isHighSeason = false;
    private $bigStock = false;


    public function addSeasonDiscount(){
        $this->isHighSeason = !$this->isHighSeason;
    }

    public function addStockDiscount(){
        $this->bigStock = !$this->bigStock;

    }

    public function couponGenerator() {
        if($this->isHighSeason) {
            $this->discount += 5;
        }
        if($this->bigStock) {
            $this->discount += 7;
        }
        echo "Get {$this->discount}% off the price of your new BMW!." . '<br>';
    }
}

class MercedesCouponGenerator {
    private $discount = 0;
    private $isHighSeason = false;
    private $bigStock = false;

    public function addSeasonDiscount(){
        $this->isHighSeason = !$this->isHighSeason;
    }

    public function addStockDiscount(){
        $this->bigStock = !$this->bigStock;
        
    }

    public function couponGenerator() {
        if($this->isHighSeason) {
            $this->discount += 5;
        }
        if($this->bigStock) {
            $this->discount += 7;
        }
        echo "Get {$this->discount}% off the price of your new Mercedes!." . '<br>';
    }
}