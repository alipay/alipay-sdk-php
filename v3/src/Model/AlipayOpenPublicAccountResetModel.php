<?php
/**
 * AlipayOpenPublicAccountResetModel
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
 * AlipayOpenPublicAccountResetModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenPublicAccountResetModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenPublicAccountResetModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'agreementId' => 'string',
        'bindAccountNo' => 'string',
        'displayName' => 'string',
        'fromUserId' => 'string',
        'openId' => 'string',
        'realName' => 'string',
        'remark' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'agreementId' => null,
        'bindAccountNo' => null,
        'displayName' => null,
        'fromUserId' => null,
        'openId' => null,
        'realName' => null,
        'remark' => null
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
        'agreementId' => 'agreement_id',
        'bindAccountNo' => 'bind_account_no',
        'displayName' => 'display_name',
        'fromUserId' => 'from_user_id',
        'openId' => 'open_id',
        'realName' => 'real_name',
        'remark' => 'remark'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agreementId' => 'setAgreementId',
        'bindAccountNo' => 'setBindAccountNo',
        'displayName' => 'setDisplayName',
        'fromUserId' => 'setFromUserId',
        'openId' => 'setOpenId',
        'realName' => 'setRealName',
        'remark' => 'setRemark'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agreementId' => 'getAgreementId',
        'bindAccountNo' => 'getBindAccountNo',
        'displayName' => 'getDisplayName',
        'fromUserId' => 'getFromUserId',
        'openId' => 'getOpenId',
        'realName' => 'getRealName',
        'remark' => 'getRemark'
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
        $this->container['agreementId'] = $data['agreementId'] ?? null;
        $this->container['bindAccountNo'] = $data['bindAccountNo'] ?? null;
        $this->container['displayName'] = $data['displayName'] ?? null;
        $this->container['fromUserId'] = $data['fromUserId'] ?? null;
        $this->container['openId'] = $data['openId'] ?? null;
        $this->container['realName'] = $data['realName'] ?? null;
        $this->container['remark'] = $data['remark'] ?? null;
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
     * Gets agreementId
     *
     * @return string|null
     */
    public function getAgreementId()
    {
        return $this->container['agreementId'];
    }

    /**
     * Sets agreementId
     *
     * @param string|null $agreementId 需要重置的协议号，商户会员在支付宝生活号账号中的唯一标识。
     *
     * @return self
     */
    public function setAgreementId($agreementId)
    {
        $this->container['agreementId'] = $agreementId;

        return $this;
    }

    /**
     * Gets bindAccountNo
     *
     * @return string|null
     */
    public function getBindAccountNo()
    {
        return $this->container['bindAccountNo'];
    }

    /**
     * Sets bindAccountNo
     *
     * @param string|null $bindAccountNo 绑定帐号，建议在开发者的系统中保持唯一性
     *
     * @return self
     */
    public function setBindAccountNo($bindAccountNo)
    {
        $this->container['bindAccountNo'] = $bindAccountNo;

        return $this;
    }

    /**
     * Gets displayName
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
     * Sets displayName
     *
     * @param string|null $displayName 商户期望在生活号首页看到的关于该用户的显示信息，最长10个字符。
     *
     * @return self
     */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;

        return $this;
    }

    /**
     * Gets fromUserId
     *
     * @return string|null
     */
    public function getFromUserId()
    {
        return $this->container['fromUserId'];
    }

    /**
     * Sets fromUserId
     *
     * @param string|null $fromUserId 要绑定的商户会员对应的支付宝唯一标识，2088开头长度为16位的字符串。
     *
     * @return self
     */
    public function setFromUserId($fromUserId)
    {
        $this->container['fromUserId'] = $fromUserId;

        return $this;
    }

    /**
     * Gets openId
     *
     * @return string|null
     */
    public function getOpenId()
    {
        return $this->container['openId'];
    }

    /**
     * Sets openId
     *
     * @param string|null $openId 支付宝用户的唯一标识
     *
     * @return self
     */
    public function setOpenId($openId)
    {
        $this->container['openId'] = $openId;

        return $this;
    }

    /**
     * Gets realName
     *
     * @return string|null
     */
    public function getRealName()
    {
        return $this->container['realName'];
    }

    /**
     * Sets realName
     *
     * @param string|null $realName 要绑定的商户会员的真实姓名，最长10个汉字
     *
     * @return self
     */
    public function setRealName($realName)
    {
        $this->container['realName'] = $realName;

        return $this;
    }

    /**
     * Gets remark
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
     * Sets remark
     *
     * @param string|null $remark 备注信息，开发者可以通过该字段纪录其他的额外信息
     *
     * @return self
     */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;

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


