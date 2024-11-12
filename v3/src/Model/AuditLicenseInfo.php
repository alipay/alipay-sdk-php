<?php
/**
 * AuditLicenseInfo
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
 * AuditLicenseInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AuditLicenseInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AuditLicenseInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'licenseName' => 'string',
        'licenseNo' => 'string',
        'licensePicList' => 'string[]',
        'licenseValidDate' => 'string',
        'outDoorPic' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'licenseName' => null,
        'licenseNo' => null,
        'licensePicList' => null,
        'licenseValidDate' => null,
        'outDoorPic' => null
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
        'licenseName' => 'license_name',
        'licenseNo' => 'license_no',
        'licensePicList' => 'license_pic_list',
        'licenseValidDate' => 'license_valid_date',
        'outDoorPic' => 'out_door_pic'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'licenseName' => 'setLicenseName',
        'licenseNo' => 'setLicenseNo',
        'licensePicList' => 'setLicensePicList',
        'licenseValidDate' => 'setLicenseValidDate',
        'outDoorPic' => 'setOutDoorPic'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'licenseName' => 'getLicenseName',
        'licenseNo' => 'getLicenseNo',
        'licensePicList' => 'getLicensePicList',
        'licenseValidDate' => 'getLicenseValidDate',
        'outDoorPic' => 'getOutDoorPic'
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
        $this->container['licenseName'] = $data['licenseName'] ?? null;
        $this->container['licenseNo'] = $data['licenseNo'] ?? null;
        $this->container['licensePicList'] = $data['licensePicList'] ?? null;
        $this->container['licenseValidDate'] = $data['licenseValidDate'] ?? null;
        $this->container['outDoorPic'] = $data['outDoorPic'] ?? null;
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
     * Gets licenseName
     *
     * @return string|null
     */
    public function getLicenseName()
    {
        return $this->container['licenseName'];
    }

    /**
     * Sets licenseName
     *
     * @param string|null $licenseName 营业执照名称，需要与营业执照保持一致
     *
     * @return self
     */
    public function setLicenseName($licenseName)
    {
        $this->container['licenseName'] = $licenseName;

        return $this;
    }

    /**
     * Gets licenseNo
     *
     * @return string|null
     */
    public function getLicenseNo()
    {
        return $this->container['licenseNo'];
    }

    /**
     * Sets licenseNo
     *
     * @param string|null $licenseNo 营业执照号，部分小程序类目需要提交，参照 <a href=‘https://opendocs.alipay.com/b/03al2m’>开放服务类目</a> 中是否需要营业执照信息，如果不填默认采用当前小程序应用营业执照号。
     *
     * @return self
     */
    public function setLicenseNo($licenseNo)
    {
        $this->container['licenseNo'] = $licenseNo;

        return $this;
    }

    /**
     * Gets licensePicList
     *
     * @return string[]|null
     */
    public function getLicensePicList()
    {
        return $this->container['licensePicList'];
    }

    /**
     * Sets licensePicList
     *
     * @param string[]|null $licensePicList 营业执照照片地址列表
     *
     * @return self
     */
    public function setLicensePicList($licensePicList)
    {
        $this->container['licensePicList'] = $licensePicList;

        return $this;
    }

    /**
     * Gets licenseValidDate
     *
     * @return string|null
     */
    public function getLicenseValidDate()
    {
        return $this->container['licenseValidDate'];
    }

    /**
     * Sets licenseValidDate
     *
     * @param string|null $licenseValidDate 营业执有效期，格式为yyyy-MM-dd，9999-12-31表示长期
     *
     * @return self
     */
    public function setLicenseValidDate($licenseValidDate)
    {
        $this->container['licenseValidDate'] = $licenseValidDate;

        return $this;
    }

    /**
     * Gets outDoorPic
     *
     * @return string|null
     */
    public function getOutDoorPic()
    {
        return $this->container['outDoorPic'];
    }

    /**
     * Sets outDoorPic
     *
     * @param string|null $outDoorPic 门头照图片地址，部分小程序类目需要提交，参照 <a href=‘https://opendocs.alipay.com/b/03al2m’>开放服务类目</a> 中是否需要营业执照信息，如果不填默认采用当前小程序门头照图片
     *
     * @return self
     */
    public function setOutDoorPic($outDoorPic)
    {
        $this->container['outDoorPic'] = $outDoorPic;

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


