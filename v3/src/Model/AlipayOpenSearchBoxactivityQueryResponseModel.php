<?php
/**
 * AlipayOpenSearchBoxactivityQueryResponseModel
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
 * AlipayOpenSearchBoxactivityQueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenSearchBoxactivityQueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenSearchBoxactivityQueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'backgroundWord' => 'string',
        'backgroundWordInfo' => '\Alipay\OpenAPISDK\Model\BackgroundWordInfo',
        'boxActivityId' => 'string',
        'boxId' => 'string',
        'endTime' => 'string',
        'failReason' => 'string',
        'gmtModified' => 'string',
        'materialType' => 'string',
        'materialUrl' => 'string',
        'orientedRule' => '\Alipay\OpenAPISDK\Model\DeliveryOrientedRuleInfo',
        'runStatus' => 'string',
        'startTime' => 'string',
        'status' => 'string',
        'targetAppid' => 'string',
        'targetAppname' => 'string',
        'targetRegions' => '\Alipay\OpenAPISDK\Model\DeliveryTargetRegion[]',
        'title' => 'string',
        'videoInfo' => '\Alipay\OpenAPISDK\Model\SearchBoxActivityVideoInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'backgroundWord' => null,
        'backgroundWordInfo' => null,
        'boxActivityId' => null,
        'boxId' => null,
        'endTime' => null,
        'failReason' => null,
        'gmtModified' => null,
        'materialType' => null,
        'materialUrl' => null,
        'orientedRule' => null,
        'runStatus' => null,
        'startTime' => null,
        'status' => null,
        'targetAppid' => null,
        'targetAppname' => null,
        'targetRegions' => null,
        'title' => null,
        'videoInfo' => null
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
        'backgroundWord' => 'background_word',
        'backgroundWordInfo' => 'background_word_info',
        'boxActivityId' => 'box_activity_id',
        'boxId' => 'box_id',
        'endTime' => 'end_time',
        'failReason' => 'fail_reason',
        'gmtModified' => 'gmt_modified',
        'materialType' => 'material_type',
        'materialUrl' => 'material_url',
        'orientedRule' => 'oriented_rule',
        'runStatus' => 'run_status',
        'startTime' => 'start_time',
        'status' => 'status',
        'targetAppid' => 'target_appid',
        'targetAppname' => 'target_appname',
        'targetRegions' => 'target_regions',
        'title' => 'title',
        'videoInfo' => 'video_info'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'backgroundWord' => 'setBackgroundWord',
        'backgroundWordInfo' => 'setBackgroundWordInfo',
        'boxActivityId' => 'setBoxActivityId',
        'boxId' => 'setBoxId',
        'endTime' => 'setEndTime',
        'failReason' => 'setFailReason',
        'gmtModified' => 'setGmtModified',
        'materialType' => 'setMaterialType',
        'materialUrl' => 'setMaterialUrl',
        'orientedRule' => 'setOrientedRule',
        'runStatus' => 'setRunStatus',
        'startTime' => 'setStartTime',
        'status' => 'setStatus',
        'targetAppid' => 'setTargetAppid',
        'targetAppname' => 'setTargetAppname',
        'targetRegions' => 'setTargetRegions',
        'title' => 'setTitle',
        'videoInfo' => 'setVideoInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'backgroundWord' => 'getBackgroundWord',
        'backgroundWordInfo' => 'getBackgroundWordInfo',
        'boxActivityId' => 'getBoxActivityId',
        'boxId' => 'getBoxId',
        'endTime' => 'getEndTime',
        'failReason' => 'getFailReason',
        'gmtModified' => 'getGmtModified',
        'materialType' => 'getMaterialType',
        'materialUrl' => 'getMaterialUrl',
        'orientedRule' => 'getOrientedRule',
        'runStatus' => 'getRunStatus',
        'startTime' => 'getStartTime',
        'status' => 'getStatus',
        'targetAppid' => 'getTargetAppid',
        'targetAppname' => 'getTargetAppname',
        'targetRegions' => 'getTargetRegions',
        'title' => 'getTitle',
        'videoInfo' => 'getVideoInfo'
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
        $this->container['backgroundWord'] = $data['backgroundWord'] ?? null;
        $this->container['backgroundWordInfo'] = $data['backgroundWordInfo'] ?? null;
        $this->container['boxActivityId'] = $data['boxActivityId'] ?? null;
        $this->container['boxId'] = $data['boxId'] ?? null;
        $this->container['endTime'] = $data['endTime'] ?? null;
        $this->container['failReason'] = $data['failReason'] ?? null;
        $this->container['gmtModified'] = $data['gmtModified'] ?? null;
        $this->container['materialType'] = $data['materialType'] ?? null;
        $this->container['materialUrl'] = $data['materialUrl'] ?? null;
        $this->container['orientedRule'] = $data['orientedRule'] ?? null;
        $this->container['runStatus'] = $data['runStatus'] ?? null;
        $this->container['startTime'] = $data['startTime'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['targetAppid'] = $data['targetAppid'] ?? null;
        $this->container['targetAppname'] = $data['targetAppname'] ?? null;
        $this->container['targetRegions'] = $data['targetRegions'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['videoInfo'] = $data['videoInfo'] ?? null;
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
     * Gets backgroundWord
     *
     * @return string|null
     */
    public function getBackgroundWord()
    {
        return $this->container['backgroundWord'];
    }

    /**
     * Sets backgroundWord
     *
     * @param string|null $backgroundWord 底纹词
     *
     * @return self
     */
    public function setBackgroundWord($backgroundWord)
    {
        $this->container['backgroundWord'] = $backgroundWord;

        return $this;
    }

    /**
     * Gets backgroundWordInfo
     *
     * @return \Alipay\OpenAPISDK\Model\BackgroundWordInfo|null
     */
    public function getBackgroundWordInfo()
    {
        return $this->container['backgroundWordInfo'];
    }

    /**
     * Sets backgroundWordInfo
     *
     * @param \Alipay\OpenAPISDK\Model\BackgroundWordInfo|null $backgroundWordInfo backgroundWordInfo
     *
     * @return self
     */
    public function setBackgroundWordInfo($backgroundWordInfo)
    {
        $this->container['backgroundWordInfo'] = $backgroundWordInfo;

        return $this;
    }

    /**
     * Gets boxActivityId
     *
     * @return string|null
     */
    public function getBoxActivityId()
    {
        return $this->container['boxActivityId'];
    }

    /**
     * Sets boxActivityId
     *
     * @param string|null $boxActivityId 搜索直达活动id
     *
     * @return self
     */
    public function setBoxActivityId($boxActivityId)
    {
        $this->container['boxActivityId'] = $boxActivityId;

        return $this;
    }

    /**
     * Gets boxId
     *
     * @return string|null
     */
    public function getBoxId()
    {
        return $this->container['boxId'];
    }

    /**
     * Sets boxId
     *
     * @param string|null $boxId 搜索直达id
     *
     * @return self
     */
    public function setBoxId($boxId)
    {
        $this->container['boxId'] = $boxId;

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
     * @param string|null $endTime 活动结束时间
     *
     * @return self
     */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;

        return $this;
    }

    /**
     * Gets failReason
     *
     * @return string|null
     */
    public function getFailReason()
    {
        return $this->container['failReason'];
    }

    /**
     * Sets failReason
     *
     * @param string|null $failReason 审核失败原因
     *
     * @return self
     */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;

        return $this;
    }

    /**
     * Gets gmtModified
     *
     * @return string|null
     */
    public function getGmtModified()
    {
        return $this->container['gmtModified'];
    }

    /**
     * Sets gmtModified
     *
     * @param string|null $gmtModified 更新时间
     *
     * @return self
     */
    public function setGmtModified($gmtModified)
    {
        $this->container['gmtModified'] = $gmtModified;

        return $this;
    }

    /**
     * Gets materialType
     *
     * @return string|null
     */
    public function getMaterialType()
    {
        return $this->container['materialType'];
    }

    /**
     * Sets materialType
     *
     * @param string|null $materialType IMAGE-图片/VIDEO-视频
     *
     * @return self
     */
    public function setMaterialType($materialType)
    {
        $this->container['materialType'] = $materialType;

        return $this;
    }

    /**
     * Gets materialUrl
     *
     * @return string|null
     */
    public function getMaterialUrl()
    {
        return $this->container['materialUrl'];
    }

    /**
     * Sets materialUrl
     *
     * @param string|null $materialUrl 当material_type=\"IMAGE\"时，为图片url；当material_type=\"VIDEO\"时，为视频url
     *
     * @return self
     */
    public function setMaterialUrl($materialUrl)
    {
        $this->container['materialUrl'] = $materialUrl;

        return $this;
    }

    /**
     * Gets orientedRule
     *
     * @return \Alipay\OpenAPISDK\Model\DeliveryOrientedRuleInfo|null
     */
    public function getOrientedRule()
    {
        return $this->container['orientedRule'];
    }

    /**
     * Sets orientedRule
     *
     * @param \Alipay\OpenAPISDK\Model\DeliveryOrientedRuleInfo|null $orientedRule orientedRule
     *
     * @return self
     */
    public function setOrientedRule($orientedRule)
    {
        $this->container['orientedRule'] = $orientedRule;

        return $this;
    }

    /**
     * Gets runStatus
     *
     * @return string|null
     */
    public function getRunStatus()
    {
        return $this->container['runStatus'];
    }

    /**
     * Sets runStatus
     *
     * @param string|null $runStatus 运行状态，INITIAL-初始/ONLINE-已上架/EXPIRE-已失效/OFFLINE-已下架
     *
     * @return self
     */
    public function setRunStatus($runStatus)
    {
        $this->container['runStatus'] = $runStatus;

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
     * @param string|null $startTime 活动开始时间
     *
     * @return self
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

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
     * @param string|null $status 配置状态，INITIAL-初始/AUDIT-审核中/CANCEL-已取消/ONLINE-已上架/REJECT-驳回/OFFLINE-已下架/EXPIRE-已失效
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets targetAppid
     *
     * @return string|null
     */
    public function getTargetAppid()
    {
        return $this->container['targetAppid'];
    }

    /**
     * Sets targetAppid
     *
     * @param string|null $targetAppid 跳转应用ID
     *
     * @return self
     */
    public function setTargetAppid($targetAppid)
    {
        $this->container['targetAppid'] = $targetAppid;

        return $this;
    }

    /**
     * Gets targetAppname
     *
     * @return string|null
     */
    public function getTargetAppname()
    {
        return $this->container['targetAppname'];
    }

    /**
     * Sets targetAppname
     *
     * @param string|null $targetAppname 模板名称
     *
     * @return self
     */
    public function setTargetAppname($targetAppname)
    {
        $this->container['targetAppname'] = $targetAppname;

        return $this;
    }

    /**
     * Gets targetRegions
     *
     * @return \Alipay\OpenAPISDK\Model\DeliveryTargetRegion[]|null
     */
    public function getTargetRegions()
    {
        return $this->container['targetRegions'];
    }

    /**
     * Sets targetRegions
     *
     * @param \Alipay\OpenAPISDK\Model\DeliveryTargetRegion[]|null $targetRegions 投放目标区域
     *
     * @return self
     */
    public function setTargetRegions($targetRegions)
    {
        $this->container['targetRegions'] = $targetRegions;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title 活动标题
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets videoInfo
     *
     * @return \Alipay\OpenAPISDK\Model\SearchBoxActivityVideoInfo|null
     */
    public function getVideoInfo()
    {
        return $this->container['videoInfo'];
    }

    /**
     * Sets videoInfo
     *
     * @param \Alipay\OpenAPISDK\Model\SearchBoxActivityVideoInfo|null $videoInfo videoInfo
     *
     * @return self
     */
    public function setVideoInfo($videoInfo)
    {
        $this->container['videoInfo'] = $videoInfo;

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


