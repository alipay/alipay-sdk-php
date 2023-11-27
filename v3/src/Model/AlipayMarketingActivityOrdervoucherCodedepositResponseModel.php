<?php
/**
 * AlipayMarketingActivityOrdervoucherCodedepositResponseModel
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
 * AlipayMarketingActivityOrdervoucherCodedepositResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayMarketingActivityOrdervoucherCodedepositResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayMarketingActivityOrdervoucherCodedepositResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'failCount' => 'int',
        'failVoucherCodeDetailList' => '\Alipay\OpenAPISDK\Model\FailVoucherCodeDetail[]',
        'successCount' => 'int',
        'successVoucherCodeList' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'failCount' => null,
        'failVoucherCodeDetailList' => null,
        'successCount' => null,
        'successVoucherCodeList' => null
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
        'failCount' => 'fail_count',
        'failVoucherCodeDetailList' => 'fail_voucher_code_detail_list',
        'successCount' => 'success_count',
        'successVoucherCodeList' => 'success_voucher_code_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'failCount' => 'setFailCount',
        'failVoucherCodeDetailList' => 'setFailVoucherCodeDetailList',
        'successCount' => 'setSuccessCount',
        'successVoucherCodeList' => 'setSuccessVoucherCodeList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'failCount' => 'getFailCount',
        'failVoucherCodeDetailList' => 'getFailVoucherCodeDetailList',
        'successCount' => 'getSuccessCount',
        'successVoucherCodeList' => 'getSuccessVoucherCodeList'
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
        $this->container['failCount'] = $data['failCount'] ?? null;
        $this->container['failVoucherCodeDetailList'] = $data['failVoucherCodeDetailList'] ?? null;
        $this->container['successCount'] = $data['successCount'] ?? null;
        $this->container['successVoucherCodeList'] = $data['successVoucherCodeList'] ?? null;
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
     * Gets failCount
     *
     * @return int|null
     */
    public function getFailCount()
    {
        return $this->container['failCount'];
    }

    /**
     * Sets failCount
     *
     * @param int|null $failCount 导入失败的券码数量
     *
     * @return self
     */
    public function setFailCount($failCount)
    {
        $this->container['failCount'] = $failCount;

        return $this;
    }

    /**
     * Gets failVoucherCodeDetailList
     *
     * @return \Alipay\OpenAPISDK\Model\FailVoucherCodeDetail[]|null
     */
    public function getFailVoucherCodeDetailList()
    {
        return $this->container['failVoucherCodeDetailList'];
    }

    /**
     * Sets failVoucherCodeDetailList
     *
     * @param \Alipay\OpenAPISDK\Model\FailVoucherCodeDetail[]|null $failVoucherCodeDetailList 上传失败券码详情列表，包括上传失败的券码及对应的错误码和错误原因
     *
     * @return self
     */
    public function setFailVoucherCodeDetailList($failVoucherCodeDetailList)
    {
        $this->container['failVoucherCodeDetailList'] = $failVoucherCodeDetailList;

        return $this;
    }

    /**
     * Gets successCount
     *
     * @return int|null
     */
    public function getSuccessCount()
    {
        return $this->container['successCount'];
    }

    /**
     * Sets successCount
     *
     * @param int|null $successCount 导入成功的券码数量
     *
     * @return self
     */
    public function setSuccessCount($successCount)
    {
        $this->container['successCount'] = $successCount;

        return $this;
    }

    /**
     * Gets successVoucherCodeList
     *
     * @return string[]|null
     */
    public function getSuccessVoucherCodeList()
    {
        return $this->container['successVoucherCodeList'];
    }

    /**
     * Sets successVoucherCodeList
     *
     * @param string[]|null $successVoucherCodeList 上传成功的券码列表
     *
     * @return self
     */
    public function setSuccessVoucherCodeList($successVoucherCodeList)
    {
        $this->container['successVoucherCodeList'] = $successVoucherCodeList;

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

