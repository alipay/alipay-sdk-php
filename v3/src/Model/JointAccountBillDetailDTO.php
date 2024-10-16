<?php
/**
 * JointAccountBillDetailDTO
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
 * JointAccountBillDetailDTO Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class JointAccountBillDetailDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'JointAccountBillDetailDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountId' => 'string',
        'amount' => 'string',
        'billNo' => 'string',
        'bizDate' => 'string',
        'bizNo' => 'string',
        'inOut' => 'string',
        'openId' => 'string',
        'outTradeNo' => 'string',
        'payerAssetInfo' => '\Alipay\OpenAPISDK\Model\UserAssetInfoVO',
        'sellerFullName' => 'string',
        'sellerLogonId' => 'string',
        'title' => 'string',
        'userId' => 'string'
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
        'amount' => null,
        'billNo' => null,
        'bizDate' => null,
        'bizNo' => null,
        'inOut' => null,
        'openId' => null,
        'outTradeNo' => null,
        'payerAssetInfo' => null,
        'sellerFullName' => null,
        'sellerLogonId' => null,
        'title' => null,
        'userId' => null
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
        'amount' => 'amount',
        'billNo' => 'bill_no',
        'bizDate' => 'biz_date',
        'bizNo' => 'biz_no',
        'inOut' => 'in_out',
        'openId' => 'open_id',
        'outTradeNo' => 'out_trade_no',
        'payerAssetInfo' => 'payer_asset_info',
        'sellerFullName' => 'seller_full_name',
        'sellerLogonId' => 'seller_logon_id',
        'title' => 'title',
        'userId' => 'user_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'amount' => 'setAmount',
        'billNo' => 'setBillNo',
        'bizDate' => 'setBizDate',
        'bizNo' => 'setBizNo',
        'inOut' => 'setInOut',
        'openId' => 'setOpenId',
        'outTradeNo' => 'setOutTradeNo',
        'payerAssetInfo' => 'setPayerAssetInfo',
        'sellerFullName' => 'setSellerFullName',
        'sellerLogonId' => 'setSellerLogonId',
        'title' => 'setTitle',
        'userId' => 'setUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'amount' => 'getAmount',
        'billNo' => 'getBillNo',
        'bizDate' => 'getBizDate',
        'bizNo' => 'getBizNo',
        'inOut' => 'getInOut',
        'openId' => 'getOpenId',
        'outTradeNo' => 'getOutTradeNo',
        'payerAssetInfo' => 'getPayerAssetInfo',
        'sellerFullName' => 'getSellerFullName',
        'sellerLogonId' => 'getSellerLogonId',
        'title' => 'getTitle',
        'userId' => 'getUserId'
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
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['billNo'] = $data['billNo'] ?? null;
        $this->container['bizDate'] = $data['bizDate'] ?? null;
        $this->container['bizNo'] = $data['bizNo'] ?? null;
        $this->container['inOut'] = $data['inOut'] ?? null;
        $this->container['openId'] = $data['openId'] ?? null;
        $this->container['outTradeNo'] = $data['outTradeNo'] ?? null;
        $this->container['payerAssetInfo'] = $data['payerAssetInfo'] ?? null;
        $this->container['sellerFullName'] = $data['sellerFullName'] ?? null;
        $this->container['sellerLogonId'] = $data['sellerLogonId'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['userId'] = $data['userId'] ?? null;
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
     * @param string|null $accountId 共同账户ID
     *
     * @return self
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return string|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string|null $amount 消费金额
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets billNo
     *
     * @return string|null
     */
    public function getBillNo()
    {
        return $this->container['billNo'];
    }

    /**
     * Sets billNo
     *
     * @param string|null $billNo 账单业务号
     *
     * @return self
     */
    public function setBillNo($billNo)
    {
        $this->container['billNo'] = $billNo;

        return $this;
    }

    /**
     * Gets bizDate
     *
     * @return string|null
     */
    public function getBizDate()
    {
        return $this->container['bizDate'];
    }

    /**
     * Sets bizDate
     *
     * @param string|null $bizDate 业务时间
     *
     * @return self
     */
    public function setBizDate($bizDate)
    {
        $this->container['bizDate'] = $bizDate;

        return $this;
    }

    /**
     * Gets bizNo
     *
     * @return string|null
     */
    public function getBizNo()
    {
        return $this->container['bizNo'];
    }

    /**
     * Sets bizNo
     *
     * @param string|null $bizNo 订单号
     *
     * @return self
     */
    public function setBizNo($bizNo)
    {
        $this->container['bizNo'] = $bizNo;

        return $this;
    }

    /**
     * Gets inOut
     *
     * @return string|null
     */
    public function getInOut()
    {
        return $this->container['inOut'];
    }

    /**
     * Sets inOut
     *
     * @param string|null $inOut 1-退款，2-支付
     *
     * @return self
     */
    public function setInOut($inOut)
    {
        $this->container['inOut'] = $inOut;

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
     * @param string|null $openId 共同账户消费的成员openid
     *
     * @return self
     */
    public function setOpenId($openId)
    {
        $this->container['openId'] = $openId;

        return $this;
    }

    /**
     * Gets outTradeNo
     *
     * @return string|null
     */
    public function getOutTradeNo()
    {
        return $this->container['outTradeNo'];
    }

    /**
     * Sets outTradeNo
     *
     * @param string|null $outTradeNo 外部交易单号，正向支付为外部交易单号，逆向退款是为外部退款单号
     *
     * @return self
     */
    public function setOutTradeNo($outTradeNo)
    {
        $this->container['outTradeNo'] = $outTradeNo;

        return $this;
    }

    /**
     * Gets payerAssetInfo
     *
     * @return \Alipay\OpenAPISDK\Model\UserAssetInfoVO|null
     */
    public function getPayerAssetInfo()
    {
        return $this->container['payerAssetInfo'];
    }

    /**
     * Sets payerAssetInfo
     *
     * @param \Alipay\OpenAPISDK\Model\UserAssetInfoVO|null $payerAssetInfo payerAssetInfo
     *
     * @return self
     */
    public function setPayerAssetInfo($payerAssetInfo)
    {
        $this->container['payerAssetInfo'] = $payerAssetInfo;

        return $this;
    }

    /**
     * Gets sellerFullName
     *
     * @return string|null
     */
    public function getSellerFullName()
    {
        return $this->container['sellerFullName'];
    }

    /**
     * Sets sellerFullName
     *
     * @param string|null $sellerFullName 间连商户显示二级商户全名，直连、直付通则显示一级商户全名。企业商户该字段不脱敏，非企业商户该字段会脱敏
     *
     * @return self
     */
    public function setSellerFullName($sellerFullName)
    {
        $this->container['sellerFullName'] = $sellerFullName;

        return $this;
    }

    /**
     * Gets sellerLogonId
     *
     * @return string|null
     */
    public function getSellerLogonId()
    {
        return $this->container['sellerLogonId'];
    }

    /**
     * Sets sellerLogonId
     *
     * @param string|null $sellerLogonId 收款方登录号信息。间连商户显示二级商户的登录号信息；直连、直付通显示一级商户的登录号信息；该字段脱敏
     *
     * @return self
     */
    public function setSellerLogonId($sellerLogonId)
    {
        $this->container['sellerLogonId'] = $sellerLogonId;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title 账单标题
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets userId
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param string|null $userId 共同账户消费的成员ID
     *
     * @return self
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

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


