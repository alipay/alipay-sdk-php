<?php
/**
 * AlipayFundJointaccountRuleModifyModel
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
 * AlipayFundJointaccountRuleModifyModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayFundJointaccountRuleModifyModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayFundJointaccountRuleModifyModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountId' => 'string',
        'accountName' => 'string',
        'accountQuota' => '\Alipay\OpenAPISDK\Model\JointAccountQuotaDTO[]',
        'agreementNo' => 'string',
        'authorizedRule' => '\Alipay\OpenAPISDK\Model\AuthorizedRuleDTO',
        'bizScene' => 'string',
        'productCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'accountId' => null,
        'accountName' => null,
        'accountQuota' => null,
        'agreementNo' => null,
        'authorizedRule' => null,
        'bizScene' => null,
        'productCode' => null
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
        'accountId' => 'account_id',
        'accountName' => 'account_name',
        'accountQuota' => 'account_quota',
        'agreementNo' => 'agreement_no',
        'authorizedRule' => 'authorized_rule',
        'bizScene' => 'biz_scene',
        'productCode' => 'product_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'accountName' => 'setAccountName',
        'accountQuota' => 'setAccountQuota',
        'agreementNo' => 'setAgreementNo',
        'authorizedRule' => 'setAuthorizedRule',
        'bizScene' => 'setBizScene',
        'productCode' => 'setProductCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'accountName' => 'getAccountName',
        'accountQuota' => 'getAccountQuota',
        'agreementNo' => 'getAgreementNo',
        'authorizedRule' => 'getAuthorizedRule',
        'bizScene' => 'getBizScene',
        'productCode' => 'getProductCode'
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
        $this->container['accountId'] = $data['accountId'] ?? null;
        $this->container['accountName'] = $data['accountName'] ?? null;
        $this->container['accountQuota'] = $data['accountQuota'] ?? null;
        $this->container['agreementNo'] = $data['agreementNo'] ?? null;
        $this->container['authorizedRule'] = $data['authorizedRule'] ?? null;
        $this->container['bizScene'] = $data['bizScene'] ?? null;
        $this->container['productCode'] = $data['productCode'] ?? null;
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
     * Gets accountId
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param string|null $accountId 账本ID
     *
     * @return self
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets accountName
     *
     * @return string|null
     */
    public function getAccountName()
    {
        return $this->container['accountName'];
    }

    /**
     * Sets accountName
     *
     * @param string|null $accountName 账本名称
     *
     * @return self
     */
    public function setAccountName($accountName)
    {
        $this->container['accountName'] = $accountName;

        return $this;
    }

    /**
     * Gets accountQuota
     *
     * @return \Alipay\OpenAPISDK\Model\JointAccountQuotaDTO[]|null
     */
    public function getAccountQuota()
    {
        return $this->container['accountQuota'];
    }

    /**
     * Sets accountQuota
     *
     * @param \Alipay\OpenAPISDK\Model\JointAccountQuotaDTO[]|null $accountQuota 账户额度
     *
     * @return self
     */
    public function setAccountQuota($accountQuota)
    {
        $this->container['accountQuota'] = $accountQuota;

        return $this;
    }

    /**
     * Gets agreementNo
     *
     * @return string|null
     */
    public function getAgreementNo()
    {
        return $this->container['agreementNo'];
    }

    /**
     * Sets agreementNo
     *
     * @param string|null $agreementNo 授权协议号
     *
     * @return self
     */
    public function setAgreementNo($agreementNo)
    {
        $this->container['agreementNo'] = $agreementNo;

        return $this;
    }

    /**
     * Gets authorizedRule
     *
     * @return \Alipay\OpenAPISDK\Model\AuthorizedRuleDTO|null
     */
    public function getAuthorizedRule()
    {
        return $this->container['authorizedRule'];
    }

    /**
     * Sets authorizedRule
     *
     * @param \Alipay\OpenAPISDK\Model\AuthorizedRuleDTO|null $authorizedRule authorizedRule
     *
     * @return self
     */
    public function setAuthorizedRule($authorizedRule)
    {
        $this->container['authorizedRule'] = $authorizedRule;

        return $this;
    }

    /**
     * Gets bizScene
     *
     * @return string|null
     */
    public function getBizScene()
    {
        return $this->container['bizScene'];
    }

    /**
     * Sets bizScene
     *
     * @param string|null $bizScene 场景码
     *
     * @return self
     */
    public function setBizScene($bizScene)
    {
        $this->container['bizScene'] = $bizScene;

        return $this;
    }

    /**
     * Gets productCode
     *
     * @return string|null
     */
    public function getProductCode()
    {
        return $this->container['productCode'];
    }

    /**
     * Sets productCode
     *
     * @param string|null $productCode 产品码
     *
     * @return self
     */
    public function setProductCode($productCode)
    {
        $this->container['productCode'] = $productCode;

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


