<?php
namespace Topsdk\Topapi\Ability376;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability376\Request\TaobaoTbkSpreadGetRequest;

class Ability376 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-公用-长链转短链
    **/
    public function taobaoTbkSpreadGet(TaobaoTbkSpreadGetRequest $request) {
        return $this->client->execute("taobao.tbk.spread.get", $request->toMap(), $request->toFileParamMap());
    }
}