<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdAdgroupBudgetSuggestAdgroupPricingTopDTO {

    /**
        付费方式，2：CPM，3：CPC，5：OCPM，6：OCPC
     **/
    private $pricing_type;

    /**
        出价方式：0：手动（默认），1：自动
     **/
    private $bid_type;


    public function getPricingType() : int{
        return $this->pricing_type;
    }

    public function setPricingType(int $pricingType){
        $this->pricing_type = $pricingType;
    }

    public function getBidType() : int{
        return $this->bid_type;
    }

    public function setBidType(int $bidType){
        $this->bid_type = $bidType;
    }


}

