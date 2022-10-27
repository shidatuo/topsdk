<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdCreativeCustomUpdateCreativeGroupTopDTO {

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
        计划组id
     **/
    private $campaign_id;

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

    public function getToutiao() : TaobaoUnideskRtaAdCreativeCustomUpdateToutiaoCreativeGroupTopDTO{
        return $this->toutiao;
    }

    public function setToutiao(TaobaoUnideskRtaAdCreativeCustomUpdateToutiaoCreativeGroupTopDTO $toutiao){
        $this->toutiao = $toutiao;
    }

    public function getCampaignId() : int{
        return $this->campaign_id;
    }

    public function setCampaignId(int $campaignId){
        $this->campaign_id = $campaignId;
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

