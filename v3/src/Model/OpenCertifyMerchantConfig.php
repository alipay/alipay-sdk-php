<?php
/**
 * OpenCertifyMerchantConfig
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
 * OpenCertifyMerchantConfig Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OpenCertifyMerchantConfig implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OpenCertifyMerchantConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'authScope' => 'string',
        'authType' => 'string',
        'faceReserveStrategy' => 'string',
        'facialPictureLevel' => 'string',
        'linkedMerchantAppId' => 'string',
        'linkedMerchantLogoUrl' => 'string',
        'linkedMerchantName' => 'string',
        'outPutFacialPicture' => 'bool',
        'returnUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'authScope' => null,
        'authType' => null,
        'faceReserveStrategy' => null,
        'facialPictureLevel' => null,
        'linkedMerchantAppId' => null,
        'linkedMerchantLogoUrl' => null,
        'linkedMerchantName' => null,
        'outPutFacialPicture' => null,
        'returnUrl' => null
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
        'authScope' => 'auth_scope',
        'authType' => 'auth_type',
        'faceReserveStrategy' => 'face_reserve_strategy',
        'facialPictureLevel' => 'facial_picture_level',
        'linkedMerchantAppId' => 'linked_merchant_app_id',
        'linkedMerchantLogoUrl' => 'linked_merchant_logo_url',
        'linkedMerchantName' => 'linked_merchant_name',
        'outPutFacialPicture' => 'out_put_facial_picture',
        'returnUrl' => 'return_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authScope' => 'setAuthScope',
        'authType' => 'setAuthType',
        'faceReserveStrategy' => 'setFaceReserveStrategy',
        'facialPictureLevel' => 'setFacialPictureLevel',
        'linkedMerchantAppId' => 'setLinkedMerchantAppId',
        'linkedMerchantLogoUrl' => 'setLinkedMerchantLogoUrl',
        'linkedMerchantName' => 'setLinkedMerchantName',
        'outPutFacialPicture' => 'setOutPutFacialPicture',
        'returnUrl' => 'setReturnUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authScope' => 'getAuthScope',
        'authType' => 'getAuthType',
        'faceReserveStrategy' => 'getFaceReserveStrategy',
        'facialPictureLevel' => 'getFacialPictureLevel',
        'linkedMerchantAppId' => 'getLinkedMerchantAppId',
        'linkedMerchantLogoUrl' => 'getLinkedMerchantLogoUrl',
        'linkedMerchantName' => 'getLinkedMerchantName',
        'outPutFacialPicture' => 'getOutPutFacialPicture',
        'returnUrl' => 'getReturnUrl'
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
        $this->container['authScope'] = $data['authScope'] ?? null;
        $this->container['authType'] = $data['authType'] ?? null;
        $this->container['faceReserveStrategy'] = $data['faceReserveStrategy'] ?? null;
        $this->container['facialPictureLevel'] = $data['facialPictureLevel'] ?? null;
        $this->container['linkedMerchantAppId'] = $data['linkedMerchantAppId'] ?? null;
        $this->container['linkedMerchantLogoUrl'] = $data['linkedMerchantLogoUrl'] ?? null;
        $this->container['linkedMerchantName'] = $data['linkedMerchantName'] ?? null;
        $this->container['outPutFacialPicture'] = $data['outPutFacialPicture'] ?? null;
        $this->container['returnUrl'] = $data['returnUrl'] ?? null;
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
     * Gets authScope
     *
     * @return string|null
     */
    public function getAuthScope()
    {
        return $this->container['authScope'];
    }

    /**
     * Sets authScope
     *
     * @param string|null $authScope 用于开放认证授权
     *
     * @return self
     */
    public function setAuthScope($authScope)
    {
        $this->container['authScope'] = $authScope;

        return $this;
    }

    /**
     * Gets authType
     *
     * @return string|null
     */
    public function getAuthType()
    {
        return $this->container['authType'];
    }

    /**
     * Sets authType
     *
     * @param string|null $authType 用于指定授权类型，与auth_scope配合使用
     *
     * @return self
     */
    public function setAuthType($authType)
    {
        $this->container['authType'] = $authType;

        return $this;
    }

    /**
     * Gets faceReserveStrategy
     *
     * @return string|null
     */
    public function getFaceReserveStrategy()
    {
        return $this->container['faceReserveStrategy'];
    }

    /**
     * Sets faceReserveStrategy
     *
     * @param string|null $faceReserveStrategy 不传默认为reserve
     *
     * @return self
     */
    public function setFaceReserveStrategy($faceReserveStrategy)
    {
        $this->container['faceReserveStrategy'] = $faceReserveStrategy;

        return $this;
    }

    /**
     * Gets facialPictureLevel
     *
     * @return string|null
     */
    public function getFacialPictureLevel()
    {
        return $this->container['facialPictureLevel'];
    }

    /**
     * Sets facialPictureLevel
     *
     * @param string|null $facialPictureLevel 若有特殊人脸等级采集要求，可指定等级
     *
     * @return self
     */
    public function setFacialPictureLevel($facialPictureLevel)
    {
        $this->container['facialPictureLevel'] = $facialPictureLevel;

        return $this;
    }

    /**
     * Gets linkedMerchantAppId
     *
     * @return string|null
     */
    public function getLinkedMerchantAppId()
    {
        return $this->container['linkedMerchantAppId'];
    }

    /**
     * Sets linkedMerchantAppId
     *
     * @param string|null $linkedMerchantAppId 用于授权二级商户操作
     *
     * @return self
     */
    public function setLinkedMerchantAppId($linkedMerchantAppId)
    {
        $this->container['linkedMerchantAppId'] = $linkedMerchantAppId;

        return $this;
    }

    /**
     * Gets linkedMerchantLogoUrl
     *
     * @return string|null
     */
    public function getLinkedMerchantLogoUrl()
    {
        return $this->container['linkedMerchantLogoUrl'];
    }

    /**
     * Sets linkedMerchantLogoUrl
     *
     * @param string|null $linkedMerchantLogoUrl 用于指定展示的商户logo
     *
     * @return self
     */
    public function setLinkedMerchantLogoUrl($linkedMerchantLogoUrl)
    {
        $this->container['linkedMerchantLogoUrl'] = $linkedMerchantLogoUrl;

        return $this;
    }

    /**
     * Gets linkedMerchantName
     *
     * @return string|null
     */
    public function getLinkedMerchantName()
    {
        return $this->container['linkedMerchantName'];
    }

    /**
     * Sets linkedMerchantName
     *
     * @param string|null $linkedMerchantName 用于指定展示的商户名称
     *
     * @return self
     */
    public function setLinkedMerchantName($linkedMerchantName)
    {
        $this->container['linkedMerchantName'] = $linkedMerchantName;

        return $this;
    }

    /**
     * Gets outPutFacialPicture
     *
     * @return bool|null
     */
    public function getOutPutFacialPicture()
    {
        return $this->container['outPutFacialPicture'];
    }

    /**
     * Sets outPutFacialPicture
     *
     * @param bool|null $outPutFacialPicture 在拥有该权限前提下，用于商户控制是否透出活体人脸
     *
     * @return self
     */
    public function setOutPutFacialPicture($outPutFacialPicture)
    {
        $this->container['outPutFacialPicture'] = $outPutFacialPicture;

        return $this;
    }

    /**
     * Gets returnUrl
     *
     * @return string|null
     */
    public function getReturnUrl()
    {
        return $this->container['returnUrl'];
    }

    /**
     * Sets returnUrl
     *
     * @param string|null $returnUrl 认证成功后需要跳转的地址，一般为商户业务页面；若无跳转地址可填空字符\"\";
     *
     * @return self
     */
    public function setReturnUrl($returnUrl)
    {
        $this->container['returnUrl'] = $returnUrl;

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


