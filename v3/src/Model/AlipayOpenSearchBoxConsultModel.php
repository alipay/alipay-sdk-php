<?php
/**
 * AlipayOpenSearchBoxConsultModel
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
 * AlipayOpenSearchBoxConsultModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenSearchBoxConsultModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenSearchBoxConsultModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'areaKeywords' => 'string',
        'boxDesc' => 'string',
        'brandId' => 'string',
        'businessBenefitSwitch' => 'bool',
        'businessDistrictIds' => 'string[]',
        'customKeywords' => 'string[]',
        'imageId' => 'string',
        'imageName' => 'string',
        'merchantId' => 'string',
        'relatedAccounts' => '\Alipay\OpenAPISDK\Model\SearchBoxAppInfo[]',
        'serviceInfos' => '\Alipay\OpenAPISDK\Model\SearchBoxServiceInfo[]',
        'targetAppid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'areaKeywords' => null,
        'boxDesc' => null,
        'brandId' => null,
        'businessBenefitSwitch' => null,
        'businessDistrictIds' => null,
        'customKeywords' => null,
        'imageId' => null,
        'imageName' => null,
        'merchantId' => null,
        'relatedAccounts' => null,
        'serviceInfos' => null,
        'targetAppid' => null
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
        'areaKeywords' => 'area_keywords',
        'boxDesc' => 'box_desc',
        'brandId' => 'brand_id',
        'businessBenefitSwitch' => 'business_benefit_switch',
        'businessDistrictIds' => 'business_district_ids',
        'customKeywords' => 'custom_keywords',
        'imageId' => 'image_id',
        'imageName' => 'image_name',
        'merchantId' => 'merchant_id',
        'relatedAccounts' => 'related_accounts',
        'serviceInfos' => 'service_infos',
        'targetAppid' => 'target_appid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'areaKeywords' => 'setAreaKeywords',
        'boxDesc' => 'setBoxDesc',
        'brandId' => 'setBrandId',
        'businessBenefitSwitch' => 'setBusinessBenefitSwitch',
        'businessDistrictIds' => 'setBusinessDistrictIds',
        'customKeywords' => 'setCustomKeywords',
        'imageId' => 'setImageId',
        'imageName' => 'setImageName',
        'merchantId' => 'setMerchantId',
        'relatedAccounts' => 'setRelatedAccounts',
        'serviceInfos' => 'setServiceInfos',
        'targetAppid' => 'setTargetAppid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'areaKeywords' => 'getAreaKeywords',
        'boxDesc' => 'getBoxDesc',
        'brandId' => 'getBrandId',
        'businessBenefitSwitch' => 'getBusinessBenefitSwitch',
        'businessDistrictIds' => 'getBusinessDistrictIds',
        'customKeywords' => 'getCustomKeywords',
        'imageId' => 'getImageId',
        'imageName' => 'getImageName',
        'merchantId' => 'getMerchantId',
        'relatedAccounts' => 'getRelatedAccounts',
        'serviceInfos' => 'getServiceInfos',
        'targetAppid' => 'getTargetAppid'
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
        $this->container['areaKeywords'] = $data['areaKeywords'] ?? null;
        $this->container['boxDesc'] = $data['boxDesc'] ?? null;
        $this->container['brandId'] = $data['brandId'] ?? null;
        $this->container['businessBenefitSwitch'] = $data['businessBenefitSwitch'] ?? null;
        $this->container['businessDistrictIds'] = $data['businessDistrictIds'] ?? null;
        $this->container['customKeywords'] = $data['customKeywords'] ?? null;
        $this->container['imageId'] = $data['imageId'] ?? null;
        $this->container['imageName'] = $data['imageName'] ?? null;
        $this->container['merchantId'] = $data['merchantId'] ?? null;
        $this->container['relatedAccounts'] = $data['relatedAccounts'] ?? null;
        $this->container['serviceInfos'] = $data['serviceInfos'] ?? null;
        $this->container['targetAppid'] = $data['targetAppid'] ?? null;
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
     * Gets areaKeywords
     *
     * @return string|null
     */
    public function getAreaKeywords()
    {
        return $this->container['areaKeywords'];
    }

    /**
     * Sets areaKeywords
     *
     * @param string|null $areaKeywords 小程序直达配置的常用服务中带有门店信息时，可添加简称触发词
     *
     * @return self
     */
    public function setAreaKeywords($areaKeywords)
    {
        $this->container['areaKeywords'] = $areaKeywords;

        return $this;
    }

    /**
     * Gets boxDesc
     *
     * @return string|null
     */
    public function getBoxDesc()
    {
        return $this->container['boxDesc'];
    }

    /**
     * Sets boxDesc
     *
     * @param string|null $boxDesc 品牌介绍，5-15个中文字符。  小程序直达不支持设置此项
     *
     * @return self
     */
    public function setBoxDesc($boxDesc)
    {
        $this->container['boxDesc'] = $boxDesc;

        return $this;
    }

    /**
     * Gets brandId
     *
     * @return string|null
     */
    public function getBrandId()
    {
        return $this->container['brandId'];
    }

    /**
     * Sets brandId
     *
     * @param string|null $brandId 品牌id，参考<a href=\"https://opendocs.alipay.com/rules/029uy4\">品牌认证说明</a>
     *
     * @return self
     */
    public function setBrandId($brandId)
    {
        $this->container['brandId'] = $brandId;

        return $this;
    }

    /**
     * Gets businessBenefitSwitch
     *
     * @return bool|null
     */
    public function getBusinessBenefitSwitch()
    {
        return $this->container['businessBenefitSwitch'];
    }

    /**
     * Sets businessBenefitSwitch
     *
     * @param bool|null $businessBenefitSwitch 可通过配置来开启商圈权益模块，关闭后搜索直达不展示商圈权益模块
     *
     * @return self
     */
    public function setBusinessBenefitSwitch($businessBenefitSwitch)
    {
        $this->container['businessBenefitSwitch'] = $businessBenefitSwitch;

        return $this;
    }

    /**
     * Gets businessDistrictIds
     *
     * @return string[]|null
     */
    public function getBusinessDistrictIds()
    {
        return $this->container['businessDistrictIds'];
    }

    /**
     * Sets businessDistrictIds
     *
     * @param string[]|null $businessDistrictIds 小程序已关联商圈时，可添加商圈id（目前仅对品牌直达开放，小程序直达暂未开放）
     *
     * @return self
     */
    public function setBusinessDistrictIds($businessDistrictIds)
    {
        $this->container['businessDistrictIds'] = $businessDistrictIds;

        return $this;
    }

    /**
     * Gets customKeywords
     *
     * @return string[]|null
     */
    public function getCustomKeywords()
    {
        return $this->container['customKeywords'];
    }

    /**
     * Sets customKeywords
     *
     * @param string[]|null $customKeywords 自定义触发词，最多可配置6个，限1-8个中文字符。  小程序直达不支持设置此项
     *
     * @return self
     */
    public function setCustomKeywords($customKeywords)
    {
        $this->container['customKeywords'] = $customKeywords;

        return $this;
    }

    /**
     * Gets imageId
     *
     * @return string|null
     */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
     * Sets imageId
     *
     * @param string|null $imageId 氛围图片id，调用 <a href=\"https://opendocs.alipay.com/mini/03hvl1?ref=api\">支付宝文件上传接口</a> 上传图片获取图片id(bizCode：search_box_atmosphere)。 <a href=\"https://opendocs.alipay.com/b/03al6f\">图片规范</a>  小程序直达不支持设置此项。
     *
     * @return self
     */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;

        return $this;
    }

    /**
     * Gets imageName
     *
     * @return string|null
     */
    public function getImageName()
    {
        return $this->container['imageName'];
    }

    /**
     * Sets imageName
     *
     * @param string|null $imageName 氛围图片名。  小程序直达不支持设置此项
     *
     * @return self
     */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;

        return $this;
    }

    /**
     * Gets merchantId
     *
     * @return string|null
     */
    public function getMerchantId()
    {
        return $this->container['merchantId'];
    }

    /**
     * Sets merchantId
     *
     * @param string|null $merchantId 商户id，代运营模式下传入。代运营模式，需要服务商已获得商家\"运营支付宝小程序\"授权。
     *
     * @return self
     */
    public function setMerchantId($merchantId)
    {
        $this->container['merchantId'] = $merchantId;

        return $this;
    }

    /**
     * Gets relatedAccounts
     *
     * @return \Alipay\OpenAPISDK\Model\SearchBoxAppInfo[]|null
     */
    public function getRelatedAccounts()
    {
        return $this->container['relatedAccounts'];
    }

    /**
     * Sets relatedAccounts
     *
     * @param \Alipay\OpenAPISDK\Model\SearchBoxAppInfo[]|null $relatedAccounts 关联账号信息，1-2个。 内部字段均需设置。
     *
     * @return self
     */
    public function setRelatedAccounts($relatedAccounts)
    {
        $this->container['relatedAccounts'] = $relatedAccounts;

        return $this;
    }

    /**
     * Gets serviceInfos
     *
     * @return \Alipay\OpenAPISDK\Model\SearchBoxServiceInfo[]|null
     */
    public function getServiceInfos()
    {
        return $this->container['serviceInfos'];
    }

    /**
     * Sets serviceInfos
     *
     * @param \Alipay\OpenAPISDK\Model\SearchBoxServiceInfo[]|null $serviceInfos 服务信息，服务必须审核通过才能申请搜索直达。 内部字段均需设置。
     *
     * @return self
     */
    public function setServiceInfos($serviceInfos)
    {
        $this->container['serviceInfos'] = $serviceInfos;

        return $this;
    }

    /**
     * Gets targetAppid
     *
     * @return string|null
     */
    public function getTargetAppid()
    {
        return $this->container['targetAppid'];
    }

    /**
     * Sets targetAppid
     *
     * @param string|null $targetAppid 小程序id，小程序直达时必传，需要和申请的商户主体保持一致，且符合<a href=\"https://opendocs.alipay.com/b/03al6e\">准入类目</a>
     *
     * @return self
     */
    public function setTargetAppid($targetAppid)
    {
        $this->container['targetAppid'] = $targetAppid;

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


