<?php
namespace Topsdk\Topapi\Ability865\Domain;

class TaobaoOpenAccountTokenValidateOpenAccountTokenValidateResult {

    /**
        错误码
     **/
    private $code;

    /**
        token中的数据
     **/
    private $data;

    /**
        错误信息
     **/
    private $message;

    /**
        是否成功
     **/
    private $successful;


    public function getCode() : int{
        return $this->code;
    }

    public function setCode(int $code){
        $this->code = $code;
    }

    public function getData() : TaobaoOpenAccountTokenValidateTokenInfo{
        return $this->data;
    }

    public function setData(TaobaoOpenAccountTokenValidateTokenInfo $data){
        $this->data = $data;
    }

    public function getMessage() : string{
        return $this->message;
    }

    public function setMessage(string $message){
        $this->message = $message;
    }

    public function getSuccessful() : bool{
        return $this->successful;
    }

    public function setSuccessful(bool $successful){
        $this->successful = $successful;
    }


}

