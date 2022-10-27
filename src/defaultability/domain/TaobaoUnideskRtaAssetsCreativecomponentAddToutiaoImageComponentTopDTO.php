<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAssetsCreativecomponentAddToutiaoImageComponentTopDTO {

    /**
        出现时间，单位s。 当show_time为自定义时必传，小于等于59，大于等于10。 当show_time为系统默认时，可不传，默认为10
     **/
    private $duration;

    /**
        图片 尺寸<=540*276px ，大小<2M
     **/
    private $img_id;

    /**
        出现时间类型。1 系统默认，2自定义。不传代表系统默认
     **/
    private $show_time;

    /**
        投放开始时间。格式: "2020-12-01"
     **/
    private $start_time;

    /**
        投放结束时间。格式: "2020-12-01"
     **/
    private $end_time;


    public function getDuration() : int{
        return $this->duration;
    }

    public function setDuration(int $duration){
        $this->duration = $duration;
    }

    public function getImgId() : string{
        return $this->img_id;
    }

    public function setImgId(string $imgId){
        $this->img_id = $imgId;
    }

    public function getShowTime() : int{
        return $this->show_time;
    }

    public function setShowTime(int $showTime){
        $this->show_time = $showTime;
    }

    public function getStartTime() : string{
        return $this->start_time;
    }

    public function setStartTime(string $startTime){
        $this->start_time = $startTime;
    }

    public function getEndTime() : string{
        return $this->end_time;
    }

    public function setEndTime(string $endTime){
        $this->end_time = $endTime;
    }


}

