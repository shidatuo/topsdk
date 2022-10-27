<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdAdgroupAddAdgroupPricingTopDTO {

    /**
        投放目标，1：转化量，2：点击量，3：展示量
     **/
    private $cast_target;

    /**
        转化目标，1：到达，2：下单，5：表单提交
     **/
    private $convert_target;

    /**
        基础出价，单位：分
     **/
    private $bid;

    /**
        转化目标出价，单位：分
     **/
    private $cpa_bid;

    /**
        付费方式，2：CPM，3：CPC，5：OCPM，6：OCPC
     **/
    private $pricing_type;

    /**
        出价方式：1：自动，2：手动
     **/
    private $bid_type;

    /**
        是否调整自动出价，1：是，0：否
     **/
    private $adjust_cpa;


    public function getCastTarget() : int{
        return $this->cast_target;
    }

    public function setCastTarget(int $castTarget){
        $this->cast_target = $castTarget;
    }

    public function getConvertTarget() : int{
        return $this->convert_target;
    }

    public function setConvertTarget(int $convertTarget){
        $this->convert_target = $convertTarget;
    }

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

    public function getAdjustCpa() : int{
        return $this->adjust_cpa;
    }

    public function setAdjustCpa(int $adjustCpa){
        $this->adjust_cpa = $adjustCpa;
    }


}

