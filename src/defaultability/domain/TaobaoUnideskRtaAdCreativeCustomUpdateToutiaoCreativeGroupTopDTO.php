<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdCreativeCustomUpdateToutiaoCreativeGroupTopDTO {

    /**
        广告来源
     **/
    private $ad_source;

    /**
        是否开启评论功能，1是，0否
     **/
    private $comment_switch;


    public function getAdSource() : string{
        return $this->ad_source;
    }

    public function setAdSource(string $adSource){
        $this->ad_source = $adSource;
    }

    public function getCommentSwitch() : int{
        return $this->comment_switch;
    }

    public function setCommentSwitch(int $commentSwitch){
        $this->comment_switch = $commentSwitch;
    }


}

