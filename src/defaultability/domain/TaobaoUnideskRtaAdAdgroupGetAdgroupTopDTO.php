<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdAdgroupGetAdgroupTopDTO {

    /**
        审核详细信息
     **/
    private $audit_items;

    /**
        拒绝原因
     **/
    private $reject_reason;

    /**
        计划id
     **/
    private $id;

    /**
        头条特有参数
     **/
    private $toutiao;

    /**
        预算
     **/
    private $budget;

    /**
        投放， 1 - 加速投放；2 - 平滑投放；3-优先低成本（投放时间范围只可为全天；预算不可为不限或空）
     **/
    private $smooth;

    /**
        计划组id
     **/
    private $campaign_id;

    /**
        学习期状态，0：不在学习期，1：学习成功，2：学习中，3：学习失败
     **/
    private $learning_status;

    /**
        落地页
     **/
    private $landing_page;

    /**
        创建时间
     **/
    private $gmt_create;

    /**
        广告主id
     **/
    private $advertiser_id;

    /**
        定向
     **/
    private $target;

    /**
        操作状态，1：启用，0：暂停，-1：删除
     **/
    private $opt_status;

    /**
        投放周期
     **/
    private $cast_time;

    /**
        投放形式，1：激励视频，2：原生，3：开机图，4：知+内容
     **/
    private $cast_show_type;

    /**
        名称
     **/
    private $name;

    /**
        付费出价
     **/
    private $pricing;

    /**
        投放状态，-1：已删除，1：审核不通过，2：不在投放时段，3：已被广告组暂停，4：计划暂停，5：超出预算，6：广告组超出预算，7：账户余额不足，8：新建审核中，9：修改审核中，10：计划新建，11：投放中，12：已完成，13：未到达投放时间，15：超出广告主日预算
     **/
    private $status;


    public function getAuditItems() : array{
        return $this->audit_items;
    }

    public function setAuditItems(array $auditItems){
        $this->audit_items = $auditItems;
    }

    public function getRejectReason() : string{
        return $this->reject_reason;
    }

    public function setRejectReason(string $rejectReason){
        $this->reject_reason = $rejectReason;
    }

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getToutiao() : TaobaoUnideskRtaAdAdgroupGetToutiaoAdgroupTopDTO{
        return $this->toutiao;
    }

    public function setToutiao(TaobaoUnideskRtaAdAdgroupGetToutiaoAdgroupTopDTO $toutiao){
        $this->toutiao = $toutiao;
    }

    public function getBudget() : TaobaoUnideskRtaAdAdgroupGetBudgetTopDTO{
        return $this->budget;
    }

    public function setBudget(TaobaoUnideskRtaAdAdgroupGetBudgetTopDTO $budget){
        $this->budget = $budget;
    }

    public function getSmooth() : int{
        return $this->smooth;
    }

    public function setSmooth(int $smooth){
        $this->smooth = $smooth;
    }

    public function getCampaignId() : int{
        return $this->campaign_id;
    }

    public function setCampaignId(int $campaignId){
        $this->campaign_id = $campaignId;
    }

    public function getLearningStatus() : int{
        return $this->learning_status;
    }

    public function setLearningStatus(int $learningStatus){
        $this->learning_status = $learningStatus;
    }

    public function getLandingPage() : TaobaoUnideskRtaAdAdgroupGetLandingPageTopDTO{
        return $this->landing_page;
    }

    public function setLandingPage(TaobaoUnideskRtaAdAdgroupGetLandingPageTopDTO $landingPage){
        $this->landing_page = $landingPage;
    }

    public function getGmtCreate() : string{
        return $this->gmt_create;
    }

    public function setGmtCreate(string $gmtCreate){
        $this->gmt_create = $gmtCreate;
    }

    public function getAdvertiserId() : int{
        return $this->advertiser_id;
    }

    public function setAdvertiserId(int $advertiserId){
        $this->advertiser_id = $advertiserId;
    }

    public function getTarget() : TaobaoUnideskRtaAdAdgroupGetAdgroupTargetTopDTO{
        return $this->target;
    }

    public function setTarget(TaobaoUnideskRtaAdAdgroupGetAdgroupTargetTopDTO $target){
        $this->target = $target;
    }

    public function getOptStatus() : int{
        return $this->opt_status;
    }

    public function setOptStatus(int $optStatus){
        $this->opt_status = $optStatus;
    }

    public function getCastTime() : TaobaoUnideskRtaAdAdgroupGetCastTimeTopDTO{
        return $this->cast_time;
    }

    public function setCastTime(TaobaoUnideskRtaAdAdgroupGetCastTimeTopDTO $castTime){
        $this->cast_time = $castTime;
    }

    public function getCastShowType() : int{
        return $this->cast_show_type;
    }

    public function setCastShowType(int $castShowType){
        $this->cast_show_type = $castShowType;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getPricing() : TaobaoUnideskRtaAdAdgroupGetAdgroupPricingTopDTO{
        return $this->pricing;
    }

    public function setPricing(TaobaoUnideskRtaAdAdgroupGetAdgroupPricingTopDTO $pricing){
        $this->pricing = $pricing;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }


}

