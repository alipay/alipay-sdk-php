<?php
/**
 * AlipayCommerceTransportParkingExitinfoSyncModel
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
 * AlipayCommerceTransportParkingExitinfoSyncModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayCommerceTransportParkingExitinfoSyncModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayCommerceTransportParkingExitinfoSyncModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'exitName' => 'string',
        'exitNumber' => 'int',
        'isEncryptPlateNo' => 'bool',
        'openAppid' => 'string',
        'openId' => 'string',
        'outSerialNo' => 'string',
        'outTime' => 'string',
        'plateColor' => 'string',
        'plateNo' => 'string',
        'serviceUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'exitName' => null,
        'exitNumber' => null,
        'isEncryptPlateNo' => null,
        'openAppid' => null,
        'openId' => null,
        'outSerialNo' => null,
        'outTime' => null,
        'plateColor' => null,
        'plateNo' => null,
        'serviceUrl' => null
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
        'exitName' => 'exit_name',
        'exitNumber' => 'exit_number',
        'isEncryptPlateNo' => 'is_encrypt_plate_no',
        'openAppid' => 'open_appid',
        'openId' => 'open_id',
        'outSerialNo' => 'out_serial_no',
        'outTime' => 'out_time',
        'plateColor' => 'plate_color',
        'plateNo' => 'plate_no',
        'serviceUrl' => 'service_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'exitName' => 'setExitName',
        'exitNumber' => 'setExitNumber',
        'isEncryptPlateNo' => 'setIsEncryptPlateNo',
        'openAppid' => 'setOpenAppid',
        'openId' => 'setOpenId',
        'outSerialNo' => 'setOutSerialNo',
        'outTime' => 'setOutTime',
        'plateColor' => 'setPlateColor',
        'plateNo' => 'setPlateNo',
        'serviceUrl' => 'setServiceUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'exitName' => 'getExitName',
        'exitNumber' => 'getExitNumber',
        'isEncryptPlateNo' => 'getIsEncryptPlateNo',
        'openAppid' => 'getOpenAppid',
        'openId' => 'getOpenId',
        'outSerialNo' => 'getOutSerialNo',
        'outTime' => 'getOutTime',
        'plateColor' => 'getPlateColor',
        'plateNo' => 'getPlateNo',
        'serviceUrl' => 'getServiceUrl'
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
        $this->container['exitName'] = $data['exitName'] ?? null;
        $this->container['exitNumber'] = $data['exitNumber'] ?? null;
        $this->container['isEncryptPlateNo'] = $data['isEncryptPlateNo'] ?? null;
        $this->container['openAppid'] = $data['openAppid'] ?? null;
        $this->container['openId'] = $data['openId'] ?? null;
        $this->container['outSerialNo'] = $data['outSerialNo'] ?? null;
        $this->container['outTime'] = $data['outTime'] ?? null;
        $this->container['plateColor'] = $data['plateColor'] ?? null;
        $this->container['plateNo'] = $data['plateNo'] ?? null;
        $this->container['serviceUrl'] = $data['serviceUrl'] ?? null;
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
     * Gets exitName
     *
     * @return string|null
     */
    public function getExitName()
    {
        return $this->container['exitName'];
    }

    /**
     * Sets exitName
     *
     * @param string|null $exitName 车辆出场的出口通道名称；取实地通道名称；
     *
     * @return self
     */
    public function setExitName($exitName)
    {
        $this->container['exitName'] = $exitName;

        return $this;
    }

    /**
     * Gets exitNumber
     *
     * @return int|null
     */
    public function getExitNumber()
    {
        return $this->container['exitNumber'];
    }

    /**
     * Sets exitNumber
     *
     * @param int|null $exitNumber 车辆出场的出口通道编号；与线下实地编码一致；
     *
     * @return self
     */
    public function setExitNumber($exitNumber)
    {
        $this->container['exitNumber'] = $exitNumber;

        return $this;
    }

    /**
     * Gets isEncryptPlateNo
     *
     * @return bool|null
     */
    public function getIsEncryptPlateNo()
    {
        return $this->container['isEncryptPlateNo'];
    }

    /**
     * Sets isEncryptPlateNo
     *
     * @param bool|null $isEncryptPlateNo 车牌是否加密，true为加密，false为不加密，默认为false
     *
     * @return self
     */
    public function setIsEncryptPlateNo($isEncryptPlateNo)
    {
        $this->container['isEncryptPlateNo'] = $isEncryptPlateNo;

        return $this;
    }

    /**
     * Gets openAppid
     *
     * @return string|null
     */
    public function getOpenAppid()
    {
        return $this->container['openAppid'];
    }

    /**
     * Sets openAppid
     *
     * @param string|null $openAppid 蚂蚁会员统一ID对应的归属应用appid
     *
     * @return self
     */
    public function setOpenAppid($openAppid)
    {
        $this->container['openAppid'] = $openAppid;

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
     * @param string|null $openId 蚂蚁会员统一ID
     *
     * @return self
     */
    public function setOpenId($openId)
    {
        $this->container['openId'] = $openId;

        return $this;
    }

    /**
     * Gets outSerialNo
     *
     * @return string|null
     */
    public function getOutSerialNo()
    {
        return $this->container['outSerialNo'];
    }

    /**
     * Sets outSerialNo
     *
     * @param string|null $outSerialNo 外部停车流水号(用于串通进场与出场信息)
     *
     * @return self
     */
    public function setOutSerialNo($outSerialNo)
    {
        $this->container['outSerialNo'] = $outSerialNo;

        return $this;
    }

    /**
     * Gets outTime
     *
     * @return string|null
     */
    public function getOutTime()
    {
        return $this->container['outTime'];
    }

    /**
     * Sets outTime
     *
     * @param string|null $outTime 车辆出场的时间，格式\"YYYY-MM-DD HH:mm:ss\"，24小时制，请保证服务器时间准确，出场时间不应晚于当前网络时间，也不当早于入场时间。
     *
     * @return self
     */
    public function setOutTime($outTime)
    {
        $this->container['outTime'] = $outTime;

        return $this;
    }

    /**
     * Gets plateColor
     *
     * @return string|null
     */
    public function getPlateColor()
    {
        return $this->container['plateColor'];
    }

    /**
     * Sets plateColor
     *
     * @param string|null $plateColor 车牌颜色，车牌颜色，枚举支持： *BLUE：蓝。 *GREEN：绿。 *YELLOW：黄。 *WHITE：白。 *BLACK：黑。 *LIMEGREEN：黄绿色。
     *
     * @return self
     */
    public function setPlateColor($plateColor)
    {
        $this->container['plateColor'] = $plateColor;

        return $this;
    }

    /**
     * Gets plateNo
     *
     * @return string|null
     */
    public function getPlateNo()
    {
        return $this->container['plateNo'];
    }

    /**
     * Sets plateNo
     *
     * @param string|null $plateNo 车牌号（支持加密格式）
     *
     * @return self
     */
    public function setPlateNo($plateNo)
    {
        $this->container['plateNo'] = $plateNo;

        return $this;
    }

    /**
     * Gets serviceUrl
     *
     * @return string|null
     */
    public function getServiceUrl()
    {
        return $this->container['serviceUrl'];
    }

    /**
     * Sets serviceUrl
     *
     * @param string|null $serviceUrl 停车服务页面地址。 1、服务商停车服务页面地址必须是支付宝小程序URL（无需转换https），详见：https://opendocs.alipay.com/support/01rb18#URL%20%E6%A0%BC%E5%BC%8F 2、若服务商没有服务链接，可传输支付宝停车官方小程序的服务链接：alipays://platformapi/startapp?appId=2021001102642986&page=pages%2Fparking-fee%2Findex 3、若此次对接的是无感支付，则服务链接传输为：alipays://platformapi/startapp?appId=2021001102642986&page=%2Fpages%2Fparking-bill%2Findex
     *
     * @return self
     */
    public function setServiceUrl($serviceUrl)
    {
        $this->container['serviceUrl'] = $serviceUrl;

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


