<?php
/**
 * AlipayPcreditHuabeiAuthSettleApplyModel
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
 * AlipayPcreditHuabeiAuthSettleApplyModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayPcreditHuabeiAuthSettleApplyModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayPcreditHuabeiAuthSettleApplyModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'actionType' => 'string',
        'agreementNo' => 'string',
        'alipayUserId' => 'string',
        'extendParams' => '\Alipay\OpenAPISDK\Model\ExtraParams',
        'needTerminated' => 'string',
        'openId' => 'string',
        'outRequestNo' => 'string',
        'payAmount' => 'string',
        'sellerId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'actionType' => null,
        'agreementNo' => null,
        'alipayUserId' => null,
        'extendParams' => null,
        'needTerminated' => null,
        'openId' => null,
        'outRequestNo' => null,
        'payAmount' => null,
        'sellerId' => null
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
        'actionType' => 'action_type',
        'agreementNo' => 'agreement_no',
        'alipayUserId' => 'alipay_user_id',
        'extendParams' => 'extend_params',
        'needTerminated' => 'need_terminated',
        'openId' => 'open_id',
        'outRequestNo' => 'out_request_no',
        'payAmount' => 'pay_amount',
        'sellerId' => 'seller_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'actionType' => 'setActionType',
        'agreementNo' => 'setAgreementNo',
        'alipayUserId' => 'setAlipayUserId',
        'extendParams' => 'setExtendParams',
        'needTerminated' => 'setNeedTerminated',
        'openId' => 'setOpenId',
        'outRequestNo' => 'setOutRequestNo',
        'payAmount' => 'setPayAmount',
        'sellerId' => 'setSellerId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'actionType' => 'getActionType',
        'agreementNo' => 'getAgreementNo',
        'alipayUserId' => 'getAlipayUserId',
        'extendParams' => 'getExtendParams',
        'needTerminated' => 'getNeedTerminated',
        'openId' => 'getOpenId',
        'outRequestNo' => 'getOutRequestNo',
        'payAmount' => 'getPayAmount',
        'sellerId' => 'getSellerId'
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
        $this->container['actionType'] = $data['actionType'] ?? null;
        $this->container['agreementNo'] = $data['agreementNo'] ?? null;
        $this->container['alipayUserId'] = $data['alipayUserId'] ?? null;
        $this->container['extendParams'] = $data['extendParams'] ?? null;
        $this->container['needTerminated'] = $data['needTerminated'] ?? null;
        $this->container['openId'] = $data['openId'] ?? null;
        $this->container['outRequestNo'] = $data['outRequestNo'] ?? null;
        $this->container['payAmount'] = $data['payAmount'] ?? null;
        $this->container['sellerId'] = $data['sellerId'] ?? null;
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
     * Gets actionType
     *
     * @return string|null
     */
    public function getActionType()
    {
        return $this->container['actionType'];
    }

    /**
     * Sets actionType
     *
     * @param string|null $actionType 操作类型，默认为 MERCHANT_SETTLE（结算）。枚举值如下： *  MERCHANT_SETTLE：结算（需要主动退出在发起结算）; *  QUIT_SETTLE：退出协议（解约协议）; *  PERIOD_SETTLE：分阶段结算（不解约协议）。
     *
     * @return self
     */
    public function setActionType($actionType)
    {
        $this->container['actionType'] = $actionType;

        return $this;
    }

    /**
     * Gets agreementNo
     *
     * @return string|null
     */
    public function getAgreementNo()
    {
        return $this->container['agreementNo'];
    }

    /**
     * Sets agreementNo
     *
     * @param string|null $agreementNo 支付宝系统中用以唯一标识用户签约记录的编号。
     *
     * @return self
     */
    public function setAgreementNo($agreementNo)
    {
        $this->container['agreementNo'] = $agreementNo;

        return $this;
    }

    /**
     * Gets alipayUserId
     *
     * @return string|null
     */
    public function getAlipayUserId()
    {
        return $this->container['alipayUserId'];
    }

    /**
     * Sets alipayUserId
     *
     * @param string|null $alipayUserId 用户在支付宝的唯一标识，以 2088 开头的 16 位纯数字组成。
     *
     * @return self
     */
    public function setAlipayUserId($alipayUserId)
    {
        $this->container['alipayUserId'] = $alipayUserId;

        return $this;
    }

    /**
     * Gets extendParams
     *
     * @return \Alipay\OpenAPISDK\Model\ExtraParams|null
     */
    public function getExtendParams()
    {
        return $this->container['extendParams'];
    }

    /**
     * Sets extendParams
     *
     * @param \Alipay\OpenAPISDK\Model\ExtraParams|null $extendParams extendParams
     *
     * @return self
     */
    public function setExtendParams($extendParams)
    {
        $this->container['extendParams'] = $extendParams;

        return $this;
    }

    /**
     * Gets needTerminated
     *
     * @return string|null
     */
    public function getNeedTerminated()
    {
        return $this->container['needTerminated'];
    }

    /**
     * Sets needTerminated
     *
     * @param string|null $needTerminated 是否解约，该参数控制结算完成之后的操作，为空则表示结算后解约。枚举值如下： *  true：代表解约，默认为true。 *  false：代表不解约。
     *
     * @return self
     */
    public function setNeedTerminated($needTerminated)
    {
        $this->container['needTerminated'] = $needTerminated;

        return $this;
    }

    /**
     * Gets openId
     *
     * @return string|null
     */
    public function getOpenId()
    {
        return $this->container['openId'];
    }

    /**
     * Sets openId
     *
     * @param string|null $openId 用户在支付宝的唯一标识
     *
     * @return self
     */
    public function setOpenId($openId)
    {
        $this->container['openId'] = $openId;

        return $this;
    }

    /**
     * Gets outRequestNo
     *
     * @return string|null
     */
    public function getOutRequestNo()
    {
        return $this->container['outRequestNo'];
    }

    /**
     * Sets outRequestNo
     *
     * @param string|null $outRequestNo 商户本次操作的请求流水号，用于标示请求流水的唯一性，不能包含除中文、英文、数字以外的字符，需要保证在商户端不重复。
     *
     * @return self
     */
    public function setOutRequestNo($outRequestNo)
    {
        $this->container['outRequestNo'] = $outRequestNo;

        return $this;
    }

    /**
     * Gets payAmount
     *
     * @return string|null
     */
    public function getPayAmount()
    {
        return $this->container['payAmount'];
    }

    /**
     * Sets payAmount
     *
     * @param string|null $payAmount 需要支付的金额，单位为：元（人民币），精确到小数点后两位
     *
     * @return self
     */
    public function setPayAmount($payAmount)
    {
        $this->container['payAmount'] = $payAmount;

        return $this;
    }

    /**
     * Gets sellerId
     *
     * @return string|null
     */
    public function getSellerId()
    {
        return $this->container['sellerId'];
    }

    /**
     * Sets sellerId
     *
     * @param string|null $sellerId 支付宝商家ID，即商家账号在支付宝的唯一标识，以 2088 开头的 16 位纯数字组成。 说明：若该值为空，则默认为商户签约账号对应的支付宝用户ID。
     *
     * @return self
     */
    public function setSellerId($sellerId)
    {
        $this->container['sellerId'] = $sellerId;

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


