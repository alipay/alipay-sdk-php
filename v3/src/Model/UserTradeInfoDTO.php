<?php
/**
 * UserTradeInfoDTO
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
 * UserTradeInfoDTO Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UserTradeInfoDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserTradeInfoDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'goodsInfoList' => '\Alipay\OpenAPISDK\Model\GoodsInfoDTO[]',
        'partnerId' => 'string',
        'riskLevel' => 'string',
        'tradeAmount' => 'string',
        'tradeNo' => 'string',
        'tradeTime' => 'string',
        'unfilteredTotalGoodsCount' => 'int',
        'userId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'goodsInfoList' => null,
        'partnerId' => null,
        'riskLevel' => null,
        'tradeAmount' => null,
        'tradeNo' => null,
        'tradeTime' => null,
        'unfilteredTotalGoodsCount' => null,
        'userId' => null
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
        'goodsInfoList' => 'goods_info_list',
        'partnerId' => 'partner_id',
        'riskLevel' => 'risk_level',
        'tradeAmount' => 'trade_amount',
        'tradeNo' => 'trade_no',
        'tradeTime' => 'trade_time',
        'unfilteredTotalGoodsCount' => 'unfiltered_total_goods_count',
        'userId' => 'user_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'goodsInfoList' => 'setGoodsInfoList',
        'partnerId' => 'setPartnerId',
        'riskLevel' => 'setRiskLevel',
        'tradeAmount' => 'setTradeAmount',
        'tradeNo' => 'setTradeNo',
        'tradeTime' => 'setTradeTime',
        'unfilteredTotalGoodsCount' => 'setUnfilteredTotalGoodsCount',
        'userId' => 'setUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'goodsInfoList' => 'getGoodsInfoList',
        'partnerId' => 'getPartnerId',
        'riskLevel' => 'getRiskLevel',
        'tradeAmount' => 'getTradeAmount',
        'tradeNo' => 'getTradeNo',
        'tradeTime' => 'getTradeTime',
        'unfilteredTotalGoodsCount' => 'getUnfilteredTotalGoodsCount',
        'userId' => 'getUserId'
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
        $this->container['goodsInfoList'] = $data['goodsInfoList'] ?? null;
        $this->container['partnerId'] = $data['partnerId'] ?? null;
        $this->container['riskLevel'] = $data['riskLevel'] ?? null;
        $this->container['tradeAmount'] = $data['tradeAmount'] ?? null;
        $this->container['tradeNo'] = $data['tradeNo'] ?? null;
        $this->container['tradeTime'] = $data['tradeTime'] ?? null;
        $this->container['unfilteredTotalGoodsCount'] = $data['unfilteredTotalGoodsCount'] ?? null;
        $this->container['userId'] = $data['userId'] ?? null;
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
     * Gets goodsInfoList
     *
     * @return \Alipay\OpenAPISDK\Model\GoodsInfoDTO[]|null
     */
    public function getGoodsInfoList()
    {
        return $this->container['goodsInfoList'];
    }

    /**
     * Sets goodsInfoList
     *
     * @param \Alipay\OpenAPISDK\Model\GoodsInfoDTO[]|null $goodsInfoList 商品信息列表
     *
     * @return self
     */
    public function setGoodsInfoList($goodsInfoList)
    {
        $this->container['goodsInfoList'] = $goodsInfoList;

        return $this;
    }

    /**
     * Gets partnerId
     *
     * @return string|null
     */
    public function getPartnerId()
    {
        return $this->container['partnerId'];
    }

    /**
     * Sets partnerId
     *
     * @param string|null $partnerId 门店ISV的PID
     *
     * @return self
     */
    public function setPartnerId($partnerId)
    {
        $this->container['partnerId'] = $partnerId;

        return $this;
    }

    /**
     * Gets riskLevel
     *
     * @return string|null
     */
    public function getRiskLevel()
    {
        return $this->container['riskLevel'];
    }

    /**
     * Sets riskLevel
     *
     * @param string|null $riskLevel 是否是风险交易：NO_RISK-无风险；POTENTIAL_RISK-潜在风险（中等风险）；HIGH_RISK-高风险
     *
     * @return self
     */
    public function setRiskLevel($riskLevel)
    {
        $this->container['riskLevel'] = $riskLevel;

        return $this;
    }

    /**
     * Gets tradeAmount
     *
     * @return string|null
     */
    public function getTradeAmount()
    {
        return $this->container['tradeAmount'];
    }

    /**
     * Sets tradeAmount
     *
     * @param string|null $tradeAmount 交易总金额，单位元，精确两位小数点
     *
     * @return self
     */
    public function setTradeAmount($tradeAmount)
    {
        $this->container['tradeAmount'] = $tradeAmount;

        return $this;
    }

    /**
     * Gets tradeNo
     *
     * @return string|null
     */
    public function getTradeNo()
    {
        return $this->container['tradeNo'];
    }

    /**
     * Sets tradeNo
     *
     * @param string|null $tradeNo 交易单号
     *
     * @return self
     */
    public function setTradeNo($tradeNo)
    {
        $this->container['tradeNo'] = $tradeNo;

        return $this;
    }

    /**
     * Gets tradeTime
     *
     * @return string|null
     */
    public function getTradeTime()
    {
        return $this->container['tradeTime'];
    }

    /**
     * Sets tradeTime
     *
     * @param string|null $tradeTime 交易时间
     *
     * @return self
     */
    public function setTradeTime($tradeTime)
    {
        $this->container['tradeTime'] = $tradeTime;

        return $this;
    }

    /**
     * Gets unfilteredTotalGoodsCount
     *
     * @return int|null
     */
    public function getUnfilteredTotalGoodsCount()
    {
        return $this->container['unfilteredTotalGoodsCount'];
    }

    /**
     * Sets unfilteredTotalGoodsCount
     *
     * @param int|null $unfilteredTotalGoodsCount 商品数据会根据活动商品列表进行过滤，该字段代表未过滤的商品列表大小
     *
     * @return self
     */
    public function setUnfilteredTotalGoodsCount($unfilteredTotalGoodsCount)
    {
        $this->container['unfilteredTotalGoodsCount'] = $unfilteredTotalGoodsCount;

        return $this;
    }

    /**
     * Gets userId
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param string|null $userId 消费者支付宝ID
     *
     * @return self
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

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


