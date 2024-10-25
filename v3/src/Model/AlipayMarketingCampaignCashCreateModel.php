<?php
/**
 * AlipayMarketingCampaignCashCreateModel
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
 * AlipayMarketingCampaignCashCreateModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayMarketingCampaignCashCreateModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayMarketingCampaignCashCreateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'couponName' => 'string',
        'endTime' => 'string',
        'merchantLink' => 'string',
        'prizeMsg' => 'string',
        'prizeType' => 'string',
        'sendFreqency' => 'string',
        'startTime' => 'string',
        'totalMoney' => 'string',
        'totalNum' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'couponName' => null,
        'endTime' => null,
        'merchantLink' => null,
        'prizeMsg' => null,
        'prizeType' => null,
        'sendFreqency' => null,
        'startTime' => null,
        'totalMoney' => null,
        'totalNum' => null
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
        'couponName' => 'coupon_name',
        'endTime' => 'end_time',
        'merchantLink' => 'merchant_link',
        'prizeMsg' => 'prize_msg',
        'prizeType' => 'prize_type',
        'sendFreqency' => 'send_freqency',
        'startTime' => 'start_time',
        'totalMoney' => 'total_money',
        'totalNum' => 'total_num'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'couponName' => 'setCouponName',
        'endTime' => 'setEndTime',
        'merchantLink' => 'setMerchantLink',
        'prizeMsg' => 'setPrizeMsg',
        'prizeType' => 'setPrizeType',
        'sendFreqency' => 'setSendFreqency',
        'startTime' => 'setStartTime',
        'totalMoney' => 'setTotalMoney',
        'totalNum' => 'setTotalNum'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'couponName' => 'getCouponName',
        'endTime' => 'getEndTime',
        'merchantLink' => 'getMerchantLink',
        'prizeMsg' => 'getPrizeMsg',
        'prizeType' => 'getPrizeType',
        'sendFreqency' => 'getSendFreqency',
        'startTime' => 'getStartTime',
        'totalMoney' => 'getTotalMoney',
        'totalNum' => 'getTotalNum'
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
        $this->container['couponName'] = $data['couponName'] ?? null;
        $this->container['endTime'] = $data['endTime'] ?? null;
        $this->container['merchantLink'] = $data['merchantLink'] ?? null;
        $this->container['prizeMsg'] = $data['prizeMsg'] ?? null;
        $this->container['prizeType'] = $data['prizeType'] ?? null;
        $this->container['sendFreqency'] = $data['sendFreqency'] ?? null;
        $this->container['startTime'] = $data['startTime'] ?? null;
        $this->container['totalMoney'] = $data['totalMoney'] ?? null;
        $this->container['totalNum'] = $data['totalNum'] ?? null;
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
     * Gets couponName
     *
     * @return string|null
     */
    public function getCouponName()
    {
        return $this->container['couponName'];
    }

    /**
     * Sets couponName
     *
     * @param string|null $couponName 红包名称,商户在查询列表、详情看到的名字,同时也会显示在商户付款页面。
     *
     * @return self
     */
    public function setCouponName($couponName)
    {
        $this->container['couponName'] = $couponName;

        return $this;
    }

    /**
     * Gets endTime
     *
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
     * Sets endTime
     *
     * @param string|null $endTime 活动结束时间,必须大于活动开始时间, 基本格式:yyyy-MM-dd HH:mm:ss,活动有效时间最长为6个月，过期后需要创建新的活动。
     *
     * @return self
     */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;

        return $this;
    }

    /**
     * Gets merchantLink
     *
     * @return string|null
     */
    public function getMerchantLink()
    {
        return $this->container['merchantLink'];
    }

    /**
     * Sets merchantLink
     *
     * @param string|null $merchantLink 商户打款后的跳转链接，从支付宝收银台打款成功后的跳转链接。不填时，打款后停留在支付宝支付成功页。商户实际跳转会自动添加crowdNo作为跳转参数。示例: http://www.yourhomepage.com?crowdNo=XXX
     *
     * @return self
     */
    public function setMerchantLink($merchantLink)
    {
        $this->container['merchantLink'] = $merchantLink;

        return $this;
    }

    /**
     * Gets prizeMsg
     *
     * @return string|null
     */
    public function getPrizeMsg()
    {
        return $this->container['prizeMsg'];
    }

    /**
     * Sets prizeMsg
     *
     * @param string|null $prizeMsg 活动文案，用户在账单、红包中看到的账单描述、红包描述。
     *
     * @return self
     */
    public function setPrizeMsg($prizeMsg)
    {
        $this->container['prizeMsg'] = $prizeMsg;

        return $this;
    }

    /**
     * Gets prizeType
     *
     * @return string|null
     */
    public function getPrizeType()
    {
        return $this->container['prizeType'];
    }

    /**
     * Sets prizeType
     *
     * @param string|null $prizeType 现金红包的发放形式,。枚举支持： *fixed：固定金额。 *random：随机金额。选择随机金额时，单个红包的金额在平均金额的0.5~1.5倍之间浮动。
     *
     * @return self
     */
    public function setPrizeType($prizeType)
    {
        $this->container['prizeType'] = $prizeType;

        return $this;
    }

    /**
     * Gets sendFreqency
     *
     * @return string|null
     */
    public function getSendFreqency()
    {
        return $this->container['sendFreqency'];
    }

    /**
     * Sets sendFreqency
     *
     * @param string|null $sendFreqency 用户在当前活动参与次数、频率限制。支持日(D)、周(W)、月(M)、终身(L)维度的限制，整个字段不填时默认值为L1（即用户终生仅能参与1次）。 注意：  1. 终身(L)限制必选且最大值为 100。  2. 日(D)、周(W)、月(M)限制可选且最多只能选择一个（即限制日领取次数就不能再限制月领取次数），频率设置必须小于等于终身(L)的次数。  3. 多个配置之间使用\"|\"进行分隔。如 D3|L4（表示限制用户终生只能参与4次，单日只能参与3次）。  4. 允许多次领取时，活动触发接口需要传入out_biz_no来配合。
     *
     * @return self
     */
    public function setSendFreqency($sendFreqency)
    {
        $this->container['sendFreqency'] = $sendFreqency;

        return $this;
    }

    /**
     * Gets startTime
     *
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
     * Sets startTime
     *
     * @param string|null $startTime 活动开始时间，必须大于活动创建的时间。入参支持如下两种形式：  1. 填入固定时间，时间格式为 yyyy-MM-dd HH:mm:ss，如 2020-12-10 22:28:30  2. 填字符串 NowTime，表示创建即生效。
     *
     * @return self
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

        return $this;
    }

    /**
     * Gets totalMoney
     *
     * @return string|null
     */
    public function getTotalMoney()
    {
        return $this->container['totalMoney'];
    }

    /**
     * Sets totalMoney
     *
     * @param string|null $totalMoney 活动发放的现金总金额,最小金额1.00元,最大金额10000000.00元。每个红包的最大金额不允许超过200元,最小金额不得低于0.20元。 实际的金额限制可能会根据业务进行动态调整。
     *
     * @return self
     */
    public function setTotalMoney($totalMoney)
    {
        $this->container['totalMoney'] = $totalMoney;

        return $this;
    }

    /**
     * Gets totalNum
     *
     * @return string|null
     */
    public function getTotalNum()
    {
        return $this->container['totalNum'];
    }

    /**
     * Sets totalNum
     *
     * @param string|null $totalNum 红包发放个数，最小为 1 个，最大10000000个。 说明：不同的发放形式（即prize_type）会使得发放个数含义不同：  1. 若prize_type 为 fixed（固定金额），则每个用户领取的红包金额为total_money除以total_num得到固定金额。  2. 若prize_type为 random（随机金额），则每个用户领取的红包金额为total_money除以total_num得到的平均金额值的0.5~1.5倍。由于金额是随机的，在红包金额全部被领取完时，有可能total_num有所剩余、或者大于设置值的情况。
     *
     * @return self
     */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;

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


