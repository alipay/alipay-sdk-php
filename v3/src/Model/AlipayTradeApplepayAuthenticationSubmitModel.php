<?php
/**
 * AlipayTradeApplepayAuthenticationSubmitModel
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
 * AlipayTradeApplepayAuthenticationSubmitModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayTradeApplepayAuthenticationSubmitModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayTradeApplepayAuthenticationSubmitModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'authenticationResults' => '\Alipay\OpenAPISDK\Model\AuthenticationResult[]',
        'deviceIdentifier' => 'string',
        'dpanIdentifier' => 'string',
        'transactionIdentifier' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'authenticationResults' => null,
        'deviceIdentifier' => null,
        'dpanIdentifier' => null,
        'transactionIdentifier' => null
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
        'authenticationResults' => 'authentication_results',
        'deviceIdentifier' => 'device_identifier',
        'dpanIdentifier' => 'dpan_identifier',
        'transactionIdentifier' => 'transaction_identifier'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authenticationResults' => 'setAuthenticationResults',
        'deviceIdentifier' => 'setDeviceIdentifier',
        'dpanIdentifier' => 'setDpanIdentifier',
        'transactionIdentifier' => 'setTransactionIdentifier'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authenticationResults' => 'getAuthenticationResults',
        'deviceIdentifier' => 'getDeviceIdentifier',
        'dpanIdentifier' => 'getDpanIdentifier',
        'transactionIdentifier' => 'getTransactionIdentifier'
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
        $this->container['authenticationResults'] = $data['authenticationResults'] ?? null;
        $this->container['deviceIdentifier'] = $data['deviceIdentifier'] ?? null;
        $this->container['dpanIdentifier'] = $data['dpanIdentifier'] ?? null;
        $this->container['transactionIdentifier'] = $data['transactionIdentifier'] ?? null;
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
     * Gets authenticationResults
     *
     * @return \Alipay\OpenAPISDK\Model\AuthenticationResult[]|null
     */
    public function getAuthenticationResults()
    {
        return $this->container['authenticationResults'];
    }

    /**
     * Sets authenticationResults
     *
     * @param \Alipay\OpenAPISDK\Model\AuthenticationResult[]|null $authenticationResults ApplePay核身鉴权结果，包括：支付密码、用户确认、数字签名
     *
     * @return self
     */
    public function setAuthenticationResults($authenticationResults)
    {
        $this->container['authenticationResults'] = $authenticationResults;

        return $this;
    }

    /**
     * Gets deviceIdentifier
     *
     * @return string|null
     */
    public function getDeviceIdentifier()
    {
        return $this->container['deviceIdentifier'];
    }

    /**
     * Sets deviceIdentifier
     *
     * @param string|null $deviceIdentifier Apple端的设备ID
     *
     * @return self
     */
    public function setDeviceIdentifier($deviceIdentifier)
    {
        $this->container['deviceIdentifier'] = $deviceIdentifier;

        return $this;
    }

    /**
     * Gets dpanIdentifier
     *
     * @return string|null
     */
    public function getDpanIdentifier()
    {
        return $this->container['dpanIdentifier'];
    }

    /**
     * Sets dpanIdentifier
     *
     * @param string|null $dpanIdentifier Apple绑定的BundleId
     *
     * @return self
     */
    public function setDpanIdentifier($dpanIdentifier)
    {
        $this->container['dpanIdentifier'] = $dpanIdentifier;

        return $this;
    }

    /**
     * Gets transactionIdentifier
     *
     * @return string|null
     */
    public function getTransactionIdentifier()
    {
        return $this->container['transactionIdentifier'];
    }

    /**
     * Sets transactionIdentifier
     *
     * @param string|null $transactionIdentifier 交易标识
     *
     * @return self
     */
    public function setTransactionIdentifier($transactionIdentifier)
    {
        $this->container['transactionIdentifier'] = $transactionIdentifier;

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


