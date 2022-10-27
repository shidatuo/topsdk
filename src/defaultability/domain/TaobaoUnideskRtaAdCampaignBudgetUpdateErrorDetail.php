<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdCampaignBudgetUpdateErrorDetail {

    /**
        失败的id
     **/
    private $result;

    /**
        错误码
     **/
    private $code;

    /**
        错误信息
     **/
    private $msg;


    public function getResult() : int{
        return $this->result;
    }

    public function setResult(int $result){
        $this->result = $result;
    }

    public function getCode() : string{
        return $this->code;
    }

    public function setCode(string $code){
        $this->code = $code;
    }

    public function getMsg() : string{
        return $this->msg;
    }

    public function setMsg(string $msg){
        $this->msg = $msg;
    }


}

