<?php
/**
 * ZhimaCreditPeZmgoSettleRefundErrorResponseModel
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
 * ZhimaCreditPeZmgoSettleRefundErrorResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ZhimaCreditPeZmgoSettleRefundErrorResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ZhimaCreditPeZmgoSettleRefundErrorResponseModel';

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

    public const CODE_SYSTEM_ERROR = 'SYSTEM_ERROR';
    public const CODE_INVALID_PARAMETER = 'INVALID_PARAMETER';
    public const CODE_AGREEMENT_NOT_EXIST = 'AGREEMENT_NOT_EXIST';
    public const CODE_REFUND_AMOUNT_CHECK_ERROR = 'REFUND_AMOUNT_CHECK_ERROR';
    public const CODE_REQUEST_PARAM_ILLEGAL = 'REQUEST_PARAM_ILLEGAL';
    public const CODE_REQUEST_ACCESS_ILLEGAL = 'REQUEST_ACCESS_ILLEGAL';
    public const CODE_REFUND_PARAM_IS_ERROR = 'REFUND_PARAM_IS_ERROR';
    public const CODE_REFUND_AGREEMENT_STATUS_NOT_SUPPORT = 'REFUND_AGREEMENT_STATUS_NOT_SUPPORT';
    public const CODE_AUTH_OPT_ORDER_NOT_EXIST = 'AUTH_OPT_ORDER_NOT_EXIST';
    public const CODE_REFUND_OPT_ORDER_NOT_UNIQUE = 'REFUND_OPT_ORDER_NOT_UNIQUE';
    public const CODE_REFUND_OPT_ORDER_NOT_EXIST = 'REFUND_OPT_ORDER_NOT_EXIST';
    public const CODE_REFUND_TRADE_NO_NOT_EXIST = 'REFUND_TRADE_NO_NOT_EXIST';
    public const CODE_REFUND_REQUEST_NO_IDEMPOTENT_FAIL = 'REFUND_REQUEST_NO_IDEMPOTENT_FAIL';
    public const CODE_AGREEMENT_AND_USER_NOT_MATCH = 'AGREEMENT_AND_USER_NOT_MATCH';
    public const CODE_REFUND_AMOUNT_IS_ILLEGAL = 'REFUND_AMOUNT_IS_ILLEGAL';
    public const CODE_REFUND_PAY_AMOUNT_IS_EMPTY = 'REFUND_PAY_AMOUNT_IS_EMPTY';
    public const CODE_REFUND_AMOUNT_IS_ZERO = 'REFUND_AMOUNT_IS_ZERO';
    public const CODE_TRADENO_AND_AUTHOPT_NOT_MATCH = 'TRADENO_AND_AUTHOPT_NOT_MATCH';
    public const CODE_OPTID_AND_TRADENO_ALL_EMPTY = 'OPTID_AND_TRADENO_ALL_EMPTY';
    public const CODE_AGREEMENT_AND_PARTNER_NOT_MATCH = 'AGREEMENT_AND_PARTNER_NOT_MATCH';
    public const CODE_REFUND_LAST_TIME_SUCCESS = 'REFUND_LAST_TIME_SUCCESS';
    public const CODE_REFUND_LAST_TIME_FAIL = 'REFUND_LAST_TIME_FAIL';
    public const CODE_REFUND_LAST_TIME_INIT = 'REFUND_LAST_TIME_INIT';
    public const CODE_REFUND_AGREEMENT_NOT_EXIST = 'REFUND_AGREEMENT_NOT_EXIST';
    public const CODE_UNITRADEPROD_EXECUTE_ERROR = 'UNITRADEPROD_EXECUTE_ERROR';
    public const CODE_TRADE_HAS_CLOSE = 'TRADE_HAS_CLOSE';
    public const CODE_SELLER_BALANCE_NOT_ENOUGH = 'SELLER_BALANCE_NOT_ENOUGH';
    public const CODE_REFUND_AMT_NOT_EQUAL_TOTAL = 'REFUND_AMT_NOT_EQUAL_TOTAL';
    public const CODE_TRADE_NOT_EXIST = 'TRADE_NOT_EXIST';
    public const CODE_TRADE_HAS_FINISHED = 'TRADE_HAS_FINISHED';
    public const CODE_REASON_TRADE_REFUND_FEE_ERR = 'REASON_TRADE_REFUND_FEE_ERR';
    public const CODE_TRADE_NOT_ALLOW_REFUND = 'TRADE_NOT_ALLOW_REFUND';
    public const CODE_REFUND_FEE_ERROR = 'REFUND_FEE_ERROR';
    public const CODE_REASON_TRADE_BEEN_FREEZEN = 'REASON_TRADE_BEEN_FREEZEN';
    public const CODE_TRADE_STATUS_ERROR = 'TRADE_STATUS_ERROR';
    public const CODE_REFUND_LAST_TIME_ACCEPT = 'REFUND_LAST_TIME_ACCEPT';
    public const CODE_REFUND_PAY_AMOUNT_IS_ZERO = 'REFUND_PAY_AMOUNT_IS_ZERO';
    public const CODE_SETTLE_REFUND_ERROR = 'SETTLE_REFUND_ERROR';
    public const CODE_SETTLE_REFUND_AMOUNT_ERROR = 'SETTLE_REFUND_AMOUNT_ERROR';
    public const CODE_SETTLE_WITHHOLD_PLAN_NOT_EXIST = 'SETTLE_WITHHOLD_PLAN_NOT_EXIST';
    public const CODE_SETTLE_WITHHOLD_PLAN_STATUS_ERROR = 'SETTLE_WITHHOLD_PLAN_STATUS_ERROR';
    public const CODE_SETTLE_REFUND_BALANCE_ERROR = 'SETTLE_REFUND_BALANCE_ERROR';
    public const CODE_SETTLE_BIZ_AGREEMENT_NOT_EXIST = 'SETTLE_BIZ_AGREEMENT_NOT_EXIST';
    public const CODE_SETTLE_REFUND_REQUEST_NO_ERROR = 'SETTLE_REFUND_REQUEST_NO_ERROR';
    public const CODE_SETTLE_REFUND_ILLEGAL_ACCESS = 'SETTLE_REFUND_ILLEGAL_ACCESS';
    public const CODE_SETTLE_REFUND_TIME_ERROR = 'SETTLE_REFUND_TIME_ERROR';
    public const CODE_SETTLE_REFUND_NOT_SUPPORT = 'SETTLE_REFUND_NOT_SUPPORT';

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
            self::CODE_AGREEMENT_NOT_EXIST,
            self::CODE_REFUND_AMOUNT_CHECK_ERROR,
            self::CODE_REQUEST_PARAM_ILLEGAL,
            self::CODE_REQUEST_ACCESS_ILLEGAL,
            self::CODE_REFUND_PARAM_IS_ERROR,
            self::CODE_REFUND_AGREEMENT_STATUS_NOT_SUPPORT,
            self::CODE_AUTH_OPT_ORDER_NOT_EXIST,
            self::CODE_REFUND_OPT_ORDER_NOT_UNIQUE,
            self::CODE_REFUND_OPT_ORDER_NOT_EXIST,
            self::CODE_REFUND_TRADE_NO_NOT_EXIST,
            self::CODE_REFUND_REQUEST_NO_IDEMPOTENT_FAIL,
            self::CODE_AGREEMENT_AND_USER_NOT_MATCH,
            self::CODE_REFUND_AMOUNT_IS_ILLEGAL,
            self::CODE_REFUND_PAY_AMOUNT_IS_EMPTY,
            self::CODE_REFUND_AMOUNT_IS_ZERO,
            self::CODE_TRADENO_AND_AUTHOPT_NOT_MATCH,
            self::CODE_OPTID_AND_TRADENO_ALL_EMPTY,
            self::CODE_AGREEMENT_AND_PARTNER_NOT_MATCH,
            self::CODE_REFUND_LAST_TIME_SUCCESS,
            self::CODE_REFUND_LAST_TIME_FAIL,
            self::CODE_REFUND_LAST_TIME_INIT,
            self::CODE_REFUND_AGREEMENT_NOT_EXIST,
            self::CODE_UNITRADEPROD_EXECUTE_ERROR,
            self::CODE_TRADE_HAS_CLOSE,
            self::CODE_SELLER_BALANCE_NOT_ENOUGH,
            self::CODE_REFUND_AMT_NOT_EQUAL_TOTAL,
            self::CODE_TRADE_NOT_EXIST,
            self::CODE_TRADE_HAS_FINISHED,
            self::CODE_REASON_TRADE_REFUND_FEE_ERR,
            self::CODE_TRADE_NOT_ALLOW_REFUND,
            self::CODE_REFUND_FEE_ERROR,
            self::CODE_REASON_TRADE_BEEN_FREEZEN,
            self::CODE_TRADE_STATUS_ERROR,
            self::CODE_REFUND_LAST_TIME_ACCEPT,
            self::CODE_REFUND_PAY_AMOUNT_IS_ZERO,
            self::CODE_SETTLE_REFUND_ERROR,
            self::CODE_SETTLE_REFUND_AMOUNT_ERROR,
            self::CODE_SETTLE_WITHHOLD_PLAN_NOT_EXIST,
            self::CODE_SETTLE_WITHHOLD_PLAN_STATUS_ERROR,
            self::CODE_SETTLE_REFUND_BALANCE_ERROR,
            self::CODE_SETTLE_BIZ_AGREEMENT_NOT_EXIST,
            self::CODE_SETTLE_REFUND_REQUEST_NO_ERROR,
            self::CODE_SETTLE_REFUND_ILLEGAL_ACCESS,
            self::CODE_SETTLE_REFUND_TIME_ERROR,
            self::CODE_SETTLE_REFUND_NOT_SUPPORT,
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


