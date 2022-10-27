<?php
namespace Topsdk\Topapi\Ability865\Domain;

class TaobaoOpenAccountTokenValidateTokenInfo {

    /**
        token info扩展信息
     **/
    private $ext;

    /**
        isv自己账号的唯一id
     **/
    private $isv_account_id;

    /**
        ISV APP的登录态时长
     **/
    private $login_state_expire_in;

    /**
        open account id
     **/
    private $open_account_id;

    /**
        时间戳
     **/
    private $timestamp;

    /**
        用于防重放的唯一id
     **/
    private $uuid;


    public function getExt() : TaobaoOpenAccountTokenValidateTokenInfoExt{
        return $this->ext;
    }

    public function setExt(TaobaoOpenAccountTokenValidateTokenInfoExt $ext){
        $this->ext = $ext;
    }

    public function getIsvAccountId() : string{
        return $this->isv_account_id;
    }

    public function setIsvAccountId(string $isvAccountId){
        $this->isv_account_id = $isvAccountId;
    }

    public function getLoginStateExpireIn() : int{
        return $this->login_state_expire_in;
    }

    public function setLoginStateExpireIn(int $loginStateExpireIn){
        $this->login_state_expire_in = $loginStateExpireIn;
    }

    public function getOpenAccountId() : int{
        return $this->open_account_id;
    }

    public function setOpenAccountId(int $openAccountId){
        $this->open_account_id = $openAccountId;
    }

    public function getTimestamp() : int{
        return $this->timestamp;
    }

    public function setTimestamp(int $timestamp){
        $this->timestamp = $timestamp;
    }

    public function getUuid() : string{
        return $this->uuid;
    }

    public function setUuid(string $uuid){
        $this->uuid = $uuid;
    }


}

