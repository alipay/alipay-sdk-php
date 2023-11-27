<?php
/**
 * InvoiceModelContent
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
 * InvoiceModelContent Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InvoiceModelContent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InvoiceModelContent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'applyId' => 'string',
        'extendFields' => 'string',
        'fileDownloadType' => 'string',
        'fileDownloadUrl' => 'string',
        'financialElectronicType' => 'string',
        'invoiceAmount' => 'string',
        'invoiceCode' => 'string',
        'invoiceContent' => '\Alipay\OpenAPISDK\Model\InvoiceItemContent[]',
        'invoiceDate' => 'string',
        'invoiceFakeCode' => 'string',
        'invoiceFileData' => 'string',
        'invoiceImgUrl' => 'string',
        'invoiceNo' => 'string',
        'invoiceOperator' => 'string',
        'invoiceTitle' => '\Alipay\OpenAPISDK\Model\InvoiceTitleModel',
        'invoiceType' => 'string',
        'openId' => 'string',
        'originalBlueInvoiceCode' => 'string',
        'originalBlueInvoiceNo' => 'string',
        'outBizNo' => 'string',
        'outInvoiceId' => 'string',
        'registerAddress' => 'string',
        'registerBankAccount' => 'string',
        'registerBankName' => 'string',
        'registerName' => 'string',
        'registerNo' => 'string',
        'registerPhoneNo' => 'string',
        'sumAmount' => 'string',
        'taxAmount' => 'string',
        'taxType' => 'string',
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
        'applyId' => null,
        'extendFields' => null,
        'fileDownloadType' => null,
        'fileDownloadUrl' => null,
        'financialElectronicType' => null,
        'invoiceAmount' => null,
        'invoiceCode' => null,
        'invoiceContent' => null,
        'invoiceDate' => null,
        'invoiceFakeCode' => null,
        'invoiceFileData' => null,
        'invoiceImgUrl' => null,
        'invoiceNo' => null,
        'invoiceOperator' => null,
        'invoiceTitle' => null,
        'invoiceType' => null,
        'openId' => null,
        'originalBlueInvoiceCode' => null,
        'originalBlueInvoiceNo' => null,
        'outBizNo' => null,
        'outInvoiceId' => null,
        'registerAddress' => null,
        'registerBankAccount' => null,
        'registerBankName' => null,
        'registerName' => null,
        'registerNo' => null,
        'registerPhoneNo' => null,
        'sumAmount' => null,
        'taxAmount' => null,
        'taxType' => null,
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
        'applyId' => 'apply_id',
        'extendFields' => 'extend_fields',
        'fileDownloadType' => 'file_download_type',
        'fileDownloadUrl' => 'file_download_url',
        'financialElectronicType' => 'financial_electronic_type',
        'invoiceAmount' => 'invoice_amount',
        'invoiceCode' => 'invoice_code',
        'invoiceContent' => 'invoice_content',
        'invoiceDate' => 'invoice_date',
        'invoiceFakeCode' => 'invoice_fake_code',
        'invoiceFileData' => 'invoice_file_data',
        'invoiceImgUrl' => 'invoice_img_url',
        'invoiceNo' => 'invoice_no',
        'invoiceOperator' => 'invoice_operator',
        'invoiceTitle' => 'invoice_title',
        'invoiceType' => 'invoice_type',
        'openId' => 'open_id',
        'originalBlueInvoiceCode' => 'original_blue_invoice_code',
        'originalBlueInvoiceNo' => 'original_blue_invoice_no',
        'outBizNo' => 'out_biz_no',
        'outInvoiceId' => 'out_invoice_id',
        'registerAddress' => 'register_address',
        'registerBankAccount' => 'register_bank_account',
        'registerBankName' => 'register_bank_name',
        'registerName' => 'register_name',
        'registerNo' => 'register_no',
        'registerPhoneNo' => 'register_phone_no',
        'sumAmount' => 'sum_amount',
        'taxAmount' => 'tax_amount',
        'taxType' => 'tax_type',
        'userId' => 'user_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'applyId' => 'setApplyId',
        'extendFields' => 'setExtendFields',
        'fileDownloadType' => 'setFileDownloadType',
        'fileDownloadUrl' => 'setFileDownloadUrl',
        'financialElectronicType' => 'setFinancialElectronicType',
        'invoiceAmount' => 'setInvoiceAmount',
        'invoiceCode' => 'setInvoiceCode',
        'invoiceContent' => 'setInvoiceContent',
        'invoiceDate' => 'setInvoiceDate',
        'invoiceFakeCode' => 'setInvoiceFakeCode',
        'invoiceFileData' => 'setInvoiceFileData',
        'invoiceImgUrl' => 'setInvoiceImgUrl',
        'invoiceNo' => 'setInvoiceNo',
        'invoiceOperator' => 'setInvoiceOperator',
        'invoiceTitle' => 'setInvoiceTitle',
        'invoiceType' => 'setInvoiceType',
        'openId' => 'setOpenId',
        'originalBlueInvoiceCode' => 'setOriginalBlueInvoiceCode',
        'originalBlueInvoiceNo' => 'setOriginalBlueInvoiceNo',
        'outBizNo' => 'setOutBizNo',
        'outInvoiceId' => 'setOutInvoiceId',
        'registerAddress' => 'setRegisterAddress',
        'registerBankAccount' => 'setRegisterBankAccount',
        'registerBankName' => 'setRegisterBankName',
        'registerName' => 'setRegisterName',
        'registerNo' => 'setRegisterNo',
        'registerPhoneNo' => 'setRegisterPhoneNo',
        'sumAmount' => 'setSumAmount',
        'taxAmount' => 'setTaxAmount',
        'taxType' => 'setTaxType',
        'userId' => 'setUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'applyId' => 'getApplyId',
        'extendFields' => 'getExtendFields',
        'fileDownloadType' => 'getFileDownloadType',
        'fileDownloadUrl' => 'getFileDownloadUrl',
        'financialElectronicType' => 'getFinancialElectronicType',
        'invoiceAmount' => 'getInvoiceAmount',
        'invoiceCode' => 'getInvoiceCode',
        'invoiceContent' => 'getInvoiceContent',
        'invoiceDate' => 'getInvoiceDate',
        'invoiceFakeCode' => 'getInvoiceFakeCode',
        'invoiceFileData' => 'getInvoiceFileData',
        'invoiceImgUrl' => 'getInvoiceImgUrl',
        'invoiceNo' => 'getInvoiceNo',
        'invoiceOperator' => 'getInvoiceOperator',
        'invoiceTitle' => 'getInvoiceTitle',
        'invoiceType' => 'getInvoiceType',
        'openId' => 'getOpenId',
        'originalBlueInvoiceCode' => 'getOriginalBlueInvoiceCode',
        'originalBlueInvoiceNo' => 'getOriginalBlueInvoiceNo',
        'outBizNo' => 'getOutBizNo',
        'outInvoiceId' => 'getOutInvoiceId',
        'registerAddress' => 'getRegisterAddress',
        'registerBankAccount' => 'getRegisterBankAccount',
        'registerBankName' => 'getRegisterBankName',
        'registerName' => 'getRegisterName',
        'registerNo' => 'getRegisterNo',
        'registerPhoneNo' => 'getRegisterPhoneNo',
        'sumAmount' => 'getSumAmount',
        'taxAmount' => 'getTaxAmount',
        'taxType' => 'getTaxType',
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
        $this->container['applyId'] = $data['applyId'] ?? null;
        $this->container['extendFields'] = $data['extendFields'] ?? null;
        $this->container['fileDownloadType'] = $data['fileDownloadType'] ?? null;
        $this->container['fileDownloadUrl'] = $data['fileDownloadUrl'] ?? null;
        $this->container['financialElectronicType'] = $data['financialElectronicType'] ?? null;
        $this->container['invoiceAmount'] = $data['invoiceAmount'] ?? null;
        $this->container['invoiceCode'] = $data['invoiceCode'] ?? null;
        $this->container['invoiceContent'] = $data['invoiceContent'] ?? null;
        $this->container['invoiceDate'] = $data['invoiceDate'] ?? null;
        $this->container['invoiceFakeCode'] = $data['invoiceFakeCode'] ?? null;
        $this->container['invoiceFileData'] = $data['invoiceFileData'] ?? null;
        $this->container['invoiceImgUrl'] = $data['invoiceImgUrl'] ?? null;
        $this->container['invoiceNo'] = $data['invoiceNo'] ?? null;
        $this->container['invoiceOperator'] = $data['invoiceOperator'] ?? null;
        $this->container['invoiceTitle'] = $data['invoiceTitle'] ?? null;
        $this->container['invoiceType'] = $data['invoiceType'] ?? null;
        $this->container['openId'] = $data['openId'] ?? null;
        $this->container['originalBlueInvoiceCode'] = $data['originalBlueInvoiceCode'] ?? null;
        $this->container['originalBlueInvoiceNo'] = $data['originalBlueInvoiceNo'] ?? null;
        $this->container['outBizNo'] = $data['outBizNo'] ?? null;
        $this->container['outInvoiceId'] = $data['outInvoiceId'] ?? null;
        $this->container['registerAddress'] = $data['registerAddress'] ?? null;
        $this->container['registerBankAccount'] = $data['registerBankAccount'] ?? null;
        $this->container['registerBankName'] = $data['registerBankName'] ?? null;
        $this->container['registerName'] = $data['registerName'] ?? null;
        $this->container['registerNo'] = $data['registerNo'] ?? null;
        $this->container['registerPhoneNo'] = $data['registerPhoneNo'] ?? null;
        $this->container['sumAmount'] = $data['sumAmount'] ?? null;
        $this->container['taxAmount'] = $data['taxAmount'] ?? null;
        $this->container['taxType'] = $data['taxType'] ?? null;
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
     * Gets applyId
     *
     * @return string|null
     */
    public function getApplyId()
    {
        return $this->container['applyId'];
    }

    /**
     * Sets applyId
     *
     * @param string|null $applyId 支付宝端的申请id。如果在开票过程中，是通过支付宝提交的申请到机构端，支付宝会带上开票申请在支付宝生成的申请id，机构在回传发票的时候只需要回传这个申请id，不用获取用户的uid，支付宝可以根据申请id将发票归集到对应的用户名下
     *
     * @return self
     */
    public function setApplyId($applyId)
    {
        $this->container['applyId'] = $applyId;

        return $this;
    }

    /**
     * Gets extendFields
     *
     * @return string|null
     */
    public function getExtendFields()
    {
        return $this->container['extendFields'];
    }

    /**
     * Sets extendFields
     *
     * @param string|null $extendFields key=value，每组键值对以回车分割
     *
     * @return self
     */
    public function setExtendFields($extendFields)
    {
        $this->container['extendFields'] = $extendFields;

        return $this;
    }

    /**
     * Gets fileDownloadType
     *
     * @return string|null
     */
    public function getFileDownloadType()
    {
        return $this->container['fileDownloadType'];
    }

    /**
     * Sets fileDownloadType
     *
     * @param string|null $fileDownloadType 下载的发票文件类型，可选值： pdf（发票原文件） ofd（发票原文件） jpg（发票原文件缩略图）
     *
     * @return self
     */
    public function setFileDownloadType($fileDownloadType)
    {
        $this->container['fileDownloadType'] = $fileDownloadType;

        return $this;
    }

    /**
     * Gets fileDownloadUrl
     *
     * @return string|null
     */
    public function getFileDownloadUrl()
    {
        return $this->container['fileDownloadUrl'];
    }

    /**
     * Sets fileDownloadUrl
     *
     * @param string|null $fileDownloadUrl 发票原文件下载地址 1.当tax_type=PLAIN、ALL_ELECTRONIC_GENERAL或ALL_ELECTRONIC_SPECIAL时， file_download_url必传 且file_download_type取值范围为pdf或ofd； 2.当tax_type=SPECIAL时， file_download_url必传 file_download_type可以传入pdf，ofd，jpg 3.当其他票种时，file_download_url可以不传
     *
     * @return self
     */
    public function setFileDownloadUrl($fileDownloadUrl)
    {
        $this->container['fileDownloadUrl'] = $fileDownloadUrl;

        return $this;
    }

    /**
     * Gets financialElectronicType
     *
     * @return string|null
     */
    public function getFinancialElectronicType()
    {
        return $this->container['financialElectronicType'];
    }

    /**
     * Sets financialElectronicType
     *
     * @param string|null $financialElectronicType 财政电子票据子类型，当tax_type=FINANCIAL_ELECTRONIC_BILL时要求必填 可选值如下： 01:非税收入通用票据  02:非税收入专用票据 03:非税收入一般缴款书 04:资金往来结算票据 05:公益事业捐赠票据 06:医疗收费票据 07:社会团体会费票据 08:社会保险基金票据 09:工会经费收入票据 99:其他财政票据
     *
     * @return self
     */
    public function setFinancialElectronicType($financialElectronicType)
    {
        $this->container['financialElectronicType'] = $financialElectronicType;

        return $this;
    }

    /**
     * Gets invoiceAmount
     *
     * @return string|null
     */
    public function getInvoiceAmount()
    {
        return $this->container['invoiceAmount'];
    }

    /**
     * Sets invoiceAmount
     *
     * @param string|null $invoiceAmount 发票金额，大于0且精确到小数点两位，以元为单位  需要传入税价合计金额
     *
     * @return self
     */
    public function setInvoiceAmount($invoiceAmount)
    {
        $this->container['invoiceAmount'] = $invoiceAmount;

        return $this;
    }

    /**
     * Gets invoiceCode
     *
     * @return string|null
     */
    public function getInvoiceCode()
    {
        return $this->container['invoiceCode'];
    }

    /**
     * Sets invoiceCode
     *
     * @param string|null $invoiceCode 发票代码，为国税局生成的唯一值，全电票时为空，其他情况不可为空
     *
     * @return self
     */
    public function setInvoiceCode($invoiceCode)
    {
        $this->container['invoiceCode'] = $invoiceCode;

        return $this;
    }

    /**
     * Gets invoiceContent
     *
     * @return \Alipay\OpenAPISDK\Model\InvoiceItemContent[]|null
     */
    public function getInvoiceContent()
    {
        return $this->container['invoiceContent'];
    }

    /**
     * Sets invoiceContent
     *
     * @param \Alipay\OpenAPISDK\Model\InvoiceItemContent[]|null $invoiceContent 发票内容项
     *
     * @return self
     */
    public function setInvoiceContent($invoiceContent)
    {
        $this->container['invoiceContent'] = $invoiceContent;

        return $this;
    }

    /**
     * Gets invoiceDate
     *
     * @return string|null
     */
    public function getInvoiceDate()
    {
        return $this->container['invoiceDate'];
    }

    /**
     * Sets invoiceDate
     *
     * @param string|null $invoiceDate 发票日期，用户填写，目前精确到日
     *
     * @return self
     */
    public function setInvoiceDate($invoiceDate)
    {
        $this->container['invoiceDate'] = $invoiceDate;

        return $this;
    }

    /**
     * Gets invoiceFakeCode
     *
     * @return string|null
     */
    public function getInvoiceFakeCode()
    {
        return $this->container['invoiceFakeCode'];
    }

    /**
     * Sets invoiceFakeCode
     *
     * @param string|null $invoiceFakeCode 发票防伪码
     *
     * @return self
     */
    public function setInvoiceFakeCode($invoiceFakeCode)
    {
        $this->container['invoiceFakeCode'] = $invoiceFakeCode;

        return $this;
    }

    /**
     * Gets invoiceFileData
     *
     * @return string|null
     */
    public function getInvoiceFileData()
    {
        return $this->container['invoiceFileData'];
    }

    /**
     * Sets invoiceFileData
     *
     * @param string|null $invoiceFileData 原始发票PDF/OFD文件流
     *
     * @return self
     */
    public function setInvoiceFileData($invoiceFileData)
    {
        $this->container['invoiceFileData'] = $invoiceFileData;

        return $this;
    }

    /**
     * Gets invoiceImgUrl
     *
     * @return string|null
     */
    public function getInvoiceImgUrl()
    {
        return $this->container['invoiceImgUrl'];
    }

    /**
     * Sets invoiceImgUrl
     *
     * @param string|null $invoiceImgUrl 发票原始文件jpg文件地址
     *
     * @return self
     */
    public function setInvoiceImgUrl($invoiceImgUrl)
    {
        $this->container['invoiceImgUrl'] = $invoiceImgUrl;

        return $this;
    }

    /**
     * Gets invoiceNo
     *
     * @return string|null
     */
    public function getInvoiceNo()
    {
        return $this->container['invoiceNo'];
    }

    /**
     * Sets invoiceNo
     *
     * @param string|null $invoiceNo 发票号码，国税局生成的唯一号码，不可为空串；  使用时请注意，invoice_no+invoice_code唯一，不能重复
     *
     * @return self
     */
    public function setInvoiceNo($invoiceNo)
    {
        $this->container['invoiceNo'] = $invoiceNo;

        return $this;
    }

    /**
     * Gets invoiceOperator
     *
     * @return string|null
     */
    public function getInvoiceOperator()
    {
        return $this->container['invoiceOperator'];
    }

    /**
     * Sets invoiceOperator
     *
     * @param string|null $invoiceOperator 发票开具操作人
     *
     * @return self
     */
    public function setInvoiceOperator($invoiceOperator)
    {
        $this->container['invoiceOperator'] = $invoiceOperator;

        return $this;
    }

    /**
     * Gets invoiceTitle
     *
     * @return \Alipay\OpenAPISDK\Model\InvoiceTitleModel|null
     */
    public function getInvoiceTitle()
    {
        return $this->container['invoiceTitle'];
    }

    /**
     * Sets invoiceTitle
     *
     * @param \Alipay\OpenAPISDK\Model\InvoiceTitleModel|null $invoiceTitle invoiceTitle
     *
     * @return self
     */
    public function setInvoiceTitle($invoiceTitle)
    {
        $this->container['invoiceTitle'] = $invoiceTitle;

        return $this;
    }

    /**
     * Gets invoiceType
     *
     * @return string|null
     */
    public function getInvoiceType()
    {
        return $this->container['invoiceType'];
    }

    /**
     * Sets invoiceType
     *
     * @param string|null $invoiceType 发票类型，按照可选值只传入英文部分，该字段严格要求大小写  可选值:  blue（蓝票）  red（红票）
     *
     * @return self
     */
    public function setInvoiceType($invoiceType)
    {
        $this->container['invoiceType'] = $invoiceType;

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
     * @param string|null $openId 支付宝用户id，支付宝端的申请id存在的时候也不需要传，其他情况下，当同步的是蓝票时，必传，红票时不需传。
     *
     * @return self
     */
    public function setOpenId($openId)
    {
        $this->container['openId'] = $openId;

        return $this;
    }

    /**
     * Gets originalBlueInvoiceCode
     *
     * @return string|null
     */
    public function getOriginalBlueInvoiceCode()
    {
        return $this->container['originalBlueInvoiceCode'];
    }

    /**
     * Sets originalBlueInvoiceCode
     *
     * @param string|null $originalBlueInvoiceCode 仅用于同步红票，原始蓝票发票代码，同步红票时必传（全电票时为空）
     *
     * @return self
     */
    public function setOriginalBlueInvoiceCode($originalBlueInvoiceCode)
    {
        $this->container['originalBlueInvoiceCode'] = $originalBlueInvoiceCode;

        return $this;
    }

    /**
     * Gets originalBlueInvoiceNo
     *
     * @return string|null
     */
    public function getOriginalBlueInvoiceNo()
    {
        return $this->container['originalBlueInvoiceNo'];
    }

    /**
     * Sets originalBlueInvoiceNo
     *
     * @param string|null $originalBlueInvoiceNo 仅用于同步红票，原始蓝票发票号码，同步红票时必传
     *
     * @return self
     */
    public function setOriginalBlueInvoiceNo($originalBlueInvoiceNo)
    {
        $this->container['originalBlueInvoiceNo'] = $originalBlueInvoiceNo;

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
     * @param string|null $outBizNo 商户交易流水号，不可为空串;  传入红票时请注意，此字段的值要和蓝票保持一致
     *
     * @return self
     */
    public function setOutBizNo($outBizNo)
    {
        $this->container['outBizNo'] = $outBizNo;

        return $this;
    }

    /**
     * Gets outInvoiceId
     *
     * @return string|null
     */
    public function getOutInvoiceId()
    {
        return $this->container['outInvoiceId'];
    }

    /**
     * Sets outInvoiceId
     *
     * @param string|null $outInvoiceId 商户唯一开票申请业务流水号，同一个isv下不能重复
     *
     * @return self
     */
    public function setOutInvoiceId($outInvoiceId)
    {
        $this->container['outInvoiceId'] = $outInvoiceId;

        return $this;
    }

    /**
     * Gets registerAddress
     *
     * @return string|null
     */
    public function getRegisterAddress()
    {
        return $this->container['registerAddress'];
    }

    /**
     * Sets registerAddress
     *
     * @param string|null $registerAddress 开票单位地址
     *
     * @return self
     */
    public function setRegisterAddress($registerAddress)
    {
        $this->container['registerAddress'] = $registerAddress;

        return $this;
    }

    /**
     * Gets registerBankAccount
     *
     * @return string|null
     */
    public function getRegisterBankAccount()
    {
        return $this->container['registerBankAccount'];
    }

    /**
     * Sets registerBankAccount
     *
     * @param string|null $registerBankAccount 开票单位开户行账号
     *
     * @return self
     */
    public function setRegisterBankAccount($registerBankAccount)
    {
        $this->container['registerBankAccount'] = $registerBankAccount;

        return $this;
    }

    /**
     * Gets registerBankName
     *
     * @return string|null
     */
    public function getRegisterBankName()
    {
        return $this->container['registerBankName'];
    }

    /**
     * Sets registerBankName
     *
     * @param string|null $registerBankName 开票单位开户行名称
     *
     * @return self
     */
    public function setRegisterBankName($registerBankName)
    {
        $this->container['registerBankName'] = $registerBankName;

        return $this;
    }

    /**
     * Gets registerName
     *
     * @return string|null
     */
    public function getRegisterName()
    {
        return $this->container['registerName'];
    }

    /**
     * Sets registerName
     *
     * @param string|null $registerName 开票单位
     *
     * @return self
     */
    public function setRegisterName($registerName)
    {
        $this->container['registerName'] = $registerName;

        return $this;
    }

    /**
     * Gets registerNo
     *
     * @return string|null
     */
    public function getRegisterNo()
    {
        return $this->container['registerNo'];
    }

    /**
     * Sets registerNo
     *
     * @param string|null $registerNo 纳税人识别号，不可为空串
     *
     * @return self
     */
    public function setRegisterNo($registerNo)
    {
        $this->container['registerNo'] = $registerNo;

        return $this;
    }

    /**
     * Gets registerPhoneNo
     *
     * @return string|null
     */
    public function getRegisterPhoneNo()
    {
        return $this->container['registerPhoneNo'];
    }

    /**
     * Sets registerPhoneNo
     *
     * @param string|null $registerPhoneNo 开票人电话，支持座机和手机两种格式
     *
     * @return self
     */
    public function setRegisterPhoneNo($registerPhoneNo)
    {
        $this->container['registerPhoneNo'] = $registerPhoneNo;

        return $this;
    }

    /**
     * Gets sumAmount
     *
     * @return string|null
     */
    public function getSumAmount()
    {
        return $this->container['sumAmount'];
    }

    /**
     * Sets sumAmount
     *
     * @param string|null $sumAmount 价税合计
     *
     * @return self
     */
    public function setSumAmount($sumAmount)
    {
        $this->container['sumAmount'] = $sumAmount;

        return $this;
    }

    /**
     * Gets taxAmount
     *
     * @return string|null
     */
    public function getTaxAmount()
    {
        return $this->container['taxAmount'];
    }

    /**
     * Sets taxAmount
     *
     * @param string|null $taxAmount 税额
     *
     * @return self
     */
    public function setTaxAmount($taxAmount)
    {
        $this->container['taxAmount'] = $taxAmount;

        return $this;
    }

    /**
     * Gets taxType
     *
     * @return string|null
     */
    public function getTaxType()
    {
        return $this->container['taxType'];
    }

    /**
     * Sets taxType
     *
     * @param string|null $taxType 税种 可选值： PLAIN：增值税电子普通发票 ALL_ELECTRONIC_GENERAL：电子发票（普通发票） ALL_ELECTRONIC_SPECIAL：电子发票（增值税专用发票） SPECIAL：增值税专用发票 PLAIN_INVOICE:增值税普通发票 FINANCIAL_ELECTRONIC_BILL:财政电子票据
     *
     * @return self
     */
    public function setTaxType($taxType)
    {
        $this->container['taxType'] = $taxType;

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
     * @param string|null $userId 支付宝用户id，支付宝端的申请id存在的时候也不需要传，其他情况下，当同步的是蓝票时，必传，红票时不需传。
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

