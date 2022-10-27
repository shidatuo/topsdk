<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAssetsCreativecomponentUpdateCreativeComponentTopDTO {

    /**
        组件详细信息-电商优惠券磁贴
     **/
    private $toutiao_coupon_magnet;

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

    /**
        创意组件id
     **/
    private $id;


    public function getToutiaoCouponMagnet() : TaobaoUnideskRtaAssetsCreativecomponentUpdateToutiaoCouponComponentTopDTO{
        return $this->toutiao_coupon_magnet;
    }

    public function setToutiaoCouponMagnet(TaobaoUnideskRtaAssetsCreativecomponentUpdateToutiaoCouponComponentTopDTO $toutiaoCouponMagnet){
        $this->toutiao_coupon_magnet = $toutiaoCouponMagnet;
    }

    public function getToutiaoPromotionCard() : TaobaoUnideskRtaAssetsCreativecomponentUpdateToutiaoPromotionCardComponentTopDTO{
        return $this->toutiao_promotion_card;
    }

    public function setToutiaoPromotionCard(TaobaoUnideskRtaAssetsCreativecomponentUpdateToutiaoPromotionCardComponentTopDTO $toutiaoPromotionCard){
        $this->toutiao_promotion_card = $toutiaoPromotionCard;
    }

    public function getToutiaoImageMagnet() : TaobaoUnideskRtaAssetsCreativecomponentUpdateToutiaoPromotionCardComponentTopDTO{
        return $this->toutiao_image_magnet;
    }

    public function setToutiaoImageMagnet(TaobaoUnideskRtaAssetsCreativecomponentUpdateToutiaoPromotionCardComponentTopDTO $toutiaoImageMagnet){
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

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }


}

