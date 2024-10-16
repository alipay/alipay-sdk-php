<?php
/**
 * LifeLabel
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
 * LifeLabel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LifeLabel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LifeLabel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'biz' => 'string',
        'category' => 'string',
        'dataType' => 'string',
        'labelCode' => 'string',
        'labelId' => 'string',
        'labelName' => 'string',
        'operator' => 'string',
        'options' => '\Alipay\OpenAPISDK\Model\Option[]',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'biz' => null,
        'category' => null,
        'dataType' => null,
        'labelCode' => null,
        'labelId' => null,
        'labelName' => null,
        'operator' => null,
        'options' => null,
        'type' => null
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
        'biz' => 'biz',
        'category' => 'category',
        'dataType' => 'data_type',
        'labelCode' => 'label_code',
        'labelId' => 'label_id',
        'labelName' => 'label_name',
        'operator' => 'operator',
        'options' => 'options',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'biz' => 'setBiz',
        'category' => 'setCategory',
        'dataType' => 'setDataType',
        'labelCode' => 'setLabelCode',
        'labelId' => 'setLabelId',
        'labelName' => 'setLabelName',
        'operator' => 'setOperator',
        'options' => 'setOptions',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'biz' => 'getBiz',
        'category' => 'getCategory',
        'dataType' => 'getDataType',
        'labelCode' => 'getLabelCode',
        'labelId' => 'getLabelId',
        'labelName' => 'getLabelName',
        'operator' => 'getOperator',
        'options' => 'getOptions',
        'type' => 'getType'
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
        $this->container['biz'] = $data['biz'] ?? null;
        $this->container['category'] = $data['category'] ?? null;
        $this->container['dataType'] = $data['dataType'] ?? null;
        $this->container['labelCode'] = $data['labelCode'] ?? null;
        $this->container['labelId'] = $data['labelId'] ?? null;
        $this->container['labelName'] = $data['labelName'] ?? null;
        $this->container['operator'] = $data['operator'] ?? null;
        $this->container['options'] = $data['options'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
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
     * Gets biz
     *
     * @return string|null
     */
    public function getBiz()
    {
        return $this->container['biz'];
    }

    /**
     * Sets biz
     *
     * @param string|null $biz 该标签支持的业务列表，menu表示个性化菜单，extension表示个性化扩展区，message表示消息触达
     *
     * @return self
     */
    public function setBiz($biz)
    {
        $this->container['biz'] = $biz;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category 标签类目
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets dataType
     *
     * @return string|null
     */
    public function getDataType()
    {
        return $this->container['dataType'];
    }

    /**
     * Sets dataType
     *
     * @param string|null $dataType 标签值数据类型
     *
     * @return self
     */
    public function setDataType($dataType)
    {
        $this->container['dataType'] = $dataType;

        return $this;
    }

    /**
     * Gets labelCode
     *
     * @return string|null
     */
    public function getLabelCode()
    {
        return $this->container['labelCode'];
    }

    /**
     * Sets labelCode
     *
     * @param string|null $labelCode 标签英文代码
     *
     * @return self
     */
    public function setLabelCode($labelCode)
    {
        $this->container['labelCode'] = $labelCode;

        return $this;
    }

    /**
     * Gets labelId
     *
     * @return string|null
     */
    public function getLabelId()
    {
        return $this->container['labelId'];
    }

    /**
     * Sets labelId
     *
     * @param string|null $labelId 标签id，唯一标识一个标签
     *
     * @return self
     */
    public function setLabelId($labelId)
    {
        $this->container['labelId'] = $labelId;

        return $this;
    }

    /**
     * Gets labelName
     *
     * @return string|null
     */
    public function getLabelName()
    {
        return $this->container['labelName'];
    }

    /**
     * Sets labelName
     *
     * @param string|null $labelName 标签名
     *
     * @return self
     */
    public function setLabelName($labelName)
    {
        $this->container['labelName'] = $labelName;

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
     * @param string|null $operator 该标签支持的运算符
     *
     * @return self
     */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \Alipay\OpenAPISDK\Model\Option[]|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \Alipay\OpenAPISDK\Model\Option[]|null $options 每个取值的业务含义
     *
     * @return self
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type 标签类型，目前分为common（通用标签）、custom（生活号自定义标签）、cloud（云实验室标签）
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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


