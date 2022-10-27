<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdCampaignGetCampaignTopDTO {

    /**
        计划组类型，1：应用推广 3：电商店铺推广 4：销售线索收集
     **/
    private $type;

    /**
        创建时间
     **/
    private $gmt_create;

    /**
        广告主id
     **/
    private $advertiser_id;

    /**
        操作状态，1-开启、0-关闭
     **/
    private $opt_status;

    /**
        计划组名称
     **/
    private $name;

    /**
        计划组id
     **/
    private $id;

    /**
        头条特有参数
     **/
    private $toutiao;

    /**
        预算
     **/
    private $budget;

    /**
        状态， -1：删除 0：暂停 1：启用 6：余额不足 9：计划超预算
     **/
    private $status;


    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
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

    public function getOptStatus() : int{
        return $this->opt_status;
    }

    public function setOptStatus(int $optStatus){
        $this->opt_status = $optStatus;
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

    public function getToutiao() : TaobaoUnideskRtaAdCampaignGetToutiaoCampaignTopDTO{
        return $this->toutiao;
    }

    public function setToutiao(TaobaoUnideskRtaAdCampaignGetToutiaoCampaignTopDTO $toutiao){
        $this->toutiao = $toutiao;
    }

    public function getBudget() : TaobaoUnideskRtaAdCampaignGetBudgetTopDTO{
        return $this->budget;
    }

    public function setBudget(TaobaoUnideskRtaAdCampaignGetBudgetTopDTO $budget){
        $this->budget = $budget;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }


}

