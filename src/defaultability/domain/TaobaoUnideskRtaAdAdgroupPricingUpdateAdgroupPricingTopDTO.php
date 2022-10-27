<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdAdgroupPricingUpdateAdgroupPricingTopDTO {

    /**
        基础出价
     **/
    private $bid;

    /**
        转化目标出价
     **/
    private $cpa_bid;


    public function getBid() : int{
        return $this->bid;
    }

    public function setBid(int $bid){
        $this->bid = $bid;
    }

    public function getCpaBid() : int{
        return $this->cpa_bid;
    }

    public function setCpaBid(int $cpaBid){
        $this->cpa_bid = $cpaBid;
    }


}

