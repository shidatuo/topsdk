<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaUserAdvertiserGetAdvertiserTopDTO {

    /**
        广告主id
     **/
    private $id;

    /**
        广告主名称
     **/
    private $name;

    /**
        直投媒体
     **/
    private $media;

    /**
        广告主状态，1：启用，0：停用
     **/
    private $status;

    /**
        客户名称
     **/
    private $customer_name;


    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getMedia() : string{
        return $this->media;
    }

    public function setMedia(string $media){
        $this->media = $media;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getCustomerName() : string{
        return $this->customer_name;
    }

    public function setCustomerName(string $customerName){
        $this->customer_name = $customerName;
    }


}

