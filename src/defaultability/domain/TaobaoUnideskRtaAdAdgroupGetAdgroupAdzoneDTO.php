<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdAdgroupGetAdgroupAdzoneDTO {

    /**
        资源位列表，1：今日头条，2：西瓜视频，4：抖音
     **/
    private $values;

    /**
        资源位类型，1：优选广告，2：媒体指定位置
     **/
    private $type;


    public function getValues() : array{
        return $this->values;
    }

    public function setValues(array $values){
        $this->values = $values;
    }

    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }


}

