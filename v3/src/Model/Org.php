<?php
/**
 * Org
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
 * Org Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Org implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Org';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'orgIdNumber' => 'string',
        'orgIdType' => 'string',
        'orgLegalIdNumber' => 'string',
        'orgLegalIdType' => 'string',
        'orgLegalName' => 'string',
        'orgName' => 'string',
        'thirdPartyUserId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'orgIdNumber' => null,
        'orgIdType' => null,
        'orgLegalIdNumber' => null,
        'orgLegalIdType' => null,
        'orgLegalName' => null,
        'orgName' => null,
        'thirdPartyUserId' => null
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
        'orgIdNumber' => 'org_id_number',
        'orgIdType' => 'org_id_type',
        'orgLegalIdNumber' => 'org_legal_id_number',
        'orgLegalIdType' => 'org_legal_id_type',
        'orgLegalName' => 'org_legal_name',
        'orgName' => 'org_name',
        'thirdPartyUserId' => 'third_party_user_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'orgIdNumber' => 'setOrgIdNumber',
        'orgIdType' => 'setOrgIdType',
        'orgLegalIdNumber' => 'setOrgLegalIdNumber',
        'orgLegalIdType' => 'setOrgLegalIdType',
        'orgLegalName' => 'setOrgLegalName',
        'orgName' => 'setOrgName',
        'thirdPartyUserId' => 'setThirdPartyUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'orgIdNumber' => 'getOrgIdNumber',
        'orgIdType' => 'getOrgIdType',
        'orgLegalIdNumber' => 'getOrgLegalIdNumber',
        'orgLegalIdType' => 'getOrgLegalIdType',
        'orgLegalName' => 'getOrgLegalName',
        'orgName' => 'getOrgName',
        'thirdPartyUserId' => 'getThirdPartyUserId'
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
        $this->container['orgIdNumber'] = $data['orgIdNumber'] ?? null;
        $this->container['orgIdType'] = $data['orgIdType'] ?? null;
        $this->container['orgLegalIdNumber'] = $data['orgLegalIdNumber'] ?? null;
        $this->container['orgLegalIdType'] = $data['orgLegalIdType'] ?? null;
        $this->container['orgLegalName'] = $data['orgLegalName'] ?? null;
        $this->container['orgName'] = $data['orgName'] ?? null;
        $this->container['thirdPartyUserId'] = $data['thirdPartyUserId'] ?? null;
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
     * Gets orgIdNumber
     *
     * @return string|null
     */
    public function getOrgIdNumber()
    {
        return $this->container['orgIdNumber'];
    }

    /**
     * Sets orgIdNumber
     *
     * @param string|null $orgIdNumber 企业证件号
     *
     * @return self
     */
    public function setOrgIdNumber($orgIdNumber)
    {
        $this->container['orgIdNumber'] = $orgIdNumber;

        return $this;
    }

    /**
     * Gets orgIdType
     *
     * @return string|null
     */
    public function getOrgIdType()
    {
        return $this->container['orgIdType'];
    }

    /**
     * Sets orgIdType
     *
     * @param string|null $orgIdType 企业证件类型，（证件号不为空时必填，详见企业证件类型）
     *
     * @return self
     */
    public function setOrgIdType($orgIdType)
    {
        $this->container['orgIdType'] = $orgIdType;

        return $this;
    }

    /**
     * Gets orgLegalIdNumber
     *
     * @return string|null
     */
    public function getOrgLegalIdNumber()
    {
        return $this->container['orgLegalIdNumber'];
    }

    /**
     * Sets orgLegalIdNumber
     *
     * @param string|null $orgLegalIdNumber 法定代表人证件号
     *
     * @return self
     */
    public function setOrgLegalIdNumber($orgLegalIdNumber)
    {
        $this->container['orgLegalIdNumber'] = $orgLegalIdNumber;

        return $this;
    }

    /**
     * Gets orgLegalIdType
     *
     * @return string|null
     */
    public function getOrgLegalIdType()
    {
        return $this->container['orgLegalIdType'];
    }

    /**
     * Sets orgLegalIdType
     *
     * @param string|null $orgLegalIdType 法定代表人证件类型
     *
     * @return self
     */
    public function setOrgLegalIdType($orgLegalIdType)
    {
        $this->container['orgLegalIdType'] = $orgLegalIdType;

        return $this;
    }

    /**
     * Gets orgLegalName
     *
     * @return string|null
     */
    public function getOrgLegalName()
    {
        return $this->container['orgLegalName'];
    }

    /**
     * Sets orgLegalName
     *
     * @param string|null $orgLegalName 法定代表人名称
     *
     * @return self
     */
    public function setOrgLegalName($orgLegalName)
    {
        $this->container['orgLegalName'] = $orgLegalName;

        return $this;
    }

    /**
     * Gets orgName
     *
     * @return string|null
     */
    public function getOrgName()
    {
        return $this->container['orgName'];
    }

    /**
     * Sets orgName
     *
     * @param string|null $orgName 企业名称
     *
     * @return self
     */
    public function setOrgName($orgName)
    {
        $this->container['orgName'] = $orgName;

        return $this;
    }

    /**
     * Gets thirdPartyUserId
     *
     * @return string|null
     */
    public function getThirdPartyUserId()
    {
        return $this->container['thirdPartyUserId'];
    }

    /**
     * Sets thirdPartyUserId
     *
     * @param string|null $thirdPartyUserId 企业唯一标识：可传入平台机构id、企业证件号、企业邮箱等（个人用户与企业的唯一标识不可重复）
     *
     * @return self
     */
    public function setThirdPartyUserId($thirdPartyUserId)
    {
        $this->container['thirdPartyUserId'] = $thirdPartyUserId;

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


