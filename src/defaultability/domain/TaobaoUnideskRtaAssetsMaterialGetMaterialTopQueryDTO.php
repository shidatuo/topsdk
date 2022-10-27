<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAssetsMaterialGetMaterialTopQueryDTO {

    /**
        第几页
     **/
    private $page_no;

    /**
        素材ids
     **/
    private $ids;

    /**
        每页多少条
     **/
    private $page_size;

    /**
        文件类型，1：图片，2：视频
     **/
    private $type;

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

    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }

    public function getAdvertiserId() : int{
        return $this->advertiser_id;
    }

    public function setAdvertiserId(int $advertiserId){
        $this->advertiser_id = $advertiserId;
    }


}

