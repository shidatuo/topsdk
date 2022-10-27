<?php
namespace Topsdk\Topapi\Ability371\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTbkItemInfoTemporaryGetRequest {

    /**
        商品ID串，用,分割，最大40个
     **/
    private $numIids;

    /**
        链接形式：1：PC，2：无线，默认：１
     **/
    private $platform;

    /**
        ip地址，影响邮费获取，如果不传或者传入不准确，邮费无法精准提供
     **/
    private $ip;


    public function getNumIids() : string{
        return $this->numIids;
    }

    public function setNumIids(string $numIids){
        $this->numIids = $numIids;
    }

    public function getPlatform() : int{
        return $this->platform;
    }

    public function setPlatform(int $platform){
        $this->platform = $platform;
    }

    public function getIp() : string{
        return $this->ip;
    }

    public function setIp(string $ip){
        $this->ip = $ip;
    }


    public function getApiName() : string {
        return "taobao.tbk.item.info.temporary.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->numIids)) {
            $requestParam["num_iids"] = TopUtil::convertBasic($this->numIids);
        }

        if (!TopUtil::checkEmpty($this->platform)) {
            $requestParam["platform"] = TopUtil::convertBasic($this->platform);
        }

        if (!TopUtil::checkEmpty($this->ip)) {
            $requestParam["ip"] = TopUtil::convertBasic($this->ip);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

