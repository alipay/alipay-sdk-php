<?php
/**
 * MenuAnalysisData
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
 * The version of the OpenAPI document: 2023-10-26
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
 * MenuAnalysisData Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MenuAnalysisData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MenuAnalysisData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'avgClickUserCnt' => 'string',
        'clickCnt' => 'int',
        'clickUserCnt' => 'int',
        'date' => 'string',
        'menuType' => 'string',
        'name' => 'string',
        'subName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'avgClickUserCnt' => null,
        'clickCnt' => null,
        'clickUserCnt' => null,
        'date' => null,
        'menuType' => null,
        'name' => null,
        'subName' => null
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
        'avgClickUserCnt' => 'avg_click_user_cnt',
        'clickCnt' => 'click_cnt',
        'clickUserCnt' => 'click_user_cnt',
        'date' => 'date',
        'menuType' => 'menu_type',
        'name' => 'name',
        'subName' => 'sub_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'avgClickUserCnt' => 'setAvgClickUserCnt',
        'clickCnt' => 'setClickCnt',
        'clickUserCnt' => 'setClickUserCnt',
        'date' => 'setDate',
        'menuType' => 'setMenuType',
        'name' => 'setName',
        'subName' => 'setSubName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'avgClickUserCnt' => 'getAvgClickUserCnt',
        'clickCnt' => 'getClickCnt',
        'clickUserCnt' => 'getClickUserCnt',
        'date' => 'getDate',
        'menuType' => 'getMenuType',
        'name' => 'getName',
        'subName' => 'getSubName'
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
        $this->container['avgClickUserCnt'] = $data['avgClickUserCnt'] ?? null;
        $this->container['clickCnt'] = $data['clickCnt'] ?? null;
        $this->container['clickUserCnt'] = $data['clickUserCnt'] ?? null;
        $this->container['date'] = $data['date'] ?? null;
        $this->container['menuType'] = $data['menuType'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['subName'] = $data['subName'] ?? null;
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
     * Gets avgClickUserCnt
     *
     * @return string|null
     */
    public function getAvgClickUserCnt()
    {
        return $this->container['avgClickUserCnt'];
    }

    /**
     * Sets avgClickUserCnt
     *
     * @param string|null $avgClickUserCnt 人均点击次数
     *
     * @return self
     */
    public function setAvgClickUserCnt($avgClickUserCnt)
    {
        $this->container['avgClickUserCnt'] = $avgClickUserCnt;

        return $this;
    }

    /**
     * Gets clickCnt
     *
     * @return int|null
     */
    public function getClickCnt()
    {
        return $this->container['clickCnt'];
    }

    /**
     * Sets clickCnt
     *
     * @param int|null $clickCnt 菜单点击次数
     *
     * @return self
     */
    public function setClickCnt($clickCnt)
    {
        $this->container['clickCnt'] = $clickCnt;

        return $this;
    }

    /**
     * Gets clickUserCnt
     *
     * @return int|null
     */
    public function getClickUserCnt()
    {
        return $this->container['clickUserCnt'];
    }

    /**
     * Sets clickUserCnt
     *
     * @param int|null $clickUserCnt 菜单点击人数
     *
     * @return self
     */
    public function setClickUserCnt($clickUserCnt)
    {
        $this->container['clickUserCnt'] = $clickUserCnt;

        return $this;
    }

    /**
     * Gets date
     *
     * @return string|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string|null $date 日期
     *
     * @return self
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets menuType
     *
     * @return string|null
     */
    public function getMenuType()
    {
        return $this->container['menuType'];
    }

    /**
     * Sets menuType
     *
     * @param string|null $menuType 菜单类型 ，iconDefault ：图标菜单、default：文字菜单
     *
     * @return self
     */
    public function setMenuType($menuType)
    {
        $this->container['menuType'] = $menuType;

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
     * @param string|null $name 菜单名称
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets subName
     *
     * @return string|null
     */
    public function getSubName()
    {
        return $this->container['subName'];
    }

    /**
     * Sets subName
     *
     * @param string|null $subName 子菜单名称，文字菜单才有
     *
     * @return self
     */
    public function setSubName($subName)
    {
        $this->container['subName'] = $subName;

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

