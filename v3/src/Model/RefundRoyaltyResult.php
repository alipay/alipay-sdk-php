<?php
/**
 * RefundRoyaltyResult
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
 * RefundRoyaltyResult Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RefundRoyaltyResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RefundRoyaltyResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'oriTransIn' => 'string',
        'oriTransOut' => 'string',
        'refundAmount' => 'string',
        'resultCode' => 'string',
        'royaltyType' => 'string',
        'transIn' => 'string',
        'transInEmail' => 'string',
        'transOut' => 'string',
        'transOutEmail' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'oriTransIn' => null,
        'oriTransOut' => null,
        'refundAmount' => null,
        'resultCode' => null,
        'royaltyType' => null,
        'transIn' => null,
        'transInEmail' => null,
        'transOut' => null,
        'transOutEmail' => null
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
        'oriTransIn' => 'ori_trans_in',
        'oriTransOut' => 'ori_trans_out',
        'refundAmount' => 'refund_amount',
        'resultCode' => 'result_code',
        'royaltyType' => 'royalty_type',
        'transIn' => 'trans_in',
        'transInEmail' => 'trans_in_email',
        'transOut' => 'trans_out',
        'transOutEmail' => 'trans_out_email'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'oriTransIn' => 'setOriTransIn',
        'oriTransOut' => 'setOriTransOut',
        'refundAmount' => 'setRefundAmount',
        'resultCode' => 'setResultCode',
        'royaltyType' => 'setRoyaltyType',
        'transIn' => 'setTransIn',
        'transInEmail' => 'setTransInEmail',
        'transOut' => 'setTransOut',
        'transOutEmail' => 'setTransOutEmail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'oriTransIn' => 'getOriTransIn',
        'oriTransOut' => 'getOriTransOut',
        'refundAmount' => 'getRefundAmount',
        'resultCode' => 'getResultCode',
        'royaltyType' => 'getRoyaltyType',
        'transIn' => 'getTransIn',
        'transInEmail' => 'getTransInEmail',
        'transOut' => 'getTransOut',
        'transOutEmail' => 'getTransOutEmail'
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
        $this->container['oriTransIn'] = $data['oriTransIn'] ?? null;
        $this->container['oriTransOut'] = $data['oriTransOut'] ?? null;
        $this->container['refundAmount'] = $data['refundAmount'] ?? null;
        $this->container['resultCode'] = $data['resultCode'] ?? null;
        $this->container['royaltyType'] = $data['royaltyType'] ?? null;
        $this->container['transIn'] = $data['transIn'] ?? null;
        $this->container['transInEmail'] = $data['transInEmail'] ?? null;
        $this->container['transOut'] = $data['transOut'] ?? null;
        $this->container['transOutEmail'] = $data['transOutEmail'] ?? null;
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
     * Gets oriTransIn
     *
     * @return string|null
     */
    public function getOriTransIn()
    {
        return $this->container['oriTransIn'];
    }

    /**
     * Sets oriTransIn
     *
     * @param string|null $oriTransIn 商户请求的转入账号
     *
     * @return self
     */
    public function setOriTransIn($oriTransIn)
    {
        $this->container['oriTransIn'] = $oriTransIn;

        return $this;
    }

    /**
     * Gets oriTransOut
     *
     * @return string|null
     */
    public function getOriTransOut()
    {
        return $this->container['oriTransOut'];
    }

    /**
     * Sets oriTransOut
     *
     * @param string|null $oriTransOut 商户请求的转出账号
     *
     * @return self
     */
    public function setOriTransOut($oriTransOut)
    {
        $this->container['oriTransOut'] = $oriTransOut;

        return $this;
    }

    /**
     * Gets refundAmount
     *
     * @return string|null
     */
    public function getRefundAmount()
    {
        return $this->container['refundAmount'];
    }

    /**
     * Sets refundAmount
     *
     * @param string|null $refundAmount 退分账金额。单位：元。
     *
     * @return self
     */
    public function setRefundAmount($refundAmount)
    {
        $this->container['refundAmount'] = $refundAmount;

        return $this;
    }

    /**
     * Gets resultCode
     *
     * @return string|null
     */
    public function getResultCode()
    {
        return $this->container['resultCode'];
    }

    /**
     * Sets resultCode
     *
     * @param string|null $resultCode 退分账结果码
     *
     * @return self
     */
    public function setResultCode($resultCode)
    {
        $this->container['resultCode'] = $resultCode;

        return $this;
    }

    /**
     * Gets royaltyType
     *
     * @return string|null
     */
    public function getRoyaltyType()
    {
        return $this->container['royaltyType'];
    }

    /**
     * Sets royaltyType
     *
     * @param string|null $royaltyType 分账类型. 字段为空默认为普通分账类型transfer
     *
     * @return self
     */
    public function setRoyaltyType($royaltyType)
    {
        $this->container['royaltyType'] = $royaltyType;

        return $this;
    }

    /**
     * Gets transIn
     *
     * @return string|null
     */
    public function getTransIn()
    {
        return $this->container['transIn'];
    }

    /**
     * Sets transIn
     *
     * @param string|null $transIn 转入人支付宝账号对应用户ID
     *
     * @return self
     */
    public function setTransIn($transIn)
    {
        $this->container['transIn'] = $transIn;

        return $this;
    }

    /**
     * Gets transInEmail
     *
     * @return string|null
     */
    public function getTransInEmail()
    {
        return $this->container['transInEmail'];
    }

    /**
     * Sets transInEmail
     *
     * @param string|null $transInEmail 转入人支付宝账号
     *
     * @return self
     */
    public function setTransInEmail($transInEmail)
    {
        $this->container['transInEmail'] = $transInEmail;

        return $this;
    }

    /**
     * Gets transOut
     *
     * @return string|null
     */
    public function getTransOut()
    {
        return $this->container['transOut'];
    }

    /**
     * Sets transOut
     *
     * @param string|null $transOut 转出人支付宝账号对应用户ID
     *
     * @return self
     */
    public function setTransOut($transOut)
    {
        $this->container['transOut'] = $transOut;

        return $this;
    }

    /**
     * Gets transOutEmail
     *
     * @return string|null
     */
    public function getTransOutEmail()
    {
        return $this->container['transOutEmail'];
    }

    /**
     * Sets transOutEmail
     *
     * @param string|null $transOutEmail 转出人支付宝账号
     *
     * @return self
     */
    public function setTransOutEmail($transOutEmail)
    {
        $this->container['transOutEmail'] = $transOutEmail;

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


