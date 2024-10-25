<?php
/**
 * SettleDetailInfo
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
 * SettleDetailInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SettleDetailInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SettleDetailInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'actualAmount' => 'string',
        'amount' => 'string',
        'settleEntityId' => 'string',
        'settleEntityType' => 'string',
        'summaryDimension' => 'string',
        'transIn' => 'string',
        'transInType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'actualAmount' => null,
        'amount' => null,
        'settleEntityId' => null,
        'settleEntityType' => null,
        'summaryDimension' => null,
        'transIn' => null,
        'transInType' => null
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
        'actualAmount' => 'actual_amount',
        'amount' => 'amount',
        'settleEntityId' => 'settle_entity_id',
        'settleEntityType' => 'settle_entity_type',
        'summaryDimension' => 'summary_dimension',
        'transIn' => 'trans_in',
        'transInType' => 'trans_in_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'actualAmount' => 'setActualAmount',
        'amount' => 'setAmount',
        'settleEntityId' => 'setSettleEntityId',
        'settleEntityType' => 'setSettleEntityType',
        'summaryDimension' => 'setSummaryDimension',
        'transIn' => 'setTransIn',
        'transInType' => 'setTransInType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'actualAmount' => 'getActualAmount',
        'amount' => 'getAmount',
        'settleEntityId' => 'getSettleEntityId',
        'settleEntityType' => 'getSettleEntityType',
        'summaryDimension' => 'getSummaryDimension',
        'transIn' => 'getTransIn',
        'transInType' => 'getTransInType'
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
        $this->container['actualAmount'] = $data['actualAmount'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['settleEntityId'] = $data['settleEntityId'] ?? null;
        $this->container['settleEntityType'] = $data['settleEntityType'] ?? null;
        $this->container['summaryDimension'] = $data['summaryDimension'] ?? null;
        $this->container['transIn'] = $data['transIn'] ?? null;
        $this->container['transInType'] = $data['transInType'] ?? null;
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
     * Gets actualAmount
     *
     * @return string|null
     */
    public function getActualAmount()
    {
        return $this->container['actualAmount'];
    }

    /**
     * Sets actualAmount
     *
     * @param string|null $actualAmount 仅在直付通账期模式下，当一笔交易需要分多次发起部分确认结算时使用，表示本次确认结算的实际结算金额。传递本字段后，原amount字段不再生效，结算金额以本字段为准。如已经发生过部分确认结算、不传递本字段则默认按剩余待结算金额一次性结算。
     *
     * @return self
     */
    public function setActualAmount($actualAmount)
    {
        $this->container['actualAmount'] = $actualAmount;

        return $this;
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
     * @param string|null $amount 结算的金额，单位为元。在创建订单和支付接口时必须和交易金额相同。在结算确认接口时必须等于交易金额减去已退款金额。直付通账期模式下，如使用部分结算能力、传递了actual_amount字段，则忽略本字段的校验、可不传。
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

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
     * @param string|null $settleEntityId 结算主体标识。当结算主体类型为SecondMerchant时，为二级商户的SecondMerchantID；当结算主体类型为Store时，为门店的外标。
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
     * @param string|null $settleEntityType 结算主体类型。
     *
     * @return self
     */
    public function setSettleEntityType($settleEntityType)
    {
        $this->container['settleEntityType'] = $settleEntityType;

        return $this;
    }

    /**
     * Gets summaryDimension
     *
     * @return string|null
     */
    public function getSummaryDimension()
    {
        return $this->container['summaryDimension'];
    }

    /**
     * Sets summaryDimension
     *
     * @param string|null $summaryDimension 结算汇总维度，按照这个维度汇总成批次结算，由商户指定。  目前需要和结算收款方账户类型为cardAliasNo配合使用
     *
     * @return self
     */
    public function setSummaryDimension($summaryDimension)
    {
        $this->container['summaryDimension'] = $summaryDimension;

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
     * @param string|null $transIn 结算收款方。当结算收款方类型是cardAliasNo时，本参数为用户在支付宝绑定的卡编号；结算收款方类型是userId时，本参数为用户的支付宝账号对应的支付宝唯一用户号，以2088开头的纯16位数字；当结算收款方类型是loginName时，本参数为用户的支付宝登录号；当结算收款方类型是defaultSettle时，本参数不能传值，保持为空。
     *
     * @return self
     */
    public function setTransIn($transIn)
    {
        $this->container['transIn'] = $transIn;

        return $this;
    }

    /**
     * Gets transInType
     *
     * @return string|null
     */
    public function getTransInType()
    {
        return $this->container['transInType'];
    }

    /**
     * Sets transInType
     *
     * @param string|null $transInType 结算收款方的账户类型。
     *
     * @return self
     */
    public function setTransInType($transInType)
    {
        $this->container['transInType'] = $transInType;

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


