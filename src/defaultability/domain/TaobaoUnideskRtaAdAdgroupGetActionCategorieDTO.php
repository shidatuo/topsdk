<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdAdgroupGetActionCategorieDTO {

    /**
        行为类目
     **/
    private $action_categories;

    /**
        行为场景，1：电商行为场景，2：咨询行为场景，3：app行为场景
     **/
    private $action_scene;

    /**
        关键词
     **/
    private $keywords;

    /**
        行为天数，1：7天，2：15天，3：30天，4：60天，5：90天，6：180天，7：365天
     **/
    private $action_days;


    public function getActionCategories() : array{
        return $this->action_categories;
    }

    public function setActionCategories(array $actionCategories){
        $this->action_categories = $actionCategories;
    }

    public function getActionScene() : array{
        return $this->action_scene;
    }

    public function setActionScene(array $actionScene){
        $this->action_scene = $actionScene;
    }

    public function getKeywords() : array{
        return $this->keywords;
    }

    public function setKeywords(array $keywords){
        $this->keywords = $keywords;
    }

    public function getActionDays() : int{
        return $this->action_days;
    }

    public function setActionDays(int $actionDays){
        $this->action_days = $actionDays;
    }


}

