<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoUnideskRtaUserAdvertiserGetAdvertiserTopQueryDTO;

class TaobaoUnideskRtaUserAdvertiserGetRequest {

    /**
        查询参数
     **/
    private $advertiserTopQueryDto;


    public function getAdvertiserTopQueryDto() : TaobaoUnideskRtaUserAdvertiserGetAdvertiserTopQueryDTO{
        return $this->advertiserTopQueryDto;
    }

    public function setAdvertiserTopQueryDto(TaobaoUnideskRtaUserAdvertiserGetAdvertiserTopQueryDTO $advertiserTopQueryDto){
        $this->advertiserTopQueryDto = $advertiserTopQueryDto;
    }


    public function getApiName() : string {
        return "taobao.unidesk.rta.user.advertiser.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->advertiserTopQueryDto)) {
            $requestParam["advertiser_top_query_dto"] = TopUtil::convertStruct($this->advertiserTopQueryDto);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

