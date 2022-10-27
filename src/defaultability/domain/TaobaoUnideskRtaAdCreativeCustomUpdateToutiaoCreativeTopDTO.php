<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdCreativeCustomUpdateToutiaoCreativeTopDTO {

    /**
        创意组件id
     **/
    private $creative_component_id;

    /**
        基础组件id
     **/
    private $promotion_card_creative_component_id;


    public function getCreativeComponentId() : int{
        return $this->creative_component_id;
    }

    public function setCreativeComponentId(int $creativeComponentId){
        $this->creative_component_id = $creativeComponentId;
    }

    public function getPromotionCardCreativeComponentId() : int{
        return $this->promotion_card_creative_component_id;
    }

    public function setPromotionCardCreativeComponentId(int $promotionCardCreativeComponentId){
        $this->promotion_card_creative_component_id = $promotionCardCreativeComponentId;
    }


}

