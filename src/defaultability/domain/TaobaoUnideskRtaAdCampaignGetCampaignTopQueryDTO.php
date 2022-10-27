<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdCampaignGetCampaignTopQueryDTO {

    /**
        第几页
     **/
    private $page_no;

    /**
        计划组ids
     **/
    private $ids;

    /**
        每页多少条
     **/
    private $page_size;

    /**
        广告主id
     **/
    private $advertiser_id;


    public function getPageNo() : int{
        return $this->page_no;
    }

    public function setPageNo(int $pageNo){
        $this->page_no = $pageNo;
    }

    public function getIds() : array{
        return $this->ids;
    }

    public function setIds(array $ids){
        $this->ids = $ids;
    }

    public function getPageSize() : int{
        return $this->page_size;
    }

    public function setPageSize(int $pageSize){
        $this->page_size = $pageSize;
    }

    public function getAdvertiserId() : int{
        return $this->advertiser_id;
    }

    public function setAdvertiserId(int $advertiserId){
        $this->advertiser_id = $advertiserId;
    }


}

