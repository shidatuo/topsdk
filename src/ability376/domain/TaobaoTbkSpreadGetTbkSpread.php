<?php
namespace Topsdk\Topapi\Ability376\Domain;

class TaobaoTbkSpreadGetTbkSpread {

    /**
        传播形式, 目前只支持短链接
     **/
    private $content;

    /**
        调用错误信息；由于是批量接口，请重点关注每条请求返回的结果，如果非OK，则说明该结果对应的content不正常，请酌情处理;
     **/
    private $err_msg;


    public function getContent() : string{
        return $this->content;
    }

    public function setContent(string $content){
        $this->content = $content;
    }

    public function getErrMsg() : string{
        return $this->err_msg;
    }

    public function setErrMsg(string $errMsg){
        $this->err_msg = $errMsg;
    }


}

