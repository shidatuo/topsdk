<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdCreativeGetCreativeTopDTO {

    /**
        审核拒绝详情
     **/
    private $reasons;

    /**
        计划id
     **/
    private $adgroup_id;

    /**
        创意id
     **/
    private $id;

    /**
        计划组id
     **/
    private $campaign_id;

    /**
        创意标题
     **/
    private $title;

    /**
        创建时间
     **/
    private $gmt_create;

    /**
        广告主id
     **/
    private $advertiser_id;

    /**
        创意标签
     **/
    private $tags;

    /**
        操作状态，1：启用，0：暂停，-1：删除
     **/
    private $opt_status;

    /**
        创意分类
     **/
    private $category;

    /**
        行动号召文本
     **/
    private $action_text;

    /**
        广告形式，1：竖版视频，2：横版视频，3：大图横图，5：小图，6：大图竖图。竖版视频：格式要求：mp4、mpeg、3gp、avi 视频格式，建议尺寸要求：宽高比9:16，分辨率≥ 720*1280，视频码率≥516kbps，时长≥4s； 竖版视频-视频封面：格式要求：jpg、jpeg、png 图片格式，尺寸要求：宽高比9:16，1440*2560 ≤ 尺寸≥ 720*1280； 横版视频：格式要求：mp4、mpeg、3gp、avi 视频格式，建议尺寸要求：宽高比16:9，分辨率≥ 1280*720，视频码率≥516kbps，时长≥4s,大小≤1000M； 横版视频-视频封面：格式要求：jpg、jpeg、png 图片格式，尺寸要求：宽高比16:9，2560*1440 ≤ 尺寸≥ 1280*720； 大图横图：格式要求：jpg、jpeg、png 图片格式，尺寸要求：宽高比16:9，2560*1440 ≤ 尺寸≥ 1280*720； 组图：格式要求：jpg、jpeg、png 图片格式，尺寸要求：宽高比1.52，1368*900 ≤ 尺寸≥ 456*300； 小图：格式要求：jpg、jpeg、png 图片格式，尺寸要求：宽高比1.52，1368*900 ≤ 尺寸≥ 456*300； 大图竖图：格式要求：jpg、jpeg、png 图片格式，尺寸要求：宽高比9:16，1440*2560 ≤ 尺寸≥ 720*1280；
     **/
    private $format;

    /**
        图片素材id列表(组图存在多个)
     **/
    private $img_ids;

    /**
        视频素材id
     **/
    private $video_id;

    /**
        视频素材封面id
     **/
    private $video_cover_img_id;

    /**
        状态，-1：已删除，1：投放中，2：未到达投放时间，3：不在投放时段，4：创意暂停，5：已被广告组暂停，6：广告组超出预算，7：新建审核中， 8：修改审核中，10：已完成（投放达到结束时间），11：广告计划暂停，12：审核不通过，13：账户余额不足，14：超出预算，15：数据错误，16：预上线，17：广告计划新建审核中，18：广告计划修改审核中，19：广告计划审核不通过，20：所有包含已删除，21：所有不包含已删除，22：超出账户日预算，23：作品异常，24：视频审核通过可投放滑滑场景，25：部分素材审核失败
     **/
    private $status;


    public function getReasons() : array{
        return $this->reasons;
    }

    public function setReasons(array $reasons){
        $this->reasons = $reasons;
    }

    public function getAdgroupId() : int{
        return $this->adgroup_id;
    }

    public function setAdgroupId(int $adgroupId){
        $this->adgroup_id = $adgroupId;
    }

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getCampaignId() : int{
        return $this->campaign_id;
    }

    public function setCampaignId(int $campaignId){
        $this->campaign_id = $campaignId;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
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

    public function getTags() : array{
        return $this->tags;
    }

    public function setTags(array $tags){
        $this->tags = $tags;
    }

    public function getOptStatus() : int{
        return $this->opt_status;
    }

    public function setOptStatus(int $optStatus){
        $this->opt_status = $optStatus;
    }

    public function getCategory() : int{
        return $this->category;
    }

    public function setCategory(int $category){
        $this->category = $category;
    }

    public function getActionText() : string{
        return $this->action_text;
    }

    public function setActionText(string $actionText){
        $this->action_text = $actionText;
    }

    public function getFormat() : int{
        return $this->format;
    }

    public function setFormat(int $format){
        $this->format = $format;
    }

    public function getImgIds() : array{
        return $this->img_ids;
    }

    public function setImgIds(array $imgIds){
        $this->img_ids = $imgIds;
    }

    public function getVideoId() : string{
        return $this->video_id;
    }

    public function setVideoId(string $videoId){
        $this->video_id = $videoId;
    }

    public function getVideoCoverImgId() : string{
        return $this->video_cover_img_id;
    }

    public function setVideoCoverImgId(string $videoCoverImgId){
        $this->video_cover_img_id = $videoCoverImgId;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }


}

