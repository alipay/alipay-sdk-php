<?php
/**
 * ZMGORightConfig
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
 * ZMGORightConfig Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ZMGORightConfig implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ZMGORightConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cumulativePreferentialRedirectSchema' => 'string',
        'customBenefitDesc' => 'string',
        'customSubBenefitDesc' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cumulativePreferentialRedirectSchema' => null,
        'customBenefitDesc' => null,
        'customSubBenefitDesc' => null
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
        'cumulativePreferentialRedirectSchema' => 'cumulative_preferential_redirect_schema',
        'customBenefitDesc' => 'custom_benefit_desc',
        'customSubBenefitDesc' => 'custom_sub_benefit_desc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cumulativePreferentialRedirectSchema' => 'setCumulativePreferentialRedirectSchema',
        'customBenefitDesc' => 'setCustomBenefitDesc',
        'customSubBenefitDesc' => 'setCustomSubBenefitDesc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cumulativePreferentialRedirectSchema' => 'getCumulativePreferentialRedirectSchema',
        'customBenefitDesc' => 'getCustomBenefitDesc',
        'customSubBenefitDesc' => 'getCustomSubBenefitDesc'
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
        $this->container['cumulativePreferentialRedirectSchema'] = $data['cumulativePreferentialRedirectSchema'] ?? null;
        $this->container['customBenefitDesc'] = $data['customBenefitDesc'] ?? null;
        $this->container['customSubBenefitDesc'] = $data['customSubBenefitDesc'] ?? null;
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
     * Gets cumulativePreferentialRedirectSchema
     *
     * @return string|null
     */
    public function getCumulativePreferentialRedirectSchema()
    {
        return $this->container['cumulativePreferentialRedirectSchema'];
    }

    /**
     * Sets cumulativePreferentialRedirectSchema
     *
     * @param string|null $cumulativePreferentialRedirectSchema 芝麻GO管理页已享优惠进度的重定向链接
     *
     * @return self
     */
    public function setCumulativePreferentialRedirectSchema($cumulativePreferentialRedirectSchema)
    {
        $this->container['cumulativePreferentialRedirectSchema'] = $cumulativePreferentialRedirectSchema;

        return $this;
    }

    /**
     * Gets customBenefitDesc
     *
     * @return string|null
     */
    public function getCustomBenefitDesc()
    {
        return $this->container['customBenefitDesc'];
    }

    /**
     * Sets customBenefitDesc
     *
     * @param string|null $customBenefitDesc 权益描述
     *
     * @return self
     */
    public function setCustomBenefitDesc($customBenefitDesc)
    {
        $this->container['customBenefitDesc'] = $customBenefitDesc;

        return $this;
    }

    /**
     * Gets customSubBenefitDesc
     *
     * @return string|null
     */
    public function getCustomSubBenefitDesc()
    {
        return $this->container['customSubBenefitDesc'];
    }

    /**
     * Sets customSubBenefitDesc
     *
     * @param string|null $customSubBenefitDesc 权益描述子标题
     *
     * @return self
     */
    public function setCustomSubBenefitDesc($customSubBenefitDesc)
    {
        $this->container['customSubBenefitDesc'] = $customSubBenefitDesc;

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

