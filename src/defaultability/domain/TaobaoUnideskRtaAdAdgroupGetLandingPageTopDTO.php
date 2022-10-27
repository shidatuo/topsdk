<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdAdgroupGetLandingPageTopDTO {

    /**
        落地页url
     **/
    private $landing_page;


    public function getLandingPage() : string{
        return $this->landing_page;
    }

    public function setLandingPage(string $landingPage){
        $this->landing_page = $landingPage;
    }


}

