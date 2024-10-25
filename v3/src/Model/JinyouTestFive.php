<?php
/**
 * JinyouTestFive
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
 * JinyouTestFive Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class JinyouTestFive implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'JinyouTestFive';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'f1F' => '\Alipay\OpenAPISDK\Model\JinyouTestFour',
        'f2F' => '\Alipay\OpenAPISDK\Model\JinyouTestThree',
        'f3Openid' => 'string',
        'f3Y' => 'string',
        'f4N' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'f1F' => null,
        'f2F' => null,
        'f3Openid' => null,
        'f3Y' => null,
        'f4N' => null
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
        'f1F' => 'f_1_f',
        'f2F' => 'f_2_f',
        'f3Openid' => 'f_3_openid',
        'f3Y' => 'f_3_y',
        'f4N' => 'f_4_n'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'f1F' => 'setF1F',
        'f2F' => 'setF2F',
        'f3Openid' => 'setF3Openid',
        'f3Y' => 'setF3Y',
        'f4N' => 'setF4N'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'f1F' => 'getF1F',
        'f2F' => 'getF2F',
        'f3Openid' => 'getF3Openid',
        'f3Y' => 'getF3Y',
        'f4N' => 'getF4N'
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
        $this->container['f1F'] = $data['f1F'] ?? null;
        $this->container['f2F'] = $data['f2F'] ?? null;
        $this->container['f3Openid'] = $data['f3Openid'] ?? null;
        $this->container['f3Y'] = $data['f3Y'] ?? null;
        $this->container['f4N'] = $data['f4N'] ?? null;
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
     * Gets f1F
     *
     * @return \Alipay\OpenAPISDK\Model\JinyouTestFour|null
     */
    public function getF1F()
    {
        return $this->container['f1F'];
    }

    /**
     * Sets f1F
     *
     * @param \Alipay\OpenAPISDK\Model\JinyouTestFour|null $f1F f1F
     *
     * @return self
     */
    public function setF1F($f1F)
    {
        $this->container['f1F'] = $f1F;

        return $this;
    }

    /**
     * Gets f2F
     *
     * @return \Alipay\OpenAPISDK\Model\JinyouTestThree|null
     */
    public function getF2F()
    {
        return $this->container['f2F'];
    }

    /**
     * Sets f2F
     *
     * @param \Alipay\OpenAPISDK\Model\JinyouTestThree|null $f2F f2F
     *
     * @return self
     */
    public function setF2F($f2F)
    {
        $this->container['f2F'] = $f2F;

        return $this;
    }

    /**
     * Gets f3Openid
     *
     * @return string|null
     */
    public function getF3Openid()
    {
        return $this->container['f3Openid'];
    }

    /**
     * Sets f3Openid
     *
     * @param string|null $f3Openid 1
     *
     * @return self
     */
    public function setF3Openid($f3Openid)
    {
        $this->container['f3Openid'] = $f3Openid;

        return $this;
    }

    /**
     * Gets f3Y
     *
     * @return string|null
     */
    public function getF3Y()
    {
        return $this->container['f3Y'];
    }

    /**
     * Sets f3Y
     *
     * @param string|null $f3Y 1
     *
     * @return self
     */
    public function setF3Y($f3Y)
    {
        $this->container['f3Y'] = $f3Y;

        return $this;
    }

    /**
     * Gets f4N
     *
     * @return string|null
     */
    public function getF4N()
    {
        return $this->container['f4N'];
    }

    /**
     * Sets f4N
     *
     * @param string|null $f4N 3
     *
     * @return self
     */
    public function setF4N($f4N)
    {
        $this->container['f4N'] = $f4N;

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


