<?php
/**
 * AlipayOpenMiniInnerappPluginuseconfigUpgradeModel
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
 * The version of the OpenAPI document: 2023-10-26
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
 * AlipayOpenMiniInnerappPluginuseconfigUpgradeModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenMiniInnerappPluginuseconfigUpgradeModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenMiniInnerappPluginuseconfigUpgradeModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'appOrigin' => 'string',
        'bundleId' => 'string',
        'miniAppId' => 'string',
        'pluginDevVersion' => 'string',
        'pluginId' => 'string',
        'strategyValue' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'appOrigin' => null,
        'bundleId' => null,
        'miniAppId' => null,
        'pluginDevVersion' => null,
        'pluginId' => null,
        'strategyValue' => null
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
        'appOrigin' => 'app_origin',
        'bundleId' => 'bundle_id',
        'miniAppId' => 'mini_app_id',
        'pluginDevVersion' => 'plugin_dev_version',
        'pluginId' => 'plugin_id',
        'strategyValue' => 'strategy_value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'appOrigin' => 'setAppOrigin',
        'bundleId' => 'setBundleId',
        'miniAppId' => 'setMiniAppId',
        'pluginDevVersion' => 'setPluginDevVersion',
        'pluginId' => 'setPluginId',
        'strategyValue' => 'setStrategyValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'appOrigin' => 'getAppOrigin',
        'bundleId' => 'getBundleId',
        'miniAppId' => 'getMiniAppId',
        'pluginDevVersion' => 'getPluginDevVersion',
        'pluginId' => 'getPluginId',
        'strategyValue' => 'getStrategyValue'
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
        $this->container['appOrigin'] = $data['appOrigin'] ?? null;
        $this->container['bundleId'] = $data['bundleId'] ?? null;
        $this->container['miniAppId'] = $data['miniAppId'] ?? null;
        $this->container['pluginDevVersion'] = $data['pluginDevVersion'] ?? null;
        $this->container['pluginId'] = $data['pluginId'] ?? null;
        $this->container['strategyValue'] = $data['strategyValue'] ?? null;
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
     * Gets appOrigin
     *
     * @return string|null
     */
    public function getAppOrigin()
    {
        return $this->container['appOrigin'];
    }

    /**
     * Sets appOrigin
     *
     * @param string|null $appOrigin 来源
     *
     * @return self
     */
    public function setAppOrigin($appOrigin)
    {
        $this->container['appOrigin'] = $appOrigin;

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
     * @param string|null $bundleId 端id
     *
     * @return self
     */
    public function setBundleId($bundleId)
    {
        $this->container['bundleId'] = $bundleId;

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
     * @param string|null $miniAppId 小程序应用 ID
     *
     * @return self
     */
    public function setMiniAppId($miniAppId)
    {
        $this->container['miniAppId'] = $miniAppId;

        return $this;
    }

    /**
     * Gets pluginDevVersion
     *
     * @return string|null
     */
    public function getPluginDevVersion()
    {
        return $this->container['pluginDevVersion'];
    }

    /**
     * Sets pluginDevVersion
     *
     * @param string|null $pluginDevVersion 插件研发版本
     *
     * @return self
     */
    public function setPluginDevVersion($pluginDevVersion)
    {
        $this->container['pluginDevVersion'] = $pluginDevVersion;

        return $this;
    }

    /**
     * Gets pluginId
     *
     * @return string|null
     */
    public function getPluginId()
    {
        return $this->container['pluginId'];
    }

    /**
     * Sets pluginId
     *
     * @param string|null $pluginId 插件id
     *
     * @return self
     */
    public function setPluginId($pluginId)
    {
        $this->container['pluginId'] = $pluginId;

        return $this;
    }

    /**
     * Gets strategyValue
     *
     * @return string|null
     */
    public function getStrategyValue()
    {
        return $this->container['strategyValue'];
    }

    /**
     * Sets strategyValue
     *
     * @param string|null $strategyValue 灰度值
     *
     * @return self
     */
    public function setStrategyValue($strategyValue)
    {
        $this->container['strategyValue'] = $strategyValue;

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

