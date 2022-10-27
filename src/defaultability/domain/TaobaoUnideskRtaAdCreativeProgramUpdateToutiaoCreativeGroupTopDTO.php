<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdCreativeProgramUpdateToutiaoCreativeGroupTopDTO {

    /**
        创意组件id
     **/
    private $creative_component_id;

    /**
        是否自动生成视频素材功能，1是，0否
     **/
    private $auto_gen_video_switch;

    /**
        广告来源
     **/
    private $ad_source;

    /**
        基础组件id
     **/
    private $promotion_card_creative_component_id;

    /**
        是否开启衍生创意功能，1是，0否
     **/
    private $derive_switch;

    /**
        是否开启评论功能，1是，0否
     **/
    private $comment_switch;


    public function getCreativeComponentId() : int{
        return $this->creative_component_id;
    }

    public function setCreativeComponentId(int $creativeComponentId){
        $this->creative_component_id = $creativeComponentId;
    }

    public function getAutoGenVideoSwitch() : int{
        return $this->auto_gen_video_switch;
    }

    public function setAutoGenVideoSwitch(int $autoGenVideoSwitch){
        $this->auto_gen_video_switch = $autoGenVideoSwitch;
    }

    public function getAdSource() : string{
        return $this->ad_source;
    }

    public function setAdSource(string $adSource){
        $this->ad_source = $adSource;
    }

    public function getPromotionCardCreativeComponentId() : int{
        return $this->promotion_card_creative_component_id;
    }

    public function setPromotionCardCreativeComponentId(int $promotionCardCreativeComponentId){
        $this->promotion_card_creative_component_id = $promotionCardCreativeComponentId;
    }

    public function getDeriveSwitch() : int{
        return $this->derive_switch;
    }

    public function setDeriveSwitch(int $deriveSwitch){
        $this->derive_switch = $deriveSwitch;
    }

    public function getCommentSwitch() : int{
        return $this->comment_switch;
    }

    public function setCommentSwitch(int $commentSwitch){
        $this->comment_switch = $commentSwitch;
    }


}

