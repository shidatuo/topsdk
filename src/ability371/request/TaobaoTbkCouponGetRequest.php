<?php
namespace Topsdk\Topapi\Ability371\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTbkCouponGetRequest {

    /**
        带券ID与商品ID的加密串
     **/
    private $me;

    /**
        商品ID
     **/
    private $itemId;

    /**
        券ID
     **/
    private $activityId;


    public function getMe() : string{
        return $this->me;
    }

    public function setMe(string $me){
        $this->me = $me;
    }

    public function getItemId() : string{
        return $this->itemId;
    }

    public function setItemId(string $itemId){
        $this->itemId = $itemId;
    }

    public function getActivityId() : string{
        return $this->activityId;
    }

    public function setActivityId(string $activityId){
        $this->activityId = $activityId;
    }


    public function getApiName() : string {
        return "taobao.tbk.coupon.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->me)) {
            $requestParam["me"] = TopUtil::convertBasic($this->me);
        }

        if (!TopUtil::checkEmpty($this->itemId)) {
            $requestParam["item_id"] = TopUtil::convertBasic($this->itemId);
        }

        if (!TopUtil::checkEmpty($this->activityId)) {
            $requestParam["activity_id"] = TopUtil::convertBasic($this->activityId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

