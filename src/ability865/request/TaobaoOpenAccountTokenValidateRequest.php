<?php
namespace Topsdk\Topapi\Ability865\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoOpenAccountTokenValidateRequest {

    /**
        token
     **/
    private $paramToken;


    public function getParamToken() : string{
        return $this->paramToken;
    }

    public function setParamToken(string $paramToken){
        $this->paramToken = $paramToken;
    }


    public function getApiName() : string {
        return "taobao.open.account.token.validate";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->paramToken)) {
            $requestParam["param_token"] = TopUtil::convertBasic($this->paramToken);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

