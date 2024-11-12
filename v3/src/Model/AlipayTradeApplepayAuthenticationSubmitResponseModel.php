<?php
/**
 * AlipayTradeApplepayAuthenticationSubmitResponseModel
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
 * AlipayTradeApplepayAuthenticationSubmitResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayTradeApplepayAuthenticationSubmitResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayTradeApplepayAuthenticationSubmitResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'authenticationError' => 'string',
        'fallbackAuthenticationMechanisms' => 'string[]',
        'responseHeader' => '\Alipay\OpenAPISDK\Model\OpenApiResponseHeader',
        'retryAuthenticationMechanisms' => 'string[]',
        'signingCertificate' => 'string',
        'updatedAuthenticationDetails' => '\Alipay\OpenAPISDK\Model\UpdatedAuthenticationDetails',
        'updatedTransactionStatus' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'authenticationError' => null,
        'fallbackAuthenticationMechanisms' => null,
        'responseHeader' => null,
        'retryAuthenticationMechanisms' => null,
        'signingCertificate' => null,
        'updatedAuthenticationDetails' => null,
        'updatedTransactionStatus' => null
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
        'authenticationError' => 'authentication_error',
        'fallbackAuthenticationMechanisms' => 'fallback_authentication_mechanisms',
        'responseHeader' => 'response_header',
        'retryAuthenticationMechanisms' => 'retry_authentication_mechanisms',
        'signingCertificate' => 'signing_certificate',
        'updatedAuthenticationDetails' => 'updated_authentication_details',
        'updatedTransactionStatus' => 'updated_transaction_status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authenticationError' => 'setAuthenticationError',
        'fallbackAuthenticationMechanisms' => 'setFallbackAuthenticationMechanisms',
        'responseHeader' => 'setResponseHeader',
        'retryAuthenticationMechanisms' => 'setRetryAuthenticationMechanisms',
        'signingCertificate' => 'setSigningCertificate',
        'updatedAuthenticationDetails' => 'setUpdatedAuthenticationDetails',
        'updatedTransactionStatus' => 'setUpdatedTransactionStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authenticationError' => 'getAuthenticationError',
        'fallbackAuthenticationMechanisms' => 'getFallbackAuthenticationMechanisms',
        'responseHeader' => 'getResponseHeader',
        'retryAuthenticationMechanisms' => 'getRetryAuthenticationMechanisms',
        'signingCertificate' => 'getSigningCertificate',
        'updatedAuthenticationDetails' => 'getUpdatedAuthenticationDetails',
        'updatedTransactionStatus' => 'getUpdatedTransactionStatus'
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
        $this->container['authenticationError'] = $data['authenticationError'] ?? null;
        $this->container['fallbackAuthenticationMechanisms'] = $data['fallbackAuthenticationMechanisms'] ?? null;
        $this->container['responseHeader'] = $data['responseHeader'] ?? null;
        $this->container['retryAuthenticationMechanisms'] = $data['retryAuthenticationMechanisms'] ?? null;
        $this->container['signingCertificate'] = $data['signingCertificate'] ?? null;
        $this->container['updatedAuthenticationDetails'] = $data['updatedAuthenticationDetails'] ?? null;
        $this->container['updatedTransactionStatus'] = $data['updatedTransactionStatus'] ?? null;
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
     * Gets authenticationError
     *
     * @return string|null
     */
    public function getAuthenticationError()
    {
        return $this->container['authenticationError'];
    }

    /**
     * Sets authenticationError
     *
     * @param string|null $authenticationError 核身错误信息
     *
     * @return self
     */
    public function setAuthenticationError($authenticationError)
    {
        $this->container['authenticationError'] = $authenticationError;

        return $this;
    }

    /**
     * Gets fallbackAuthenticationMechanisms
     *
     * @return string[]|null
     */
    public function getFallbackAuthenticationMechanisms()
    {
        return $this->container['fallbackAuthenticationMechanisms'];
    }

    /**
     * Sets fallbackAuthenticationMechanisms
     *
     * @param string[]|null $fallbackAuthenticationMechanisms 失败时的鉴权重试机制
     *
     * @return self
     */
    public function setFallbackAuthenticationMechanisms($fallbackAuthenticationMechanisms)
    {
        $this->container['fallbackAuthenticationMechanisms'] = $fallbackAuthenticationMechanisms;

        return $this;
    }

    /**
     * Gets responseHeader
     *
     * @return \Alipay\OpenAPISDK\Model\OpenApiResponseHeader|null
     */
    public function getResponseHeader()
    {
        return $this->container['responseHeader'];
    }

    /**
     * Sets responseHeader
     *
     * @param \Alipay\OpenAPISDK\Model\OpenApiResponseHeader|null $responseHeader responseHeader
     *
     * @return self
     */
    public function setResponseHeader($responseHeader)
    {
        $this->container['responseHeader'] = $responseHeader;

        return $this;
    }

    /**
     * Gets retryAuthenticationMechanisms
     *
     * @return string[]|null
     */
    public function getRetryAuthenticationMechanisms()
    {
        return $this->container['retryAuthenticationMechanisms'];
    }

    /**
     * Sets retryAuthenticationMechanisms
     *
     * @param string[]|null $retryAuthenticationMechanisms 鉴权重试机制
     *
     * @return self
     */
    public function setRetryAuthenticationMechanisms($retryAuthenticationMechanisms)
    {
        $this->container['retryAuthenticationMechanisms'] = $retryAuthenticationMechanisms;

        return $this;
    }

    /**
     * Gets signingCertificate
     *
     * @return string|null
     */
    public function getSigningCertificate()
    {
        return $this->container['signingCertificate'];
    }

    /**
     * Sets signingCertificate
     *
     * @param string|null $signingCertificate base64之后的证书
     *
     * @return self
     */
    public function setSigningCertificate($signingCertificate)
    {
        $this->container['signingCertificate'] = $signingCertificate;

        return $this;
    }

    /**
     * Gets updatedAuthenticationDetails
     *
     * @return \Alipay\OpenAPISDK\Model\UpdatedAuthenticationDetails|null
     */
    public function getUpdatedAuthenticationDetails()
    {
        return $this->container['updatedAuthenticationDetails'];
    }

    /**
     * Sets updatedAuthenticationDetails
     *
     * @param \Alipay\OpenAPISDK\Model\UpdatedAuthenticationDetails|null $updatedAuthenticationDetails updatedAuthenticationDetails
     *
     * @return self
     */
    public function setUpdatedAuthenticationDetails($updatedAuthenticationDetails)
    {
        $this->container['updatedAuthenticationDetails'] = $updatedAuthenticationDetails;

        return $this;
    }

    /**
     * Gets updatedTransactionStatus
     *
     * @return string|null
     */
    public function getUpdatedTransactionStatus()
    {
        return $this->container['updatedTransactionStatus'];
    }

    /**
     * Sets updatedTransactionStatus
     *
     * @param string|null $updatedTransactionStatus 交易状态
     *
     * @return self
     */
    public function setUpdatedTransactionStatus($updatedTransactionStatus)
    {
        $this->container['updatedTransactionStatus'] = $updatedTransactionStatus;

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


