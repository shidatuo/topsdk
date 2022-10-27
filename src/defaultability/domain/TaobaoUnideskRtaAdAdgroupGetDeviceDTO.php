<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdAdgroupGetDeviceDTO {

    /**
        设备品牌，1：荣耀，2：苹果，3：华为，4：小米，5：三星，6：OPPO，7：VIVO，8：魅族，9：金立，10：酷派，11：联想，12：乐视，13：中兴，14：中国移动，15：HTC，16：小辣椒，17：努比亚，18：海信，19：奇酷，20：TCL，21：索尼，22：锤子手机，23：360手机，24：一加手机，25：LG，26：摩托罗拉，27：诺基亚，28：谷歌，100：其他
     **/
    private $device_brands;

    /**
        设备价格类型方式：，0：手动定义
     **/
    private $device_price_type;

    /**
        设备价格，最小价格-最大价格
     **/
    private $device_prices;


    public function getDeviceBrands() : array{
        return $this->device_brands;
    }

    public function setDeviceBrands(array $deviceBrands){
        $this->device_brands = $deviceBrands;
    }

    public function getDevicePriceType() : int{
        return $this->device_price_type;
    }

    public function setDevicePriceType(int $devicePriceType){
        $this->device_price_type = $devicePriceType;
    }

    public function getDevicePrices() : array{
        return $this->device_prices;
    }

    public function setDevicePrices(array $devicePrices){
        $this->device_prices = $devicePrices;
    }


}

