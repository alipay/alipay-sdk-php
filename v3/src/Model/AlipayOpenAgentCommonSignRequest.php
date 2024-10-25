<?php
/**
 * AlipayOpenAgentCommonSignRequest
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
 * AlipayOpenAgentCommonSignRequest Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenAgentCommonSignRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'alipay_open_agent_common_sign_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'appAuthPic' => '\SplFileObject',
        'appDemo' => '\SplFileObject',
        'appHomeScreenshot' => '\SplFileObject',
        'appItemScreenshot' => '\SplFileObject',
        'appPayScreenshot' => '\SplFileObject',
        'businessLicenseAuthPic' => '\SplFileObject',
        'businessLicensePic' => '\SplFileObject',
        'data' => '\Alipay\OpenAPISDK\Model\AlipayOpenAgentCommonSignModel',
        'h5ExtraPic' => '\SplFileObject',
        'h5HomeScreenshot' => '\SplFileObject',
        'h5ItemScreenshot' => '\SplFileObject',
        'h5PayScreenshot' => '\SplFileObject',
        'h5SitesLoa' => '\SplFileObject',
        'miniAppScreenshot' => '\SplFileObject',
        'shopScenePic' => '\SplFileObject',
        'shopSignBoardPic' => '\SplFileObject',
        'specialLicensePic' => '\SplFileObject',
        'webHomeScreenshot' => '\SplFileObject',
        'webItemScreenshot' => '\SplFileObject',
        'webPayScreenshot' => '\SplFileObject',
        'webSitesLoa' => '\SplFileObject'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'appAuthPic' => 'binary',
        'appDemo' => 'binary',
        'appHomeScreenshot' => 'binary',
        'appItemScreenshot' => 'binary',
        'appPayScreenshot' => 'binary',
        'businessLicenseAuthPic' => 'binary',
        'businessLicensePic' => 'binary',
        'data' => null,
        'h5ExtraPic' => 'binary',
        'h5HomeScreenshot' => 'binary',
        'h5ItemScreenshot' => 'binary',
        'h5PayScreenshot' => 'binary',
        'h5SitesLoa' => 'binary',
        'miniAppScreenshot' => 'binary',
        'shopScenePic' => 'binary',
        'shopSignBoardPic' => 'binary',
        'specialLicensePic' => 'binary',
        'webHomeScreenshot' => 'binary',
        'webItemScreenshot' => 'binary',
        'webPayScreenshot' => 'binary',
        'webSitesLoa' => 'binary'
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
        'appAuthPic' => 'app_auth_pic',
        'appDemo' => 'app_demo',
        'appHomeScreenshot' => 'app_home_screenshot',
        'appItemScreenshot' => 'app_item_screenshot',
        'appPayScreenshot' => 'app_pay_screenshot',
        'businessLicenseAuthPic' => 'business_license_auth_pic',
        'businessLicensePic' => 'business_license_pic',
        'data' => 'data',
        'h5ExtraPic' => 'h_5_extra_pic',
        'h5HomeScreenshot' => 'h_5_home_screenshot',
        'h5ItemScreenshot' => 'h_5_item_screenshot',
        'h5PayScreenshot' => 'h_5_pay_screenshot',
        'h5SitesLoa' => 'h_5_sites_loa',
        'miniAppScreenshot' => 'mini_app_screenshot',
        'shopScenePic' => 'shop_scene_pic',
        'shopSignBoardPic' => 'shop_sign_board_pic',
        'specialLicensePic' => 'special_license_pic',
        'webHomeScreenshot' => 'web_home_screenshot',
        'webItemScreenshot' => 'web_item_screenshot',
        'webPayScreenshot' => 'web_pay_screenshot',
        'webSitesLoa' => 'web_sites_loa'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'appAuthPic' => 'setAppAuthPic',
        'appDemo' => 'setAppDemo',
        'appHomeScreenshot' => 'setAppHomeScreenshot',
        'appItemScreenshot' => 'setAppItemScreenshot',
        'appPayScreenshot' => 'setAppPayScreenshot',
        'businessLicenseAuthPic' => 'setBusinessLicenseAuthPic',
        'businessLicensePic' => 'setBusinessLicensePic',
        'data' => 'setData',
        'h5ExtraPic' => 'setH5ExtraPic',
        'h5HomeScreenshot' => 'setH5HomeScreenshot',
        'h5ItemScreenshot' => 'setH5ItemScreenshot',
        'h5PayScreenshot' => 'setH5PayScreenshot',
        'h5SitesLoa' => 'setH5SitesLoa',
        'miniAppScreenshot' => 'setMiniAppScreenshot',
        'shopScenePic' => 'setShopScenePic',
        'shopSignBoardPic' => 'setShopSignBoardPic',
        'specialLicensePic' => 'setSpecialLicensePic',
        'webHomeScreenshot' => 'setWebHomeScreenshot',
        'webItemScreenshot' => 'setWebItemScreenshot',
        'webPayScreenshot' => 'setWebPayScreenshot',
        'webSitesLoa' => 'setWebSitesLoa'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'appAuthPic' => 'getAppAuthPic',
        'appDemo' => 'getAppDemo',
        'appHomeScreenshot' => 'getAppHomeScreenshot',
        'appItemScreenshot' => 'getAppItemScreenshot',
        'appPayScreenshot' => 'getAppPayScreenshot',
        'businessLicenseAuthPic' => 'getBusinessLicenseAuthPic',
        'businessLicensePic' => 'getBusinessLicensePic',
        'data' => 'getData',
        'h5ExtraPic' => 'getH5ExtraPic',
        'h5HomeScreenshot' => 'getH5HomeScreenshot',
        'h5ItemScreenshot' => 'getH5ItemScreenshot',
        'h5PayScreenshot' => 'getH5PayScreenshot',
        'h5SitesLoa' => 'getH5SitesLoa',
        'miniAppScreenshot' => 'getMiniAppScreenshot',
        'shopScenePic' => 'getShopScenePic',
        'shopSignBoardPic' => 'getShopSignBoardPic',
        'specialLicensePic' => 'getSpecialLicensePic',
        'webHomeScreenshot' => 'getWebHomeScreenshot',
        'webItemScreenshot' => 'getWebItemScreenshot',
        'webPayScreenshot' => 'getWebPayScreenshot',
        'webSitesLoa' => 'getWebSitesLoa'
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
        $this->container['appAuthPic'] = $data['appAuthPic'] ?? null;
        $this->container['appDemo'] = $data['appDemo'] ?? null;
        $this->container['appHomeScreenshot'] = $data['appHomeScreenshot'] ?? null;
        $this->container['appItemScreenshot'] = $data['appItemScreenshot'] ?? null;
        $this->container['appPayScreenshot'] = $data['appPayScreenshot'] ?? null;
        $this->container['businessLicenseAuthPic'] = $data['businessLicenseAuthPic'] ?? null;
        $this->container['businessLicensePic'] = $data['businessLicensePic'] ?? null;
        $this->container['data'] = $data['data'] ?? null;
        $this->container['h5ExtraPic'] = $data['h5ExtraPic'] ?? null;
        $this->container['h5HomeScreenshot'] = $data['h5HomeScreenshot'] ?? null;
        $this->container['h5ItemScreenshot'] = $data['h5ItemScreenshot'] ?? null;
        $this->container['h5PayScreenshot'] = $data['h5PayScreenshot'] ?? null;
        $this->container['h5SitesLoa'] = $data['h5SitesLoa'] ?? null;
        $this->container['miniAppScreenshot'] = $data['miniAppScreenshot'] ?? null;
        $this->container['shopScenePic'] = $data['shopScenePic'] ?? null;
        $this->container['shopSignBoardPic'] = $data['shopSignBoardPic'] ?? null;
        $this->container['specialLicensePic'] = $data['specialLicensePic'] ?? null;
        $this->container['webHomeScreenshot'] = $data['webHomeScreenshot'] ?? null;
        $this->container['webItemScreenshot'] = $data['webItemScreenshot'] ?? null;
        $this->container['webPayScreenshot'] = $data['webPayScreenshot'] ?? null;
        $this->container['webSitesLoa'] = $data['webSitesLoa'] ?? null;
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
     * Gets appAuthPic
     *
     * @return \SplFileObject|null
     */
    public function getAppAuthPic()
    {
        return $this->container['appAuthPic'];
    }

    /**
     * Sets appAuthPic
     *
     * @param \SplFileObject|null $appAuthPic appAuthPic
     *
     * @return self
     */
    public function setAppAuthPic($appAuthPic)
    {
        $this->container['appAuthPic'] = $appAuthPic;

        return $this;
    }

    /**
     * Gets appDemo
     *
     * @return \SplFileObject|null
     */
    public function getAppDemo()
    {
        return $this->container['appDemo'];
    }

    /**
     * Sets appDemo
     *
     * @param \SplFileObject|null $appDemo appDemo
     *
     * @return self
     */
    public function setAppDemo($appDemo)
    {
        $this->container['appDemo'] = $appDemo;

        return $this;
    }

    /**
     * Gets appHomeScreenshot
     *
     * @return \SplFileObject|null
     */
    public function getAppHomeScreenshot()
    {
        return $this->container['appHomeScreenshot'];
    }

    /**
     * Sets appHomeScreenshot
     *
     * @param \SplFileObject|null $appHomeScreenshot appHomeScreenshot
     *
     * @return self
     */
    public function setAppHomeScreenshot($appHomeScreenshot)
    {
        $this->container['appHomeScreenshot'] = $appHomeScreenshot;

        return $this;
    }

    /**
     * Gets appItemScreenshot
     *
     * @return \SplFileObject|null
     */
    public function getAppItemScreenshot()
    {
        return $this->container['appItemScreenshot'];
    }

    /**
     * Sets appItemScreenshot
     *
     * @param \SplFileObject|null $appItemScreenshot appItemScreenshot
     *
     * @return self
     */
    public function setAppItemScreenshot($appItemScreenshot)
    {
        $this->container['appItemScreenshot'] = $appItemScreenshot;

        return $this;
    }

    /**
     * Gets appPayScreenshot
     *
     * @return \SplFileObject|null
     */
    public function getAppPayScreenshot()
    {
        return $this->container['appPayScreenshot'];
    }

    /**
     * Sets appPayScreenshot
     *
     * @param \SplFileObject|null $appPayScreenshot appPayScreenshot
     *
     * @return self
     */
    public function setAppPayScreenshot($appPayScreenshot)
    {
        $this->container['appPayScreenshot'] = $appPayScreenshot;

        return $this;
    }

    /**
     * Gets businessLicenseAuthPic
     *
     * @return \SplFileObject|null
     */
    public function getBusinessLicenseAuthPic()
    {
        return $this->container['businessLicenseAuthPic'];
    }

    /**
     * Sets businessLicenseAuthPic
     *
     * @param \SplFileObject|null $businessLicenseAuthPic businessLicenseAuthPic
     *
     * @return self
     */
    public function setBusinessLicenseAuthPic($businessLicenseAuthPic)
    {
        $this->container['businessLicenseAuthPic'] = $businessLicenseAuthPic;

        return $this;
    }

    /**
     * Gets businessLicensePic
     *
     * @return \SplFileObject|null
     */
    public function getBusinessLicensePic()
    {
        return $this->container['businessLicensePic'];
    }

    /**
     * Sets businessLicensePic
     *
     * @param \SplFileObject|null $businessLicensePic businessLicensePic
     *
     * @return self
     */
    public function setBusinessLicensePic($businessLicensePic)
    {
        $this->container['businessLicensePic'] = $businessLicensePic;

        return $this;
    }

    /**
     * Gets data
     *
     * @return \Alipay\OpenAPISDK\Model\AlipayOpenAgentCommonSignModel|null
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param \Alipay\OpenAPISDK\Model\AlipayOpenAgentCommonSignModel|null $data data
     *
     * @return self
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets h5ExtraPic
     *
     * @return \SplFileObject|null
     */
    public function getH5ExtraPic()
    {
        return $this->container['h5ExtraPic'];
    }

    /**
     * Sets h5ExtraPic
     *
     * @param \SplFileObject|null $h5ExtraPic h5ExtraPic
     *
     * @return self
     */
    public function setH5ExtraPic($h5ExtraPic)
    {
        $this->container['h5ExtraPic'] = $h5ExtraPic;

        return $this;
    }

    /**
     * Gets h5HomeScreenshot
     *
     * @return \SplFileObject|null
     */
    public function getH5HomeScreenshot()
    {
        return $this->container['h5HomeScreenshot'];
    }

    /**
     * Sets h5HomeScreenshot
     *
     * @param \SplFileObject|null $h5HomeScreenshot h5HomeScreenshot
     *
     * @return self
     */
    public function setH5HomeScreenshot($h5HomeScreenshot)
    {
        $this->container['h5HomeScreenshot'] = $h5HomeScreenshot;

        return $this;
    }

    /**
     * Gets h5ItemScreenshot
     *
     * @return \SplFileObject|null
     */
    public function getH5ItemScreenshot()
    {
        return $this->container['h5ItemScreenshot'];
    }

    /**
     * Sets h5ItemScreenshot
     *
     * @param \SplFileObject|null $h5ItemScreenshot h5ItemScreenshot
     *
     * @return self
     */
    public function setH5ItemScreenshot($h5ItemScreenshot)
    {
        $this->container['h5ItemScreenshot'] = $h5ItemScreenshot;

        return $this;
    }

    /**
     * Gets h5PayScreenshot
     *
     * @return \SplFileObject|null
     */
    public function getH5PayScreenshot()
    {
        return $this->container['h5PayScreenshot'];
    }

    /**
     * Sets h5PayScreenshot
     *
     * @param \SplFileObject|null $h5PayScreenshot h5PayScreenshot
     *
     * @return self
     */
    public function setH5PayScreenshot($h5PayScreenshot)
    {
        $this->container['h5PayScreenshot'] = $h5PayScreenshot;

        return $this;
    }

    /**
     * Gets h5SitesLoa
     *
     * @return \SplFileObject|null
     */
    public function getH5SitesLoa()
    {
        return $this->container['h5SitesLoa'];
    }

    /**
     * Sets h5SitesLoa
     *
     * @param \SplFileObject|null $h5SitesLoa h5SitesLoa
     *
     * @return self
     */
    public function setH5SitesLoa($h5SitesLoa)
    {
        $this->container['h5SitesLoa'] = $h5SitesLoa;

        return $this;
    }

    /**
     * Gets miniAppScreenshot
     *
     * @return \SplFileObject|null
     */
    public function getMiniAppScreenshot()
    {
        return $this->container['miniAppScreenshot'];
    }

    /**
     * Sets miniAppScreenshot
     *
     * @param \SplFileObject|null $miniAppScreenshot miniAppScreenshot
     *
     * @return self
     */
    public function setMiniAppScreenshot($miniAppScreenshot)
    {
        $this->container['miniAppScreenshot'] = $miniAppScreenshot;

        return $this;
    }

    /**
     * Gets shopScenePic
     *
     * @return \SplFileObject|null
     */
    public function getShopScenePic()
    {
        return $this->container['shopScenePic'];
    }

    /**
     * Sets shopScenePic
     *
     * @param \SplFileObject|null $shopScenePic shopScenePic
     *
     * @return self
     */
    public function setShopScenePic($shopScenePic)
    {
        $this->container['shopScenePic'] = $shopScenePic;

        return $this;
    }

    /**
     * Gets shopSignBoardPic
     *
     * @return \SplFileObject|null
     */
    public function getShopSignBoardPic()
    {
        return $this->container['shopSignBoardPic'];
    }

    /**
     * Sets shopSignBoardPic
     *
     * @param \SplFileObject|null $shopSignBoardPic shopSignBoardPic
     *
     * @return self
     */
    public function setShopSignBoardPic($shopSignBoardPic)
    {
        $this->container['shopSignBoardPic'] = $shopSignBoardPic;

        return $this;
    }

    /**
     * Gets specialLicensePic
     *
     * @return \SplFileObject|null
     */
    public function getSpecialLicensePic()
    {
        return $this->container['specialLicensePic'];
    }

    /**
     * Sets specialLicensePic
     *
     * @param \SplFileObject|null $specialLicensePic specialLicensePic
     *
     * @return self
     */
    public function setSpecialLicensePic($specialLicensePic)
    {
        $this->container['specialLicensePic'] = $specialLicensePic;

        return $this;
    }

    /**
     * Gets webHomeScreenshot
     *
     * @return \SplFileObject|null
     */
    public function getWebHomeScreenshot()
    {
        return $this->container['webHomeScreenshot'];
    }

    /**
     * Sets webHomeScreenshot
     *
     * @param \SplFileObject|null $webHomeScreenshot webHomeScreenshot
     *
     * @return self
     */
    public function setWebHomeScreenshot($webHomeScreenshot)
    {
        $this->container['webHomeScreenshot'] = $webHomeScreenshot;

        return $this;
    }

    /**
     * Gets webItemScreenshot
     *
     * @return \SplFileObject|null
     */
    public function getWebItemScreenshot()
    {
        return $this->container['webItemScreenshot'];
    }

    /**
     * Sets webItemScreenshot
     *
     * @param \SplFileObject|null $webItemScreenshot webItemScreenshot
     *
     * @return self
     */
    public function setWebItemScreenshot($webItemScreenshot)
    {
        $this->container['webItemScreenshot'] = $webItemScreenshot;

        return $this;
    }

    /**
     * Gets webPayScreenshot
     *
     * @return \SplFileObject|null
     */
    public function getWebPayScreenshot()
    {
        return $this->container['webPayScreenshot'];
    }

    /**
     * Sets webPayScreenshot
     *
     * @param \SplFileObject|null $webPayScreenshot webPayScreenshot
     *
     * @return self
     */
    public function setWebPayScreenshot($webPayScreenshot)
    {
        $this->container['webPayScreenshot'] = $webPayScreenshot;

        return $this;
    }

    /**
     * Gets webSitesLoa
     *
     * @return \SplFileObject|null
     */
    public function getWebSitesLoa()
    {
        return $this->container['webSitesLoa'];
    }

    /**
     * Sets webSitesLoa
     *
     * @param \SplFileObject|null $webSitesLoa webSitesLoa
     *
     * @return self
     */
    public function setWebSitesLoa($webSitesLoa)
    {
        $this->container['webSitesLoa'] = $webSitesLoa;

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


