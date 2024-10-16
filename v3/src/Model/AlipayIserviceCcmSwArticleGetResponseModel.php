<?php
/**
 * AlipayIserviceCcmSwArticleGetResponseModel
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
 * AlipayIserviceCcmSwArticleGetResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayIserviceCcmSwArticleGetResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayIserviceCcmSwArticleGetResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'attachments' => '\Alipay\OpenAPISDK\Model\ArticleAttachmentInfo[]',
        'categoryId' => 'int',
        'categoryNamePath' => 'string',
        'categoryPath' => '\Alipay\OpenAPISDK\Model\ArticleCategoryInfo[]',
        'content' => 'string',
        'createTime' => 'string',
        'creatorId' => 'string',
        'extendTitles' => 'string[]',
        'id' => 'int',
        'keywords' => 'string[]',
        'libraryId' => 'int',
        'orderNo' => 'int',
        'pictures' => '\Alipay\OpenAPISDK\Model\ArticleAttachmentInfo[]',
        'publishEnd' => 'string',
        'publishStart' => 'string',
        'relatedArticles' => '\Alipay\OpenAPISDK\Model\BaseArticleInfo[]',
        'sceneCodes' => 'string[]',
        'source' => 'string',
        'status' => 'string',
        'statusCode' => 'string',
        'title' => 'string',
        'updateTime' => 'string',
        'updaterId' => 'string',
        'updaterName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'attachments' => null,
        'categoryId' => null,
        'categoryNamePath' => null,
        'categoryPath' => null,
        'content' => null,
        'createTime' => null,
        'creatorId' => null,
        'extendTitles' => null,
        'id' => null,
        'keywords' => null,
        'libraryId' => null,
        'orderNo' => null,
        'pictures' => null,
        'publishEnd' => null,
        'publishStart' => null,
        'relatedArticles' => null,
        'sceneCodes' => null,
        'source' => null,
        'status' => null,
        'statusCode' => null,
        'title' => null,
        'updateTime' => null,
        'updaterId' => null,
        'updaterName' => null
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
        'attachments' => 'attachments',
        'categoryId' => 'category_id',
        'categoryNamePath' => 'category_name_path',
        'categoryPath' => 'category_path',
        'content' => 'content',
        'createTime' => 'create_time',
        'creatorId' => 'creator_id',
        'extendTitles' => 'extend_titles',
        'id' => 'id',
        'keywords' => 'keywords',
        'libraryId' => 'library_id',
        'orderNo' => 'order_no',
        'pictures' => 'pictures',
        'publishEnd' => 'publish_end',
        'publishStart' => 'publish_start',
        'relatedArticles' => 'related_articles',
        'sceneCodes' => 'scene_codes',
        'source' => 'source',
        'status' => 'status',
        'statusCode' => 'status_code',
        'title' => 'title',
        'updateTime' => 'update_time',
        'updaterId' => 'updater_id',
        'updaterName' => 'updater_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attachments' => 'setAttachments',
        'categoryId' => 'setCategoryId',
        'categoryNamePath' => 'setCategoryNamePath',
        'categoryPath' => 'setCategoryPath',
        'content' => 'setContent',
        'createTime' => 'setCreateTime',
        'creatorId' => 'setCreatorId',
        'extendTitles' => 'setExtendTitles',
        'id' => 'setId',
        'keywords' => 'setKeywords',
        'libraryId' => 'setLibraryId',
        'orderNo' => 'setOrderNo',
        'pictures' => 'setPictures',
        'publishEnd' => 'setPublishEnd',
        'publishStart' => 'setPublishStart',
        'relatedArticles' => 'setRelatedArticles',
        'sceneCodes' => 'setSceneCodes',
        'source' => 'setSource',
        'status' => 'setStatus',
        'statusCode' => 'setStatusCode',
        'title' => 'setTitle',
        'updateTime' => 'setUpdateTime',
        'updaterId' => 'setUpdaterId',
        'updaterName' => 'setUpdaterName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attachments' => 'getAttachments',
        'categoryId' => 'getCategoryId',
        'categoryNamePath' => 'getCategoryNamePath',
        'categoryPath' => 'getCategoryPath',
        'content' => 'getContent',
        'createTime' => 'getCreateTime',
        'creatorId' => 'getCreatorId',
        'extendTitles' => 'getExtendTitles',
        'id' => 'getId',
        'keywords' => 'getKeywords',
        'libraryId' => 'getLibraryId',
        'orderNo' => 'getOrderNo',
        'pictures' => 'getPictures',
        'publishEnd' => 'getPublishEnd',
        'publishStart' => 'getPublishStart',
        'relatedArticles' => 'getRelatedArticles',
        'sceneCodes' => 'getSceneCodes',
        'source' => 'getSource',
        'status' => 'getStatus',
        'statusCode' => 'getStatusCode',
        'title' => 'getTitle',
        'updateTime' => 'getUpdateTime',
        'updaterId' => 'getUpdaterId',
        'updaterName' => 'getUpdaterName'
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
        $this->container['attachments'] = $data['attachments'] ?? null;
        $this->container['categoryId'] = $data['categoryId'] ?? null;
        $this->container['categoryNamePath'] = $data['categoryNamePath'] ?? null;
        $this->container['categoryPath'] = $data['categoryPath'] ?? null;
        $this->container['content'] = $data['content'] ?? null;
        $this->container['createTime'] = $data['createTime'] ?? null;
        $this->container['creatorId'] = $data['creatorId'] ?? null;
        $this->container['extendTitles'] = $data['extendTitles'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['keywords'] = $data['keywords'] ?? null;
        $this->container['libraryId'] = $data['libraryId'] ?? null;
        $this->container['orderNo'] = $data['orderNo'] ?? null;
        $this->container['pictures'] = $data['pictures'] ?? null;
        $this->container['publishEnd'] = $data['publishEnd'] ?? null;
        $this->container['publishStart'] = $data['publishStart'] ?? null;
        $this->container['relatedArticles'] = $data['relatedArticles'] ?? null;
        $this->container['sceneCodes'] = $data['sceneCodes'] ?? null;
        $this->container['source'] = $data['source'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['statusCode'] = $data['statusCode'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['updateTime'] = $data['updateTime'] ?? null;
        $this->container['updaterId'] = $data['updaterId'] ?? null;
        $this->container['updaterName'] = $data['updaterName'] ?? null;
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
     * Gets attachments
     *
     * @return \Alipay\OpenAPISDK\Model\ArticleAttachmentInfo[]|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \Alipay\OpenAPISDK\Model\ArticleAttachmentInfo[]|null $attachments 文章对应附件集合
     *
     * @return self
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets categoryId
     *
     * @return int|null
     */
    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    /**
     * Sets categoryId
     *
     * @param int|null $categoryId 所属类目ID
     *
     * @return self
     */
    public function setCategoryId($categoryId)
    {
        $this->container['categoryId'] = $categoryId;

        return $this;
    }

    /**
     * Gets categoryNamePath
     *
     * @return string|null
     */
    public function getCategoryNamePath()
    {
        return $this->container['categoryNamePath'];
    }

    /**
     * Sets categoryNamePath
     *
     * @param string|null $categoryNamePath 类目名称路径
     *
     * @return self
     */
    public function setCategoryNamePath($categoryNamePath)
    {
        $this->container['categoryNamePath'] = $categoryNamePath;

        return $this;
    }

    /**
     * Gets categoryPath
     *
     * @return \Alipay\OpenAPISDK\Model\ArticleCategoryInfo[]|null
     */
    public function getCategoryPath()
    {
        return $this->container['categoryPath'];
    }

    /**
     * Sets categoryPath
     *
     * @param \Alipay\OpenAPISDK\Model\ArticleCategoryInfo[]|null $categoryPath 类目路径
     *
     * @return self
     */
    public function setCategoryPath($categoryPath)
    {
        $this->container['categoryPath'] = $categoryPath;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string|null $content 内容
     *
     * @return self
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets createTime
     *
     * @return string|null
     */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
     * Sets createTime
     *
     * @param string|null $createTime 创建时间
     *
     * @return self
     */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;

        return $this;
    }

    /**
     * Gets creatorId
     *
     * @return string|null
     */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
     * Sets creatorId
     *
     * @param string|null $creatorId 创建人
     *
     * @return self
     */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;

        return $this;
    }

    /**
     * Gets extendTitles
     *
     * @return string[]|null
     */
    public function getExtendTitles()
    {
        return $this->container['extendTitles'];
    }

    /**
     * Sets extendTitles
     *
     * @param string[]|null $extendTitles 扩展标题
     *
     * @return self
     */
    public function setExtendTitles($extendTitles)
    {
        $this->container['extendTitles'] = $extendTitles;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id 文章ID
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets keywords
     *
     * @return string[]|null
     */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
     * Sets keywords
     *
     * @param string[]|null $keywords 标签
     *
     * @return self
     */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;

        return $this;
    }

    /**
     * Gets libraryId
     *
     * @return int|null
     */
    public function getLibraryId()
    {
        return $this->container['libraryId'];
    }

    /**
     * Sets libraryId
     *
     * @param int|null $libraryId 知识库ID
     *
     * @return self
     */
    public function setLibraryId($libraryId)
    {
        $this->container['libraryId'] = $libraryId;

        return $this;
    }

    /**
     * Gets orderNo
     *
     * @return int|null
     */
    public function getOrderNo()
    {
        return $this->container['orderNo'];
    }

    /**
     * Sets orderNo
     *
     * @param int|null $orderNo 排序值
     *
     * @return self
     */
    public function setOrderNo($orderNo)
    {
        $this->container['orderNo'] = $orderNo;

        return $this;
    }

    /**
     * Gets pictures
     *
     * @return \Alipay\OpenAPISDK\Model\ArticleAttachmentInfo[]|null
     */
    public function getPictures()
    {
        return $this->container['pictures'];
    }

    /**
     * Sets pictures
     *
     * @param \Alipay\OpenAPISDK\Model\ArticleAttachmentInfo[]|null $pictures 文章对应图片集合
     *
     * @return self
     */
    public function setPictures($pictures)
    {
        $this->container['pictures'] = $pictures;

        return $this;
    }

    /**
     * Gets publishEnd
     *
     * @return string|null
     */
    public function getPublishEnd()
    {
        return $this->container['publishEnd'];
    }

    /**
     * Sets publishEnd
     *
     * @param string|null $publishEnd 有效期止
     *
     * @return self
     */
    public function setPublishEnd($publishEnd)
    {
        $this->container['publishEnd'] = $publishEnd;

        return $this;
    }

    /**
     * Gets publishStart
     *
     * @return string|null
     */
    public function getPublishStart()
    {
        return $this->container['publishStart'];
    }

    /**
     * Sets publishStart
     *
     * @param string|null $publishStart 有效期起始
     *
     * @return self
     */
    public function setPublishStart($publishStart)
    {
        $this->container['publishStart'] = $publishStart;

        return $this;
    }

    /**
     * Gets relatedArticles
     *
     * @return \Alipay\OpenAPISDK\Model\BaseArticleInfo[]|null
     */
    public function getRelatedArticles()
    {
        return $this->container['relatedArticles'];
    }

    /**
     * Sets relatedArticles
     *
     * @param \Alipay\OpenAPISDK\Model\BaseArticleInfo[]|null $relatedArticles 关联的知识点基础信息
     *
     * @return self
     */
    public function setRelatedArticles($relatedArticles)
    {
        $this->container['relatedArticles'] = $relatedArticles;

        return $this;
    }

    /**
     * Gets sceneCodes
     *
     * @return string[]|null
     */
    public function getSceneCodes()
    {
        return $this->container['sceneCodes'];
    }

    /**
     * Sets sceneCodes
     *
     * @param string[]|null $sceneCodes 场景ID。1（内部知识库）；2（机器人）;3（帮助中心）；4（无线帮助中心）
     *
     * @return self
     */
    public function setSceneCodes($sceneCodes)
    {
        $this->container['sceneCodes'] = $sceneCodes;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source 来源
     *
     * @return self
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status 文章状态
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets statusCode
     *
     * @return string|null
     */
    public function getStatusCode()
    {
        return $this->container['statusCode'];
    }

    /**
     * Sets statusCode
     *
     * @param string|null $statusCode 文章状态码
     *
     * @return self
     */
    public function setStatusCode($statusCode)
    {
        $this->container['statusCode'] = $statusCode;

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
     * @param string|null $title 标题
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets updateTime
     *
     * @return string|null
     */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
     * Sets updateTime
     *
     * @param string|null $updateTime 修改时间
     *
     * @return self
     */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;

        return $this;
    }

    /**
     * Gets updaterId
     *
     * @return string|null
     */
    public function getUpdaterId()
    {
        return $this->container['updaterId'];
    }

    /**
     * Sets updaterId
     *
     * @param string|null $updaterId 修改人
     *
     * @return self
     */
    public function setUpdaterId($updaterId)
    {
        $this->container['updaterId'] = $updaterId;

        return $this;
    }

    /**
     * Gets updaterName
     *
     * @return string|null
     */
    public function getUpdaterName()
    {
        return $this->container['updaterName'];
    }

    /**
     * Sets updaterName
     *
     * @param string|null $updaterName 修改人名称
     *
     * @return self
     */
    public function setUpdaterName($updaterName)
    {
        $this->container['updaterName'] = $updaterName;

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


