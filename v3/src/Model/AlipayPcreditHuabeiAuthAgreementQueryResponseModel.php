<?php
/**
 * AlipayPcreditHuabeiAuthAgreementQueryResponseModel
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
 * AlipayPcreditHuabeiAuthAgreementQueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayPcreditHuabeiAuthAgreementQueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayPcreditHuabeiAuthAgreementQueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'agreementName' => 'string',
        'agreementNo' => 'string',
        'agreementStatus' => 'string',
        'alipayUserId' => 'string',
        'authScene' => 'string',
        'externalLogonId' => 'string',
        'gmtSign' => 'string',
        'gmtUnsign' => 'string',
        'openId' => 'string',
        'outBizType' => 'string',
        'outSignNo' => 'string',
        'restFreezeAmount' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'agreementName' => null,
        'agreementNo' => null,
        'agreementStatus' => null,
        'alipayUserId' => null,
        'authScene' => null,
        'externalLogonId' => null,
        'gmtSign' => null,
        'gmtUnsign' => null,
        'openId' => null,
        'outBizType' => null,
        'outSignNo' => null,
        'restFreezeAmount' => null
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
        'agreementName' => 'agreement_name',
        'agreementNo' => 'agreement_no',
        'agreementStatus' => 'agreement_status',
        'alipayUserId' => 'alipay_user_id',
        'authScene' => 'auth_scene',
        'externalLogonId' => 'external_logon_id',
        'gmtSign' => 'gmt_sign',
        'gmtUnsign' => 'gmt_unsign',
        'openId' => 'open_id',
        'outBizType' => 'out_biz_type',
        'outSignNo' => 'out_sign_no',
        'restFreezeAmount' => 'rest_freeze_amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agreementName' => 'setAgreementName',
        'agreementNo' => 'setAgreementNo',
        'agreementStatus' => 'setAgreementStatus',
        'alipayUserId' => 'setAlipayUserId',
        'authScene' => 'setAuthScene',
        'externalLogonId' => 'setExternalLogonId',
        'gmtSign' => 'setGmtSign',
        'gmtUnsign' => 'setGmtUnsign',
        'openId' => 'setOpenId',
        'outBizType' => 'setOutBizType',
        'outSignNo' => 'setOutSignNo',
        'restFreezeAmount' => 'setRestFreezeAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agreementName' => 'getAgreementName',
        'agreementNo' => 'getAgreementNo',
        'agreementStatus' => 'getAgreementStatus',
        'alipayUserId' => 'getAlipayUserId',
        'authScene' => 'getAuthScene',
        'externalLogonId' => 'getExternalLogonId',
        'gmtSign' => 'getGmtSign',
        'gmtUnsign' => 'getGmtUnsign',
        'openId' => 'getOpenId',
        'outBizType' => 'getOutBizType',
        'outSignNo' => 'getOutSignNo',
        'restFreezeAmount' => 'getRestFreezeAmount'
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
        $this->container['agreementName'] = $data['agreementName'] ?? null;
        $this->container['agreementNo'] = $data['agreementNo'] ?? null;
        $this->container['agreementStatus'] = $data['agreementStatus'] ?? null;
        $this->container['alipayUserId'] = $data['alipayUserId'] ?? null;
        $this->container['authScene'] = $data['authScene'] ?? null;
        $this->container['externalLogonId'] = $data['externalLogonId'] ?? null;
        $this->container['gmtSign'] = $data['gmtSign'] ?? null;
        $this->container['gmtUnsign'] = $data['gmtUnsign'] ?? null;
        $this->container['openId'] = $data['openId'] ?? null;
        $this->container['outBizType'] = $data['outBizType'] ?? null;
        $this->container['outSignNo'] = $data['outSignNo'] ?? null;
        $this->container['restFreezeAmount'] = $data['restFreezeAmount'] ?? null;
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
     * Gets agreementName
     *
     * @return string|null
     */
    public function getAgreementName()
    {
        return $this->container['agreementName'];
    }

    /**
     * Sets agreementName
     *
     * @param string|null $agreementName 协议名称
     *
     * @return self
     */
    public function setAgreementName($agreementName)
    {
        $this->container['agreementName'] = $agreementName;

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
     * @param string|null $agreementNo 支付宝系统中用以唯一标识用户签约记录的编号，即花芝轻会员协议号。
     *
     * @return self
     */
    public function setAgreementNo($agreementNo)
    {
        $this->container['agreementNo'] = $agreementNo;

        return $this;
    }

    /**
     * Gets agreementStatus
     *
     * @return string|null
     */
    public function getAgreementStatus()
    {
        return $this->container['agreementStatus'];
    }

    /**
     * Sets agreementStatus
     *
     * @param string|null $agreementStatus 协议状态。Y表示状态有效，N表示状态失效
     *
     * @return self
     */
    public function setAgreementStatus($agreementStatus)
    {
        $this->container['agreementStatus'] = $agreementStatus;

        return $this;
    }

    /**
     * Gets alipayUserId
     *
     * @return string|null
     */
    public function getAlipayUserId()
    {
        return $this->container['alipayUserId'];
    }

    /**
     * Sets alipayUserId
     *
     * @param string|null $alipayUserId 支付宝用户userId
     *
     * @return self
     */
    public function setAlipayUserId($alipayUserId)
    {
        $this->container['alipayUserId'] = $alipayUserId;

        return $this;
    }

    /**
     * Gets authScene
     *
     * @return string|null
     */
    public function getAuthScene()
    {
        return $this->container['authScene'];
    }

    /**
     * Sets authScene
     *
     * @param string|null $authScene 花芝轻会员签约场景，商户和支付宝签约时确定，商户接入时需要咨询技术支持。
     *
     * @return self
     */
    public function setAuthScene($authScene)
    {
        $this->container['authScene'] = $authScene;

        return $this;
    }

    /**
     * Gets externalLogonId
     *
     * @return string|null
     */
    public function getExternalLogonId()
    {
        return $this->container['externalLogonId'];
    }

    /**
     * Sets externalLogonId
     *
     * @param string|null $externalLogonId 用户在商户网站的登录账号
     *
     * @return self
     */
    public function setExternalLogonId($externalLogonId)
    {
        $this->container['externalLogonId'] = $externalLogonId;

        return $this;
    }

    /**
     * Gets gmtSign
     *
     * @return string|null
     */
    public function getGmtSign()
    {
        return $this->container['gmtSign'];
    }

    /**
     * Sets gmtSign
     *
     * @param string|null $gmtSign 签约时间。如果是在签状态，返回签约时间。
     *
     * @return self
     */
    public function setGmtSign($gmtSign)
    {
        $this->container['gmtSign'] = $gmtSign;

        return $this;
    }

    /**
     * Gets gmtUnsign
     *
     * @return string|null
     */
    public function getGmtUnsign()
    {
        return $this->container['gmtUnsign'];
    }

    /**
     * Sets gmtUnsign
     *
     * @param string|null $gmtUnsign 花芝轻会员协议解约时间。如果是解约状态，才返回该字段。
     *
     * @return self
     */
    public function setGmtUnsign($gmtUnsign)
    {
        $this->container['gmtUnsign'] = $gmtUnsign;

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
     * @param string|null $openId 支付宝用户userId
     *
     * @return self
     */
    public function setOpenId($openId)
    {
        $this->container['openId'] = $openId;

        return $this;
    }

    /**
     * Gets outBizType
     *
     * @return string|null
     */
    public function getOutBizType()
    {
        return $this->container['outBizType'];
    }

    /**
     * Sets outBizType
     *
     * @param string|null $outBizType 外部业务类型，用于区分本次业务交互在商户侧具体的业务类别，提供给商家进行特定逻辑的处理
     *
     * @return self
     */
    public function setOutBizType($outBizType)
    {
        $this->container['outBizType'] = $outBizType;

        return $this;
    }

    /**
     * Gets outSignNo
     *
     * @return string|null
     */
    public function getOutSignNo()
    {
        return $this->container['outSignNo'];
    }

    /**
     * Sets outSignNo
     *
     * @param string|null $outSignNo 外部签约号，由商户提供，花芝轻会员协议中标识用户的唯一签约号（确保在商户系统中唯一）。由商户签约时传入，最终返回给商户。
     *
     * @return self
     */
    public function setOutSignNo($outSignNo)
    {
        $this->container['outSignNo'] = $outSignNo;

        return $this;
    }

    /**
     * Gets restFreezeAmount
     *
     * @return string|null
     */
    public function getRestFreezeAmount()
    {
        return $this->container['restFreezeAmount'];
    }

    /**
     * Sets restFreezeAmount
     *
     * @param string|null $restFreezeAmount 用户在本花芝轻会员协议中，剩余的总冻结额度（资金池总余额），数值能实时准确，可以用于核对。两位小数，单位元。
     *
     * @return self
     */
    public function setRestFreezeAmount($restFreezeAmount)
    {
        $this->container['restFreezeAmount'] = $restFreezeAmount;

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


