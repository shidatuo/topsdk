<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdAdgroupGetCommonDTO {

    /**
        数量
     **/
    private $num;

    /**
        名称
     **/
    private $name;

    /**
        值
     **/
    private $value;


    public function getNum() : string{
        return $this->num;
    }

    public function setNum(string $num){
        $this->num = $num;
    }

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

