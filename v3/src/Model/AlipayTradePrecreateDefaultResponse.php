<?php
/**
 * AlipayTradePrecreateDefaultResponse
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
 * AlipayTradePrecreateDefaultResponse Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayTradePrecreateDefaultResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'alipay_trade_precreate_default_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'code' => 'string',
        'links' => 'string',
        'message' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'code' => null,
        'links' => null,
        'message' => null
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
        'code' => 'code',
        'links' => 'links',
        'message' => 'message'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'links' => 'setLinks',
        'message' => 'setMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'links' => 'getLinks',
        'message' => 'getMessage'
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

    public const CODE_SYSTEM_ERROR = 'ACQ.SYSTEM_ERROR';
    public const CODE_INVALID_PARAMETER = 'ACQ.INVALID_PARAMETER';
    public const CODE_ACCESS_FORBIDDEN = 'ACQ.ACCESS_FORBIDDEN';
    public const CODE_EXIST_FORBIDDEN_WORD = 'ACQ.EXIST_FORBIDDEN_WORD';
    public const CODE_PARTNER_ERROR = 'ACQ.PARTNER_ERROR';
    public const CODE_TOTAL_FEE_EXCEED = 'ACQ.TOTAL_FEE_EXCEED';
    public const CODE_CONTEXT_INCONSISTENT = 'ACQ.CONTEXT_INCONSISTENT';
    public const CODE_TRADE_HAS_SUCCESS = 'ACQ.TRADE_HAS_SUCCESS';
    public const CODE_TRADE_HAS_CLOSE = 'ACQ.TRADE_HAS_CLOSE';
    public const CODE_BUYER_SELLER_EQUAL = 'ACQ.BUYER_SELLER_EQUAL';
    public const CODE_TRADE_BUYER_NOT_MATCH = 'ACQ.TRADE_BUYER_NOT_MATCH';
    public const CODE_BUYER_ENABLE_STATUS_FORBID = 'ACQ.BUYER_ENABLE_STATUS_FORBID';
    public const CODE_BUYER_PAYMENT_AMOUNT_DAY_LIMIT_ERROR = 'ACQ.BUYER_PAYMENT_AMOUNT_DAY_LIMIT_ERROR';
    public const CODE_BEYOND_PAY_RESTRICTION = 'ACQ.BEYOND_PAY_RESTRICTION';
    public const CODE_BEYOND_PER_RECEIPT_RESTRICTION = 'ACQ.BEYOND_PER_RECEIPT_RESTRICTION';
    public const CODE_BUYER_PAYMENT_AMOUNT_MONTH_LIMIT_ERROR = 'ACQ.BUYER_PAYMENT_AMOUNT_MONTH_LIMIT_ERROR';
    public const CODE_SELLER_BEEN_BLOCKED = 'ACQ.SELLER_BEEN_BLOCKED';
    public const CODE_ERROR_BUYER_CERTIFY_LEVEL_LIMIT = 'ACQ.ERROR_BUYER_CERTIFY_LEVEL_LIMIT';
    public const CODE_INVALID_STORE_ID = 'ACQ.INVALID_STORE_ID';
    public const CODE_APPLY_PC_MERCHANT_CODE_ERROR = 'ACQ.APPLY_PC_MERCHANT_CODE_ERROR';
    public const CODE_SECONDARY_MERCHANT_STATUS_ERROR = 'ACQ.SECONDARY_MERCHANT_STATUS_ERROR';
    public const CODE_BEYOND_PER_RECEIPT_DAY_RESTRICTION = 'ACQ.BEYOND_PER_RECEIPT_DAY_RESTRICTION';
    public const CODE_BEYOND_PER_RECEIPT_SINGLE_RESTRICTION = 'ACQ.BEYOND_PER_RECEIPT_SINGLE_RESTRICTION';
    public const CODE_TRADE_SETTLE_ERROR = 'ACQ.TRADE_SETTLE_ERROR';
    public const CODE_SECONDARY_MERCHANT_ID_INVALID = 'ACQ.SECONDARY_MERCHANT_ID_INVALID';
    public const CODE_SECONDARY_MERCHANT_ISV_PUNISH_INDIRECT = 'ACQ.SECONDARY_MERCHANT_ISV_PUNISH_INDIRECT';
    public const CODE_SELLER_NOT_EXIST = 'ACQ.SELLER_NOT_EXIST';
    public const CODE_SECONDARY_MERCHANT_ALIPAY_ACCOUNT_INVALID = 'ACQ.SECONDARY_MERCHANT_ALIPAY_ACCOUNT_INVALID';
    public const CODE_INVALID_RECEIVE_ACCOUNT = 'ACQ.INVALID_RECEIVE_ACCOUNT';
    public const CODE_SECONDARY_MERCHANT_ID_BLANK = 'ACQ.SECONDARY_MERCHANT_ID_BLANK';
    public const CODE_NOW_TIME_AFTER_EXPIRE_TIME_ERROR = 'ACQ.NOW_TIME_AFTER_EXPIRE_TIME_ERROR';
    public const CODE_SECONDARY_MERCHANT_NOT_MATCH = 'ACQ.SECONDARY_MERCHANT_NOT_MATCH';
    public const CODE_BUYER_NOT_EXIST = 'ACQ.BUYER_NOT_EXIST';
    public const CODE_SUB_GOODS_SIZE_MAX_COUNT = 'ACQ.SUB_GOODS_SIZE_MAX_COUNT';
    public const CODE_DEFAULT_SETTLE_RULE_NOT_EXIST = 'ACQ.DEFAULT_SETTLE_RULE_NOT_EXIST';
    public const CODE_MERCHANT_PERM_RECEIPT_SUSPEND_LIMIT = 'ACQ.MERCHANT_PERM_RECEIPT_SUSPEND_LIMIT';
    public const CODE_MERCHANT_PERM_RECEIPT_SINGLE_LIMIT = 'ACQ.MERCHANT_PERM_RECEIPT_SINGLE_LIMIT';
    public const CODE_MERCHANT_PERM_RECEIPT_DAY_LIMIT = 'ACQ.MERCHANT_PERM_RECEIPT_DAY_LIMIT';
    public const CODE_RISK_MERCHANT_IP_NOT_EXIST = 'ACQ.RISK_MERCHANT_IP_NOT_EXIST';
    public const CODE_MERCHANT_STATUS_NOT_NORMAL = 'ACQ.MERCHANT_STATUS_NOT_NORMAL';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCodeAllowableValues()
    {
        return [
            self::CODE_SYSTEM_ERROR,
            self::CODE_INVALID_PARAMETER,
            self::CODE_ACCESS_FORBIDDEN,
            self::CODE_EXIST_FORBIDDEN_WORD,
            self::CODE_PARTNER_ERROR,
            self::CODE_TOTAL_FEE_EXCEED,
            self::CODE_CONTEXT_INCONSISTENT,
            self::CODE_TRADE_HAS_SUCCESS,
            self::CODE_TRADE_HAS_CLOSE,
            self::CODE_BUYER_SELLER_EQUAL,
            self::CODE_TRADE_BUYER_NOT_MATCH,
            self::CODE_BUYER_ENABLE_STATUS_FORBID,
            self::CODE_BUYER_PAYMENT_AMOUNT_DAY_LIMIT_ERROR,
            self::CODE_BEYOND_PAY_RESTRICTION,
            self::CODE_BEYOND_PER_RECEIPT_RESTRICTION,
            self::CODE_BUYER_PAYMENT_AMOUNT_MONTH_LIMIT_ERROR,
            self::CODE_SELLER_BEEN_BLOCKED,
            self::CODE_ERROR_BUYER_CERTIFY_LEVEL_LIMIT,
            self::CODE_INVALID_STORE_ID,
            self::CODE_APPLY_PC_MERCHANT_CODE_ERROR,
            self::CODE_SECONDARY_MERCHANT_STATUS_ERROR,
            self::CODE_BEYOND_PER_RECEIPT_DAY_RESTRICTION,
            self::CODE_BEYOND_PER_RECEIPT_SINGLE_RESTRICTION,
            self::CODE_TRADE_SETTLE_ERROR,
            self::CODE_SECONDARY_MERCHANT_ID_INVALID,
            self::CODE_SECONDARY_MERCHANT_ISV_PUNISH_INDIRECT,
            self::CODE_SELLER_NOT_EXIST,
            self::CODE_SECONDARY_MERCHANT_ALIPAY_ACCOUNT_INVALID,
            self::CODE_INVALID_RECEIVE_ACCOUNT,
            self::CODE_SECONDARY_MERCHANT_ID_BLANK,
            self::CODE_NOW_TIME_AFTER_EXPIRE_TIME_ERROR,
            self::CODE_SECONDARY_MERCHANT_NOT_MATCH,
            self::CODE_BUYER_NOT_EXIST,
            self::CODE_SUB_GOODS_SIZE_MAX_COUNT,
            self::CODE_DEFAULT_SETTLE_RULE_NOT_EXIST,
            self::CODE_MERCHANT_PERM_RECEIPT_SUSPEND_LIMIT,
            self::CODE_MERCHANT_PERM_RECEIPT_SINGLE_LIMIT,
            self::CODE_MERCHANT_PERM_RECEIPT_DAY_LIMIT,
            self::CODE_RISK_MERCHANT_IP_NOT_EXIST,
            self::CODE_MERCHANT_STATUS_NOT_NORMAL,
        ];
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
        $this->container['code'] = $data['code'] ?? null;
        $this->container['links'] = $data['links'] ?? null;
        $this->container['message'] = $data['message'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        //if ($this->container['code'] === null) {
        //    $invalidProperties[] = "'code' can't be null";
        //}
        $allowedValues = $this->getCodeAllowableValues();
        if (!is_null($this->container['code']) && !in_array($this->container['code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'code', must be one of '%s'",
                $this->container['code'],
                implode("', '", $allowedValues)
            );
        }

        //if ($this->container['message'] === null) {
        //    $invalidProperties[] = "'message' can't be null";
        //}
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code 错误码
     *
     * @return self
     */
    public function setCode($code)
    {
        $allowedValues = $this->getCodeAllowableValues();
        if (!is_null($code) && !in_array($code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'code', must be one of '%s'",
                    $code,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets links
     *
     * @return string|null
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param string|null $links 解决方案链接
     *
     * @return self
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message 错误描述
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

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


