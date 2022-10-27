<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdAdgroupUpdateBudgetTopDTO {

    /**
        预算类型 -1：不限、1：指定预算（每天预算相同）
     **/
    private $budget_type;

    /**
        统一预算金额，单位：分
     **/
    private $budget;


    public function getBudgetType() : int{
        return $this->budget_type;
    }

    public function setBudgetType(int $budgetType){
        $this->budget_type = $budgetType;
    }

    public function getBudget() : int{
        return $this->budget;
    }

    public function setBudget(int $budget){
        $this->budget = $budget;
    }


}

