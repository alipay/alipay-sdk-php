<?php
/**
 * ShopQueryOpenApiVO
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
 * The version of the OpenAPI document: 2024-11-12
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
 * ShopQueryOpenApiVO Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ShopQueryOpenApiVO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShopQueryOpenApiVO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'businessAddress' => '\Alipay\OpenAPISDK\Model\AddressInfo',
        'businessTime' => '\Alipay\OpenAPISDK\Model\ShopBusinessTime[]',
        'contactMobile' => 'string',
        'contactPhone' => 'string',
        'newShopCategory' => 'string',
        'shopCategory' => 'string',
        'shopId' => 'string',
        'shopInfoStatus' => 'string',
        'shopName' => 'string',
        'shopStatus' => 'string',
        'shopType' => 'string',
        'storeId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'businessAddress' => null,
        'businessTime' => null,
        'contactMobile' => null,
        'contactPhone' => null,
        'newShopCategory' => null,
        'shopCategory' => null,
        'shopId' => null,
        'shopInfoStatus' => null,
        'shopName' => null,
        'shopStatus' => null,
        'shopType' => null,
        'storeId' => null
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
        'businessAddress' => 'business_address',
        'businessTime' => 'business_time',
        'contactMobile' => 'contact_mobile',
        'contactPhone' => 'contact_phone',
        'newShopCategory' => 'new_shop_category',
        'shopCategory' => 'shop_category',
        'shopId' => 'shop_id',
        'shopInfoStatus' => 'shop_info_status',
        'shopName' => 'shop_name',
        'shopStatus' => 'shop_status',
        'shopType' => 'shop_type',
        'storeId' => 'store_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'businessAddress' => 'setBusinessAddress',
        'businessTime' => 'setBusinessTime',
        'contactMobile' => 'setContactMobile',
        'contactPhone' => 'setContactPhone',
        'newShopCategory' => 'setNewShopCategory',
        'shopCategory' => 'setShopCategory',
        'shopId' => 'setShopId',
        'shopInfoStatus' => 'setShopInfoStatus',
        'shopName' => 'setShopName',
        'shopStatus' => 'setShopStatus',
        'shopType' => 'setShopType',
        'storeId' => 'setStoreId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'businessAddress' => 'getBusinessAddress',
        'businessTime' => 'getBusinessTime',
        'contactMobile' => 'getContactMobile',
        'contactPhone' => 'getContactPhone',
        'newShopCategory' => 'getNewShopCategory',
        'shopCategory' => 'getShopCategory',
        'shopId' => 'getShopId',
        'shopInfoStatus' => 'getShopInfoStatus',
        'shopName' => 'getShopName',
        'shopStatus' => 'getShopStatus',
        'shopType' => 'getShopType',
        'storeId' => 'getStoreId'
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
        $this->container['businessAddress'] = $data['businessAddress'] ?? null;
        $this->container['businessTime'] = $data['businessTime'] ?? null;
        $this->container['contactMobile'] = $data['contactMobile'] ?? null;
        $this->container['contactPhone'] = $data['contactPhone'] ?? null;
        $this->container['newShopCategory'] = $data['newShopCategory'] ?? null;
        $this->container['shopCategory'] = $data['shopCategory'] ?? null;
        $this->container['shopId'] = $data['shopId'] ?? null;
        $this->container['shopInfoStatus'] = $data['shopInfoStatus'] ?? null;
        $this->container['shopName'] = $data['shopName'] ?? null;
        $this->container['shopStatus'] = $data['shopStatus'] ?? null;
        $this->container['shopType'] = $data['shopType'] ?? null;
        $this->container['storeId'] = $data['storeId'] ?? null;
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
     * Gets businessAddress
     *
     * @return \Alipay\OpenAPISDK\Model\AddressInfo|null
     */
    public function getBusinessAddress()
    {
        return $this->container['businessAddress'];
    }

    /**
     * Sets businessAddress
     *
     * @param \Alipay\OpenAPISDK\Model\AddressInfo|null $businessAddress businessAddress
     *
     * @return self
     */
    public function setBusinessAddress($businessAddress)
    {
        $this->container['businessAddress'] = $businessAddress;

        return $this;
    }

    /**
     * Gets businessTime
     *
     * @return \Alipay\OpenAPISDK\Model\ShopBusinessTime[]|null
     */
    public function getBusinessTime()
    {
        return $this->container['businessTime'];
    }

    /**
     * Sets businessTime
     *
     * @param \Alipay\OpenAPISDK\Model\ShopBusinessTime[]|null $businessTime 店铺经营时间
     *
     * @return self
     */
    public function setBusinessTime($businessTime)
    {
        $this->container['businessTime'] = $businessTime;

        return $this;
    }

    /**
     * Gets contactMobile
     *
     * @return string|null
     */
    public function getContactMobile()
    {
        return $this->container['contactMobile'];
    }

    /**
     * Sets contactMobile
     *
     * @param string|null $contactMobile 店铺联系手机
     *
     * @return self
     */
    public function setContactMobile($contactMobile)
    {
        $this->container['contactMobile'] = $contactMobile;

        return $this;
    }

    /**
     * Gets contactPhone
     *
     * @return string|null
     */
    public function getContactPhone()
    {
        return $this->container['contactPhone'];
    }

    /**
     * Sets contactPhone
     *
     * @param string|null $contactPhone 店铺的联系固话
     *
     * @return self
     */
    public function setContactPhone($contactPhone)
    {
        $this->container['contactPhone'] = $contactPhone;

        return $this;
    }

    /**
     * Gets newShopCategory
     *
     * @return string|null
     */
    public function getNewShopCategory()
    {
        return $this->container['newShopCategory'];
    }

    /**
     * Sets newShopCategory
     *
     * @param string|null $newShopCategory 新版门店类目标准二级类目code。类目标准及与原shop_category映射关系参见文档https://gw.alipayobjects.com/os/bmw-prod/4b3f82df-e53e-4b84-bc41-fe025101e726.xlsx
     *
     * @return self
     */
    public function setNewShopCategory($newShopCategory)
    {
        $this->container['newShopCategory'] = $newShopCategory;

        return $this;
    }

    /**
     * Gets shopCategory
     *
     * @return string|null
     */
    public function getShopCategory()
    {
        return $this->container['shopCategory'];
    }

    /**
     * Sets shopCategory
     *
     * @param string|null $shopCategory 店铺类目.取值参见文件<a href=\"https://mif-pub.alipayobjects.com/ShopCategory.xlsx\">文件</a>中的三级门店类目
     *
     * @return self
     */
    public function setShopCategory($shopCategory)
    {
        $this->container['shopCategory'] = $shopCategory;

        return $this;
    }

    /**
     * Gets shopId
     *
     * @return string|null
     */
    public function getShopId()
    {
        return $this->container['shopId'];
    }

    /**
     * Sets shopId
     *
     * @param string|null $shopId 蚂蚁店铺id
     *
     * @return self
     */
    public function setShopId($shopId)
    {
        $this->container['shopId'] = $shopId;

        return $this;
    }

    /**
     * Gets shopInfoStatus
     *
     * @return string|null
     */
    public function getShopInfoStatus()
    {
        return $this->container['shopInfoStatus'];
    }

    /**
     * Sets shopInfoStatus
     *
     * @param string|null $shopInfoStatus 当前名称、地址、经纬度信息准确一致，可用于数字化经营场景消费(如商品、券、消费圈等场域的分发)，不影响门店支付结算
     *
     * @return self
     */
    public function setShopInfoStatus($shopInfoStatus)
    {
        $this->container['shopInfoStatus'] = $shopInfoStatus;

        return $this;
    }

    /**
     * Gets shopName
     *
     * @return string|null
     */
    public function getShopName()
    {
        return $this->container['shopName'];
    }

    /**
     * Sets shopName
     *
     * @param string|null $shopName 店铺名称
     *
     * @return self
     */
    public function setShopName($shopName)
    {
        $this->container['shopName'] = $shopName;

        return $this;
    }

    /**
     * Gets shopStatus
     *
     * @return string|null
     */
    public function getShopStatus()
    {
        return $this->container['shopStatus'];
    }

    /**
     * Sets shopStatus
     *
     * @param string|null $shopStatus 门店状态
     *
     * @return self
     */
    public function setShopStatus($shopStatus)
    {
        $this->container['shopStatus'] = $shopStatus;

        return $this;
    }

    /**
     * Gets shopType
     *
     * @return string|null
     */
    public function getShopType()
    {
        return $this->container['shopType'];
    }

    /**
     * Sets shopType
     *
     * @param string|null $shopType 店铺经营类型
     *
     * @return self
     */
    public function setShopType($shopType)
    {
        $this->container['shopType'] = $shopType;

        return $this;
    }

    /**
     * Gets storeId
     *
     * @return string|null
     */
    public function getStoreId()
    {
        return $this->container['storeId'];
    }

    /**
     * Sets storeId
     *
     * @param string|null $storeId 门店编号，表示该门店在该商户角色id(直连pid，间连smid)下，由商户自己定义的外部门店编号
     *
     * @return self
     */
    public function setStoreId($storeId)
    {
        $this->container['storeId'] = $storeId;

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


