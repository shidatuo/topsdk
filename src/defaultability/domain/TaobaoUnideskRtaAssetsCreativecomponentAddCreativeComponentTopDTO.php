<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAssetsCreativecomponentAddCreativeComponentTopDTO {

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
        广告主id
     **/
    private $advertiser_id;

    /**
        组件名称
     **/
    private $name;


    public function getToutiaoCouponMagnet() : TaobaoUnideskRtaAssetsCreativecomponentAddToutiaoCouponComponentTopDTO{
        return $this->toutiao_coupon_magnet;
    }

    public function setToutiaoCouponMagnet(TaobaoUnideskRtaAssetsCreativecomponentAddToutiaoCouponComponentTopDTO $toutiaoCouponMagnet){
        $this->toutiao_coupon_magnet = $toutiaoCouponMagnet;
    }

    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }

    public function getToutiaoPromotionCard() : TaobaoUnideskRtaAssetsCreativecomponentAddToutiaoPromotionCardComponentTopDTO{
        return $this->toutiao_promotion_card;
    }

    public function setToutiaoPromotionCard(TaobaoUnideskRtaAssetsCreativecomponentAddToutiaoPromotionCardComponentTopDTO $toutiaoPromotionCard){
        $this->toutiao_promotion_card = $toutiaoPromotionCard;
    }

    public function getToutiaoImageMagnet() : TaobaoUnideskRtaAssetsCreativecomponentAddToutiaoImageComponentTopDTO{
        return $this->toutiao_image_magnet;
    }

    public function setToutiaoImageMagnet(TaobaoUnideskRtaAssetsCreativecomponentAddToutiaoImageComponentTopDTO $toutiaoImageMagnet){
        $this->toutiao_image_magnet = $toutiaoImageMagnet;
    }

    public function getAdvertiserId() : int{
        return $this->advertiser_id;
    }

    public function setAdvertiserId(int $advertiserId){
        $this->advertiser_id = $advertiserId;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }


}

