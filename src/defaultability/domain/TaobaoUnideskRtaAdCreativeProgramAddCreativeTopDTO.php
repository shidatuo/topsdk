<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdCreativeProgramAddCreativeTopDTO {

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


}

