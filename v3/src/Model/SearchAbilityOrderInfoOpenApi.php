<?php
/**
 * SearchAbilityOrderInfoOpenApi
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
 * SearchAbilityOrderInfoOpenApi Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SearchAbilityOrderInfoOpenApi implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SearchAbilityOrderInfoOpenApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accessType' => 'string',
        'appName' => 'string',
        'appStatus' => 'string',
        'auditStatus' => 'string',
        'bizId' => 'string',
        'boxStatus' => 'string',
        'brandTemplateId' => 'string',
        'dataKey' => 'string',
        'gmtModified' => 'string',
        'id' => 'string',
        'isOldData' => 'bool',
        'majorStatus' => 'string',
        'onlineTime' => 'string',
        'openStatus' => 'bool',
        'operator' => 'string',
        'rejectReason' => 'string',
        'sceneCode' => 'string',
        'sceneName' => 'string',
        'searchAppId' => 'string',
        'sepcCode' => 'string',
        'serviceCode' => 'string',
        'subServiceDesc' => 'string',
        'subServiceName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'accessType' => null,
        'appName' => null,
        'appStatus' => null,
        'auditStatus' => null,
        'bizId' => null,
        'boxStatus' => null,
        'brandTemplateId' => null,
        'dataKey' => null,
        'gmtModified' => null,
        'id' => null,
        'isOldData' => null,
        'majorStatus' => null,
        'onlineTime' => null,
        'openStatus' => null,
        'operator' => null,
        'rejectReason' => null,
        'sceneCode' => null,
        'sceneName' => null,
        'searchAppId' => null,
        'sepcCode' => null,
        'serviceCode' => null,
        'subServiceDesc' => null,
        'subServiceName' => null
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
        'accessType' => 'access_type',
        'appName' => 'app_name',
        'appStatus' => 'app_status',
        'auditStatus' => 'audit_status',
        'bizId' => 'biz_id',
        'boxStatus' => 'box_status',
        'brandTemplateId' => 'brand_template_id',
        'dataKey' => 'data_key',
        'gmtModified' => 'gmt_modified',
        'id' => 'id',
        'isOldData' => 'is_old_data',
        'majorStatus' => 'major_status',
        'onlineTime' => 'online_time',
        'openStatus' => 'open_status',
        'operator' => 'operator',
        'rejectReason' => 'reject_reason',
        'sceneCode' => 'scene_code',
        'sceneName' => 'scene_name',
        'searchAppId' => 'search_app_id',
        'sepcCode' => 'sepc_code',
        'serviceCode' => 'service_code',
        'subServiceDesc' => 'sub_service_desc',
        'subServiceName' => 'sub_service_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accessType' => 'setAccessType',
        'appName' => 'setAppName',
        'appStatus' => 'setAppStatus',
        'auditStatus' => 'setAuditStatus',
        'bizId' => 'setBizId',
        'boxStatus' => 'setBoxStatus',
        'brandTemplateId' => 'setBrandTemplateId',
        'dataKey' => 'setDataKey',
        'gmtModified' => 'setGmtModified',
        'id' => 'setId',
        'isOldData' => 'setIsOldData',
        'majorStatus' => 'setMajorStatus',
        'onlineTime' => 'setOnlineTime',
        'openStatus' => 'setOpenStatus',
        'operator' => 'setOperator',
        'rejectReason' => 'setRejectReason',
        'sceneCode' => 'setSceneCode',
        'sceneName' => 'setSceneName',
        'searchAppId' => 'setSearchAppId',
        'sepcCode' => 'setSepcCode',
        'serviceCode' => 'setServiceCode',
        'subServiceDesc' => 'setSubServiceDesc',
        'subServiceName' => 'setSubServiceName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accessType' => 'getAccessType',
        'appName' => 'getAppName',
        'appStatus' => 'getAppStatus',
        'auditStatus' => 'getAuditStatus',
        'bizId' => 'getBizId',
        'boxStatus' => 'getBoxStatus',
        'brandTemplateId' => 'getBrandTemplateId',
        'dataKey' => 'getDataKey',
        'gmtModified' => 'getGmtModified',
        'id' => 'getId',
        'isOldData' => 'getIsOldData',
        'majorStatus' => 'getMajorStatus',
        'onlineTime' => 'getOnlineTime',
        'openStatus' => 'getOpenStatus',
        'operator' => 'getOperator',
        'rejectReason' => 'getRejectReason',
        'sceneCode' => 'getSceneCode',
        'sceneName' => 'getSceneName',
        'searchAppId' => 'getSearchAppId',
        'sepcCode' => 'getSepcCode',
        'serviceCode' => 'getServiceCode',
        'subServiceDesc' => 'getSubServiceDesc',
        'subServiceName' => 'getSubServiceName'
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
        $this->container['accessType'] = $data['accessType'] ?? null;
        $this->container['appName'] = $data['appName'] ?? null;
        $this->container['appStatus'] = $data['appStatus'] ?? null;
        $this->container['auditStatus'] = $data['auditStatus'] ?? null;
        $this->container['bizId'] = $data['bizId'] ?? null;
        $this->container['boxStatus'] = $data['boxStatus'] ?? null;
        $this->container['brandTemplateId'] = $data['brandTemplateId'] ?? null;
        $this->container['dataKey'] = $data['dataKey'] ?? null;
        $this->container['gmtModified'] = $data['gmtModified'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['isOldData'] = $data['isOldData'] ?? null;
        $this->container['majorStatus'] = $data['majorStatus'] ?? null;
        $this->container['onlineTime'] = $data['onlineTime'] ?? null;
        $this->container['openStatus'] = $data['openStatus'] ?? null;
        $this->container['operator'] = $data['operator'] ?? null;
        $this->container['rejectReason'] = $data['rejectReason'] ?? null;
        $this->container['sceneCode'] = $data['sceneCode'] ?? null;
        $this->container['sceneName'] = $data['sceneName'] ?? null;
        $this->container['searchAppId'] = $data['searchAppId'] ?? null;
        $this->container['sepcCode'] = $data['sepcCode'] ?? null;
        $this->container['serviceCode'] = $data['serviceCode'] ?? null;
        $this->container['subServiceDesc'] = $data['subServiceDesc'] ?? null;
        $this->container['subServiceName'] = $data['subServiceName'] ?? null;
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
     * Gets accessType
     *
     * @return string|null
     */
    public function getAccessType()
    {
        return $this->container['accessType'];
    }

    /**
     * Sets accessType
     *
     * @param string|null $accessType 申请单类型
     *
     * @return self
     */
    public function setAccessType($accessType)
    {
        $this->container['accessType'] = $accessType;

        return $this;
    }

    /**
     * Gets appName
     *
     * @return string|null
     */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
     * Sets appName
     *
     * @param string|null $appName 小程序名称
     *
     * @return self
     */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;

        return $this;
    }

    /**
     * Gets appStatus
     *
     * @return string|null
     */
    public function getAppStatus()
    {
        return $this->container['appStatus'];
    }

    /**
     * Sets appStatus
     *
     * @param string|null $appStatus 小程序状态
     *
     * @return self
     */
    public function setAppStatus($appStatus)
    {
        $this->container['appStatus'] = $appStatus;

        return $this;
    }

    /**
     * Gets auditStatus
     *
     * @return string|null
     */
    public function getAuditStatus()
    {
        return $this->container['auditStatus'];
    }

    /**
     * Sets auditStatus
     *
     * @param string|null $auditStatus 审核状态
     *
     * @return self
     */
    public function setAuditStatus($auditStatus)
    {
        $this->container['auditStatus'] = $auditStatus;

        return $this;
    }

    /**
     * Gets bizId
     *
     * @return string|null
     */
    public function getBizId()
    {
        return $this->container['bizId'];
    }

    /**
     * Sets bizId
     *
     * @param string|null $bizId 运营申请单详情biz_id
     *
     * @return self
     */
    public function setBizId($bizId)
    {
        $this->container['bizId'] = $bizId;

        return $this;
    }

    /**
     * Gets boxStatus
     *
     * @return string|null
     */
    public function getBoxStatus()
    {
        return $this->container['boxStatus'];
    }

    /**
     * Sets boxStatus
     *
     * @param string|null $boxStatus 上架状态
     *
     * @return self
     */
    public function setBoxStatus($boxStatus)
    {
        $this->container['boxStatus'] = $boxStatus;

        return $this;
    }

    /**
     * Gets brandTemplateId
     *
     * @return string|null
     */
    public function getBrandTemplateId()
    {
        return $this->container['brandTemplateId'];
    }

    /**
     * Sets brandTemplateId
     *
     * @param string|null $brandTemplateId 品牌模板id
     *
     * @return self
     */
    public function setBrandTemplateId($brandTemplateId)
    {
        $this->container['brandTemplateId'] = $brandTemplateId;

        return $this;
    }

    /**
     * Gets dataKey
     *
     * @return string|null
     */
    public function getDataKey()
    {
        return $this->container['dataKey'];
    }

    /**
     * Sets dataKey
     *
     * @param string|null $dataKey 二级服务唯一标识
     *
     * @return self
     */
    public function setDataKey($dataKey)
    {
        $this->container['dataKey'] = $dataKey;

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
     * @param string|null $gmtModified 最近更新时间
     *
     * @return self
     */
    public function setGmtModified($gmtModified)
    {
        $this->container['gmtModified'] = $gmtModified;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id 唯一id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets isOldData
     *
     * @return bool|null
     */
    public function getIsOldData()
    {
        return $this->container['isOldData'];
    }

    /**
     * Sets isOldData
     *
     * @param bool|null $isOldData 是否老工单
     *
     * @return self
     */
    public function setIsOldData($isOldData)
    {
        $this->container['isOldData'] = $isOldData;

        return $this;
    }

    /**
     * Gets majorStatus
     *
     * @return string|null
     */
    public function getMajorStatus()
    {
        return $this->container['majorStatus'];
    }

    /**
     * Sets majorStatus
     *
     * @param string|null $majorStatus 服务主状态
     *
     * @return self
     */
    public function setMajorStatus($majorStatus)
    {
        $this->container['majorStatus'] = $majorStatus;

        return $this;
    }

    /**
     * Gets onlineTime
     *
     * @return string|null
     */
    public function getOnlineTime()
    {
        return $this->container['onlineTime'];
    }

    /**
     * Sets onlineTime
     *
     * @param string|null $onlineTime 上架时间
     *
     * @return self
     */
    public function setOnlineTime($onlineTime)
    {
        $this->container['onlineTime'] = $onlineTime;

        return $this;
    }

    /**
     * Gets openStatus
     *
     * @return bool|null
     */
    public function getOpenStatus()
    {
        return $this->container['openStatus'];
    }

    /**
     * Sets openStatus
     *
     * @param bool|null $openStatus 小程序可见性
     *
     * @return self
     */
    public function setOpenStatus($openStatus)
    {
        $this->container['openStatus'] = $openStatus;

        return $this;
    }

    /**
     * Gets operator
     *
     * @return string|null
     */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
     * Sets operator
     *
     * @param string|null $operator 下架操作者
     *
     * @return self
     */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;

        return $this;
    }

    /**
     * Gets rejectReason
     *
     * @return string|null
     */
    public function getRejectReason()
    {
        return $this->container['rejectReason'];
    }

    /**
     * Sets rejectReason
     *
     * @param string|null $rejectReason 驳回原因
     *
     * @return self
     */
    public function setRejectReason($rejectReason)
    {
        $this->container['rejectReason'] = $rejectReason;

        return $this;
    }

    /**
     * Gets sceneCode
     *
     * @return string|null
     */
    public function getSceneCode()
    {
        return $this->container['sceneCode'];
    }

    /**
     * Sets sceneCode
     *
     * @param string|null $sceneCode 场景码
     *
     * @return self
     */
    public function setSceneCode($sceneCode)
    {
        $this->container['sceneCode'] = $sceneCode;

        return $this;
    }

    /**
     * Gets sceneName
     *
     * @return string|null
     */
    public function getSceneName()
    {
        return $this->container['sceneName'];
    }

    /**
     * Sets sceneName
     *
     * @param string|null $sceneName 场景名称
     *
     * @return self
     */
    public function setSceneName($sceneName)
    {
        $this->container['sceneName'] = $sceneName;

        return $this;
    }

    /**
     * Gets searchAppId
     *
     * @return string|null
     */
    public function getSearchAppId()
    {
        return $this->container['searchAppId'];
    }

    /**
     * Sets searchAppId
     *
     * @param string|null $searchAppId 小程序id
     *
     * @return self
     */
    public function setSearchAppId($searchAppId)
    {
        $this->container['searchAppId'] = $searchAppId;

        return $this;
    }

    /**
     * Gets sepcCode
     *
     * @return string|null
     */
    public function getSepcCode()
    {
        return $this->container['sepcCode'];
    }

    /**
     * Sets sepcCode
     *
     * @param string|null $sepcCode 应用标识
     *
     * @return self
     */
    public function setSepcCode($sepcCode)
    {
        $this->container['sepcCode'] = $sepcCode;

        return $this;
    }

    /**
     * Gets serviceCode
     *
     * @return string|null
     */
    public function getServiceCode()
    {
        return $this->container['serviceCode'];
    }

    /**
     * Sets serviceCode
     *
     * @param string|null $serviceCode 服务码
     *
     * @return self
     */
    public function setServiceCode($serviceCode)
    {
        $this->container['serviceCode'] = $serviceCode;

        return $this;
    }

    /**
     * Gets subServiceDesc
     *
     * @return string|null
     */
    public function getSubServiceDesc()
    {
        return $this->container['subServiceDesc'];
    }

    /**
     * Sets subServiceDesc
     *
     * @param string|null $subServiceDesc 子功能描述
     *
     * @return self
     */
    public function setSubServiceDesc($subServiceDesc)
    {
        $this->container['subServiceDesc'] = $subServiceDesc;

        return $this;
    }

    /**
     * Gets subServiceName
     *
     * @return string|null
     */
    public function getSubServiceName()
    {
        return $this->container['subServiceName'];
    }

    /**
     * Sets subServiceName
     *
     * @param string|null $subServiceName 子功能名称
     *
     * @return self
     */
    public function setSubServiceName($subServiceName)
    {
        $this->container['subServiceName'] = $subServiceName;

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


