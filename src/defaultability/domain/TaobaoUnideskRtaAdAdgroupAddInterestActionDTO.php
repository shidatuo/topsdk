<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdAdgroupAddInterestActionDTO {

    /**
        行为分类
     **/
    private $action_categorie;

    /**
        兴趣分类
     **/
    private $interest_categorie;

    /**
        1,系统推荐 2 自定义
     **/
    private $type;


    public function getActionCategorie() : TaobaoUnideskRtaAdAdgroupAddActionCategorieDTO{
        return $this->action_categorie;
    }

    public function setActionCategorie(TaobaoUnideskRtaAdAdgroupAddActionCategorieDTO $actionCategorie){
        $this->action_categorie = $actionCategorie;
    }

    public function getInterestCategorie() : TaobaoUnideskRtaAdAdgroupAddInterestCategorieDTO{
        return $this->interest_categorie;
    }

    public function setInterestCategorie(TaobaoUnideskRtaAdAdgroupAddInterestCategorieDTO $interestCategorie){
        $this->interest_categorie = $interestCategorie;
    }

    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }


}

