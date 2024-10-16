<?php
/**
 * ZMGOObligationConfig
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
 * ZMGOObligationConfig Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ZMGOObligationConfig implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ZMGOObligationConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'benefitUrl' => 'string',
        'obligationAmount' => 'string',
        'obligationTemplate' => 'string',
        'obligationTimes' => 'string',
        'promiseTypeDesc' => 'string',
        'taskProgressRedirectSchema' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'benefitUrl' => null,
        'obligationAmount' => null,
        'obligationTemplate' => null,
        'obligationTimes' => null,
        'promiseTypeDesc' => null,
        'taskProgressRedirectSchema' => null
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
        'benefitUrl' => 'benefit_url',
        'obligationAmount' => 'obligation_amount',
        'obligationTemplate' => 'obligation_template',
        'obligationTimes' => 'obligation_times',
        'promiseTypeDesc' => 'promise_type_desc',
        'taskProgressRedirectSchema' => 'task_progress_redirect_schema'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'benefitUrl' => 'setBenefitUrl',
        'obligationAmount' => 'setObligationAmount',
        'obligationTemplate' => 'setObligationTemplate',
        'obligationTimes' => 'setObligationTimes',
        'promiseTypeDesc' => 'setPromiseTypeDesc',
        'taskProgressRedirectSchema' => 'setTaskProgressRedirectSchema'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'benefitUrl' => 'getBenefitUrl',
        'obligationAmount' => 'getObligationAmount',
        'obligationTemplate' => 'getObligationTemplate',
        'obligationTimes' => 'getObligationTimes',
        'promiseTypeDesc' => 'getPromiseTypeDesc',
        'taskProgressRedirectSchema' => 'getTaskProgressRedirectSchema'
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
        $this->container['benefitUrl'] = $data['benefitUrl'] ?? null;
        $this->container['obligationAmount'] = $data['obligationAmount'] ?? null;
        $this->container['obligationTemplate'] = $data['obligationTemplate'] ?? null;
        $this->container['obligationTimes'] = $data['obligationTimes'] ?? null;
        $this->container['promiseTypeDesc'] = $data['promiseTypeDesc'] ?? null;
        $this->container['taskProgressRedirectSchema'] = $data['taskProgressRedirectSchema'] ?? null;
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
     * Gets benefitUrl
     *
     * @return string|null
     */
    public function getBenefitUrl()
    {
        return $this->container['benefitUrl'];
    }

    /**
     * Sets benefitUrl
     *
     * @param string|null $benefitUrl 芝麻GO管理页做任务按钮对应链接
     *
     * @return self
     */
    public function setBenefitUrl($benefitUrl)
    {
        $this->container['benefitUrl'] = $benefitUrl;

        return $this;
    }

    /**
     * Gets obligationAmount
     *
     * @return string|null
     */
    public function getObligationAmount()
    {
        return $this->container['obligationAmount'];
    }

    /**
     * Sets obligationAmount
     *
     * @param string|null $obligationAmount 完成任务所需的最少额度，当obligation_template取值为：OBTL002时必传
     *
     * @return self
     */
    public function setObligationAmount($obligationAmount)
    {
        $this->container['obligationAmount'] = $obligationAmount;

        return $this;
    }

    /**
     * Gets obligationTemplate
     *
     * @return string|null
     */
    public function getObligationTemplate()
    {
        return $this->container['obligationTemplate'];
    }

    /**
     * Sets obligationTemplate
     *
     * @param string|null $obligationTemplate 承诺模式下，义务的类型，包含次数类型和金额类型：     OBTL001(\"OBTL001\", \"在x时间内完成n次\"),     OBTL002(\"OBTL002\", \"在x时间内达到n元金额\")
     *
     * @return self
     */
    public function setObligationTemplate($obligationTemplate)
    {
        $this->container['obligationTemplate'] = $obligationTemplate;

        return $this;
    }

    /**
     * Gets obligationTimes
     *
     * @return string|null
     */
    public function getObligationTimes()
    {
        return $this->container['obligationTimes'];
    }

    /**
     * Sets obligationTimes
     *
     * @param string|null $obligationTimes 完成任务所需的最少次数，当obligation_template取值为：OBTL001时必填
     *
     * @return self
     */
    public function setObligationTimes($obligationTimes)
    {
        $this->container['obligationTimes'] = $obligationTimes;

        return $this;
    }

    /**
     * Gets promiseTypeDesc
     *
     * @return string|null
     */
    public function getPromiseTypeDesc()
    {
        return $this->container['promiseTypeDesc'];
    }

    /**
     * Sets promiseTypeDesc
     *
     * @param string|null $promiseTypeDesc 任务描述
     *
     * @return self
     */
    public function setPromiseTypeDesc($promiseTypeDesc)
    {
        $this->container['promiseTypeDesc'] = $promiseTypeDesc;

        return $this;
    }

    /**
     * Gets taskProgressRedirectSchema
     *
     * @return string|null
     */
    public function getTaskProgressRedirectSchema()
    {
        return $this->container['taskProgressRedirectSchema'];
    }

    /**
     * Sets taskProgressRedirectSchema
     *
     * @param string|null $taskProgressRedirectSchema 芝麻GO管理页任务进度重定向链接
     *
     * @return self
     */
    public function setTaskProgressRedirectSchema($taskProgressRedirectSchema)
    {
        $this->container['taskProgressRedirectSchema'] = $taskProgressRedirectSchema;

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


