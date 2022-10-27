<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdAdgroupUpdateCommonDTO {

    /**
        地域名称
     **/
    private $name;

    /**
        地域值
     **/
    private $value;


    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getValue() : string{
        return $this->value;
    }

    public function setValue(string $value){
        $this->value = $value;
    }


}

