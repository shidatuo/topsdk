<?php
namespace Topsdk\Topapi\Defaultability;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Defaultability\Request\TaobaoKfcKeywordSearchRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoUnideskRtaUserAdvertiserGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoUnideskRtaAdCampaignGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoUnideskRtaAdCampaignAddRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoUnideskRtaAdCampaignUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoUnideskRtaAdCampaignDeleteRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoUnideskRtaAdCampaignStatusUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoUnideskRtaAdCampaignBudgetUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoUnideskRtaToolsIndustryGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoUnideskRtaAdAdgroupGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoUnideskRtaAdAdgroupAddRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoUnideskRtaAdAdgroupUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoUnideskRtaAssetsMaterialVideocoverSuggestRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoUnideskRtaAssetsMaterialShareRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoUnideskRtaAdAdgroupBudgetSuggestRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoUnideskRtaAdAdgroupStatusUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoUnideskRtaAdAdgroupPricingUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoUnideskRtaAdAdgroupBudgetUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoUnideskRtaAdAdgroupDeleteRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoUnideskRtaAdCreativeGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoUnideskRtaAdCreativeProgramAddRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoUnideskRtaAdCreativeProgramUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoUnideskRtaAdCreativeCustomAddRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoUnideskRtaAdCreativeCustomUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoUnideskRtaAssetsMaterialGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoUnideskRtaAssetsMaterialAddRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoUnideskRtaAssetsCreativecomponentGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoUnideskRtaAssetsCreativecomponentAddRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoUnideskRtaAssetsCreativecomponentUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoUnideskRtaAdTargetingRegionGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoUnideskRtaAdTargetingAwemecategoryGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoUnideskRtaAdTargetingBehaviorinterestkeywordGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoUnideskRtaAdTargetingBehaviorinterestcategoryGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoUnideskRtaAdTargetingAwemetopauthorGetRequest;

class Defaultability {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        ?????????????????????
    **/
    public function taobaoKfcKeywordSearch(TaobaoKfcKeywordSearchRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.kfc.keyword.search", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        UD?????????????????????
    **/
    public function taobaoUnideskRtaUserAdvertiserGet(TaobaoUnideskRtaUserAdvertiserGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.unidesk.rta.user.advertiser.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        UD?????????????????????
    **/
    public function taobaoUnideskRtaAdCampaignGet(TaobaoUnideskRtaAdCampaignGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.unidesk.rta.ad.campaign.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        UD?????????????????????
    **/
    public function taobaoUnideskRtaAdCampaignAdd(TaobaoUnideskRtaAdCampaignAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.unidesk.rta.ad.campaign.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        UD?????????????????????
    **/
    public function taobaoUnideskRtaAdCampaignUpdate(TaobaoUnideskRtaAdCampaignUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.unidesk.rta.ad.campaign.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        UD?????????????????????
    **/
    public function taobaoUnideskRtaAdCampaignDelete(TaobaoUnideskRtaAdCampaignDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.unidesk.rta.ad.campaign.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        UD?????????????????????????????????
    **/
    public function taobaoUnideskRtaAdCampaignStatusUpdate(TaobaoUnideskRtaAdCampaignStatusUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.unidesk.rta.ad.campaign.status.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        UD?????????????????????????????????
    **/
    public function taobaoUnideskRtaAdCampaignBudgetUpdate(TaobaoUnideskRtaAdCampaignBudgetUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.unidesk.rta.ad.campaign.budget.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        UD??????????????????
    **/
    public function taobaoUnideskRtaToolsIndustryGet(TaobaoUnideskRtaToolsIndustryGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.unidesk.rta.tools.industry.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        UD??????????????????
    **/
    public function taobaoUnideskRtaAdAdgroupGet(TaobaoUnideskRtaAdAdgroupGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.unidesk.rta.ad.adgroup.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        UD??????????????????
    **/
    public function taobaoUnideskRtaAdAdgroupAdd(TaobaoUnideskRtaAdAdgroupAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.unidesk.rta.ad.adgroup.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        UD??????????????????
    **/
    public function taobaoUnideskRtaAdAdgroupUpdate(TaobaoUnideskRtaAdAdgroupUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.unidesk.rta.ad.adgroup.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        UD????????????????????????????????????
    **/
    public function taobaoUnideskRtaAssetsMaterialVideocoverSuggest(TaobaoUnideskRtaAssetsMaterialVideocoverSuggestRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.unidesk.rta.assets.material.videocover.suggest", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        UD??????????????????
    **/
    public function taobaoUnideskRtaAssetsMaterialShare(TaobaoUnideskRtaAssetsMaterialShareRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.unidesk.rta.assets.material.share", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        UD????????????????????????????????????????????????
    **/
    public function taobaoUnideskRtaAdAdgroupBudgetSuggest(TaobaoUnideskRtaAdAdgroupBudgetSuggestRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.unidesk.rta.ad.adgroup.budget.suggest", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        UD??????????????????????????????
    **/
    public function taobaoUnideskRtaAdAdgroupStatusUpdate(TaobaoUnideskRtaAdAdgroupStatusUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.unidesk.rta.ad.adgroup.status.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        UD??????????????????????????????
    **/
    public function taobaoUnideskRtaAdAdgroupPricingUpdate(TaobaoUnideskRtaAdAdgroupPricingUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.unidesk.rta.ad.adgroup.pricing.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        UD??????????????????????????????
    **/
    public function taobaoUnideskRtaAdAdgroupBudgetUpdate(TaobaoUnideskRtaAdAdgroupBudgetUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.unidesk.rta.ad.adgroup.budget.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        UD??????????????????
    **/
    public function taobaoUnideskRtaAdAdgroupDelete(TaobaoUnideskRtaAdAdgroupDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.unidesk.rta.ad.adgroup.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        UD??????????????????
    **/
    public function taobaoUnideskRtaAdCreativeGet(TaobaoUnideskRtaAdCreativeGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.unidesk.rta.ad.creative.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        UD?????????????????????????????????
    **/
    public function taobaoUnideskRtaAdCreativeProgramAdd(TaobaoUnideskRtaAdCreativeProgramAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.unidesk.rta.ad.creative.program.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        UD?????????????????????????????????
    **/
    public function taobaoUnideskRtaAdCreativeProgramUpdate(TaobaoUnideskRtaAdCreativeProgramUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.unidesk.rta.ad.creative.program.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        UD?????????????????????????????????
    **/
    public function taobaoUnideskRtaAdCreativeCustomAdd(TaobaoUnideskRtaAdCreativeCustomAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.unidesk.rta.ad.creative.custom.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        UD?????????????????????????????????
    **/
    public function taobaoUnideskRtaAdCreativeCustomUpdate(TaobaoUnideskRtaAdCreativeCustomUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.unidesk.rta.ad.creative.custom.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        UD??????????????????
    **/
    public function taobaoUnideskRtaAssetsMaterialGet(TaobaoUnideskRtaAssetsMaterialGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.unidesk.rta.assets.material.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        UD??????????????????
    **/
    public function taobaoUnideskRtaAssetsMaterialAdd(TaobaoUnideskRtaAssetsMaterialAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.unidesk.rta.assets.material.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        UD????????????????????????
    **/
    public function taobaoUnideskRtaAssetsCreativecomponentGet(TaobaoUnideskRtaAssetsCreativecomponentGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.unidesk.rta.assets.creativecomponent.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        UD????????????????????????
    **/
    public function taobaoUnideskRtaAssetsCreativecomponentAdd(TaobaoUnideskRtaAssetsCreativecomponentAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.unidesk.rta.assets.creativecomponent.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        UD????????????????????????
    **/
    public function taobaoUnideskRtaAssetsCreativecomponentUpdate(TaobaoUnideskRtaAssetsCreativecomponentUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.unidesk.rta.assets.creativecomponent.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        UD??????-????????????????????????
    **/
    public function taobaoUnideskRtaAdTargetingRegionGet(TaobaoUnideskRtaAdTargetingRegionGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.unidesk.rta.ad.targeting.region.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        UD??????-??????????????????????????????
    **/
    public function taobaoUnideskRtaAdTargetingAwemecategoryGet(TaobaoUnideskRtaAdTargetingAwemecategoryGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.unidesk.rta.ad.targeting.awemecategory.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        UD??????-?????????????????????????????????
    **/
    public function taobaoUnideskRtaAdTargetingBehaviorinterestkeywordGet(TaobaoUnideskRtaAdTargetingBehaviorinterestkeywordGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.unidesk.rta.ad.targeting.behaviorinterestkeyword.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        UD??????-??????????????????????????????
    **/
    public function taobaoUnideskRtaAdTargetingBehaviorinterestcategoryGet(TaobaoUnideskRtaAdTargetingBehaviorinterestcategoryGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.unidesk.rta.ad.targeting.behaviorinterestcategory.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        UD??????-??????????????????????????????????????????
    **/
    public function taobaoUnideskRtaAdTargetingAwemetopauthorGet(TaobaoUnideskRtaAdTargetingAwemetopauthorGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.unidesk.rta.ad.targeting.awemetopauthor.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
}