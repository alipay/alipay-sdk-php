<?php
/**
 * AlipayOpenAgentMobilepaySignModel
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
 * AlipayOpenAgentMobilepaySignModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenAgentMobilepaySignModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenAgentMobilepaySignModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'appMarket' => 'string[]',
        'appName' => 'string',
        'appStatus' => 'string',
        'appTestAccount' => 'string',
        'appTestAccountPassword' => 'string',
        'appType' => 'string[]',
        'batchNo' => 'string',
        'businessLicenseMobile' => 'string',
        'businessLicenseNo' => 'string',
        'dateLimitation' => 'string',
        'downloadLink' => 'string',
        'longTerm' => 'bool',
        'mccCode' => 'string',
        'mobileType' => 'string',
        'tradeScene' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'appMarket' => null,
        'appName' => null,
        'appStatus' => null,
        'appTestAccount' => null,
        'appTestAccountPassword' => null,
        'appType' => null,
        'batchNo' => null,
        'businessLicenseMobile' => null,
        'businessLicenseNo' => null,
        'dateLimitation' => null,
        'downloadLink' => null,
        'longTerm' => null,
        'mccCode' => null,
        'mobileType' => null,
        'tradeScene' => null
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
        'appMarket' => 'app_market',
        'appName' => 'app_name',
        'appStatus' => 'app_status',
        'appTestAccount' => 'app_test_account',
        'appTestAccountPassword' => 'app_test_account_password',
        'appType' => 'app_type',
        'batchNo' => 'batch_no',
        'businessLicenseMobile' => 'business_license_mobile',
        'businessLicenseNo' => 'business_license_no',
        'dateLimitation' => 'date_limitation',
        'downloadLink' => 'download_link',
        'longTerm' => 'long_term',
        'mccCode' => 'mcc_code',
        'mobileType' => 'mobile_type',
        'tradeScene' => 'trade_scene'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'appMarket' => 'setAppMarket',
        'appName' => 'setAppName',
        'appStatus' => 'setAppStatus',
        'appTestAccount' => 'setAppTestAccount',
        'appTestAccountPassword' => 'setAppTestAccountPassword',
        'appType' => 'setAppType',
        'batchNo' => 'setBatchNo',
        'businessLicenseMobile' => 'setBusinessLicenseMobile',
        'businessLicenseNo' => 'setBusinessLicenseNo',
        'dateLimitation' => 'setDateLimitation',
        'downloadLink' => 'setDownloadLink',
        'longTerm' => 'setLongTerm',
        'mccCode' => 'setMccCode',
        'mobileType' => 'setMobileType',
        'tradeScene' => 'setTradeScene'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'appMarket' => 'getAppMarket',
        'appName' => 'getAppName',
        'appStatus' => 'getAppStatus',
        'appTestAccount' => 'getAppTestAccount',
        'appTestAccountPassword' => 'getAppTestAccountPassword',
        'appType' => 'getAppType',
        'batchNo' => 'getBatchNo',
        'businessLicenseMobile' => 'getBusinessLicenseMobile',
        'businessLicenseNo' => 'getBusinessLicenseNo',
        'dateLimitation' => 'getDateLimitation',
        'downloadLink' => 'getDownloadLink',
        'longTerm' => 'getLongTerm',
        'mccCode' => 'getMccCode',
        'mobileType' => 'getMobileType',
        'tradeScene' => 'getTradeScene'
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
        $this->container['appMarket'] = $data['appMarket'] ?? null;
        $this->container['appName'] = $data['appName'] ?? null;
        $this->container['appStatus'] = $data['appStatus'] ?? null;
        $this->container['appTestAccount'] = $data['appTestAccount'] ?? null;
        $this->container['appTestAccountPassword'] = $data['appTestAccountPassword'] ?? null;
        $this->container['appType'] = $data['appType'] ?? null;
        $this->container['batchNo'] = $data['batchNo'] ?? null;
        $this->container['businessLicenseMobile'] = $data['businessLicenseMobile'] ?? null;
        $this->container['businessLicenseNo'] = $data['businessLicenseNo'] ?? null;
        $this->container['dateLimitation'] = $data['dateLimitation'] ?? null;
        $this->container['downloadLink'] = $data['downloadLink'] ?? null;
        $this->container['longTerm'] = $data['longTerm'] ?? null;
        $this->container['mccCode'] = $data['mccCode'] ?? null;
        $this->container['mobileType'] = $data['mobileType'] ?? null;
        $this->container['tradeScene'] = $data['tradeScene'] ?? null;
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
     * Gets appMarket
     *
     * @return string[]|null
     */
    public function getAppMarket()
    {
        return $this->container['appMarket'];
    }

    /**
     * Sets appMarket
     *
     * @param string[]|null $appMarket 应用在哪些市场上架，枚举值为：苹果,应用宝,华为,360,小米,豌豆荚,其他
     *
     * @return self
     */
    public function setAppMarket($appMarket)
    {
        $this->container['appMarket'] = $appMarket;

        return $this;
    }

    /**
     * Gets appName
     *
     * @return string|null
     */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
     * Sets appName
     *
     * @param string|null $appName 商户的APP应用名称
     *
     * @return self
     */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;

        return $this;
    }

    /**
     * Gets appStatus
     *
     * @return string|null
     */
    public function getAppStatus()
    {
        return $this->container['appStatus'];
    }

    /**
     * Sets appStatus
     *
     * @param string|null $appStatus 应用上架状态，枚举值为 已上线，未上线
     *
     * @return self
     */
    public function setAppStatus($appStatus)
    {
        $this->container['appStatus'] = $appStatus;

        return $this;
    }

    /**
     * Gets appTestAccount
     *
     * @return string|null
     */
    public function getAppTestAccount()
    {
        return $this->container['appTestAccount'];
    }

    /**
     * Sets appTestAccount
     *
     * @param string|null $appTestAccount 可以登录该应用的测试账户
     *
     * @return self
     */
    public function setAppTestAccount($appTestAccount)
    {
        $this->container['appTestAccount'] = $appTestAccount;

        return $this;
    }

    /**
     * Gets appTestAccountPassword
     *
     * @return string|null
     */
    public function getAppTestAccountPassword()
    {
        return $this->container['appTestAccountPassword'];
    }

    /**
     * Sets appTestAccountPassword
     *
     * @param string|null $appTestAccountPassword 可以登录此应用的账户的密码。对应app_test_account的登录密码
     *
     * @return self
     */
    public function setAppTestAccountPassword($appTestAccountPassword)
    {
        $this->container['appTestAccountPassword'] = $appTestAccountPassword;

        return $this;
    }

    /**
     * Gets appType
     *
     * @return string[]|null
     */
    public function getAppType()
    {
        return $this->container['appType'];
    }

    /**
     * Sets appType
     *
     * @param string[]|null $appType 应用类型，枚举值为：IOS，安卓
     *
     * @return self
     */
    public function setAppType($appType)
    {
        $this->container['appType'] = $appType;

        return $this;
    }

    /**
     * Gets batchNo
     *
     * @return string|null
     */
    public function getBatchNo()
    {
        return $this->container['batchNo'];
    }

    /**
     * Sets batchNo
     *
     * @param string|null $batchNo 代商户操作事务编号，通过alipay.open.isv.agent.create接口进行创建。
     *
     * @return self
     */
    public function setBatchNo($batchNo)
    {
        $this->container['batchNo'] = $batchNo;

        return $this;
    }

    /**
     * Gets businessLicenseMobile
     *
     * @return string|null
     */
    public function getBusinessLicenseMobile()
    {
        return $this->container['businessLicenseMobile'];
    }

    /**
     * Sets businessLicenseMobile
     *
     * @param string|null $businessLicenseMobile 营业执照法人手机号码
     *
     * @return self
     */
    public function setBusinessLicenseMobile($businessLicenseMobile)
    {
        $this->container['businessLicenseMobile'] = $businessLicenseMobile;

        return $this;
    }

    /**
     * Gets businessLicenseNo
     *
     * @return string|null
     */
    public function getBusinessLicenseNo()
    {
        return $this->container['businessLicenseNo'];
    }

    /**
     * Sets businessLicenseNo
     *
     * @param string|null $businessLicenseNo 营业执照号码。
     *
     * @return self
     */
    public function setBusinessLicenseNo($businessLicenseNo)
    {
        $this->container['businessLicenseNo'] = $businessLicenseNo;

        return $this;
    }

    /**
     * Gets dateLimitation
     *
     * @return string|null
     */
    public function getDateLimitation()
    {
        return $this->container['dateLimitation'];
    }

    /**
     * Sets dateLimitation
     *
     * @param string|null $dateLimitation 营业期限
     *
     * @return self
     */
    public function setDateLimitation($dateLimitation)
    {
        $this->container['dateLimitation'] = $dateLimitation;

        return $this;
    }

    /**
     * Gets downloadLink
     *
     * @return string|null
     */
    public function getDownloadLink()
    {
        return $this->container['downloadLink'];
    }

    /**
     * Sets downloadLink
     *
     * @param string|null $downloadLink 应用下载链接
     *
     * @return self
     */
    public function setDownloadLink($downloadLink)
    {
        $this->container['downloadLink'] = $downloadLink;

        return $this;
    }

    /**
     * Gets longTerm
     *
     * @return bool|null
     */
    public function getLongTerm()
    {
        return $this->container['longTerm'];
    }

    /**
     * Sets longTerm
     *
     * @param bool|null $longTerm 营业期限是否长期有效
     *
     * @return self
     */
    public function setLongTerm($longTerm)
    {
        $this->container['longTerm'] = $longTerm;

        return $this;
    }

    /**
     * Gets mccCode
     *
     * @return string|null
     */
    public function getMccCode()
    {
        return $this->container['mccCode'];
    }

    /**
     * Sets mccCode
     *
     * @param string|null $mccCode 所属MCCCode，详情可参考 <a href=\"https://opendocs.alipay.com/open/01n22g#%E5%95%86%E5%AE%B6%E7%BB%8F%E8%90%A5%E7%B1%BB%E7%9B%AE\">商家经营类目</a> 中的“经营类目编码”
     *
     * @return self
     */
    public function setMccCode($mccCode)
    {
        $this->container['mccCode'] = $mccCode;

        return $this;
    }

    /**
     * Gets mobileType
     *
     * @return string|null
     */
    public function getMobileType()
    {
        return $this->container['mobileType'];
    }

    /**
     * Sets mobileType
     *
     * @param string|null $mobileType 传参：APP，代表设备类型是APP
     *
     * @return self
     */
    public function setMobileType($mobileType)
    {
        $this->container['mobileType'] = $mobileType;

        return $this;
    }

    /**
     * Gets tradeScene
     *
     * @return string|null
     */
    public function getTradeScene()
    {
        return $this->container['tradeScene'];
    }

    /**
     * Sets tradeScene
     *
     * @param string|null $tradeScene 传参：mobile，代表交易场景是移动设备
     *
     * @return self
     */
    public function setTradeScene($tradeScene)
    {
        $this->container['tradeScene'] = $tradeScene;

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


