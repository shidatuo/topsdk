<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdAdgroupUpdateAgeDTO {

    /**
        年龄，-1：不限，0：0-17，18：18-23，24：24-30，31：31-40，41：41-49，50：50-100
     **/
    private $age_range;


    public function getAgeRange() : array{
        return $this->age_range;
    }

    public function setAgeRange(array $ageRange){
        $this->age_range = $ageRange;
    }


}

