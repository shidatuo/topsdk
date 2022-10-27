<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdCreativeProgramAddCreativeGroupTopDTO {

    /**
        创意内容
     **/
    private $creatives;

    /**
        计划id
     **/
    private $adgroup_id;

    /**
        头条特有属性
     **/
    private $toutiao;

    /**
        行动号召文本
     **/
    private $action_text;

    /**
        计划组id
     **/
    private $campaign_id;

    /**
        创意标题
     **/
    private $titles;

    /**
        广告主id
     **/
    private $advertiser_id;

    /**
        创意标签
     **/
    private $tags;

    /**
        创意分类
     **/
    private $category;


    public function getCreatives() : array{
        return $this->creatives;
    }

    public function setCreatives(array $creatives){
        $this->creatives = $creatives;
    }

    public function getAdgroupId() : int{
        return $this->adgroup_id;
    }

    public function setAdgroupId(int $adgroupId){
        $this->adgroup_id = $adgroupId;
    }

    public function getToutiao() : TaobaoUnideskRtaAdCreativeProgramAddToutiaoCreativeGroupTopDTO{
        return $this->toutiao;
    }

    public function setToutiao(TaobaoUnideskRtaAdCreativeProgramAddToutiaoCreativeGroupTopDTO $toutiao){
        $this->toutiao = $toutiao;
    }

    public function getActionText() : string{
        return $this->action_text;
    }

    public function setActionText(string $actionText){
        $this->action_text = $actionText;
    }

    public function getCampaignId() : int{
        return $this->campaign_id;
    }

    public function setCampaignId(int $campaignId){
        $this->campaign_id = $campaignId;
    }

    public function getTitles() : array{
        return $this->titles;
    }

    public function setTitles(array $titles){
        $this->titles = $titles;
    }

    public function getAdvertiserId() : int{
        return $this->advertiser_id;
    }

    public function setAdvertiserId(int $advertiserId){
        $this->advertiser_id = $advertiserId;
    }

    public function getTags() : array{
        return $this->tags;
    }

    public function setTags(array $tags){
        $this->tags = $tags;
    }

    public function getCategory() : int{
        return $this->category;
    }

    public function setCategory(int $category){
        $this->category = $category;
    }


}

