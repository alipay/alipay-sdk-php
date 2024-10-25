<?php
/**
 * AlipayEcoMycarParkingParkinglotinfoQueryResponseModel
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * 支付宝开放平台API
 *
 * 支付宝开放平台v3协议文档
 *
 * The version of the OpenAPI document: 2024-10-16
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Alipay\OpenAPISDK\Model;

use \ArrayAccess;
use \Alipay\OpenAPISDK\ObjectSerializer;

/**
 * AlipayEcoMycarParkingParkinglotinfoQueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayEcoMycarParkingParkinglotinfoQueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayEcoMycarParkingParkinglotinfoQueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'addressId' => 'string',
        'agentId' => 'string',
        'businessIsv' => '\Alipay\OpenAPISDK\Model\BusinessItem[]',
        'chargingRule' => '\Alipay\OpenAPISDK\Model\ParkingLotChargingRuleInfo[]',
        'cityId' => 'string',
        'mapPoiAddress' => 'string',
        'mapPoiName' => 'string',
        'mchntId' => 'string',
        'outParkingId' => 'string',
        'parkingAddress' => 'string',
        'parkingFeeDescription' => 'string',
        'parkingFeeDescriptionImg' => 'string',
        'parkingId' => 'string',
        'parkingLatitude' => 'string',
        'parkingLongitude' => 'string',
        'parkingLotType' => 'string',
        'parkingLotTypeCode' => 'string',
        'parkingMobile' => 'string',
        'parkingName' => 'string',
        'parkingPoiid' => 'string',
        'payType' => 'string',
        'provinceId' => 'string',
        'serviceList' => '\Alipay\OpenAPISDK\Model\ParkingLotServiceInfo[]',
        'shopingmallId' => 'string',
        'timeOut' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'addressId' => null,
        'agentId' => null,
        'businessIsv' => null,
        'chargingRule' => null,
        'cityId' => null,
        'mapPoiAddress' => null,
        'mapPoiName' => null,
        'mchntId' => null,
        'outParkingId' => null,
        'parkingAddress' => null,
        'parkingFeeDescription' => null,
        'parkingFeeDescriptionImg' => null,
        'parkingId' => null,
        'parkingLatitude' => null,
        'parkingLongitude' => null,
        'parkingLotType' => null,
        'parkingLotTypeCode' => null,
        'parkingMobile' => null,
        'parkingName' => null,
        'parkingPoiid' => null,
        'payType' => null,
        'provinceId' => null,
        'serviceList' => null,
        'shopingmallId' => null,
        'timeOut' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'addressId' => 'address_id',
        'agentId' => 'agent_id',
        'businessIsv' => 'business_isv',
        'chargingRule' => 'charging_rule',
        'cityId' => 'city_id',
        'mapPoiAddress' => 'map_poi_address',
        'mapPoiName' => 'map_poi_name',
        'mchntId' => 'mchnt_id',
        'outParkingId' => 'out_parking_id',
        'parkingAddress' => 'parking_address',
        'parkingFeeDescription' => 'parking_fee_description',
        'parkingFeeDescriptionImg' => 'parking_fee_description_img',
        'parkingId' => 'parking_id',
        'parkingLatitude' => 'parking_latitude',
        'parkingLongitude' => 'parking_longitude',
        'parkingLotType' => 'parking_lot_type',
        'parkingLotTypeCode' => 'parking_lot_type_code',
        'parkingMobile' => 'parking_mobile',
        'parkingName' => 'parking_name',
        'parkingPoiid' => 'parking_poiid',
        'payType' => 'pay_type',
        'provinceId' => 'province_id',
        'serviceList' => 'service_list',
        'shopingmallId' => 'shopingmall_id',
        'timeOut' => 'time_out'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'addressId' => 'setAddressId',
        'agentId' => 'setAgentId',
        'businessIsv' => 'setBusinessIsv',
        'chargingRule' => 'setChargingRule',
        'cityId' => 'setCityId',
        'mapPoiAddress' => 'setMapPoiAddress',
        'mapPoiName' => 'setMapPoiName',
        'mchntId' => 'setMchntId',
        'outParkingId' => 'setOutParkingId',
        'parkingAddress' => 'setParkingAddress',
        'parkingFeeDescription' => 'setParkingFeeDescription',
        'parkingFeeDescriptionImg' => 'setParkingFeeDescriptionImg',
        'parkingId' => 'setParkingId',
        'parkingLatitude' => 'setParkingLatitude',
        'parkingLongitude' => 'setParkingLongitude',
        'parkingLotType' => 'setParkingLotType',
        'parkingLotTypeCode' => 'setParkingLotTypeCode',
        'parkingMobile' => 'setParkingMobile',
        'parkingName' => 'setParkingName',
        'parkingPoiid' => 'setParkingPoiid',
        'payType' => 'setPayType',
        'provinceId' => 'setProvinceId',
        'serviceList' => 'setServiceList',
        'shopingmallId' => 'setShopingmallId',
        'timeOut' => 'setTimeOut'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'addressId' => 'getAddressId',
        'agentId' => 'getAgentId',
        'businessIsv' => 'getBusinessIsv',
        'chargingRule' => 'getChargingRule',
        'cityId' => 'getCityId',
        'mapPoiAddress' => 'getMapPoiAddress',
        'mapPoiName' => 'getMapPoiName',
        'mchntId' => 'getMchntId',
        'outParkingId' => 'getOutParkingId',
        'parkingAddress' => 'getParkingAddress',
        'parkingFeeDescription' => 'getParkingFeeDescription',
        'parkingFeeDescriptionImg' => 'getParkingFeeDescriptionImg',
        'parkingId' => 'getParkingId',
        'parkingLatitude' => 'getParkingLatitude',
        'parkingLongitude' => 'getParkingLongitude',
        'parkingLotType' => 'getParkingLotType',
        'parkingLotTypeCode' => 'getParkingLotTypeCode',
        'parkingMobile' => 'getParkingMobile',
        'parkingName' => 'getParkingName',
        'parkingPoiid' => 'getParkingPoiid',
        'payType' => 'getPayType',
        'provinceId' => 'getProvinceId',
        'serviceList' => 'getServiceList',
        'shopingmallId' => 'getShopingmallId',
        'timeOut' => 'getTimeOut'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['addressId'] = $data['addressId'] ?? null;
        $this->container['agentId'] = $data['agentId'] ?? null;
        $this->container['businessIsv'] = $data['businessIsv'] ?? null;
        $this->container['chargingRule'] = $data['chargingRule'] ?? null;
        $this->container['cityId'] = $data['cityId'] ?? null;
        $this->container['mapPoiAddress'] = $data['mapPoiAddress'] ?? null;
        $this->container['mapPoiName'] = $data['mapPoiName'] ?? null;
        $this->container['mchntId'] = $data['mchntId'] ?? null;
        $this->container['outParkingId'] = $data['outParkingId'] ?? null;
        $this->container['parkingAddress'] = $data['parkingAddress'] ?? null;
        $this->container['parkingFeeDescription'] = $data['parkingFeeDescription'] ?? null;
        $this->container['parkingFeeDescriptionImg'] = $data['parkingFeeDescriptionImg'] ?? null;
        $this->container['parkingId'] = $data['parkingId'] ?? null;
        $this->container['parkingLatitude'] = $data['parkingLatitude'] ?? null;
        $this->container['parkingLongitude'] = $data['parkingLongitude'] ?? null;
        $this->container['parkingLotType'] = $data['parkingLotType'] ?? null;
        $this->container['parkingLotTypeCode'] = $data['parkingLotTypeCode'] ?? null;
        $this->container['parkingMobile'] = $data['parkingMobile'] ?? null;
        $this->container['parkingName'] = $data['parkingName'] ?? null;
        $this->container['parkingPoiid'] = $data['parkingPoiid'] ?? null;
        $this->container['payType'] = $data['payType'] ?? null;
        $this->container['provinceId'] = $data['provinceId'] ?? null;
        $this->container['serviceList'] = $data['serviceList'] ?? null;
        $this->container['shopingmallId'] = $data['shopingmallId'] ?? null;
        $this->container['timeOut'] = $data['timeOut'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets addressId
     *
     * @return string|null
     */
    public function getAddressId()
    {
        return $this->container['addressId'];
    }

    /**
     * Sets addressId
     *
     * @param string|null $addressId 地区编码
     *
     * @return self
     */
    public function setAddressId($addressId)
    {
        $this->container['addressId'] = $addressId;

        return $this;
    }

    /**
     * Gets agentId
     *
     * @return string|null
     */
    public function getAgentId()
    {
        return $this->container['agentId'];
    }

    /**
     * Sets agentId
     *
     * @param string|null $agentId 服务商ID（2088开头的16位纯数字），由服务商提供给ISV
     *
     * @return self
     */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;

        return $this;
    }

    /**
     * Gets businessIsv
     *
     * @return \Alipay\OpenAPISDK\Model\BusinessItem[]|null
     */
    public function getBusinessIsv()
    {
        return $this->container['businessIsv'];
    }

    /**
     * Sets businessIsv
     *
     * @param \Alipay\OpenAPISDK\Model\BusinessItem[]|null $businessIsv 车场业务归属列表
     *
     * @return self
     */
    public function setBusinessIsv($businessIsv)
    {
        $this->container['businessIsv'] = $businessIsv;

        return $this;
    }

    /**
     * Gets chargingRule
     *
     * @return \Alipay\OpenAPISDK\Model\ParkingLotChargingRuleInfo[]|null
     */
    public function getChargingRule()
    {
        return $this->container['chargingRule'];
    }

    /**
     * Sets chargingRule
     *
     * @param \Alipay\OpenAPISDK\Model\ParkingLotChargingRuleInfo[]|null $chargingRule 停车场详细计费规则
     *
     * @return self
     */
    public function setChargingRule($chargingRule)
    {
        $this->container['chargingRule'] = $chargingRule;

        return $this;
    }

    /**
     * Gets cityId
     *
     * @return string|null
     */
    public function getCityId()
    {
        return $this->container['cityId'];
    }

    /**
     * Sets cityId
     *
     * @param string|null $cityId 城市编码
     *
     * @return self
     */
    public function setCityId($cityId)
    {
        $this->container['cityId'] = $cityId;

        return $this;
    }

    /**
     * Gets mapPoiAddress
     *
     * @return string|null
     */
    public function getMapPoiAddress()
    {
        return $this->container['mapPoiAddress'];
    }

    /**
     * Sets mapPoiAddress
     *
     * @param string|null $mapPoiAddress 高德检索地址
     *
     * @return self
     */
    public function setMapPoiAddress($mapPoiAddress)
    {
        $this->container['mapPoiAddress'] = $mapPoiAddress;

        return $this;
    }

    /**
     * Gets mapPoiName
     *
     * @return string|null
     */
    public function getMapPoiName()
    {
        return $this->container['mapPoiName'];
    }

    /**
     * Sets mapPoiName
     *
     * @param string|null $mapPoiName 高德检索名称
     *
     * @return self
     */
    public function setMapPoiName($mapPoiName)
    {
        $this->container['mapPoiName'] = $mapPoiName;

        return $this;
    }

    /**
     * Gets mchntId
     *
     * @return string|null
     */
    public function getMchntId()
    {
        return $this->container['mchntId'];
    }

    /**
     * Sets mchntId
     *
     * @param string|null $mchntId 收款方ID（2088开头的16位纯数字），由停车场收款的业主方提供给ISV，该字段暂用于机具和物料申领
     *
     * @return self
     */
    public function setMchntId($mchntId)
    {
        $this->container['mchntId'] = $mchntId;

        return $this;
    }

    /**
     * Gets outParkingId
     *
     * @return string|null
     */
    public function getOutParkingId()
    {
        return $this->container['outParkingId'];
    }

    /**
     * Sets outParkingId
     *
     * @param string|null $outParkingId ISV停车场ID，由ISV提供，同一个isv或商户范围内唯一
     *
     * @return self
     */
    public function setOutParkingId($outParkingId)
    {
        $this->container['outParkingId'] = $outParkingId;

        return $this;
    }

    /**
     * Gets parkingAddress
     *
     * @return string|null
     */
    public function getParkingAddress()
    {
        return $this->container['parkingAddress'];
    }

    /**
     * Sets parkingAddress
     *
     * @param string|null $parkingAddress 停车场地址
     *
     * @return self
     */
    public function setParkingAddress($parkingAddress)
    {
        $this->container['parkingAddress'] = $parkingAddress;

        return $this;
    }

    /**
     * Gets parkingFeeDescription
     *
     * @return string|null
     */
    public function getParkingFeeDescription()
    {
        return $this->container['parkingFeeDescription'];
    }

    /**
     * Sets parkingFeeDescription
     *
     * @param string|null $parkingFeeDescription 收费说明
     *
     * @return self
     */
    public function setParkingFeeDescription($parkingFeeDescription)
    {
        $this->container['parkingFeeDescription'] = $parkingFeeDescription;

        return $this;
    }

    /**
     * Gets parkingFeeDescriptionImg
     *
     * @return string|null
     */
    public function getParkingFeeDescriptionImg()
    {
        return $this->container['parkingFeeDescriptionImg'];
    }

    /**
     * Sets parkingFeeDescriptionImg
     *
     * @param string|null $parkingFeeDescriptionImg 商户在停车平台露出的停车价格图片地址
     *
     * @return self
     */
    public function setParkingFeeDescriptionImg($parkingFeeDescriptionImg)
    {
        $this->container['parkingFeeDescriptionImg'] = $parkingFeeDescriptionImg;

        return $this;
    }

    /**
     * Gets parkingId
     *
     * @return string|null
     */
    public function getParkingId()
    {
        return $this->container['parkingId'];
    }

    /**
     * Sets parkingId
     *
     * @param string|null $parkingId 支付宝返回停车场id，系统唯一
     *
     * @return self
     */
    public function setParkingId($parkingId)
    {
        $this->container['parkingId'] = $parkingId;

        return $this;
    }

    /**
     * Gets parkingLatitude
     *
     * @return string|null
     */
    public function getParkingLatitude()
    {
        return $this->container['parkingLatitude'];
    }

    /**
     * Sets parkingLatitude
     *
     * @param string|null $parkingLatitude 停车场位置经度（优先高德坐标获取结果）单位：度
     *
     * @return self
     */
    public function setParkingLatitude($parkingLatitude)
    {
        $this->container['parkingLatitude'] = $parkingLatitude;

        return $this;
    }

    /**
     * Gets parkingLongitude
     *
     * @return string|null
     */
    public function getParkingLongitude()
    {
        return $this->container['parkingLongitude'];
    }

    /**
     * Sets parkingLongitude
     *
     * @param string|null $parkingLongitude 停车场位置经度（优先高德坐标获取结果）单位：度
     *
     * @return self
     */
    public function setParkingLongitude($parkingLongitude)
    {
        $this->container['parkingLongitude'] = $parkingLongitude;

        return $this;
    }

    /**
     * Gets parkingLotType
     *
     * @return string|null
     */
    public function getParkingLotType()
    {
        return $this->container['parkingLotType'];
    }

    /**
     * Sets parkingLotType
     *
     * @param string|null $parkingLotType 停车场类型，1为居民小区、2为商圈停车场（购物中心商业广场商场等）、3为路侧停车、4为公园景点（景点乐园公园老街古镇等）、5为商务楼宇（酒店写字楼商务楼园区等）、6为其他、7为交通枢纽（机场火车站汽车站码头港口等）、8为市政设施（体育场博物图书馆医院学校等）、9独立园区（办公工业物流园区等）、10经营场所（4S店、门市餐饮等
     *
     * @return self
     */
    public function setParkingLotType($parkingLotType)
    {
        $this->container['parkingLotType'] = $parkingLotType;

        return $this;
    }

    /**
     * Gets parkingLotTypeCode
     *
     * @return string|null
     */
    public function getParkingLotTypeCode()
    {
        return $this->container['parkingLotTypeCode'];
    }

    /**
     * Sets parkingLotTypeCode
     *
     * @param string|null $parkingLotTypeCode 停车场类型，COMMUNITY为居民小区、BUSINESS_AREA为商圈停车场（购物中心商业广场商场等）、ROADSIDE为路侧停车、PARK_SCENIC为公园景点（景点乐园公园老街古镇等）、OFFICE_BUILDING为商务楼宇（酒店写字楼商务楼园区等）、OTHER为其他、TRANSPORTATION为交通枢纽（机场火车站汽车站码头港口等）、PUBLIC_FACILITIES为市政设施（体育场博物图书馆医院学校等）、TERRITORY独立园区（办公工业物流园区等）、BUSINESS_PLACE经营场所（4S店、门市餐饮等
     *
     * @return self
     */
    public function setParkingLotTypeCode($parkingLotTypeCode)
    {
        $this->container['parkingLotTypeCode'] = $parkingLotTypeCode;

        return $this;
    }

    /**
     * Gets parkingMobile
     *
     * @return string|null
     */
    public function getParkingMobile()
    {
        return $this->container['parkingMobile'];
    }

    /**
     * Sets parkingMobile
     *
     * @param string|null $parkingMobile 停车场客服电话
     *
     * @return self
     */
    public function setParkingMobile($parkingMobile)
    {
        $this->container['parkingMobile'] = $parkingMobile;

        return $this;
    }

    /**
     * Gets parkingName
     *
     * @return string|null
     */
    public function getParkingName()
    {
        return $this->container['parkingName'];
    }

    /**
     * Sets parkingName
     *
     * @param string|null $parkingName 停车场名称，由ISV定义，尽量与高德地图上的一致
     *
     * @return self
     */
    public function setParkingName($parkingName)
    {
        $this->container['parkingName'] = $parkingName;

        return $this;
    }

    /**
     * Gets parkingPoiid
     *
     * @return string|null
     */
    public function getParkingPoiid()
    {
        return $this->container['parkingPoiid'];
    }

    /**
     * Sets parkingPoiid
     *
     * @param string|null $parkingPoiid 高德地图唯一标识
     *
     * @return self
     */
    public function setParkingPoiid($parkingPoiid)
    {
        $this->container['parkingPoiid'] = $parkingPoiid;

        return $this;
    }

    /**
     * Gets payType
     *
     * @return string|null
     */
    public function getPayType()
    {
        return $this->container['payType'];
    }

    /**
     * Sets payType
     *
     * @param string|null $payType 支付方式（1为支付宝在线缴费，2为支付宝代扣缴费，3当面付 4现金)，如支持多种方式以','进行间隔
     *
     * @return self
     */
    public function setPayType($payType)
    {
        $this->container['payType'] = $payType;

        return $this;
    }

    /**
     * Gets provinceId
     *
     * @return string|null
     */
    public function getProvinceId()
    {
        return $this->container['provinceId'];
    }

    /**
     * Sets provinceId
     *
     * @param string|null $provinceId 省份编码
     *
     * @return self
     */
    public function setProvinceId($provinceId)
    {
        $this->container['provinceId'] = $provinceId;

        return $this;
    }

    /**
     * Gets serviceList
     *
     * @return \Alipay\OpenAPISDK\Model\ParkingLotServiceInfo[]|null
     */
    public function getServiceList()
    {
        return $this->container['serviceList'];
    }

    /**
     * Sets serviceList
     *
     * @param \Alipay\OpenAPISDK\Model\ParkingLotServiceInfo[]|null $serviceList 停车场服务信息列表
     *
     * @return self
     */
    public function setServiceList($serviceList)
    {
        $this->container['serviceList'] = $serviceList;

        return $this;
    }

    /**
     * Gets shopingmallId
     *
     * @return string|null
     */
    public function getShopingmallId()
    {
        return $this->container['shopingmallId'];
    }

    /**
     * Sets shopingmallId
     *
     * @param string|null $shopingmallId 商圈id
     *
     * @return self
     */
    public function setShopingmallId($shopingmallId)
    {
        $this->container['shopingmallId'] = $shopingmallId;

        return $this;
    }

    /**
     * Gets timeOut
     *
     * @return string|null
     */
    public function getTimeOut()
    {
        return $this->container['timeOut'];
    }

    /**
     * Sets timeOut
     *
     * @param string|null $timeOut 用户支付未离场的超时时间(以分钟为单位)
     *
     * @return self
     */
    public function setTimeOut($timeOut)
    {
        $this->container['timeOut'] = $timeOut;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


