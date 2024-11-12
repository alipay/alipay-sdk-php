<?php
/**
 * BatchSettleDetail
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
 * BatchSettleDetail Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BatchSettleDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BatchSettleDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'string',
        'currency' => 'string',
        'errorCode' => 'string',
        'errorDesc' => 'string',
        'settleAccountId' => 'string',
        'settleAccountIdType' => 'string',
        'settleAccountOpenId' => 'string',
        'settleAccountType' => 'string',
        'settleEntityId' => 'string',
        'settleEntityType' => 'string',
        'status' => 'string',
        'subMerchant' => '\Alipay\OpenAPISDK\Model\SubMerchant'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'currency' => null,
        'errorCode' => null,
        'errorDesc' => null,
        'settleAccountId' => null,
        'settleAccountIdType' => null,
        'settleAccountOpenId' => null,
        'settleAccountType' => null,
        'settleEntityId' => null,
        'settleEntityType' => null,
        'status' => null,
        'subMerchant' => null
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
        'amount' => 'amount',
        'currency' => 'currency',
        'errorCode' => 'error_code',
        'errorDesc' => 'error_desc',
        'settleAccountId' => 'settle_account_id',
        'settleAccountIdType' => 'settle_account_id_type',
        'settleAccountOpenId' => 'settle_account_open_id',
        'settleAccountType' => 'settle_account_type',
        'settleEntityId' => 'settle_entity_id',
        'settleEntityType' => 'settle_entity_type',
        'status' => 'status',
        'subMerchant' => 'sub_merchant'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'errorCode' => 'setErrorCode',
        'errorDesc' => 'setErrorDesc',
        'settleAccountId' => 'setSettleAccountId',
        'settleAccountIdType' => 'setSettleAccountIdType',
        'settleAccountOpenId' => 'setSettleAccountOpenId',
        'settleAccountType' => 'setSettleAccountType',
        'settleEntityId' => 'setSettleEntityId',
        'settleEntityType' => 'setSettleEntityType',
        'status' => 'setStatus',
        'subMerchant' => 'setSubMerchant'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'errorCode' => 'getErrorCode',
        'errorDesc' => 'getErrorDesc',
        'settleAccountId' => 'getSettleAccountId',
        'settleAccountIdType' => 'getSettleAccountIdType',
        'settleAccountOpenId' => 'getSettleAccountOpenId',
        'settleAccountType' => 'getSettleAccountType',
        'settleEntityId' => 'getSettleEntityId',
        'settleEntityType' => 'getSettleEntityType',
        'status' => 'getStatus',
        'subMerchant' => 'getSubMerchant'
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
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['errorCode'] = $data['errorCode'] ?? null;
        $this->container['errorDesc'] = $data['errorDesc'] ?? null;
        $this->container['settleAccountId'] = $data['settleAccountId'] ?? null;
        $this->container['settleAccountIdType'] = $data['settleAccountIdType'] ?? null;
        $this->container['settleAccountOpenId'] = $data['settleAccountOpenId'] ?? null;
        $this->container['settleAccountType'] = $data['settleAccountType'] ?? null;
        $this->container['settleEntityId'] = $data['settleEntityId'] ?? null;
        $this->container['settleEntityType'] = $data['settleEntityType'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['subMerchant'] = $data['subMerchant'] ?? null;
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
     * Gets amount
     *
     * @return string|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string|null $amount 结算金额，单位为元
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency 结算币种
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets errorCode
     *
     * @return string|null
     */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
     * Sets errorCode
     *
     * @param string|null $errorCode 错误编码，SETTLE_ACCOUNT_ERROR：结算账户信息有误；BANK_DISHONOR：银行提现退票；UNKNOWN_ERROR：未知错误
     *
     * @return self
     */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;

        return $this;
    }

    /**
     * Gets errorDesc
     *
     * @return string|null
     */
    public function getErrorDesc()
    {
        return $this->container['errorDesc'];
    }

    /**
     * Sets errorDesc
     *
     * @param string|null $errorDesc 错误描述
     *
     * @return self
     */
    public function setErrorDesc($errorDesc)
    {
        $this->container['errorDesc'] = $errorDesc;

        return $this;
    }

    /**
     * Gets settleAccountId
     *
     * @return string|null
     */
    public function getSettleAccountId()
    {
        return $this->container['settleAccountId'];
    }

    /**
     * Sets settleAccountId
     *
     * @param string|null $settleAccountId 结算账户id。当结算账户id类型是cardSerialNo时，本参数为用户在支付宝绑定的卡编号；当结算账户id类型是userId时，本参数为用户的支付宝账号对应的支付宝唯一用户号；当结算账户id类型是loginName时，本参数为用户的支付宝登录号
     *
     * @return self
     */
    public function setSettleAccountId($settleAccountId)
    {
        $this->container['settleAccountId'] = $settleAccountId;

        return $this;
    }

    /**
     * Gets settleAccountIdType
     *
     * @return string|null
     */
    public function getSettleAccountIdType()
    {
        return $this->container['settleAccountIdType'];
    }

    /**
     * Sets settleAccountIdType
     *
     * @param string|null $settleAccountIdType 结算账户id类型。  当settle_account_type 为bankCard时，本参数为cardSerialNo，表示结算账户id是银行卡编号;  当settle_account_type 为alipayBalance时，本参数为userId或者loginName，其中userId表示结算账户id是支付宝唯一用户号，loginName表示结算账户id是支付宝登录号
     *
     * @return self
     */
    public function setSettleAccountIdType($settleAccountIdType)
    {
        $this->container['settleAccountIdType'] = $settleAccountIdType;

        return $this;
    }

    /**
     * Gets settleAccountOpenId
     *
     * @return string|null
     */
    public function getSettleAccountOpenId()
    {
        return $this->container['settleAccountOpenId'];
    }

    /**
     * Sets settleAccountOpenId
     *
     * @param string|null $settleAccountOpenId 结算账户的OpenId，本参数是用户在该应用（AppId）下的唯一用户标识。
     *
     * @return self
     */
    public function setSettleAccountOpenId($settleAccountOpenId)
    {
        $this->container['settleAccountOpenId'] = $settleAccountOpenId;

        return $this;
    }

    /**
     * Gets settleAccountType
     *
     * @return string|null
     */
    public function getSettleAccountType()
    {
        return $this->container['settleAccountType'];
    }

    /**
     * Sets settleAccountType
     *
     * @param string|null $settleAccountType 结算账户类型。 bankCard: 结算账户为银行卡； alipayBalance: 结算账户为支付宝余额户
     *
     * @return self
     */
    public function setSettleAccountType($settleAccountType)
    {
        $this->container['settleAccountType'] = $settleAccountType;

        return $this;
    }

    /**
     * Gets settleEntityId
     *
     * @return string|null
     */
    public function getSettleEntityId()
    {
        return $this->container['settleEntityId'];
    }

    /**
     * Sets settleEntityId
     *
     * @param string|null $settleEntityId 结算主体账号。 当结算主体类型为SecondMerchant，本参数为二级商户的SecondMerchantID
     *
     * @return self
     */
    public function setSettleEntityId($settleEntityId)
    {
        $this->container['settleEntityId'] = $settleEntityId;

        return $this;
    }

    /**
     * Gets settleEntityType
     *
     * @return string|null
     */
    public function getSettleEntityType()
    {
        return $this->container['settleEntityType'];
    }

    /**
     * Sets settleEntityType
     *
     * @param string|null $settleEntityType 结算主体类型。 SecondMerchant：结算主体为二级商户; Store：结算主体为门店；
     *
     * @return self
     */
    public function setSettleEntityType($settleEntityType)
    {
        $this->container['settleEntityType'] = $settleEntityType;

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
     * @param string|null $status ACCEPT_SUCCESS：受理成功； SUCCESS：结算成功； FAIL：结算失败；FAIL_RETRY：失败重试。
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets subMerchant
     *
     * @return \Alipay\OpenAPISDK\Model\SubMerchant|null
     */
    public function getSubMerchant()
    {
        return $this->container['subMerchant'];
    }

    /**
     * Sets subMerchant
     *
     * @param \Alipay\OpenAPISDK\Model\SubMerchant|null $subMerchant subMerchant
     *
     * @return self
     */
    public function setSubMerchant($subMerchant)
    {
        $this->container['subMerchant'] = $subMerchant;

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


