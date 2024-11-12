<?php
/**
 * MiniAppDeployResponse
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
 * MiniAppDeployResponse Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MiniAppDeployResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MiniAppDeployResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'androidClientMax' => 'string',
        'androidClientMin' => 'string',
        'appVersion' => 'string',
        'bundleId' => 'string',
        'deployVersion' => 'string',
        'gmtCreate' => 'string',
        'gmtModified' => 'string',
        'iosClientMax' => 'string',
        'iosClientMin' => 'string',
        'miniAppId' => 'string',
        'packageSize' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'androidClientMax' => null,
        'androidClientMin' => null,
        'appVersion' => null,
        'bundleId' => null,
        'deployVersion' => null,
        'gmtCreate' => null,
        'gmtModified' => null,
        'iosClientMax' => null,
        'iosClientMin' => null,
        'miniAppId' => null,
        'packageSize' => null,
        'status' => null
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
        'androidClientMax' => 'android_client_max',
        'androidClientMin' => 'android_client_min',
        'appVersion' => 'app_version',
        'bundleId' => 'bundle_id',
        'deployVersion' => 'deploy_version',
        'gmtCreate' => 'gmt_create',
        'gmtModified' => 'gmt_modified',
        'iosClientMax' => 'ios_client_max',
        'iosClientMin' => 'ios_client_min',
        'miniAppId' => 'mini_app_id',
        'packageSize' => 'package_size',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'androidClientMax' => 'setAndroidClientMax',
        'androidClientMin' => 'setAndroidClientMin',
        'appVersion' => 'setAppVersion',
        'bundleId' => 'setBundleId',
        'deployVersion' => 'setDeployVersion',
        'gmtCreate' => 'setGmtCreate',
        'gmtModified' => 'setGmtModified',
        'iosClientMax' => 'setIosClientMax',
        'iosClientMin' => 'setIosClientMin',
        'miniAppId' => 'setMiniAppId',
        'packageSize' => 'setPackageSize',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'androidClientMax' => 'getAndroidClientMax',
        'androidClientMin' => 'getAndroidClientMin',
        'appVersion' => 'getAppVersion',
        'bundleId' => 'getBundleId',
        'deployVersion' => 'getDeployVersion',
        'gmtCreate' => 'getGmtCreate',
        'gmtModified' => 'getGmtModified',
        'iosClientMax' => 'getIosClientMax',
        'iosClientMin' => 'getIosClientMin',
        'miniAppId' => 'getMiniAppId',
        'packageSize' => 'getPackageSize',
        'status' => 'getStatus'
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
        $this->container['androidClientMax'] = $data['androidClientMax'] ?? null;
        $this->container['androidClientMin'] = $data['androidClientMin'] ?? null;
        $this->container['appVersion'] = $data['appVersion'] ?? null;
        $this->container['bundleId'] = $data['bundleId'] ?? null;
        $this->container['deployVersion'] = $data['deployVersion'] ?? null;
        $this->container['gmtCreate'] = $data['gmtCreate'] ?? null;
        $this->container['gmtModified'] = $data['gmtModified'] ?? null;
        $this->container['iosClientMax'] = $data['iosClientMax'] ?? null;
        $this->container['iosClientMin'] = $data['iosClientMin'] ?? null;
        $this->container['miniAppId'] = $data['miniAppId'] ?? null;
        $this->container['packageSize'] = $data['packageSize'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
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
     * Gets androidClientMax
     *
     * @return string|null
     */
    public function getAndroidClientMax()
    {
        return $this->container['androidClientMax'];
    }

    /**
     * Sets androidClientMax
     *
     * @param string|null $androidClientMax 安卓最大版本号
     *
     * @return self
     */
    public function setAndroidClientMax($androidClientMax)
    {
        $this->container['androidClientMax'] = $androidClientMax;

        return $this;
    }

    /**
     * Gets androidClientMin
     *
     * @return string|null
     */
    public function getAndroidClientMin()
    {
        return $this->container['androidClientMin'];
    }

    /**
     * Sets androidClientMin
     *
     * @param string|null $androidClientMin 安卓最低版本号
     *
     * @return self
     */
    public function setAndroidClientMin($androidClientMin)
    {
        $this->container['androidClientMin'] = $androidClientMin;

        return $this;
    }

    /**
     * Gets appVersion
     *
     * @return string|null
     */
    public function getAppVersion()
    {
        return $this->container['appVersion'];
    }

    /**
     * Sets appVersion
     *
     * @param string|null $appVersion 小程序版本号
     *
     * @return self
     */
    public function setAppVersion($appVersion)
    {
        $this->container['appVersion'] = $appVersion;

        return $this;
    }

    /**
     * Gets bundleId
     *
     * @return string|null
     */
    public function getBundleId()
    {
        return $this->container['bundleId'];
    }

    /**
     * Sets bundleId
     *
     * @param string|null $bundleId 端标识
     *
     * @return self
     */
    public function setBundleId($bundleId)
    {
        $this->container['bundleId'] = $bundleId;

        return $this;
    }

    /**
     * Gets deployVersion
     *
     * @return string|null
     */
    public function getDeployVersion()
    {
        return $this->container['deployVersion'];
    }

    /**
     * Sets deployVersion
     *
     * @param string|null $deployVersion 发布版本
     *
     * @return self
     */
    public function setDeployVersion($deployVersion)
    {
        $this->container['deployVersion'] = $deployVersion;

        return $this;
    }

    /**
     * Gets gmtCreate
     *
     * @return string|null
     */
    public function getGmtCreate()
    {
        return $this->container['gmtCreate'];
    }

    /**
     * Sets gmtCreate
     *
     * @param string|null $gmtCreate 创建时间
     *
     * @return self
     */
    public function setGmtCreate($gmtCreate)
    {
        $this->container['gmtCreate'] = $gmtCreate;

        return $this;
    }

    /**
     * Gets gmtModified
     *
     * @return string|null
     */
    public function getGmtModified()
    {
        return $this->container['gmtModified'];
    }

    /**
     * Sets gmtModified
     *
     * @param string|null $gmtModified 修改时间
     *
     * @return self
     */
    public function setGmtModified($gmtModified)
    {
        $this->container['gmtModified'] = $gmtModified;

        return $this;
    }

    /**
     * Gets iosClientMax
     *
     * @return string|null
     */
    public function getIosClientMax()
    {
        return $this->container['iosClientMax'];
    }

    /**
     * Sets iosClientMax
     *
     * @param string|null $iosClientMax iOS最大版本号
     *
     * @return self
     */
    public function setIosClientMax($iosClientMax)
    {
        $this->container['iosClientMax'] = $iosClientMax;

        return $this;
    }

    /**
     * Gets iosClientMin
     *
     * @return string|null
     */
    public function getIosClientMin()
    {
        return $this->container['iosClientMin'];
    }

    /**
     * Sets iosClientMin
     *
     * @param string|null $iosClientMin iOS最小版本号
     *
     * @return self
     */
    public function setIosClientMin($iosClientMin)
    {
        $this->container['iosClientMin'] = $iosClientMin;

        return $this;
    }

    /**
     * Gets miniAppId
     *
     * @return string|null
     */
    public function getMiniAppId()
    {
        return $this->container['miniAppId'];
    }

    /**
     * Sets miniAppId
     *
     * @param string|null $miniAppId 小程序ID
     *
     * @return self
     */
    public function setMiniAppId($miniAppId)
    {
        $this->container['miniAppId'] = $miniAppId;

        return $this;
    }

    /**
     * Gets packageSize
     *
     * @return string|null
     */
    public function getPackageSize()
    {
        return $this->container['packageSize'];
    }

    /**
     * Sets packageSize
     *
     * @param string|null $packageSize 包大小
     *
     * @return self
     */
    public function setPackageSize($packageSize)
    {
        $this->container['packageSize'] = $packageSize;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status 发布状态     INVALID(\"INVALID\", \"非法\"),     INIT(\"INIT\", \"初始化状态\"),     PRE_ONLINE(\"PRE_ONLINE\", \"预发\");     GRAY(\"GRAY\", \"灰度\"),     ONLINE(\"ONLINE\", \"上架\"),     ABANDON(\"ABANDON\", \"废弃\"),
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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


