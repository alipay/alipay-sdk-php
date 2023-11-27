<?php
/**
 * ArInvoiceLineOpenApiResponse
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
 * The version of the OpenAPI document: 2023-10-26
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
 * ArInvoiceLineOpenApiResponse Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ArInvoiceLineOpenApiResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ArInvoiceLineOpenApiResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amt' => '\Alipay\OpenAPISDK\Model\MultiCurrencyMoneyOpenApi',
        'dutyFreeFlag' => 'string',
        'inclTaxUnitAmt' => 'int',
        'invoiceId' => 'string',
        'invoiceLineId' => 'string',
        'measurementUnit' => 'string',
        'productName' => 'string',
        'productSpecification' => 'string',
        'quantity' => 'int',
        'taxAmt' => '\Alipay\OpenAPISDK\Model\MultiCurrencyMoneyOpenApi',
        'taxExclusiveAmt' => '\Alipay\OpenAPISDK\Model\MultiCurrencyMoneyOpenApi',
        'taxRate' => 'int',
        'unitAmt' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amt' => null,
        'dutyFreeFlag' => null,
        'inclTaxUnitAmt' => null,
        'invoiceId' => null,
        'invoiceLineId' => null,
        'measurementUnit' => null,
        'productName' => null,
        'productSpecification' => null,
        'quantity' => null,
        'taxAmt' => null,
        'taxExclusiveAmt' => null,
        'taxRate' => null,
        'unitAmt' => null
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
        'amt' => 'amt',
        'dutyFreeFlag' => 'duty_free_flag',
        'inclTaxUnitAmt' => 'incl_tax_unit_amt',
        'invoiceId' => 'invoice_id',
        'invoiceLineId' => 'invoice_line_id',
        'measurementUnit' => 'measurement_unit',
        'productName' => 'product_name',
        'productSpecification' => 'product_specification',
        'quantity' => 'quantity',
        'taxAmt' => 'tax_amt',
        'taxExclusiveAmt' => 'tax_exclusive_amt',
        'taxRate' => 'tax_rate',
        'unitAmt' => 'unit_amt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amt' => 'setAmt',
        'dutyFreeFlag' => 'setDutyFreeFlag',
        'inclTaxUnitAmt' => 'setInclTaxUnitAmt',
        'invoiceId' => 'setInvoiceId',
        'invoiceLineId' => 'setInvoiceLineId',
        'measurementUnit' => 'setMeasurementUnit',
        'productName' => 'setProductName',
        'productSpecification' => 'setProductSpecification',
        'quantity' => 'setQuantity',
        'taxAmt' => 'setTaxAmt',
        'taxExclusiveAmt' => 'setTaxExclusiveAmt',
        'taxRate' => 'setTaxRate',
        'unitAmt' => 'setUnitAmt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amt' => 'getAmt',
        'dutyFreeFlag' => 'getDutyFreeFlag',
        'inclTaxUnitAmt' => 'getInclTaxUnitAmt',
        'invoiceId' => 'getInvoiceId',
        'invoiceLineId' => 'getInvoiceLineId',
        'measurementUnit' => 'getMeasurementUnit',
        'productName' => 'getProductName',
        'productSpecification' => 'getProductSpecification',
        'quantity' => 'getQuantity',
        'taxAmt' => 'getTaxAmt',
        'taxExclusiveAmt' => 'getTaxExclusiveAmt',
        'taxRate' => 'getTaxRate',
        'unitAmt' => 'getUnitAmt'
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
        $this->container['amt'] = $data['amt'] ?? null;
        $this->container['dutyFreeFlag'] = $data['dutyFreeFlag'] ?? null;
        $this->container['inclTaxUnitAmt'] = $data['inclTaxUnitAmt'] ?? null;
        $this->container['invoiceId'] = $data['invoiceId'] ?? null;
        $this->container['invoiceLineId'] = $data['invoiceLineId'] ?? null;
        $this->container['measurementUnit'] = $data['measurementUnit'] ?? null;
        $this->container['productName'] = $data['productName'] ?? null;
        $this->container['productSpecification'] = $data['productSpecification'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['taxAmt'] = $data['taxAmt'] ?? null;
        $this->container['taxExclusiveAmt'] = $data['taxExclusiveAmt'] ?? null;
        $this->container['taxRate'] = $data['taxRate'] ?? null;
        $this->container['unitAmt'] = $data['unitAmt'] ?? null;
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
     * Gets amt
     *
     * @return \Alipay\OpenAPISDK\Model\MultiCurrencyMoneyOpenApi|null
     */
    public function getAmt()
    {
        return $this->container['amt'];
    }

    /**
     * Sets amt
     *
     * @param \Alipay\OpenAPISDK\Model\MultiCurrencyMoneyOpenApi|null $amt amt
     *
     * @return self
     */
    public function setAmt($amt)
    {
        $this->container['amt'] = $amt;

        return $this;
    }

    /**
     * Gets dutyFreeFlag
     *
     * @return string|null
     */
    public function getDutyFreeFlag()
    {
        return $this->container['dutyFreeFlag'];
    }

    /**
     * Sets dutyFreeFlag
     *
     * @param string|null $dutyFreeFlag 免税标识
     *
     * @return self
     */
    public function setDutyFreeFlag($dutyFreeFlag)
    {
        $this->container['dutyFreeFlag'] = $dutyFreeFlag;

        return $this;
    }

    /**
     * Gets inclTaxUnitAmt
     *
     * @return int|null
     */
    public function getInclTaxUnitAmt()
    {
        return $this->container['inclTaxUnitAmt'];
    }

    /**
     * Sets inclTaxUnitAmt
     *
     * @param int|null $inclTaxUnitAmt 含税单价
     *
     * @return self
     */
    public function setInclTaxUnitAmt($inclTaxUnitAmt)
    {
        $this->container['inclTaxUnitAmt'] = $inclTaxUnitAmt;

        return $this;
    }

    /**
     * Gets invoiceId
     *
     * @return string|null
     */
    public function getInvoiceId()
    {
        return $this->container['invoiceId'];
    }

    /**
     * Sets invoiceId
     *
     * @param string|null $invoiceId 关联的发票ID
     *
     * @return self
     */
    public function setInvoiceId($invoiceId)
    {
        $this->container['invoiceId'] = $invoiceId;

        return $this;
    }

    /**
     * Gets invoiceLineId
     *
     * @return string|null
     */
    public function getInvoiceLineId()
    {
        return $this->container['invoiceLineId'];
    }

    /**
     * Sets invoiceLineId
     *
     * @param string|null $invoiceLineId 发票行iD
     *
     * @return self
     */
    public function setInvoiceLineId($invoiceLineId)
    {
        $this->container['invoiceLineId'] = $invoiceLineId;

        return $this;
    }

    /**
     * Gets measurementUnit
     *
     * @return string|null
     */
    public function getMeasurementUnit()
    {
        return $this->container['measurementUnit'];
    }

    /**
     * Sets measurementUnit
     *
     * @param string|null $measurementUnit 计量单位
     *
     * @return self
     */
    public function setMeasurementUnit($measurementUnit)
    {
        $this->container['measurementUnit'] = $measurementUnit;

        return $this;
    }

    /**
     * Gets productName
     *
     * @return string|null
     */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
     * Sets productName
     *
     * @param string|null $productName 货物或劳务名称
     *
     * @return self
     */
    public function setProductName($productName)
    {
        $this->container['productName'] = $productName;

        return $this;
    }

    /**
     * Gets productSpecification
     *
     * @return string|null
     */
    public function getProductSpecification()
    {
        return $this->container['productSpecification'];
    }

    /**
     * Sets productSpecification
     *
     * @param string|null $productSpecification 规格型号
     *
     * @return self
     */
    public function setProductSpecification($productSpecification)
    {
        $this->container['productSpecification'] = $productSpecification;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity 数量
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets taxAmt
     *
     * @return \Alipay\OpenAPISDK\Model\MultiCurrencyMoneyOpenApi|null
     */
    public function getTaxAmt()
    {
        return $this->container['taxAmt'];
    }

    /**
     * Sets taxAmt
     *
     * @param \Alipay\OpenAPISDK\Model\MultiCurrencyMoneyOpenApi|null $taxAmt taxAmt
     *
     * @return self
     */
    public function setTaxAmt($taxAmt)
    {
        $this->container['taxAmt'] = $taxAmt;

        return $this;
    }

    /**
     * Gets taxExclusiveAmt
     *
     * @return \Alipay\OpenAPISDK\Model\MultiCurrencyMoneyOpenApi|null
     */
    public function getTaxExclusiveAmt()
    {
        return $this->container['taxExclusiveAmt'];
    }

    /**
     * Sets taxExclusiveAmt
     *
     * @param \Alipay\OpenAPISDK\Model\MultiCurrencyMoneyOpenApi|null $taxExclusiveAmt taxExclusiveAmt
     *
     * @return self
     */
    public function setTaxExclusiveAmt($taxExclusiveAmt)
    {
        $this->container['taxExclusiveAmt'] = $taxExclusiveAmt;

        return $this;
    }

    /**
     * Gets taxRate
     *
     * @return int|null
     */
    public function getTaxRate()
    {
        return $this->container['taxRate'];
    }

    /**
     * Sets taxRate
     *
     * @param int|null $taxRate 税率
     *
     * @return self
     */
    public function setTaxRate($taxRate)
    {
        $this->container['taxRate'] = $taxRate;

        return $this;
    }

    /**
     * Gets unitAmt
     *
     * @return int|null
     */
    public function getUnitAmt()
    {
        return $this->container['unitAmt'];
    }

    /**
     * Sets unitAmt
     *
     * @param int|null $unitAmt 单价
     *
     * @return self
     */
    public function setUnitAmt($unitAmt)
    {
        $this->container['unitAmt'] = $unitAmt;

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

