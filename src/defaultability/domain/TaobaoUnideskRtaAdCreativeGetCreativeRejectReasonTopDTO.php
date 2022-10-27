<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdCreativeGetCreativeRejectReasonTopDTO {

    /**
        图片id列表， 素材类型为"图片"时填充
     **/
    private $images;

    /**
        审核拒绝原因
     **/
    private $reject_reason;

    /**
        素材类型：0-创意 1-图片，2-视频，3-标题
     **/
    private $material_type;

    /**
        审核拒绝项
     **/
    private $reject_item;

    /**
        视频id列表， 素材类型为"视频"时填充
     **/
    private $videos;

    /**
        标题，素材类型为"标题"时填充
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

