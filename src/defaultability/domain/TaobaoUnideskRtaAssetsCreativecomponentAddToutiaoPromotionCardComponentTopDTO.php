<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAssetsCreativecomponentAddToutiaoPromotionCardComponentTopDTO {

    /**
        行动号召。内容长度要求：2 ≤ x ≤6。一个中文长度为1
     **/
    private $button_text;

    /**
        图片文件
     **/
    private $img_id;

    /**
        卡片标题。长度最大为20。一个中文长度为1
     **/
    private $title;

    /**
        是否开启智能优选，1-开启、0-不开启
     **/
    private $enable_personal_action;

    /**
        推广卖点。最多选择10个推广卖点 ，内容长度要求：6 ≤ x ≤9 。一个中文长度为1
     **/
    private $product_selling_points;


    public function getButtonText() : string{
        return $this->button_text;
    }

    public function setButtonText(string $buttonText){
        $this->button_text = $buttonText;
    }

    public function getImgId() : string{
        return $this->img_id;
    }

    public function setImgId(string $imgId){
        $this->img_id = $imgId;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getEnablePersonalAction() : int{
        return $this->enable_personal_action;
    }

    public function setEnablePersonalAction(int $enablePersonalAction){
        $this->enable_personal_action = $enablePersonalAction;
    }

    public function getProductSellingPoints() : array{
        return $this->product_selling_points;
    }

    public function setProductSellingPoints(array $productSellingPoints){
        $this->product_selling_points = $productSellingPoints;
    }


}

