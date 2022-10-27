<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAssetsCreativecomponentGetCreativeComponentTopQueryDTO {

    /**
        第几页
     **/
    private $page_no;

    /**
        创意组件id
     **/
    private $id;

    /**
        每页多少条
     **/
    private $page_size;

    /**
        广告主id
     **/
    private $advertiser_id;

    /**
        组件类型， 1图片磁贴 3电商优惠券磁贴 4推广卡片
     **/
    private $type;


    public function getPageNo() : int{
        return $this->page_no;
    }

    public function setPageNo(int $pageNo){
        $this->page_no = $pageNo;
    }

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
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

    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }


}

