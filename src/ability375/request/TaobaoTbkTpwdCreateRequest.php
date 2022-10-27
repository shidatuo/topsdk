<?php
namespace Topsdk\Topapi\Ability375\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTbkTpwdCreateRequest {

    /**
        兼容旧版本api参数，无实际作用
     **/
    private $text;

    /**
        兼容旧版本api参数，无实际作用
     **/
    private $logo;

    /**
        兼容旧版本api参数，无实际作用
     **/
    private $ext;

    /**
        兼容旧版本api参数，无实际作用
     **/
    private $userId;

    /**
        联盟官方渠道获取的淘客推广链接，请注意，不要随意篡改官方生成的链接，否则可能无法生成淘口令
     **/
    private $url;


    public function getText() : string{
        return $this->text;
    }

    public function setText(string $text){
        $this->text = $text;
    }

    public function getLogo() : string{
        return $this->logo;
    }

    public function setLogo(string $logo){
        $this->logo = $logo;
    }

    public function getExt() : string{
        return $this->ext;
    }

    public function setExt(string $ext){
        $this->ext = $ext;
    }

    public function getUserId() : string{
        return $this->userId;
    }

    public function setUserId(string $userId){
        $this->userId = $userId;
    }

    public function getUrl() : string{
        return $this->url;
    }

    public function setUrl(string $url){
        $this->url = $url;
    }


    public function getApiName() : string {
        return "taobao.tbk.tpwd.create";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->text)) {
            $requestParam["text"] = TopUtil::convertBasic($this->text);
        }

        if (!TopUtil::checkEmpty($this->logo)) {
            $requestParam["logo"] = TopUtil::convertBasic($this->logo);
        }

        if (!TopUtil::checkEmpty($this->ext)) {
            $requestParam["ext"] = TopUtil::convertBasic($this->ext);
        }

        if (!TopUtil::checkEmpty($this->userId)) {
            $requestParam["user_id"] = TopUtil::convertBasic($this->userId);
        }

        if (!TopUtil::checkEmpty($this->url)) {
            $requestParam["url"] = TopUtil::convertBasic($this->url);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

