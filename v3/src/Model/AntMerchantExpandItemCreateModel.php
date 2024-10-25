<?php
/**
 * AntMerchantExpandItemCreateModel
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
 * AntMerchantExpandItemCreateModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AntMerchantExpandItemCreateModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AntMerchantExpandItemCreateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'detailUrl' => 'string',
        'extInfo' => 'string',
        'externalItemId' => 'string',
        'frontCategoryId' => 'string',
        'labelList' => '\Alipay\OpenAPISDK\Model\ItemLabelCreateInfo[]',
        'mainPic' => 'string',
        'name' => 'string',
        'scene' => 'string',
        'skuList' => '\Alipay\OpenAPISDK\Model\ItemSkuCreateInfo[]',
        'targetId' => 'string',
        'targetType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'detailUrl' => null,
        'extInfo' => null,
        'externalItemId' => null,
        'frontCategoryId' => null,
        'labelList' => null,
        'mainPic' => null,
        'name' => null,
        'scene' => null,
        'skuList' => null,
        'targetId' => null,
        'targetType' => null
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
        'detailUrl' => 'detail_url',
        'extInfo' => 'ext_info',
        'externalItemId' => 'external_item_id',
        'frontCategoryId' => 'front_category_id',
        'labelList' => 'label_list',
        'mainPic' => 'main_pic',
        'name' => 'name',
        'scene' => 'scene',
        'skuList' => 'sku_list',
        'targetId' => 'target_id',
        'targetType' => 'target_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'detailUrl' => 'setDetailUrl',
        'extInfo' => 'setExtInfo',
        'externalItemId' => 'setExternalItemId',
        'frontCategoryId' => 'setFrontCategoryId',
        'labelList' => 'setLabelList',
        'mainPic' => 'setMainPic',
        'name' => 'setName',
        'scene' => 'setScene',
        'skuList' => 'setSkuList',
        'targetId' => 'setTargetId',
        'targetType' => 'setTargetType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'detailUrl' => 'getDetailUrl',
        'extInfo' => 'getExtInfo',
        'externalItemId' => 'getExternalItemId',
        'frontCategoryId' => 'getFrontCategoryId',
        'labelList' => 'getLabelList',
        'mainPic' => 'getMainPic',
        'name' => 'getName',
        'scene' => 'getScene',
        'skuList' => 'getSkuList',
        'targetId' => 'getTargetId',
        'targetType' => 'getTargetType'
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
        $this->container['detailUrl'] = $data['detailUrl'] ?? null;
        $this->container['extInfo'] = $data['extInfo'] ?? null;
        $this->container['externalItemId'] = $data['externalItemId'] ?? null;
        $this->container['frontCategoryId'] = $data['frontCategoryId'] ?? null;
        $this->container['labelList'] = $data['labelList'] ?? null;
        $this->container['mainPic'] = $data['mainPic'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['scene'] = $data['scene'] ?? null;
        $this->container['skuList'] = $data['skuList'] ?? null;
        $this->container['targetId'] = $data['targetId'] ?? null;
        $this->container['targetType'] = $data['targetType'] ?? null;
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
     * Gets detailUrl
     *
     * @return string|null
     */
    public function getDetailUrl()
    {
        return $this->container['detailUrl'];
    }

    /**
     * Sets detailUrl
     *
     * @param string|null $detailUrl 详情地址
     *
     * @return self
     */
    public function setDetailUrl($detailUrl)
    {
        $this->container['detailUrl'] = $detailUrl;

        return $this;
    }

    /**
     * Gets extInfo
     *
     * @return string|null
     */
    public function getExtInfo()
    {
        return $this->container['extInfo'];
    }

    /**
     * Sets extInfo
     *
     * @param string|null $extInfo 商品扩展信息：可以解析成 Map<String, String> 的 json string
     *
     * @return self
     */
    public function setExtInfo($extInfo)
    {
        $this->container['extInfo'] = $extInfo;

        return $this;
    }

    /**
     * Gets externalItemId
     *
     * @return string|null
     */
    public function getExternalItemId()
    {
        return $this->container['externalItemId'];
    }

    /**
     * Sets externalItemId
     *
     * @param string|null $externalItemId 外部商品ID
     *
     * @return self
     */
    public function setExternalItemId($externalItemId)
    {
        $this->container['externalItemId'] = $externalItemId;

        return $this;
    }

    /**
     * Gets frontCategoryId
     *
     * @return string|null
     */
    public function getFrontCategoryId()
    {
        return $this->container['frontCategoryId'];
    }

    /**
     * Sets frontCategoryId
     *
     * @param string|null $frontCategoryId 前台类目id：target_type + target_id 和 front_category_id 二选一
     *
     * @return self
     */
    public function setFrontCategoryId($frontCategoryId)
    {
        $this->container['frontCategoryId'] = $frontCategoryId;

        return $this;
    }

    /**
     * Gets labelList
     *
     * @return \Alipay\OpenAPISDK\Model\ItemLabelCreateInfo[]|null
     */
    public function getLabelList()
    {
        return $this->container['labelList'];
    }

    /**
     * Sets labelList
     *
     * @param \Alipay\OpenAPISDK\Model\ItemLabelCreateInfo[]|null $labelList 商品标签列表
     *
     * @return self
     */
    public function setLabelList($labelList)
    {
        $this->container['labelList'] = $labelList;

        return $this;
    }

    /**
     * Gets mainPic
     *
     * @return string|null
     */
    public function getMainPic()
    {
        return $this->container['mainPic'];
    }

    /**
     * Sets mainPic
     *
     * @param string|null $mainPic 主图地址
     *
     * @return self
     */
    public function setMainPic($mainPic)
    {
        $this->container['mainPic'] = $mainPic;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name 商品名称
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets scene
     *
     * @return string|null
     */
    public function getScene()
    {
        return $this->container['scene'];
    }

    /**
     * Sets scene
     *
     * @param string|null $scene 场景：GAS_CHARGE（加油）
     *
     * @return self
     */
    public function setScene($scene)
    {
        $this->container['scene'] = $scene;

        return $this;
    }

    /**
     * Gets skuList
     *
     * @return \Alipay\OpenAPISDK\Model\ItemSkuCreateInfo[]|null
     */
    public function getSkuList()
    {
        return $this->container['skuList'];
    }

    /**
     * Sets skuList
     *
     * @param \Alipay\OpenAPISDK\Model\ItemSkuCreateInfo[]|null $skuList 商品sku列表，至少有一个
     *
     * @return self
     */
    public function setSkuList($skuList)
    {
        $this->container['skuList'] = $skuList;

        return $this;
    }

    /**
     * Gets targetId
     *
     * @return string|null
     */
    public function getTargetId()
    {
        return $this->container['targetId'];
    }

    /**
     * Sets targetId
     *
     * @param string|null $targetId 商户归属主体id
     *
     * @return self
     */
    public function setTargetId($targetId)
    {
        $this->container['targetId'] = $targetId;

        return $this;
    }

    /**
     * Gets targetType
     *
     * @return string|null
     */
    public function getTargetType()
    {
        return $this->container['targetType'];
    }

    /**
     * Sets targetType
     *
     * @param string|null $targetType 商品归属主体类型：target_type + target_id 和 front_category_id 二选一    商品归属主体类型:  5: 店铺  4: 主站MID  3: 参与者  2: 角色  1: 联系人
     *
     * @return self
     */
    public function setTargetType($targetType)
    {
        $this->container['targetType'] = $targetType;

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


