<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdAdgroupGetInterestActionDTO {

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


    public function getActionCategorie() : TaobaoUnideskRtaAdAdgroupGetActionCategorieDTO{
        return $this->action_categorie;
    }

    public function setActionCategorie(TaobaoUnideskRtaAdAdgroupGetActionCategorieDTO $actionCategorie){
        $this->action_categorie = $actionCategorie;
    }

    public function getInterestCategorie() : TaobaoUnideskRtaAdAdgroupGetInterestCategorieDTO{
        return $this->interest_categorie;
    }

    public function setInterestCategorie(TaobaoUnideskRtaAdAdgroupGetInterestCategorieDTO $interestCategorie){
        $this->interest_categorie = $interestCategorie;
    }

    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }


}

