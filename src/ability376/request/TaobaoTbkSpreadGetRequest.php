<?php
namespace Topsdk\Topapi\Ability376\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTbkSpreadGetRequest {

    /**
        请求列表，内部包含多个url
     **/
    private $requests;


    public function getRequests() : array{
        return $this->requests;
    }

    public function setRequests(array $requests){
        $this->requests = $requests;
    }


    public function getApiName() : string {
        return "taobao.tbk.spread.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->requests)) {
            $requestParam["requests"] = TopUtil::convertStructList($this->requests);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

