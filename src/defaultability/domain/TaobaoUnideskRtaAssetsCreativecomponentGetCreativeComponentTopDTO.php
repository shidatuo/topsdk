<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAssetsCreativecomponentGetCreativeComponentTopDTO {

    /**
        组件名称
     **/
    private $name;

    /**
        组件ID
     **/
    private $id;

    /**
        组件详细信息-电商优惠券磁贴
     **/
    private $toutiao_coupon_magnet;

    /**
        组件类型， 1图片磁贴 3电商优惠券磁贴 4推广卡片
     **/
    private $type;

    /**
        组件详细信息-推广卡片
     **/
    private $toutiao_promotion_card;

    /**
        组件详细信息-图片磁贴
     **/
    private $toutiao_image_magnet;

    /**
        创建时间
     **/
    private $gmt_create;

    /**
        广告主id
     **/
    private $advertiser_id;

    /**
        审核状态，1审核通过 2审核中 3审核拒绝
     **/
    private $status;


    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getToutiaoCouponMagnet() : TaobaoUnideskRtaAssetsCreativecomponentGetToutiaoCouponComponentTopDTO{
        return $this->toutiao_coupon_magnet;
    }

    public function setToutiaoCouponMagnet(TaobaoUnideskRtaAssetsCreativecomponentGetToutiaoCouponComponentTopDTO $toutiaoCouponMagnet){
        $this->toutiao_coupon_magnet = $toutiaoCouponMagnet;
    }

    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }

    public function getToutiaoPromotionCard() : TaobaoUnideskRtaAssetsCreativecomponentGetToutiaoPromotionCardComponentTopDTO{
        return $this->toutiao_promotion_card;
    }

    public function setToutiaoPromotionCard(TaobaoUnideskRtaAssetsCreativecomponentGetToutiaoPromotionCardComponentTopDTO $toutiaoPromotionCard){
        $this->toutiao_promotion_card = $toutiaoPromotionCard;
    }

    public function getToutiaoImageMagnet() : TaobaoUnideskRtaAssetsCreativecomponentGetToutiaoImageComponentTopDTO{
        return $this->toutiao_image_magnet;
    }

    public function setToutiaoImageMagnet(TaobaoUnideskRtaAssetsCreativecomponentGetToutiaoImageComponentTopDTO $toutiaoImageMagnet){
        $this->toutiao_image_magnet = $toutiaoImageMagnet;
    }

    public function getGmtCreate() : string{
        return $this->gmt_create;
    }

    public function setGmtCreate(string $gmtCreate){
        $this->gmt_create = $gmtCreate;
    }

    public function getAdvertiserId() : int{
        return $this->advertiser_id;
    }

    public function setAdvertiserId(int $advertiserId){
        $this->advertiser_id = $advertiserId;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }


}

