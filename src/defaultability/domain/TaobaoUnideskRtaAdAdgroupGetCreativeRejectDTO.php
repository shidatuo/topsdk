<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdAdgroupGetCreativeRejectDTO {

    /**
        图片
     **/
    private $images;

    /**
        拒绝原因
     **/
    private $reject_reason;

    /**
        素材类型：0-创意 1-图片，2-标题，3-视频，4-副标题，5-头图，6-摘要，默认创意
     **/
    private $material_type;

    /**
        拒绝项
     **/
    private $reject_item;

    /**
        视频
     **/
    private $videos;

    /**
        标题
     **/
    private $title;


    public function getImages() : array{
        return $this->images;
    }

    public function setImages(array $images){
        $this->images = $images;
    }

    public function getRejectReason() : string{
        return $this->reject_reason;
    }

    public function setRejectReason(string $rejectReason){
        $this->reject_reason = $rejectReason;
    }

    public function getMaterialType() : string{
        return $this->material_type;
    }

    public function setMaterialType(string $materialType){
        $this->material_type = $materialType;
    }

    public function getRejectItem() : string{
        return $this->reject_item;
    }

    public function setRejectItem(string $rejectItem){
        $this->reject_item = $rejectItem;
    }

    public function getVideos() : array{
        return $this->videos;
    }

    public function setVideos(array $videos){
        $this->videos = $videos;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }


}

