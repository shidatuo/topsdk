<?php
namespace Topsdk\Topapi\Ability375;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability375\Request\TaobaoTbkTpwdCreateRequest;

class Ability375 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-公用-淘口令生成
    **/
    public function taobaoTbkTpwdCreate(TaobaoTbkTpwdCreateRequest $request) {
        return $this->client->execute("taobao.tbk.tpwd.create", $request->toMap(), $request->toFileParamMap());
    }
}