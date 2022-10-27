<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdAdgroupGetPlatformDTO {

    /**
        操作系统类型，-1：不限，1：安卓，3：iOS，2：PC
     **/
    private $type;


    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }


}

