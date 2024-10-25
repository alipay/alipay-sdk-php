<?php
/**
 * AlipayOpenAgentCommonSignModel
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
 * AlipayOpenAgentCommonSignModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenAgentCommonSignModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenAgentCommonSignModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'alipayLifeName' => 'string',
        'appMarket' => 'string',
        'appName' => 'string',
        'appStatus' => 'string',
        'appTestAccount' => 'string',
        'appTestAccountPassword' => 'string',
        'batchNo' => 'string',
        'businessLicenseNo' => 'string',
        'dateLimitation' => 'string',
        'downloadLink' => 'string',
        'h5Memo' => 'string',
        'h5Sites' => 'string',
        'h5Status' => 'string',
        'lifeAppId' => 'string',
        'longTerm' => 'bool',
        'mccCode' => 'string',
        'miniAppId' => 'string',
        'miniAppName' => 'string',
        'mobileType' => 'string',
        'productCode' => 'string',
        'rate' => 'string',
        'shopCityCode' => 'string',
        'shopDetailAddress' => 'string',
        'shopDistrictCode' => 'string',
        'shopName' => 'string',
        'shopProvinceCode' => 'string',
        'specialLicenseType' => 'string',
        'tradeScene' => 'string',
        'webSites' => 'string[]',
        'webStatus' => 'string',
        'webTestAccount' => 'string',
        'webTestAccountPassword' => 'string',
        'wechatOfficialAccountName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'alipayLifeName' => null,
        'appMarket' => null,
        'appName' => null,
        'appStatus' => null,
        'appTestAccount' => null,
        'appTestAccountPassword' => null,
        'batchNo' => null,
        'businessLicenseNo' => null,
        'dateLimitation' => null,
        'downloadLink' => null,
        'h5Memo' => null,
        'h5Sites' => null,
        'h5Status' => null,
        'lifeAppId' => null,
        'longTerm' => null,
        'mccCode' => null,
        'miniAppId' => null,
        'miniAppName' => null,
        'mobileType' => null,
        'productCode' => null,
        'rate' => null,
        'shopCityCode' => null,
        'shopDetailAddress' => null,
        'shopDistrictCode' => null,
        'shopName' => null,
        'shopProvinceCode' => null,
        'specialLicenseType' => null,
        'tradeScene' => null,
        'webSites' => null,
        'webStatus' => null,
        'webTestAccount' => null,
        'webTestAccountPassword' => null,
        'wechatOfficialAccountName' => null
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
        'alipayLifeName' => 'alipay_life_name',
        'appMarket' => 'app_market',
        'appName' => 'app_name',
        'appStatus' => 'app_status',
        'appTestAccount' => 'app_test_account',
        'appTestAccountPassword' => 'app_test_account_password',
        'batchNo' => 'batch_no',
        'businessLicenseNo' => 'business_license_no',
        'dateLimitation' => 'date_limitation',
        'downloadLink' => 'download_link',
        'h5Memo' => 'h_5_memo',
        'h5Sites' => 'h_5_sites',
        'h5Status' => 'h_5_status',
        'lifeAppId' => 'life_app_id',
        'longTerm' => 'long_term',
        'mccCode' => 'mcc_code',
        'miniAppId' => 'mini_app_id',
        'miniAppName' => 'mini_app_name',
        'mobileType' => 'mobile_type',
        'productCode' => 'product_code',
        'rate' => 'rate',
        'shopCityCode' => 'shop_city_code',
        'shopDetailAddress' => 'shop_detail_address',
        'shopDistrictCode' => 'shop_district_code',
        'shopName' => 'shop_name',
        'shopProvinceCode' => 'shop_province_code',
        'specialLicenseType' => 'special_license_type',
        'tradeScene' => 'trade_scene',
        'webSites' => 'web_sites',
        'webStatus' => 'web_status',
        'webTestAccount' => 'web_test_account',
        'webTestAccountPassword' => 'web_test_account_password',
        'wechatOfficialAccountName' => 'wechat_official_account_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alipayLifeName' => 'setAlipayLifeName',
        'appMarket' => 'setAppMarket',
        'appName' => 'setAppName',
        'appStatus' => 'setAppStatus',
        'appTestAccount' => 'setAppTestAccount',
        'appTestAccountPassword' => 'setAppTestAccountPassword',
        'batchNo' => 'setBatchNo',
        'businessLicenseNo' => 'setBusinessLicenseNo',
        'dateLimitation' => 'setDateLimitation',
        'downloadLink' => 'setDownloadLink',
        'h5Memo' => 'setH5Memo',
        'h5Sites' => 'setH5Sites',
        'h5Status' => 'setH5Status',
        'lifeAppId' => 'setLifeAppId',
        'longTerm' => 'setLongTerm',
        'mccCode' => 'setMccCode',
        'miniAppId' => 'setMiniAppId',
        'miniAppName' => 'setMiniAppName',
        'mobileType' => 'setMobileType',
        'productCode' => 'setProductCode',
        'rate' => 'setRate',
        'shopCityCode' => 'setShopCityCode',
        'shopDetailAddress' => 'setShopDetailAddress',
        'shopDistrictCode' => 'setShopDistrictCode',
        'shopName' => 'setShopName',
        'shopProvinceCode' => 'setShopProvinceCode',
        'specialLicenseType' => 'setSpecialLicenseType',
        'tradeScene' => 'setTradeScene',
        'webSites' => 'setWebSites',
        'webStatus' => 'setWebStatus',
        'webTestAccount' => 'setWebTestAccount',
        'webTestAccountPassword' => 'setWebTestAccountPassword',
        'wechatOfficialAccountName' => 'setWechatOfficialAccountName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alipayLifeName' => 'getAlipayLifeName',
        'appMarket' => 'getAppMarket',
        'appName' => 'getAppName',
        'appStatus' => 'getAppStatus',
        'appTestAccount' => 'getAppTestAccount',
        'appTestAccountPassword' => 'getAppTestAccountPassword',
        'batchNo' => 'getBatchNo',
        'businessLicenseNo' => 'getBusinessLicenseNo',
        'dateLimitation' => 'getDateLimitation',
        'downloadLink' => 'getDownloadLink',
        'h5Memo' => 'getH5Memo',
        'h5Sites' => 'getH5Sites',
        'h5Status' => 'getH5Status',
        'lifeAppId' => 'getLifeAppId',
        'longTerm' => 'getLongTerm',
        'mccCode' => 'getMccCode',
        'miniAppId' => 'getMiniAppId',
        'miniAppName' => 'getMiniAppName',
        'mobileType' => 'getMobileType',
        'productCode' => 'getProductCode',
        'rate' => 'getRate',
        'shopCityCode' => 'getShopCityCode',
        'shopDetailAddress' => 'getShopDetailAddress',
        'shopDistrictCode' => 'getShopDistrictCode',
        'shopName' => 'getShopName',
        'shopProvinceCode' => 'getShopProvinceCode',
        'specialLicenseType' => 'getSpecialLicenseType',
        'tradeScene' => 'getTradeScene',
        'webSites' => 'getWebSites',
        'webStatus' => 'getWebStatus',
        'webTestAccount' => 'getWebTestAccount',
        'webTestAccountPassword' => 'getWebTestAccountPassword',
        'wechatOfficialAccountName' => 'getWechatOfficialAccountName'
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
        $this->container['alipayLifeName'] = $data['alipayLifeName'] ?? null;
        $this->container['appMarket'] = $data['appMarket'] ?? null;
        $this->container['appName'] = $data['appName'] ?? null;
        $this->container['appStatus'] = $data['appStatus'] ?? null;
        $this->container['appTestAccount'] = $data['appTestAccount'] ?? null;
        $this->container['appTestAccountPassword'] = $data['appTestAccountPassword'] ?? null;
        $this->container['batchNo'] = $data['batchNo'] ?? null;
        $this->container['businessLicenseNo'] = $data['businessLicenseNo'] ?? null;
        $this->container['dateLimitation'] = $data['dateLimitation'] ?? null;
        $this->container['downloadLink'] = $data['downloadLink'] ?? null;
        $this->container['h5Memo'] = $data['h5Memo'] ?? null;
        $this->container['h5Sites'] = $data['h5Sites'] ?? null;
        $this->container['h5Status'] = $data['h5Status'] ?? null;
        $this->container['lifeAppId'] = $data['lifeAppId'] ?? null;
        $this->container['longTerm'] = $data['longTerm'] ?? null;
        $this->container['mccCode'] = $data['mccCode'] ?? null;
        $this->container['miniAppId'] = $data['miniAppId'] ?? null;
        $this->container['miniAppName'] = $data['miniAppName'] ?? null;
        $this->container['mobileType'] = $data['mobileType'] ?? null;
        $this->container['productCode'] = $data['productCode'] ?? null;
        $this->container['rate'] = $data['rate'] ?? null;
        $this->container['shopCityCode'] = $data['shopCityCode'] ?? null;
        $this->container['shopDetailAddress'] = $data['shopDetailAddress'] ?? null;
        $this->container['shopDistrictCode'] = $data['shopDistrictCode'] ?? null;
        $this->container['shopName'] = $data['shopName'] ?? null;
        $this->container['shopProvinceCode'] = $data['shopProvinceCode'] ?? null;
        $this->container['specialLicenseType'] = $data['specialLicenseType'] ?? null;
        $this->container['tradeScene'] = $data['tradeScene'] ?? null;
        $this->container['webSites'] = $data['webSites'] ?? null;
        $this->container['webStatus'] = $data['webStatus'] ?? null;
        $this->container['webTestAccount'] = $data['webTestAccount'] ?? null;
        $this->container['webTestAccountPassword'] = $data['webTestAccountPassword'] ?? null;
        $this->container['wechatOfficialAccountName'] = $data['wechatOfficialAccountName'] ?? null;
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
     * Gets alipayLifeName
     *
     * @return string|null
     */
    public function getAlipayLifeName()
    {
        return $this->container['alipayLifeName'];
    }

    /**
     * Sets alipayLifeName
     *
     * @param string|null $alipayLifeName 支付宝生活号(原服务窗)名称（1 app_name、app_demo；2 web_sites；3 alipay_life_name。1、2、3少选择一个填写）
     *
     * @return self
     */
    public function setAlipayLifeName($alipayLifeName)
    {
        $this->container['alipayLifeName'] = $alipayLifeName;

        return $this;
    }

    /**
     * Gets appMarket
     *
     * @return string|null
     */
    public function getAppMarket()
    {
        return $this->container['appMarket'];
    }

    /**
     * Sets appMarket
     *
     * @param string|null $appMarket 投放应用市场
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
     * @param string|null $appName 商户的APP应用名称（1 app_name、app_demo；2 web_sites；3 alipay_life_name；4 wechat_official_account_name。1、2、3、4至少选择一个填写）
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
     * @param string|null $appStatus 应用状态
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
     * @param string|null $appTestAccountPassword 可以登录此应用的账户的密码。对app_test_account的登录密码。
     *
     * @return self
     */
    public function setAppTestAccountPassword($appTestAccountPassword)
    {
        $this->container['appTestAccountPassword'] = $appTestAccountPassword;

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
     * @param string|null $batchNo 代商户操作事务编号，通过alipay.open.agent.create接口进行创建。
     *
     * @return self
     */
    public function setBatchNo($batchNo)
    {
        $this->container['batchNo'] = $batchNo;

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
     * @param string|null $businessLicenseNo 营业执照号码
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
     * Gets h5Memo
     *
     * @return string|null
     */
    public function getH5Memo()
    {
        return $this->container['h5Memo'];
    }

    /**
     * Sets h5Memo
     *
     * @param string|null $h5Memo 网站扩展信息文本
     *
     * @return self
     */
    public function setH5Memo($h5Memo)
    {
        $this->container['h5Memo'] = $h5Memo;

        return $this;
    }

    /**
     * Gets h5Sites
     *
     * @return string|null
     */
    public function getH5Sites()
    {
        return $this->container['h5Sites'];
    }

    /**
     * Sets h5Sites
     *
     * @param string|null $h5Sites H5网站地址
     *
     * @return self
     */
    public function setH5Sites($h5Sites)
    {
        $this->container['h5Sites'] = $h5Sites;

        return $this;
    }

    /**
     * Gets h5Status
     *
     * @return string|null
     */
    public function getH5Status()
    {
        return $this->container['h5Status'];
    }

    /**
     * Sets h5Status
     *
     * @param string|null $h5Status H5网站状态
     *
     * @return self
     */
    public function setH5Status($h5Status)
    {
        $this->container['h5Status'] = $h5Status;

        return $this;
    }

    /**
     * Gets lifeAppId
     *
     * @return string|null
     */
    public function getLifeAppId()
    {
        return $this->container['lifeAppId'];
    }

    /**
     * Sets lifeAppId
     *
     * @param string|null $lifeAppId 请输入被签约商户的支付宝生活号ID编号
     *
     * @return self
     */
    public function setLifeAppId($lifeAppId)
    {
        $this->container['lifeAppId'] = $lifeAppId;

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
     * @param string|null $mccCode <a href=\"https://opendocs.alipay.com/common/02khjv\">商家经营类目</a> 中的“经营类目编码”
     *
     * @return self
     */
    public function setMccCode($mccCode)
    {
        $this->container['mccCode'] = $mccCode;

        return $this;
    }

    /**
     * Gets miniAppId
     *
     * @return string|null
     */
    public function getMiniAppId()
    {
        return $this->container['miniAppId'];
    }

    /**
     * Sets miniAppId
     *
     * @param string|null $miniAppId 请输入被签约商家下任意小程序APPID ID编号
     *
     * @return self
     */
    public function setMiniAppId($miniAppId)
    {
        $this->container['miniAppId'] = $miniAppId;

        return $this;
    }

    /**
     * Gets miniAppName
     *
     * @return string|null
     */
    public function getMiniAppName()
    {
        return $this->container['miniAppName'];
    }

    /**
     * Sets miniAppName
     *
     * @param string|null $miniAppName 小程序名称
     *
     * @return self
     */
    public function setMiniAppName($miniAppName)
    {
        $this->container['miniAppName'] = $miniAppName;

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
     * @param string|null $mobileType 移动设备类型，当开通电脑网站支付产品时不需赋值；当开通手机网站支付时，传H5；当开通JSAPI时，传APP；当开通预授权支付产品，且交易场景选择“mobile”(移动设备)时，需要从APP,H5中至少选择一个，可多选，字符串英文逗号分隔。
     *
     * @return self
     */
    public function setMobileType($mobileType)
    {
        $this->container['mobileType'] = $mobileType;

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
     * @param string|null $productCode isv要代商户签约产品码，产品码是支付宝内部对产品的唯一标识
     *
     * @return self
     */
    public function setProductCode($productCode)
    {
        $this->container['productCode'] = $productCode;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return string|null
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param string|null $rate 服务费率（%），例如：请输入0.38~0.6 之间（小数点后两位，可取0.38%及0.6%），直播买卖通涉及JSAPI支付产品，交易手续费为 0.38%-0.6%，后续费率变化可参考支付宝标准服务费。 当签约且授权标识 sign_and_auth=true 时，该费率信息必填。
     *
     * @return self
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets shopCityCode
     *
     * @return string|null
     */
    public function getShopCityCode()
    {
        return $this->container['shopCityCode'];
    }

    /**
     * Sets shopCityCode
     *
     * @param string|null $shopCityCode 门店所在城市
     *
     * @return self
     */
    public function setShopCityCode($shopCityCode)
    {
        $this->container['shopCityCode'] = $shopCityCode;

        return $this;
    }

    /**
     * Gets shopDetailAddress
     *
     * @return string|null
     */
    public function getShopDetailAddress()
    {
        return $this->container['shopDetailAddress'];
    }

    /**
     * Sets shopDetailAddress
     *
     * @param string|null $shopDetailAddress 门店详细地址
     *
     * @return self
     */
    public function setShopDetailAddress($shopDetailAddress)
    {
        $this->container['shopDetailAddress'] = $shopDetailAddress;

        return $this;
    }

    /**
     * Gets shopDistrictCode
     *
     * @return string|null
     */
    public function getShopDistrictCode()
    {
        return $this->container['shopDistrictCode'];
    }

    /**
     * Sets shopDistrictCode
     *
     * @param string|null $shopDistrictCode 门店所在区/县
     *
     * @return self
     */
    public function setShopDistrictCode($shopDistrictCode)
    {
        $this->container['shopDistrictCode'] = $shopDistrictCode;

        return $this;
    }

    /**
     * Gets shopName
     *
     * @return string|null
     */
    public function getShopName()
    {
        return $this->container['shopName'];
    }

    /**
     * Sets shopName
     *
     * @param string|null $shopName 门店名称
     *
     * @return self
     */
    public function setShopName($shopName)
    {
        $this->container['shopName'] = $shopName;

        return $this;
    }

    /**
     * Gets shopProvinceCode
     *
     * @return string|null
     */
    public function getShopProvinceCode()
    {
        return $this->container['shopProvinceCode'];
    }

    /**
     * Sets shopProvinceCode
     *
     * @param string|null $shopProvinceCode 门店所在省份
     *
     * @return self
     */
    public function setShopProvinceCode($shopProvinceCode)
    {
        $this->container['shopProvinceCode'] = $shopProvinceCode;

        return $this;
    }

    /**
     * Gets specialLicenseType
     *
     * @return string|null
     */
    public function getSpecialLicenseType()
    {
        return $this->container['specialLicenseType'];
    }

    /**
     * Sets specialLicenseType
     *
     * @param string|null $specialLicenseType 合约特殊资质的类型，不传默认99
     *
     * @return self
     */
    public function setSpecialLicenseType($specialLicenseType)
    {
        $this->container['specialLicenseType'] = $specialLicenseType;

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
     * @param string|null $tradeScene 交易场景，当开通产品为电脑网站支付时，传pc；当开通产品为手机网站支付时，传mobile；当开通产品为JSAPI时，传tiny_app；当开通产品为预授权支付时，下面括号中三个至少传一个（tiny_app,mobile,offline_store），可多选，字符串用英文逗号分隔
     *
     * @return self
     */
    public function setTradeScene($tradeScene)
    {
        $this->container['tradeScene'] = $tradeScene;

        return $this;
    }

    /**
     * Gets webSites
     *
     * @return string[]|null
     */
    public function getWebSites()
    {
        return $this->container['webSites'];
    }

    /**
     * Sets webSites
     *
     * @param string[]|null $webSites 接入网址信息（1 app_name、app_demo；2 web_sites；3 alipay_life_name；4 wechat_official_account_name。1、2、3、4至少选择一个填写）
     *
     * @return self
     */
    public function setWebSites($webSites)
    {
        $this->container['webSites'] = $webSites;

        return $this;
    }

    /**
     * Gets webStatus
     *
     * @return string|null
     */
    public function getWebStatus()
    {
        return $this->container['webStatus'];
    }

    /**
     * Sets webStatus
     *
     * @param string|null $webStatus 网站状态，枚举值为：ONLINE，OFFLINE
     *
     * @return self
     */
    public function setWebStatus($webStatus)
    {
        $this->container['webStatus'] = $webStatus;

        return $this;
    }

    /**
     * Gets webTestAccount
     *
     * @return string|null
     */
    public function getWebTestAccount()
    {
        return $this->container['webTestAccount'];
    }

    /**
     * Sets webTestAccount
     *
     * @param string|null $webTestAccount 可以登录此网站的测试账户。
     *
     * @return self
     */
    public function setWebTestAccount($webTestAccount)
    {
        $this->container['webTestAccount'] = $webTestAccount;

        return $this;
    }

    /**
     * Gets webTestAccountPassword
     *
     * @return string|null
     */
    public function getWebTestAccountPassword()
    {
        return $this->container['webTestAccountPassword'];
    }

    /**
     * Sets webTestAccountPassword
     *
     * @param string|null $webTestAccountPassword 可以登录此网站的账户的密码。对应web_test_account的登录密码
     *
     * @return self
     */
    public function setWebTestAccountPassword($webTestAccountPassword)
    {
        $this->container['webTestAccountPassword'] = $webTestAccountPassword;

        return $this;
    }

    /**
     * Gets wechatOfficialAccountName
     *
     * @return string|null
     * @deprecated
     */
    public function getWechatOfficialAccountName()
    {
        return $this->container['wechatOfficialAccountName'];
    }

    /**
     * Sets wechatOfficialAccountName
     *
     * @param string|null $wechatOfficialAccountName 1 app_name、app_demo；2 web_sites；3 alipay_life_name；4 wechat_official_account_name。1、2、3、4至少选择一个填写(该字段已经不在使用，废弃，不用填写)
     *
     * @return self
     * @deprecated
     */
    public function setWechatOfficialAccountName($wechatOfficialAccountName)
    {
        $this->container['wechatOfficialAccountName'] = $wechatOfficialAccountName;

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


