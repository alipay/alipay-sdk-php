<?php
/**
 * SearchOrderDetailDataBaseItems
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
 * SearchOrderDetailDataBaseItems Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SearchOrderDetailDataBaseItems implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SearchOrderDetailDataBaseItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'canSearch' => 'string',
        'desc' => 'string',
        'img' => 'string',
        'keyWord' => 'string',
        'name' => 'string',
        'region' => 'string',
        'servCanSearch' => 'string',
        'servSearchKeywords' => 'string',
        'templateId' => 'string',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'canSearch' => null,
        'desc' => null,
        'img' => null,
        'keyWord' => null,
        'name' => null,
        'region' => null,
        'servCanSearch' => null,
        'servSearchKeywords' => null,
        'templateId' => null,
        'url' => null
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
        'canSearch' => 'can_search',
        'desc' => 'desc',
        'img' => 'img',
        'keyWord' => 'key_word',
        'name' => 'name',
        'region' => 'region',
        'servCanSearch' => 'serv_can_search',
        'servSearchKeywords' => 'serv_search_keywords',
        'templateId' => 'template_id',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'canSearch' => 'setCanSearch',
        'desc' => 'setDesc',
        'img' => 'setImg',
        'keyWord' => 'setKeyWord',
        'name' => 'setName',
        'region' => 'setRegion',
        'servCanSearch' => 'setServCanSearch',
        'servSearchKeywords' => 'setServSearchKeywords',
        'templateId' => 'setTemplateId',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'canSearch' => 'getCanSearch',
        'desc' => 'getDesc',
        'img' => 'getImg',
        'keyWord' => 'getKeyWord',
        'name' => 'getName',
        'region' => 'getRegion',
        'servCanSearch' => 'getServCanSearch',
        'servSearchKeywords' => 'getServSearchKeywords',
        'templateId' => 'getTemplateId',
        'url' => 'getUrl'
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
        $this->container['canSearch'] = $data['canSearch'] ?? null;
        $this->container['desc'] = $data['desc'] ?? null;
        $this->container['img'] = $data['img'] ?? null;
        $this->container['keyWord'] = $data['keyWord'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['region'] = $data['region'] ?? null;
        $this->container['servCanSearch'] = $data['servCanSearch'] ?? null;
        $this->container['servSearchKeywords'] = $data['servSearchKeywords'] ?? null;
        $this->container['templateId'] = $data['templateId'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
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
     * Gets canSearch
     *
     * @return string|null
     */
    public function getCanSearch()
    {
        return $this->container['canSearch'];
    }

    /**
     * Sets canSearch
     *
     * @param string|null $canSearch 搜索可见性
     *
     * @return self
     */
    public function setCanSearch($canSearch)
    {
        $this->container['canSearch'] = $canSearch;

        return $this;
    }

    /**
     * Gets desc
     *
     * @return string|null
     */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
     * Sets desc
     *
     * @param string|null $desc 描述信息
     *
     * @return self
     */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;

        return $this;
    }

    /**
     * Gets img
     *
     * @return string|null
     */
    public function getImg()
    {
        return $this->container['img'];
    }

    /**
     * Sets img
     *
     * @param string|null $img img地址
     *
     * @return self
     */
    public function setImg($img)
    {
        $this->container['img'] = $img;

        return $this;
    }

    /**
     * Gets keyWord
     *
     * @return string|null
     */
    public function getKeyWord()
    {
        return $this->container['keyWord'];
    }

    /**
     * Sets keyWord
     *
     * @param string|null $keyWord 关键词
     *
     * @return self
     */
    public function setKeyWord($keyWord)
    {
        $this->container['keyWord'] = $keyWord;

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
     * @param string|null $name 应用名称
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string|null $region 基础工单详情region
     *
     * @return self
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets servCanSearch
     *
     * @return string|null
     */
    public function getServCanSearch()
    {
        return $this->container['servCanSearch'];
    }

    /**
     * Sets servCanSearch
     *
     * @param string|null $servCanSearch 搜索可见性
     *
     * @return self
     */
    public function setServCanSearch($servCanSearch)
    {
        $this->container['servCanSearch'] = $servCanSearch;

        return $this;
    }

    /**
     * Gets servSearchKeywords
     *
     * @return string|null
     */
    public function getServSearchKeywords()
    {
        return $this->container['servSearchKeywords'];
    }

    /**
     * Sets servSearchKeywords
     *
     * @param string|null $servSearchKeywords 搜索关键词
     *
     * @return self
     */
    public function setServSearchKeywords($servSearchKeywords)
    {
        $this->container['servSearchKeywords'] = $servSearchKeywords;

        return $this;
    }

    /**
     * Gets templateId
     *
     * @return string|null
     */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
     * Sets templateId
     *
     * @param string|null $templateId 模板id
     *
     * @return self
     */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url 跳转url链接
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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


