<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdAdgroupUpdateInterestCategorieDTO {

    /**
        关键词
     **/
    private $keywords;

    /**
        行文类目
     **/
    private $interest_categories;


    public function getKeywords() : array{
        return $this->keywords;
    }

    public function setKeywords(array $keywords){
        $this->keywords = $keywords;
    }

    public function getInterestCategories() : array{
        return $this->interest_categories;
    }

    public function setInterestCategories(array $interestCategories){
        $this->interest_categories = $interestCategories;
    }


}

