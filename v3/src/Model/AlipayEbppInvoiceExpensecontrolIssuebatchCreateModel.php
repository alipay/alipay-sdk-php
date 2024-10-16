<?php
/**
 * AlipayEbppInvoiceExpensecontrolIssuebatchCreateModel
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
 * AlipayEbppInvoiceExpensecontrolIssuebatchCreateModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayEbppInvoiceExpensecontrolIssuebatchCreateModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayEbppInvoiceExpensecontrolIssuebatchCreateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountId' => 'string',
        'agreementNo' => 'string',
        'batchNo' => 'string',
        'effectiveEndDate' => 'string',
        'effectiveStartDate' => 'string',
        'enterpriseId' => 'string',
        'institutionId' => 'string',
        'issueDesc' => 'string',
        'issueName' => 'string',
        'issueTargetInfoList' => '\Alipay\OpenAPISDK\Model\IssueTargetInfoContent[]',
        'quotaType' => 'string',
        'shareMode' => 'string'
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
        'agreementNo' => null,
        'batchNo' => null,
        'effectiveEndDate' => null,
        'effectiveStartDate' => null,
        'enterpriseId' => null,
        'institutionId' => null,
        'issueDesc' => null,
        'issueName' => null,
        'issueTargetInfoList' => null,
        'quotaType' => null,
        'shareMode' => null
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
        'agreementNo' => 'agreement_no',
        'batchNo' => 'batch_no',
        'effectiveEndDate' => 'effective_end_date',
        'effectiveStartDate' => 'effective_start_date',
        'enterpriseId' => 'enterprise_id',
        'institutionId' => 'institution_id',
        'issueDesc' => 'issue_desc',
        'issueName' => 'issue_name',
        'issueTargetInfoList' => 'issue_target_info_list',
        'quotaType' => 'quota_type',
        'shareMode' => 'share_mode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'agreementNo' => 'setAgreementNo',
        'batchNo' => 'setBatchNo',
        'effectiveEndDate' => 'setEffectiveEndDate',
        'effectiveStartDate' => 'setEffectiveStartDate',
        'enterpriseId' => 'setEnterpriseId',
        'institutionId' => 'setInstitutionId',
        'issueDesc' => 'setIssueDesc',
        'issueName' => 'setIssueName',
        'issueTargetInfoList' => 'setIssueTargetInfoList',
        'quotaType' => 'setQuotaType',
        'shareMode' => 'setShareMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'agreementNo' => 'getAgreementNo',
        'batchNo' => 'getBatchNo',
        'effectiveEndDate' => 'getEffectiveEndDate',
        'effectiveStartDate' => 'getEffectiveStartDate',
        'enterpriseId' => 'getEnterpriseId',
        'institutionId' => 'getInstitutionId',
        'issueDesc' => 'getIssueDesc',
        'issueName' => 'getIssueName',
        'issueTargetInfoList' => 'getIssueTargetInfoList',
        'quotaType' => 'getQuotaType',
        'shareMode' => 'getShareMode'
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
        $this->container['agreementNo'] = $data['agreementNo'] ?? null;
        $this->container['batchNo'] = $data['batchNo'] ?? null;
        $this->container['effectiveEndDate'] = $data['effectiveEndDate'] ?? null;
        $this->container['effectiveStartDate'] = $data['effectiveStartDate'] ?? null;
        $this->container['enterpriseId'] = $data['enterpriseId'] ?? null;
        $this->container['institutionId'] = $data['institutionId'] ?? null;
        $this->container['issueDesc'] = $data['issueDesc'] ?? null;
        $this->container['issueName'] = $data['issueName'] ?? null;
        $this->container['issueTargetInfoList'] = $data['issueTargetInfoList'] ?? null;
        $this->container['quotaType'] = $data['quotaType'] ?? null;
        $this->container['shareMode'] = $data['shareMode'] ?? null;
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
     * @deprecated
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param string|null $accountId 共同账户id（该字段将废弃，不建议使用，可用enterprise_id字段替换）(该字段将废弃，不建议使用，可用enterprise_id字段替换)
     *
     * @return self
     * @deprecated
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets agreementNo
     *
     * @return string|null
     * @deprecated
     */
    public function getAgreementNo()
    {
        return $this->container['agreementNo'];
    }

    /**
     * Sets agreementNo
     *
     * @param string|null $agreementNo 授权签约协议号（该字段将废弃，不建议使用，可用enterprise_id字段替换）(该字段将废弃，不建议使用，可用enterprise_id字段替换)
     *
     * @return self
     * @deprecated
     */
    public function setAgreementNo($agreementNo)
    {
        $this->container['agreementNo'] = $agreementNo;

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
     * @param string|null $batchNo 发放批次号，用于幂等校验本次发放
     *
     * @return self
     */
    public function setBatchNo($batchNo)
    {
        $this->container['batchNo'] = $batchNo;

        return $this;
    }

    /**
     * Gets effectiveEndDate
     *
     * @return string|null
     */
    public function getEffectiveEndDate()
    {
        return $this->container['effectiveEndDate'];
    }

    /**
     * Sets effectiveEndDate
     *
     * @param string|null $effectiveEndDate 额度有效结束时间
     *
     * @return self
     */
    public function setEffectiveEndDate($effectiveEndDate)
    {
        $this->container['effectiveEndDate'] = $effectiveEndDate;

        return $this;
    }

    /**
     * Gets effectiveStartDate
     *
     * @return string|null
     */
    public function getEffectiveStartDate()
    {
        return $this->container['effectiveStartDate'];
    }

    /**
     * Sets effectiveStartDate
     *
     * @param string|null $effectiveStartDate 额度有效起始时间
     *
     * @return self
     */
    public function setEffectiveStartDate($effectiveStartDate)
    {
        $this->container['effectiveStartDate'] = $effectiveStartDate;

        return $this;
    }

    /**
     * Gets enterpriseId
     *
     * @return string|null
     */
    public function getEnterpriseId()
    {
        return $this->container['enterpriseId'];
    }

    /**
     * Sets enterpriseId
     *
     * @param string|null $enterpriseId 企业ID
     *
     * @return self
     */
    public function setEnterpriseId($enterpriseId)
    {
        $this->container['enterpriseId'] = $enterpriseId;

        return $this;
    }

    /**
     * Gets institutionId
     *
     * @return string|null
     */
    public function getInstitutionId()
    {
        return $this->container['institutionId'];
    }

    /**
     * Sets institutionId
     *
     * @param string|null $institutionId 制度id
     *
     * @return self
     */
    public function setInstitutionId($institutionId)
    {
        $this->container['institutionId'] = $institutionId;

        return $this;
    }

    /**
     * Gets issueDesc
     *
     * @return string|null
     */
    public function getIssueDesc()
    {
        return $this->container['issueDesc'];
    }

    /**
     * Sets issueDesc
     *
     * @param string|null $issueDesc 发放说明
     *
     * @return self
     */
    public function setIssueDesc($issueDesc)
    {
        $this->container['issueDesc'] = $issueDesc;

        return $this;
    }

    /**
     * Gets issueName
     *
     * @return string|null
     */
    public function getIssueName()
    {
        return $this->container['issueName'];
    }

    /**
     * Sets issueName
     *
     * @param string|null $issueName 发放名称
     *
     * @return self
     */
    public function setIssueName($issueName)
    {
        $this->container['issueName'] = $issueName;

        return $this;
    }

    /**
     * Gets issueTargetInfoList
     *
     * @return \Alipay\OpenAPISDK\Model\IssueTargetInfoContent[]|null
     */
    public function getIssueTargetInfoList()
    {
        return $this->container['issueTargetInfoList'];
    }

    /**
     * Sets issueTargetInfoList
     *
     * @param \Alipay\OpenAPISDK\Model\IssueTargetInfoContent[]|null $issueTargetInfoList 员工发放信息列表
     *
     * @return self
     */
    public function setIssueTargetInfoList($issueTargetInfoList)
    {
        $this->container['issueTargetInfoList'] = $issueTargetInfoList;

        return $this;
    }

    /**
     * Gets quotaType
     *
     * @return string|null
     */
    public function getQuotaType()
    {
        return $this->container['quotaType'];
    }

    /**
     * Sets quotaType
     *
     * @param string|null $quotaType 额度类型
     *
     * @return self
     */
    public function setQuotaType($quotaType)
    {
        $this->container['quotaType'] = $quotaType;

        return $this;
    }

    /**
     * Gets shareMode
     *
     * @return string|null
     */
    public function getShareMode()
    {
        return $this->container['shareMode'];
    }

    /**
     * Sets shareMode
     *
     * @param string|null $shareMode 是否可转赠
     *
     * @return self
     */
    public function setShareMode($shareMode)
    {
        $this->container['shareMode'] = $shareMode;

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


