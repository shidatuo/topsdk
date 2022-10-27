<?php
namespace Topsdk\Topapi\Ability865\Domain;

class TaobaoOpenAccountTokenValidateOAuthOtherInfo {

    /**
        access_token
     **/
    private $access_token;

    /**
        nick
     **/
    private $nick;

    /**
        avatarUrl
     **/
    private $avatar_url;

    /**
        id
     **/
    private $id;

    /**
        三方平台类型
     **/
    private $platform_type;

    /**
        三方平台的openId
     **/
    private $open_id;

    /**
        三方平台的unionId
     **/
    private $union_id;


    public function getAccessToken() : string{
        return $this->access_token;
    }

    public function setAccessToken(string $accessToken){
        $this->access_token = $accessToken;
    }

    public function getNick() : string{
        return $this->nick;
    }

    public function setNick(string $nick){
        $this->nick = $nick;
    }

    public function getAvatarUrl() : string{
        return $this->avatar_url;
    }

    public function setAvatarUrl(string $avatarUrl){
        $this->avatar_url = $avatarUrl;
    }

    public function getId() : string{
        return $this->id;
    }

    public function setId(string $id){
        $this->id = $id;
    }

    public function getPlatformType() : int{
        return $this->platform_type;
    }

    public function setPlatformType(int $platformType){
        $this->platform_type = $platformType;
    }

    public function getOpenId() : string{
        return $this->open_id;
    }

    public function setOpenId(string $openId){
        $this->open_id = $openId;
    }

    public function getUnionId() : string{
        return $this->union_id;
    }

    public function setUnionId(string $unionId){
        $this->union_id = $unionId;
    }


}

