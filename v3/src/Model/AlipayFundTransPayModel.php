<?php
/**
 * AlipayFundTransPayModel
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
 * AlipayFundTransPayModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayFundTransPayModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayFundTransPayModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'authInfo' => '\Alipay\OpenAPISDK\Model\AuthInfo',
        'bizScene' => 'string',
        'businessParams' => 'string',
        'orderTitle' => 'string',
        'outBizNo' => 'string',
        'passbackParams' => 'string',
        'payeeInfo' => '\Alipay\OpenAPISDK\Model\Participant',
        'payerInfo' => '\Alipay\OpenAPISDK\Model\Participant',
        'productCode' => 'string',
        'refundTimeExpire' => 'string',
        'remark' => 'string',
        'timeExpire' => 'string',
        'transAmount' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'authInfo' => null,
        'bizScene' => null,
        'businessParams' => null,
        'orderTitle' => null,
        'outBizNo' => null,
        'passbackParams' => null,
        'payeeInfo' => null,
        'payerInfo' => null,
        'productCode' => null,
        'refundTimeExpire' => null,
        'remark' => null,
        'timeExpire' => null,
        'transAmount' => null
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
        'authInfo' => 'auth_info',
        'bizScene' => 'biz_scene',
        'businessParams' => 'business_params',
        'orderTitle' => 'order_title',
        'outBizNo' => 'out_biz_no',
        'passbackParams' => 'passback_params',
        'payeeInfo' => 'payee_info',
        'payerInfo' => 'payer_info',
        'productCode' => 'product_code',
        'refundTimeExpire' => 'refund_time_expire',
        'remark' => 'remark',
        'timeExpire' => 'time_expire',
        'transAmount' => 'trans_amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authInfo' => 'setAuthInfo',
        'bizScene' => 'setBizScene',
        'businessParams' => 'setBusinessParams',
        'orderTitle' => 'setOrderTitle',
        'outBizNo' => 'setOutBizNo',
        'passbackParams' => 'setPassbackParams',
        'payeeInfo' => 'setPayeeInfo',
        'payerInfo' => 'setPayerInfo',
        'productCode' => 'setProductCode',
        'refundTimeExpire' => 'setRefundTimeExpire',
        'remark' => 'setRemark',
        'timeExpire' => 'setTimeExpire',
        'transAmount' => 'setTransAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authInfo' => 'getAuthInfo',
        'bizScene' => 'getBizScene',
        'businessParams' => 'getBusinessParams',
        'orderTitle' => 'getOrderTitle',
        'outBizNo' => 'getOutBizNo',
        'passbackParams' => 'getPassbackParams',
        'payeeInfo' => 'getPayeeInfo',
        'payerInfo' => 'getPayerInfo',
        'productCode' => 'getProductCode',
        'refundTimeExpire' => 'getRefundTimeExpire',
        'remark' => 'getRemark',
        'timeExpire' => 'getTimeExpire',
        'transAmount' => 'getTransAmount'
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
        $this->container['authInfo'] = $data['authInfo'] ?? null;
        $this->container['bizScene'] = $data['bizScene'] ?? null;
        $this->container['businessParams'] = $data['businessParams'] ?? null;
        $this->container['orderTitle'] = $data['orderTitle'] ?? null;
        $this->container['outBizNo'] = $data['outBizNo'] ?? null;
        $this->container['passbackParams'] = $data['passbackParams'] ?? null;
        $this->container['payeeInfo'] = $data['payeeInfo'] ?? null;
        $this->container['payerInfo'] = $data['payerInfo'] ?? null;
        $this->container['productCode'] = $data['productCode'] ?? null;
        $this->container['refundTimeExpire'] = $data['refundTimeExpire'] ?? null;
        $this->container['remark'] = $data['remark'] ?? null;
        $this->container['timeExpire'] = $data['timeExpire'] ?? null;
        $this->container['transAmount'] = $data['transAmount'] ?? null;
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
     * Gets authInfo
     *
     * @return \Alipay\OpenAPISDK\Model\AuthInfo|null
     */
    public function getAuthInfo()
    {
        return $this->container['authInfo'];
    }

    /**
     * Sets authInfo
     *
     * @param \Alipay\OpenAPISDK\Model\AuthInfo|null $authInfo authInfo
     *
     * @return self
     */
    public function setAuthInfo($authInfo)
    {
        $this->container['authInfo'] = $authInfo;

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
     * @param string|null $bizScene 业务场景，比如群收款、红包等
     *
     * @return self
     */
    public function setBizScene($bizScene)
    {
        $this->container['bizScene'] = $bizScene;

        return $this;
    }

    /**
     * Gets businessParams
     *
     * @return string|null
     */
    public function getBusinessParams()
    {
        return $this->container['businessParams'];
    }

    /**
     * Sets businessParams
     *
     * @param string|null $businessParams JSON格式，传递业务扩展参数，使用前请与支付宝工程师联系！
     *
     * @return self
     */
    public function setBusinessParams($businessParams)
    {
        $this->container['businessParams'] = $businessParams;

        return $this;
    }

    /**
     * Gets orderTitle
     *
     * @return string|null
     */
    public function getOrderTitle()
    {
        return $this->container['orderTitle'];
    }

    /**
     * Sets orderTitle
     *
     * @param string|null $orderTitle 订单的标题，用于在收银台和消费记录展示
     *
     * @return self
     */
    public function setOrderTitle($orderTitle)
    {
        $this->container['orderTitle'] = $orderTitle;

        return $this;
    }

    /**
     * Gets outBizNo
     *
     * @return string|null
     */
    public function getOutBizNo()
    {
        return $this->container['outBizNo'];
    }

    /**
     * Sets outBizNo
     *
     * @param string|null $outBizNo 商户端的唯一订单号，对于同一笔转账请求，商户需保证该订单号唯一。
     *
     * @return self
     */
    public function setOutBizNo($outBizNo)
    {
        $this->container['outBizNo'] = $outBizNo;

        return $this;
    }

    /**
     * Gets passbackParams
     *
     * @return string|null
     */
    public function getPassbackParams()
    {
        return $this->container['passbackParams'];
    }

    /**
     * Sets passbackParams
     *
     * @param string|null $passbackParams 回传参数，如果请求时传递了该参数，则异步通知商户时会回传该参数。
     *
     * @return self
     */
    public function setPassbackParams($passbackParams)
    {
        $this->container['passbackParams'] = $passbackParams;

        return $this;
    }

    /**
     * Gets payeeInfo
     *
     * @return \Alipay\OpenAPISDK\Model\Participant|null
     */
    public function getPayeeInfo()
    {
        return $this->container['payeeInfo'];
    }

    /**
     * Sets payeeInfo
     *
     * @param \Alipay\OpenAPISDK\Model\Participant|null $payeeInfo payeeInfo
     *
     * @return self
     */
    public function setPayeeInfo($payeeInfo)
    {
        $this->container['payeeInfo'] = $payeeInfo;

        return $this;
    }

    /**
     * Gets payerInfo
     *
     * @return \Alipay\OpenAPISDK\Model\Participant|null
     */
    public function getPayerInfo()
    {
        return $this->container['payerInfo'];
    }

    /**
     * Sets payerInfo
     *
     * @param \Alipay\OpenAPISDK\Model\Participant|null $payerInfo payerInfo
     *
     * @return self
     */
    public function setPayerInfo($payerInfo)
    {
        $this->container['payerInfo'] = $payerInfo;

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
     * @param string|null $productCode 销售产品码，商家和支付宝签约的产品码
     *
     * @return self
     */
    public function setProductCode($productCode)
    {
        $this->container['productCode'] = $productCode;

        return $this;
    }

    /**
     * Gets refundTimeExpire
     *
     * @return string|null
     */
    public function getRefundTimeExpire()
    {
        return $this->container['refundTimeExpire'];
    }

    /**
     * Sets refundTimeExpire
     *
     * @param string|null $refundTimeExpire 退款超时时间，格式yyyy-MM-dd HH:mm。到指定时间后，系统会自动触发退款，并原路退回到付款账户。如果指定了退款时间，必须早于销售方案里设置的最晚退款时间。
     *
     * @return self
     */
    public function setRefundTimeExpire($refundTimeExpire)
    {
        $this->container['refundTimeExpire'] = $refundTimeExpire;

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
     * @param string|null $remark 备注
     *
     * @return self
     */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;

        return $this;
    }

    /**
     * Gets timeExpire
     *
     * @return string|null
     */
    public function getTimeExpire()
    {
        return $this->container['timeExpire'];
    }

    /**
     * Sets timeExpire
     *
     * @param string|null $timeExpire 绝对超时时间，格式为yyyy-MM-dd HH:mm
     *
     * @return self
     */
    public function setTimeExpire($timeExpire)
    {
        $this->container['timeExpire'] = $timeExpire;

        return $this;
    }

    /**
     * Gets transAmount
     *
     * @return string|null
     */
    public function getTransAmount()
    {
        return $this->container['transAmount'];
    }

    /**
     * Sets transAmount
     *
     * @param string|null $transAmount 订单总金额，单位为元，精确到小数点后两位，取值范围[0.01,100000000]
     *
     * @return self
     */
    public function setTransAmount($transAmount)
    {
        $this->container['transAmount'] = $transAmount;

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


