<?php

interface carCouponGenerator {
    function addSeasonDiscount();
    function addStockDiscount();
}


class bmwCouponGenerator implements carCouponGenerator {
    private $discount = 0;
    private $isHighSeason = false;
    private $bigStock = true;
        
    public function addSeasonDiscount() {
        if(!$this->isHighSeason) return $this->discount += 5;
            return $this->discount +=0;
    
    }
        
    public function addStockDiscount() {
        if($this->bigStock) return $this->discount += 7;
            return $this->discount +=0;
    }

}

class mercedesCouponGenerator implements carCouponGenerator {
    private $discount = 0;
    private $isHighSeason = false;
    private $bigStock = true;
        
    public function addSeasonDiscount() {
        if(!$this->isHighSeason) return $this->discount += 4;
            return $this->discount;
    
    }
        
    public function addStockDiscount() {
        if($this->bigStock) return $this->discount += 10;
            return $this->discount;
    }
    
}