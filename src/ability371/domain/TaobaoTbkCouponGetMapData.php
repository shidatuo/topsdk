<?php
namespace Topsdk\Topapi\Ability371\Domain;

class TaobaoTbkCouponGetMapData {

    /**
        优惠券门槛金额
     **/
    private $coupon_start_fee;

    /**
        优惠券剩余量
     **/
    private $coupon_remain_count;

    /**
        优惠券总量
     **/
    private $coupon_total_count;

    /**
        优惠券结束时间
     **/
    private $coupon_end_time;

    /**
        优惠券开始时间
     **/
    private $coupon_start_time;

    /**
        优惠券金额
     **/
    private $coupon_amount;

    /**
        券类型，1 表示全网公开券，4 表示妈妈渠道券
     **/
    private $coupon_src_scene;

    /**
        券属性，0表示店铺券，1表示单品券
     **/
    private $coupon_type;

    /**
        券ID
     **/
    private $coupon_activity_id;


    public function getCouponStartFee() : string{
        return $this->coupon_start_fee;
    }

    public function setCouponStartFee(string $couponStartFee){
        $this->coupon_start_fee = $couponStartFee;
    }

    public function getCouponRemainCount() : int{
        return $this->coupon_remain_count;
    }

    public function setCouponRemainCount(int $couponRemainCount){
        $this->coupon_remain_count = $couponRemainCount;
    }

    public function getCouponTotalCount() : int{
        return $this->coupon_total_count;
    }

    public function setCouponTotalCount(int $couponTotalCount){
        $this->coupon_total_count = $couponTotalCount;
    }

    public function getCouponEndTime() : string{
        return $this->coupon_end_time;
    }

    public function setCouponEndTime(string $couponEndTime){
        $this->coupon_end_time = $couponEndTime;
    }

    public function getCouponStartTime() : string{
        return $this->coupon_start_time;
    }

    public function setCouponStartTime(string $couponStartTime){
        $this->coupon_start_time = $couponStartTime;
    }

    public function getCouponAmount() : string{
        return $this->coupon_amount;
    }

    public function setCouponAmount(string $couponAmount){
        $this->coupon_amount = $couponAmount;
    }

    public function getCouponSrcScene() : int{
        return $this->coupon_src_scene;
    }

    public function setCouponSrcScene(int $couponSrcScene){
        $this->coupon_src_scene = $couponSrcScene;
    }

    public function getCouponType() : int{
        return $this->coupon_type;
    }

    public function setCouponType(int $couponType){
        $this->coupon_type = $couponType;
    }

    public function getCouponActivityId() : string{
        return $this->coupon_activity_id;
    }

    public function setCouponActivityId(string $couponActivityId){
        $this->coupon_activity_id = $couponActivityId;
    }


}

