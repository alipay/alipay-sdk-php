<?php
/**
 * AlipayIserviceCcmOlsChatrecordQueryResponseModel
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
 * AlipayIserviceCcmOlsChatrecordQueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayIserviceCcmOlsChatrecordQueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayIserviceCcmOlsChatrecordQueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'agentId' => 'string',
        'agentName' => 'string',
        'categories' => 'string',
        'groupId' => 'string',
        'groupName' => 'string',
        'memo' => 'string',
        'messages' => '\Alipay\OpenAPISDK\Model\ChatMessage[]',
        'satisfaction' => 'string',
        'status' => 'string',
        'talkDuration' => 'int',
        'visitorProvince' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'agentId' => null,
        'agentName' => null,
        'categories' => null,
        'groupId' => null,
        'groupName' => null,
        'memo' => null,
        'messages' => null,
        'satisfaction' => null,
        'status' => null,
        'talkDuration' => null,
        'visitorProvince' => null
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
        'agentId' => 'agent_id',
        'agentName' => 'agent_name',
        'categories' => 'categories',
        'groupId' => 'group_id',
        'groupName' => 'group_name',
        'memo' => 'memo',
        'messages' => 'messages',
        'satisfaction' => 'satisfaction',
        'status' => 'status',
        'talkDuration' => 'talk_duration',
        'visitorProvince' => 'visitor_province'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agentId' => 'setAgentId',
        'agentName' => 'setAgentName',
        'categories' => 'setCategories',
        'groupId' => 'setGroupId',
        'groupName' => 'setGroupName',
        'memo' => 'setMemo',
        'messages' => 'setMessages',
        'satisfaction' => 'setSatisfaction',
        'status' => 'setStatus',
        'talkDuration' => 'setTalkDuration',
        'visitorProvince' => 'setVisitorProvince'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agentId' => 'getAgentId',
        'agentName' => 'getAgentName',
        'categories' => 'getCategories',
        'groupId' => 'getGroupId',
        'groupName' => 'getGroupName',
        'memo' => 'getMemo',
        'messages' => 'getMessages',
        'satisfaction' => 'getSatisfaction',
        'status' => 'getStatus',
        'talkDuration' => 'getTalkDuration',
        'visitorProvince' => 'getVisitorProvince'
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
        $this->container['agentId'] = $data['agentId'] ?? null;
        $this->container['agentName'] = $data['agentName'] ?? null;
        $this->container['categories'] = $data['categories'] ?? null;
        $this->container['groupId'] = $data['groupId'] ?? null;
        $this->container['groupName'] = $data['groupName'] ?? null;
        $this->container['memo'] = $data['memo'] ?? null;
        $this->container['messages'] = $data['messages'] ?? null;
        $this->container['satisfaction'] = $data['satisfaction'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['talkDuration'] = $data['talkDuration'] ?? null;
        $this->container['visitorProvince'] = $data['visitorProvince'] ?? null;
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
     * Gets agentId
     *
     * @return string|null
     */
    public function getAgentId()
    {
        return $this->container['agentId'];
    }

    /**
     * Sets agentId
     *
     * @param string|null $agentId 客服id
     *
     * @return self
     */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;

        return $this;
    }

    /**
     * Gets agentName
     *
     * @return string|null
     */
    public function getAgentName()
    {
        return $this->container['agentName'];
    }

    /**
     * Sets agentName
     *
     * @param string|null $agentName 客服昵称
     *
     * @return self
     */
    public function setAgentName($agentName)
    {
        $this->container['agentName'] = $agentName;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return string|null
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param string|null $categories 多个层级类目信息
     *
     * @return self
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets groupId
     *
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
     * Sets groupId
     *
     * @param string|null $groupId 在线技能组id
     *
     * @return self
     */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;

        return $this;
    }

    /**
     * Gets groupName
     *
     * @return string|null
     */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
     * Sets groupName
     *
     * @param string|null $groupName 在线技能组名称
     *
     * @return self
     */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string|null
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string|null $memo 备注信息
     *
     * @return self
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets messages
     *
     * @return \Alipay\OpenAPISDK\Model\ChatMessage[]|null
     */
    public function getMessages()
    {
        return $this->container['messages'];
    }

    /**
     * Sets messages
     *
     * @param \Alipay\OpenAPISDK\Model\ChatMessage[]|null $messages 聊天消息列表
     *
     * @return self
     */
    public function setMessages($messages)
    {
        $this->container['messages'] = $messages;

        return $this;
    }

    /**
     * Gets satisfaction
     *
     * @return string|null
     */
    public function getSatisfaction()
    {
        return $this->container['satisfaction'];
    }

    /**
     * Sets satisfaction
     *
     * @param string|null $satisfaction 满意度。 0：非常满意 1：满意 2：一般 3：不满意 4：非常不满意
     *
     * @return self
     */
    public function setSatisfaction($satisfaction)
    {
        $this->container['satisfaction'] = $satisfaction;

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
     * @param string|null $status 服务记录状态。1：待处理 2：暂存 3：完结 4：废除 5：无效 6：未知
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets talkDuration
     *
     * @return int|null
     */
    public function getTalkDuration()
    {
        return $this->container['talkDuration'];
    }

    /**
     * Sets talkDuration
     *
     * @param int|null $talkDuration 在线服务时长，单位秒
     *
     * @return self
     */
    public function setTalkDuration($talkDuration)
    {
        $this->container['talkDuration'] = $talkDuration;

        return $this;
    }

    /**
     * Gets visitorProvince
     *
     * @return string|null
     */
    public function getVisitorProvince()
    {
        return $this->container['visitorProvince'];
    }

    /**
     * Sets visitorProvince
     *
     * @param string|null $visitorProvince 访客归属地
     *
     * @return self
     */
    public function setVisitorProvince($visitorProvince)
    {
        $this->container['visitorProvince'] = $visitorProvince;

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


