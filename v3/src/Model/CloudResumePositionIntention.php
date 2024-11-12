<?php
/**
 * CloudResumePositionIntention
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
 * CloudResumePositionIntention Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CloudResumePositionIntention implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CloudResumePositionIntention';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'intentionCity' => 'string',
        'jobId' => 'string',
        'jobName' => 'string',
        'professionId' => 'string',
        'professionName' => 'string',
        'salaryMax' => 'string',
        'salaryMin' => 'string',
        'salaryUnit' => 'string',
        'workProperty' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'intentionCity' => null,
        'jobId' => null,
        'jobName' => null,
        'professionId' => null,
        'professionName' => null,
        'salaryMax' => null,
        'salaryMin' => null,
        'salaryUnit' => null,
        'workProperty' => null
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
        'intentionCity' => 'intention_city',
        'jobId' => 'job_id',
        'jobName' => 'job_name',
        'professionId' => 'profession_id',
        'professionName' => 'profession_name',
        'salaryMax' => 'salary_max',
        'salaryMin' => 'salary_min',
        'salaryUnit' => 'salary_unit',
        'workProperty' => 'work_property'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'intentionCity' => 'setIntentionCity',
        'jobId' => 'setJobId',
        'jobName' => 'setJobName',
        'professionId' => 'setProfessionId',
        'professionName' => 'setProfessionName',
        'salaryMax' => 'setSalaryMax',
        'salaryMin' => 'setSalaryMin',
        'salaryUnit' => 'setSalaryUnit',
        'workProperty' => 'setWorkProperty'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'intentionCity' => 'getIntentionCity',
        'jobId' => 'getJobId',
        'jobName' => 'getJobName',
        'professionId' => 'getProfessionId',
        'professionName' => 'getProfessionName',
        'salaryMax' => 'getSalaryMax',
        'salaryMin' => 'getSalaryMin',
        'salaryUnit' => 'getSalaryUnit',
        'workProperty' => 'getWorkProperty'
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
        $this->container['intentionCity'] = $data['intentionCity'] ?? null;
        $this->container['jobId'] = $data['jobId'] ?? null;
        $this->container['jobName'] = $data['jobName'] ?? null;
        $this->container['professionId'] = $data['professionId'] ?? null;
        $this->container['professionName'] = $data['professionName'] ?? null;
        $this->container['salaryMax'] = $data['salaryMax'] ?? null;
        $this->container['salaryMin'] = $data['salaryMin'] ?? null;
        $this->container['salaryUnit'] = $data['salaryUnit'] ?? null;
        $this->container['workProperty'] = $data['workProperty'] ?? null;
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
     * Gets intentionCity
     *
     * @return string|null
     */
    public function getIntentionCity()
    {
        return $this->container['intentionCity'];
    }

    /**
     * Sets intentionCity
     *
     * @param string|null $intentionCity 意向城市Code。具体地区编码参见https://lbs.amap.com/api/webservice/download 里面城市编码表
     *
     * @return self
     */
    public function setIntentionCity($intentionCity)
    {
        $this->container['intentionCity'] = $intentionCity;

        return $this;
    }

    /**
     * Gets jobId
     *
     * @return string|null
     * @deprecated
     */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
     * Sets jobId
     *
     * @param string|null $jobId 职业id(这个字段在目前版本不对外暴露)
     *
     * @return self
     * @deprecated
     */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;

        return $this;
    }

    /**
     * Gets jobName
     *
     * @return string|null
     */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
     * Sets jobName
     *
     * @param string|null $jobName 职业名称
     *
     * @return self
     */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;

        return $this;
    }

    /**
     * Gets professionId
     *
     * @return string|null
     * @deprecated
     */
    public function getProfessionId()
    {
        return $this->container['professionId'];
    }

    /**
     * Sets professionId
     *
     * @param string|null $professionId 行业id(这个字段在目前版本不对外暴露)
     *
     * @return self
     * @deprecated
     */
    public function setProfessionId($professionId)
    {
        $this->container['professionId'] = $professionId;

        return $this;
    }

    /**
     * Gets professionName
     *
     * @return string|null
     */
    public function getProfessionName()
    {
        return $this->container['professionName'];
    }

    /**
     * Sets professionName
     *
     * @param string|null $professionName 行业名称
     *
     * @return self
     */
    public function setProfessionName($professionName)
    {
        $this->container['professionName'] = $professionName;

        return $this;
    }

    /**
     * Gets salaryMax
     *
     * @return string|null
     */
    public function getSalaryMax()
    {
        return $this->container['salaryMax'];
    }

    /**
     * Sets salaryMax
     *
     * @param string|null $salaryMax 最大工资
     *
     * @return self
     */
    public function setSalaryMax($salaryMax)
    {
        $this->container['salaryMax'] = $salaryMax;

        return $this;
    }

    /**
     * Gets salaryMin
     *
     * @return string|null
     */
    public function getSalaryMin()
    {
        return $this->container['salaryMin'];
    }

    /**
     * Sets salaryMin
     *
     * @param string|null $salaryMin 最小薪资
     *
     * @return self
     */
    public function setSalaryMin($salaryMin)
    {
        $this->container['salaryMin'] = $salaryMin;

        return $this;
    }

    /**
     * Gets salaryUnit
     *
     * @return string|null
     */
    public function getSalaryUnit()
    {
        return $this->container['salaryUnit'];
    }

    /**
     * Sets salaryUnit
     *
     * @param string|null $salaryUnit 工资单位，/月 /日
     *
     * @return self
     */
    public function setSalaryUnit($salaryUnit)
    {
        $this->container['salaryUnit'] = $salaryUnit;

        return $this;
    }

    /**
     * Gets workProperty
     *
     * @return string|null
     */
    public function getWorkProperty()
    {
        return $this->container['workProperty'];
    }

    /**
     * Sets workProperty
     *
     * @param string|null $workProperty 工作属性
     *
     * @return self
     */
    public function setWorkProperty($workProperty)
    {
        $this->container['workProperty'] = $workProperty;

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


