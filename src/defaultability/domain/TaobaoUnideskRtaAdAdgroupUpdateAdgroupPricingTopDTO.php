<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdAdgroupUpdateAdgroupPricingTopDTO {

    /**
        基础出价
     **/
    private $bid;

    /**
        转化目标出价
     **/
    private $cpa_bid;

    /**
        是否调整自动出价，1：是，0：否
     **/
    private $adjust_cpa;


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

    public function getAdjustCpa() : int{
        return $this->adjust_cpa;
    }

    public function setAdjustCpa(int $adjustCpa){
        $this->adjust_cpa = $adjustCpa;
    }


}

