<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAssetsCreativecomponentGetToutiaoCouponComponentTopDTO {

    /**
        优惠结束时间。格式: "2020-12-01"
     **/
    private $effective_end_date;

    /**
        出现时间，单位s。 当show_time为自定义时必传，小于等于59，大于等于10。 当show_time为系统默认时，可不传，默认为10
     **/
    private $duration;

    /**
        优惠金额
     **/
    private $coupon_amount;

    /**
        出现时间类型。1 系统默认，2自定义。不传代表系统默认
     **/
    private $show_time;

    /**
        优惠条件。长度最大为8。一个中文长度为2
     **/
    private $coupon_condition;

    /**
        淘积木链接
     **/
    private $landing_page;

    /**
        优惠开始时间。格式: "2020-12-01"
     **/
    private $effective_start_date;

    /**
        活动名称。长度最大为15。一个中文长度为2
     **/
    private $activity_name;

    /**
        投放开始时间。格式: "2020-12-01"
     **/
    private $start_time;

    /**
        投放结束时间。格式: "2020-12-01"
     **/
    private $end_time;


    public function getEffectiveEndDate() : string{
        return $this->effective_end_date;
    }

    public function setEffectiveEndDate(string $effectiveEndDate){
        $this->effective_end_date = $effectiveEndDate;
    }

    public function getDuration() : int{
        return $this->duration;
    }

    public function setDuration(int $duration){
        $this->duration = $duration;
    }

    public function getCouponAmount() : int{
        return $this->coupon_amount;
    }

    public function setCouponAmount(int $couponAmount){
        $this->coupon_amount = $couponAmount;
    }

    public function getShowTime() : int{
        return $this->show_time;
    }

    public function setShowTime(int $showTime){
        $this->show_time = $showTime;
    }

    public function getCouponCondition() : int{
        return $this->coupon_condition;
    }

    public function setCouponCondition(int $couponCondition){
        $this->coupon_condition = $couponCondition;
    }

    public function getLandingPage() : string{
        return $this->landing_page;
    }

    public function setLandingPage(string $landingPage){
        $this->landing_page = $landingPage;
    }

    public function getEffectiveStartDate() : string{
        return $this->effective_start_date;
    }

    public function setEffectiveStartDate(string $effectiveStartDate){
        $this->effective_start_date = $effectiveStartDate;
    }

    public function getActivityName() : string{
        return $this->activity_name;
    }

    public function setActivityName(string $activityName){
        $this->activity_name = $activityName;
    }

    public function getStartTime() : string{
        return $this->start_time;
    }

    public function setStartTime(string $startTime){
        $this->start_time = $startTime;
    }

    public function getEndTime() : string{
        return $this->end_time;
    }

    public function setEndTime(string $endTime){
        $this->end_time = $endTime;
    }


}

