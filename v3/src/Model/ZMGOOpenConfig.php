<?php
/**
 * ZMGOOpenConfig
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
 * ZMGOOpenConfig Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ZMGOOpenConfig implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ZMGOOpenConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'applyButtonDesc' => 'string',
        'appointDate' => 'string',
        'cardColorScheme' => 'string',
        'customOpenTipList' => 'string',
        'customOpenTips' => 'string',
        'freezeAmount' => 'string',
        'minSignInterval' => 'string',
        'periodMode' => 'string',
        'periodTime' => 'string',
        'showSignSuccessPage' => 'bool',
        'signAgainSchema' => 'string',
        'signSuccessTaskButtonDesc' => 'string',
        'supportExpireDeferral' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'applyButtonDesc' => null,
        'appointDate' => null,
        'cardColorScheme' => null,
        'customOpenTipList' => null,
        'customOpenTips' => null,
        'freezeAmount' => null,
        'minSignInterval' => null,
        'periodMode' => null,
        'periodTime' => null,
        'showSignSuccessPage' => null,
        'signAgainSchema' => null,
        'signSuccessTaskButtonDesc' => null,
        'supportExpireDeferral' => null
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
        'applyButtonDesc' => 'apply_button_desc',
        'appointDate' => 'appoint_date',
        'cardColorScheme' => 'card_color_scheme',
        'customOpenTipList' => 'custom_open_tip_list',
        'customOpenTips' => 'custom_open_tips',
        'freezeAmount' => 'freeze_amount',
        'minSignInterval' => 'min_sign_interval',
        'periodMode' => 'period_mode',
        'periodTime' => 'period_time',
        'showSignSuccessPage' => 'show_sign_success_page',
        'signAgainSchema' => 'sign_again_schema',
        'signSuccessTaskButtonDesc' => 'sign_success_task_button_desc',
        'supportExpireDeferral' => 'support_expire_deferral'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'applyButtonDesc' => 'setApplyButtonDesc',
        'appointDate' => 'setAppointDate',
        'cardColorScheme' => 'setCardColorScheme',
        'customOpenTipList' => 'setCustomOpenTipList',
        'customOpenTips' => 'setCustomOpenTips',
        'freezeAmount' => 'setFreezeAmount',
        'minSignInterval' => 'setMinSignInterval',
        'periodMode' => 'setPeriodMode',
        'periodTime' => 'setPeriodTime',
        'showSignSuccessPage' => 'setShowSignSuccessPage',
        'signAgainSchema' => 'setSignAgainSchema',
        'signSuccessTaskButtonDesc' => 'setSignSuccessTaskButtonDesc',
        'supportExpireDeferral' => 'setSupportExpireDeferral'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'applyButtonDesc' => 'getApplyButtonDesc',
        'appointDate' => 'getAppointDate',
        'cardColorScheme' => 'getCardColorScheme',
        'customOpenTipList' => 'getCustomOpenTipList',
        'customOpenTips' => 'getCustomOpenTips',
        'freezeAmount' => 'getFreezeAmount',
        'minSignInterval' => 'getMinSignInterval',
        'periodMode' => 'getPeriodMode',
        'periodTime' => 'getPeriodTime',
        'showSignSuccessPage' => 'getShowSignSuccessPage',
        'signAgainSchema' => 'getSignAgainSchema',
        'signSuccessTaskButtonDesc' => 'getSignSuccessTaskButtonDesc',
        'supportExpireDeferral' => 'getSupportExpireDeferral'
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
        $this->container['applyButtonDesc'] = $data['applyButtonDesc'] ?? null;
        $this->container['appointDate'] = $data['appointDate'] ?? null;
        $this->container['cardColorScheme'] = $data['cardColorScheme'] ?? null;
        $this->container['customOpenTipList'] = $data['customOpenTipList'] ?? null;
        $this->container['customOpenTips'] = $data['customOpenTips'] ?? null;
        $this->container['freezeAmount'] = $data['freezeAmount'] ?? null;
        $this->container['minSignInterval'] = $data['minSignInterval'] ?? null;
        $this->container['periodMode'] = $data['periodMode'] ?? null;
        $this->container['periodTime'] = $data['periodTime'] ?? null;
        $this->container['showSignSuccessPage'] = $data['showSignSuccessPage'] ?? null;
        $this->container['signAgainSchema'] = $data['signAgainSchema'] ?? null;
        $this->container['signSuccessTaskButtonDesc'] = $data['signSuccessTaskButtonDesc'] ?? null;
        $this->container['supportExpireDeferral'] = $data['supportExpireDeferral'] ?? null;
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
     * Gets applyButtonDesc
     *
     * @return string|null
     */
    public function getApplyButtonDesc()
    {
        return $this->container['applyButtonDesc'];
    }

    /**
     * Sets applyButtonDesc
     *
     * @param string|null $applyButtonDesc 开通页按钮文案描述;传入内容后开通页点击开通按钮展示文案会使用该字段传入内容
     *
     * @return self
     */
    public function setApplyButtonDesc($applyButtonDesc)
    {
        $this->container['applyButtonDesc'] = $applyButtonDesc;

        return $this;
    }

    /**
     * Gets appointDate
     *
     * @return string|null
     */
    public function getAppointDate()
    {
        return $this->container['appointDate'];
    }

    /**
     * Sets appointDate
     *
     * @param string|null $appointDate 固定到期时间或每月的第几日。 （1）当period_mode为APPOINT_DATE时，取值固定日期，如\"2022-06-01 00:00:00\"，表示协议在6月1号0点到期; （2）当period_mode为FIX_DATE，取值\"3\"，表示协议在period_time个月后的3号到期。
     *
     * @return self
     */
    public function setAppointDate($appointDate)
    {
        $this->container['appointDate'] = $appointDate;

        return $this;
    }

    /**
     * Gets cardColorScheme
     *
     * @return string|null
     */
    public function getCardColorScheme()
    {
        return $this->container['cardColorScheme'];
    }

    /**
     * Sets cardColorScheme
     *
     * @param string|null $cardColorScheme 芝麻GO卡颜色。 C_BLACK(\"C_BLACK\", \"黑色\"), C_RED(\"C_RED\", \"红色\"), C_GREEN(\"C_GREEN\", \"绿色\"), C_LIGHT_BLUE(\"C_LIGHT_BLUE\", \"浅蓝色\"), C_BLUE(\"C_BLUE\", \"蓝色\"), C_ORANGE(\"C_ORANGE\",\"橙色\"), C_PURPLE(\"C_PURPLE\", \"紫色\");
     *
     * @return self
     */
    public function setCardColorScheme($cardColorScheme)
    {
        $this->container['cardColorScheme'] = $cardColorScheme;

        return $this;
    }

    /**
     * Gets customOpenTipList
     *
     * @return string|null
     */
    public function getCustomOpenTipList()
    {
        return $this->container['customOpenTipList'];
    }

    /**
     * Sets customOpenTipList
     *
     * @param string|null $customOpenTipList 未完成任务规则详情
     *
     * @return self
     */
    public function setCustomOpenTipList($customOpenTipList)
    {
        $this->container['customOpenTipList'] = $customOpenTipList;

        return $this;
    }

    /**
     * Gets customOpenTips
     *
     * @return string|null
     */
    public function getCustomOpenTips()
    {
        return $this->container['customOpenTips'];
    }

    /**
     * Sets customOpenTips
     *
     * @param string|null $customOpenTips 规则详情
     *
     * @return self
     */
    public function setCustomOpenTips($customOpenTips)
    {
        $this->container['customOpenTips'] = $customOpenTips;

        return $this;
    }

    /**
     * Gets freezeAmount
     *
     * @return string|null
     */
    public function getFreezeAmount()
    {
        return $this->container['freezeAmount'];
    }

    /**
     * Sets freezeAmount
     *
     * @param string|null $freezeAmount 担保金额额度，单位:元
     *
     * @return self
     */
    public function setFreezeAmount($freezeAmount)
    {
        $this->container['freezeAmount'] = $freezeAmount;

        return $this;
    }

    /**
     * Gets minSignInterval
     *
     * @return string|null
     */
    public function getMinSignInterval()
    {
        return $this->container['minSignInterval'];
    }

    /**
     * Sets minSignInterval
     *
     * @param string|null $minSignInterval 用户签约间隔时间，单位天
     *
     * @return self
     */
    public function setMinSignInterval($minSignInterval)
    {
        $this->container['minSignInterval'] = $minSignInterval;

        return $this;
    }

    /**
     * Gets periodMode
     *
     * @return string|null
     */
    public function getPeriodMode()
    {
        return $this->container['periodMode'];
    }

    /**
     * Sets periodMode
     *
     * @param string|null $periodMode 芝麻GO义务到期的计算方式。包括： RELATIVE_DATE(\"RELATIVE_DATE\", \"相对日期\"), ABSOLATE_DATE(\"ABSOLATE_DATE\", \"绝对日期(当日开始计算)\"), ABSOLUTE_PLUS_1_DATE(\"ABSOLUTE_PLUS_1_DATE\", \"绝对日期(次日开始计算)\"), FIX_DATE(\"FIX_DATE\", \"固定日期\"), APPOINT_DATE(\"APPOINT_DATE\", \"指定日期\"),
     *
     * @return self
     */
    public function setPeriodMode($periodMode)
    {
        $this->container['periodMode'] = $periodMode;

        return $this;
    }

    /**
     * Gets periodTime
     *
     * @return string|null
     */
    public function getPeriodTime()
    {
        return $this->container['periodTime'];
    }

    /**
     * Sets periodTime
     *
     * @param string|null $periodTime 周期时长 当period_mode为RELATIVE_DATE、ABSOLATE_DATE、ABSOLUTE_PLUS_1_DATE、FIX_DATE时必填
     *
     * @return self
     */
    public function setPeriodTime($periodTime)
    {
        $this->container['periodTime'] = $periodTime;

        return $this;
    }

    /**
     * Gets showSignSuccessPage
     *
     * @return bool|null
     */
    public function getShowSignSuccessPage()
    {
        return $this->container['showSignSuccessPage'];
    }

    /**
     * Sets showSignSuccessPage
     *
     * @param bool|null $showSignSuccessPage 是否展示签约完成页
     *
     * @return self
     */
    public function setShowSignSuccessPage($showSignSuccessPage)
    {
        $this->container['showSignSuccessPage'] = $showSignSuccessPage;

        return $this;
    }

    /**
     * Gets signAgainSchema
     *
     * @return string|null
     */
    public function getSignAgainSchema()
    {
        return $this->container['signAgainSchema'];
    }

    /**
     * Sets signAgainSchema
     *
     * @param string|null $signAgainSchema 用户签约商户活动到期
     *
     * @return self
     */
    public function setSignAgainSchema($signAgainSchema)
    {
        $this->container['signAgainSchema'] = $signAgainSchema;

        return $this;
    }

    /**
     * Gets signSuccessTaskButtonDesc
     *
     * @return string|null
     */
    public function getSignSuccessTaskButtonDesc()
    {
        return $this->container['signSuccessTaskButtonDesc'];
    }

    /**
     * Sets signSuccessTaskButtonDesc
     *
     * @param string|null $signSuccessTaskButtonDesc 签约完成页任务按钮描述，当展示签约完成页=true的时候 改内容必填
     *
     * @return self
     */
    public function setSignSuccessTaskButtonDesc($signSuccessTaskButtonDesc)
    {
        $this->container['signSuccessTaskButtonDesc'] = $signSuccessTaskButtonDesc;

        return $this;
    }

    /**
     * Gets supportExpireDeferral
     *
     * @return bool|null
     * @deprecated
     */
    public function getSupportExpireDeferral()
    {
        return $this->container['supportExpireDeferral'];
    }

    /**
     * Sets supportExpireDeferral
     *
     * @param bool|null $supportExpireDeferral 是否支持延期特权，开启后用户可以在任务到期前进行延期。(该功能已停用，不建议开启使用。)
     *
     * @return self
     * @deprecated
     */
    public function setSupportExpireDeferral($supportExpireDeferral)
    {
        $this->container['supportExpireDeferral'] = $supportExpireDeferral;

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


