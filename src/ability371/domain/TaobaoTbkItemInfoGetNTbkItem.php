<?php
namespace Topsdk\Topapi\Ability371\Domain;

class TaobaoTbkItemInfoGetNTbkItem {

    /**
        一级类目名称
     **/
    private $cat_name;

    /**
        商品ID
     **/
    private $num_iid;

    /**
        商品标题
     **/
    private $title;

    /**
        商品主图
     **/
    private $pict_url;

    /**
        商品小图列表
     **/
    private $small_images;

    /**
        商品一口价格
     **/
    private $reserve_price;

    /**
        折扣价（元） 若属于预售商品，付定金时间内，折扣价=预售价
     **/
    private $zk_final_price;

    /**
        卖家类型，0表示集市，1表示商城，3表示特价版
     **/
    private $user_type;

    /**
        商品所在地
     **/
    private $provcity;

    /**
        商品链接
     **/
    private $item_url;

    /**
        卖家id
     **/
    private $seller_id;

    /**
        30天销量
     **/
    private $volume;

    /**
        店铺名称
     **/
    private $nick;

    /**
        叶子类目名称
     **/
    private $cat_leaf_name;

    /**
        是否加入消费者保障
     **/
    private $is_prepay;

    /**
        店铺dsr 评分
     **/
    private $shop_dsr;

    /**
        卖家等级
     **/
    private $ratesum;

    /**
        退款率是否低于行业均值
     **/
    private $i_rfd_rate;

    /**
        好评率是否高于行业均值
     **/
    private $h_good_rate;

    /**
        成交转化是否高于行业均值
     **/
    private $h_pay_rate30;

    /**
        是否包邮
     **/
    private $free_shipment;

    /**
        商品库类型，支持多库类型输出，以英文逗号分隔“,”分隔，1:营销商品主推库，如果值为空则不属于1这种商品类型
     **/
    private $material_lib_type;

    /**
        预售商品-商品优惠信息
     **/
    private $presale_discount_fee_text;

    /**
        预售商品-付定金结束时间（毫秒）
     **/
    private $presale_tail_end_time;

    /**
        预售商品-付尾款开始时间（毫秒）
     **/
    private $presale_tail_start_time;

    /**
        预售商品-付定金结束时间（毫秒）
     **/
    private $presale_end_time;

    /**
        预售商品-付定金开始时间（毫秒）
     **/
    private $presale_start_time;

    /**
        预售商品-定金（元）
     **/
    private $presale_deposit;

    /**
        聚划算满减  -结束时间（毫秒）
     **/
    private $ju_play_end_time;

    /**
        聚划算满减  -开始时间（毫秒）
     **/
    private $ju_play_start_time;

    /**
        1聚划算满减：满N件减X元，满N件X折，满N件X元）  2天猫限时抢：前N分钟每件X元，前N分钟满N件每件X元，前N件每件X元）
     **/
    private $play_info;

    /**
        天猫限时抢可售  -结束时间（毫秒）
     **/
    private $tmall_play_activity_end_time;

    /**
        天猫限时抢可售  -开始时间（毫秒）
     **/
    private $tmall_play_activity_start_time;

    /**
        聚划算信息-聚淘开始时间（毫秒）
     **/
    private $ju_online_start_time;

    /**
        聚划算信息-聚淘结束时间（毫秒）
     **/
    private $ju_online_end_time;

    /**
        聚划算信息-商品预热开始时间（毫秒）
     **/
    private $ju_pre_show_start_time;

    /**
        聚划算信息-商品预热结束时间（毫秒）
     **/
    private $ju_pre_show_end_time;

    /**
        活动价
     **/
    private $sale_price;

    /**
        跨店满减信息
     **/
    private $kuadian_promotion_info;

    /**
        是否品牌精选，0不是，1是
     **/
    private $superior_brand;

    /**
        是否是热门商品，0不是，1是
     **/
    private $hot_flag;

    /**
        入参的（新）商品ID
     **/
    private $input_num_iid;


    public function getCatName() : string{
        return $this->cat_name;
    }

    public function setCatName(string $catName){
        $this->cat_name = $catName;
    }

    public function getNumIid() : string{
        return $this->num_iid;
    }

    public function setNumIid(string $numIid){
        $this->num_iid = $numIid;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getPictUrl() : string{
        return $this->pict_url;
    }

    public function setPictUrl(string $pictUrl){
        $this->pict_url = $pictUrl;
    }

    public function getSmallImages() : array{
        return $this->small_images;
    }

    public function setSmallImages(array $smallImages){
        $this->small_images = $smallImages;
    }

    public function getReservePrice() : string{
        return $this->reserve_price;
    }

    public function setReservePrice(string $reservePrice){
        $this->reserve_price = $reservePrice;
    }

    public function getZkFinalPrice() : string{
        return $this->zk_final_price;
    }

    public function setZkFinalPrice(string $zkFinalPrice){
        $this->zk_final_price = $zkFinalPrice;
    }

    public function getUserType() : int{
        return $this->user_type;
    }

    public function setUserType(int $userType){
        $this->user_type = $userType;
    }

    public function getProvcity() : string{
        return $this->provcity;
    }

    public function setProvcity(string $provcity){
        $this->provcity = $provcity;
    }

    public function getItemUrl() : string{
        return $this->item_url;
    }

    public function setItemUrl(string $itemUrl){
        $this->item_url = $itemUrl;
    }

    public function getSellerId() : int{
        return $this->seller_id;
    }

    public function setSellerId(int $sellerId){
        $this->seller_id = $sellerId;
    }

    public function getVolume() : int{
        return $this->volume;
    }

    public function setVolume(int $volume){
        $this->volume = $volume;
    }

    public function getNick() : string{
        return $this->nick;
    }

    public function setNick(string $nick){
        $this->nick = $nick;
    }

    public function getCatLeafName() : string{
        return $this->cat_leaf_name;
    }

    public function setCatLeafName(string $catLeafName){
        $this->cat_leaf_name = $catLeafName;
    }

    public function getIsPrepay() : bool{
        return $this->is_prepay;
    }

    public function setIsPrepay(bool $isPrepay){
        $this->is_prepay = $isPrepay;
    }

    public function getShopDsr() : int{
        return $this->shop_dsr;
    }

    public function setShopDsr(int $shopDsr){
        $this->shop_dsr = $shopDsr;
    }

    public function getRatesum() : int{
        return $this->ratesum;
    }

    public function setRatesum(int $ratesum){
        $this->ratesum = $ratesum;
    }

    public function getIRfdRate() : bool{
        return $this->i_rfd_rate;
    }

    public function setIRfdRate(bool $iRfdRate){
        $this->i_rfd_rate = $iRfdRate;
    }

    public function getHGoodRate() : bool{
        return $this->h_good_rate;
    }

    public function setHGoodRate(bool $hGoodRate){
        $this->h_good_rate = $hGoodRate;
    }

    public function getHPayRate30() : bool{
        return $this->h_pay_rate30;
    }

    public function setHPayRate30(bool $hPayRate30){
        $this->h_pay_rate30 = $hPayRate30;
    }

    public function getFreeShipment() : bool{
        return $this->free_shipment;
    }

    public function setFreeShipment(bool $freeShipment){
        $this->free_shipment = $freeShipment;
    }

    public function getMaterialLibType() : string{
        return $this->material_lib_type;
    }

    public function setMaterialLibType(string $materialLibType){
        $this->material_lib_type = $materialLibType;
    }

    public function getPresaleDiscountFeeText() : string{
        return $this->presale_discount_fee_text;
    }

    public function setPresaleDiscountFeeText(string $presaleDiscountFeeText){
        $this->presale_discount_fee_text = $presaleDiscountFeeText;
    }

    public function getPresaleTailEndTime() : int{
        return $this->presale_tail_end_time;
    }

    public function setPresaleTailEndTime(int $presaleTailEndTime){
        $this->presale_tail_end_time = $presaleTailEndTime;
    }

    public function getPresaleTailStartTime() : int{
        return $this->presale_tail_start_time;
    }

    public function setPresaleTailStartTime(int $presaleTailStartTime){
        $this->presale_tail_start_time = $presaleTailStartTime;
    }

    public function getPresaleEndTime() : int{
        return $this->presale_end_time;
    }

    public function setPresaleEndTime(int $presaleEndTime){
        $this->presale_end_time = $presaleEndTime;
    }

    public function getPresaleStartTime() : int{
        return $this->presale_start_time;
    }

    public function setPresaleStartTime(int $presaleStartTime){
        $this->presale_start_time = $presaleStartTime;
    }

    public function getPresaleDeposit() : string{
        return $this->presale_deposit;
    }

    public function setPresaleDeposit(string $presaleDeposit){
        $this->presale_deposit = $presaleDeposit;
    }

    public function getJuPlayEndTime() : int{
        return $this->ju_play_end_time;
    }

    public function setJuPlayEndTime(int $juPlayEndTime){
        $this->ju_play_end_time = $juPlayEndTime;
    }

    public function getJuPlayStartTime() : int{
        return $this->ju_play_start_time;
    }

    public function setJuPlayStartTime(int $juPlayStartTime){
        $this->ju_play_start_time = $juPlayStartTime;
    }

    public function getPlayInfo() : string{
        return $this->play_info;
    }

    public function setPlayInfo(string $playInfo){
        $this->play_info = $playInfo;
    }

    public function getTmallPlayActivityEndTime() : int{
        return $this->tmall_play_activity_end_time;
    }

    public function setTmallPlayActivityEndTime(int $tmallPlayActivityEndTime){
        $this->tmall_play_activity_end_time = $tmallPlayActivityEndTime;
    }

    public function getTmallPlayActivityStartTime() : int{
        return $this->tmall_play_activity_start_time;
    }

    public function setTmallPlayActivityStartTime(int $tmallPlayActivityStartTime){
        $this->tmall_play_activity_start_time = $tmallPlayActivityStartTime;
    }

    public function getJuOnlineStartTime() : string{
        return $this->ju_online_start_time;
    }

    public function setJuOnlineStartTime(string $juOnlineStartTime){
        $this->ju_online_start_time = $juOnlineStartTime;
    }

    public function getJuOnlineEndTime() : string{
        return $this->ju_online_end_time;
    }

    public function setJuOnlineEndTime(string $juOnlineEndTime){
        $this->ju_online_end_time = $juOnlineEndTime;
    }

    public function getJuPreShowStartTime() : string{
        return $this->ju_pre_show_start_time;
    }

    public function setJuPreShowStartTime(string $juPreShowStartTime){
        $this->ju_pre_show_start_time = $juPreShowStartTime;
    }

    public function getJuPreShowEndTime() : string{
        return $this->ju_pre_show_end_time;
    }

    public function setJuPreShowEndTime(string $juPreShowEndTime){
        $this->ju_pre_show_end_time = $juPreShowEndTime;
    }

    public function getSalePrice() : string{
        return $this->sale_price;
    }

    public function setSalePrice(string $salePrice){
        $this->sale_price = $salePrice;
    }

    public function getKuadianPromotionInfo() : string{
        return $this->kuadian_promotion_info;
    }

    public function setKuadianPromotionInfo(string $kuadianPromotionInfo){
        $this->kuadian_promotion_info = $kuadianPromotionInfo;
    }

    public function getSuperiorBrand() : string{
        return $this->superior_brand;
    }

    public function setSuperiorBrand(string $superiorBrand){
        $this->superior_brand = $superiorBrand;
    }

    public function getHotFlag() : string{
        return $this->hot_flag;
    }

    public function setHotFlag(string $hotFlag){
        $this->hot_flag = $hotFlag;
    }

    public function getInputNumIid() : string{
        return $this->input_num_iid;
    }

    public function setInputNumIid(string $inputNumIid){
        $this->input_num_iid = $inputNumIid;
    }


}

