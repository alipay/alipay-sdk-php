<?php
/**
 * AlipayFundTransApi
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
 * The version of the OpenAPI document: 2024-11-12
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Alipay\OpenAPISDK\Api;

use Alipay\OpenAPISDK\Util\AlipayConfigUtil;
use Alipay\OpenAPISDK\Util\AlipayLogger;
use Alipay\OpenAPISDK\Util\Model\CustomizedParams;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Alipay\OpenAPISDK\ApiException;
use Alipay\OpenAPISDK\Configuration;
use Alipay\OpenAPISDK\HeaderSelector;
use Alipay\OpenAPISDK\ObjectSerializer;

/**
 * AlipayFundTransApi Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AlipayFundTransApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @var AlipayConfigUtil
     */
    protected $alipayConfigUtil;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     * @param AlipayConfigUtil $alipayConfigUtil
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0,
        AlipayConfigUtil $alipayConfigUtil = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
        $this->alipayConfigUtil = $alipayConfigUtil ?: new AlipayConfigUtil();
    }

    /**
     * @return AlipayConfigUtil
     */
    public function getAlipayConfigUtil(): AlipayConfigUtil
    {
        return $this->alipayConfigUtil;
    }

    /**
     * @param AlipayConfigUtil $alipayConfigUtil
     */
    public function setAlipayConfigUtil(AlipayConfigUtil $alipayConfigUtil): void
    {
        $this->alipayConfigUtil = $alipayConfigUtil;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation pay
     *
     * 资金支付接口
     *
     * @param  \Alipay\OpenAPISDK\Model\AlipayFundTransPayModel $alipayFundTransPayModel alipayFundTransPayModel (optional)
     * @param CustomizedParams $customizedParams
     *
     * @throws \Alipay\OpenAPISDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Alipay\OpenAPISDK\Model\AlipayFundTransPayResponseModel|\Alipay\OpenAPISDK\Model\AlipayFundTransPayDefaultResponse
     */
    public function pay($alipayFundTransPayModel = null, CustomizedParams $customizedParams = null)
    {
        list($response) = $this->payWithHttpInfo($alipayFundTransPayModel, $customizedParams);
        return $response;
    }

    /**
     * Operation payWithHttpInfo
     *
     * 资金支付接口
     *
     * @param  \Alipay\OpenAPISDK\Model\AlipayFundTransPayModel $alipayFundTransPayModel (optional)
     * @param CustomizedParams $customizedParams
     *
     * @throws \Alipay\OpenAPISDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Alipay\OpenAPISDK\Model\AlipayFundTransPayResponseModel|\Alipay\OpenAPISDK\Model\AlipayFundTransPayDefaultResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function payWithHttpInfo($alipayFundTransPayModel = null, CustomizedParams $customizedParams = null)
    {
        $request = $this->payRequest($alipayFundTransPayModel, $customizedParams);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getResponse()) {
                    //验签
                    $this->alipayConfigUtil->verifyResponse((string)$e->getResponse()->getBody(),
                        $e->getResponse()->getHeaders(), true);
                }
                AlipayLogger::logBizError("code:{$e->getCode()}, message:{$e->getMessage()}");
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                AlipayLogger::logBizError("code:{$e->getCode()}, message:{$e->getMessage()}");
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                //验签
                $bodyStr = (string)$response->getBody();
                $this->alipayConfigUtil->verifyResponse($bodyStr, $response->getHeaders(), true);
                AlipayLogger::logBizError("code:{$statusCode}, message:{$bodyStr}");
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $bodyStr
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Alipay\OpenAPISDK\Model\AlipayFundTransPayResponseModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        //验签
                        $this->alipayConfigUtil->verifyResponse($content, $response->getHeaders(), false);
                        //解密
                        $content = $this->alipayConfigUtil->decrypt($content);
                        if ('\Alipay\OpenAPISDK\Model\AlipayFundTransPayResponseModel' !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    AlipayLogger::logBizResponseInfo($response->getStatusCode(), $content, $response->getHeaders());

                    return [
                        ObjectSerializer::deserialize($content, '\Alipay\OpenAPISDK\Model\AlipayFundTransPayResponseModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                                
                default:
                    if ('\Alipay\OpenAPISDK\Model\AlipayFundTransPayDefaultResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        //验签
                        $this->alipayConfigUtil->verifyResponse($content, $response->getHeaders(), true);
                        if ('\Alipay\OpenAPISDK\Model\AlipayFundTransPayDefaultResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    AlipayLogger::logBizResponseInfo($response->getStatusCode(), $content, $response->getHeaders());

                    return [
                        //ObjectSerializer::deserialize($content, '\Alipay\OpenAPISDK\Model\AlipayFundTransPayDefaultResponse', []),
                        $content,
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Alipay\OpenAPISDK\Model\AlipayFundTransPayResponseModel';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                //验签
                $this->alipayConfigUtil->verifyResponse($content, $response->getHeaders(), false);
                //解密
                $content = $this->alipayConfigUtil->decrypt($content);
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            AlipayLogger::logBizResponseInfo($response->getStatusCode(), $content, $response->getHeaders());

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Alipay\OpenAPISDK\Model\AlipayFundTransPayResponseModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                                
                default:
                    //$data = ObjectSerializer::deserialize(
                    //    $e->getResponseBody(),
                    //    '\Alipay\OpenAPISDK\Model\AlipayFundTransPayDefaultResponse',
                    //    $e->getResponseHeaders()
                    //);
                    //$e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation payAsync
     *
     * 资金支付接口
     *
     * @param  \Alipay\OpenAPISDK\Model\AlipayFundTransPayModel $alipayFundTransPayModel (optional)
     * @param CustomizedParams $customizedParams
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function payAsync($alipayFundTransPayModel = null, CustomizedParams $customizedParams = null)
    {
        return $this->payAsyncWithHttpInfo($alipayFundTransPayModel, $customizedParams)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation payAsyncWithHttpInfo
     *
     * 资金支付接口
     *
     * @param  \Alipay\OpenAPISDK\Model\AlipayFundTransPayModel $alipayFundTransPayModel (optional)
     * @param CustomizedParams $customizedParams
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function payAsyncWithHttpInfo($alipayFundTransPayModel = null, CustomizedParams $customizedParams = null)
    {
        $returnType = '\Alipay\OpenAPISDK\Model\AlipayFundTransPayResponseModel';
        $request = $this->payRequest($alipayFundTransPayModel, $customizedParams);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        //验签
                        $this->alipayConfigUtil->verifyResponse($content, $response->getHeaders(), false);
                        //解密
                        $content = $this->alipayConfigUtil->decrypt($content);
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    //验签
                    $this->alipayConfigUtil->verifyResponse((string)$response->getBody(), $response->getHeaders(), true);
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'pay'
     *
     * @param  \Alipay\OpenAPISDK\Model\AlipayFundTransPayModel $alipayFundTransPayModel (optional)
     * @param CustomizedParams $customizedParams
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function payRequest($alipayFundTransPayModel = null, CustomizedParams $customizedParams = null)
    {

        $resourcePath = '/v3/alipay/fund/trans/pay';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        $signContent = '';
        $isEncrypt = $this->alipayConfigUtil->isEncrypt();





        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']
        );
        if ($headers['Content-Type'] === 'multipart/form-data') {
            $multipart = true;
            unset($headers['Content-Type']);
        }

        // for model (json/xml)
        //自定义body内容
        if (($customizedParams != null && !$this->getAlipayConfigUtil()->checkEmpty($customizedParams->getBodyContent()))
            && ($headers['Content-Type'] === 'application/json' || $isEncrypt)) {
            $signContent = $this->alipayConfigUtil->encrypt($customizedParams->getBodyContent(), $headers, $multipart);
            $httpBody = $signContent;
        } elseif (isset($alipayFundTransPayModel)) {
            $signContent = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($alipayFundTransPayModel), JSON_UNESCAPED_UNICODE);
            if ($headers['Content-Type'] === 'application/json' || $isEncrypt) {
                $signContent = $this->alipayConfigUtil->encrypt($signContent, $headers, $multipart);
                $httpBody = $signContent;
            } else {
                $httpBody = $alipayFundTransPayModel;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        if (is_string($formParamValueItem)) {
                            $signContent = $formParamValueItem;
                        }
                        //加密时非文件字段对应的Content-Type类型为text/plain
                        if ($isEncrypt && is_string($formParamValueItem)) {
                            $signContent = $this->alipayConfigUtil->encrypt($formParamValueItem, $headers, true);
                            $multipartContents[] = [
                                'name' => $formParamName,
                                'contents' => $signContent,
                                'headers' => ['Content-Type' => 'text/plain']
                            ];
                        } else {
                            $multipartContents[] = [
                                'name' => $formParamName,
                                'contents' => $formParamValueItem,
                                'headers' => ['Content-Type' => 'application/json']
                            ];
                        }
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $signContent = $this->alipayConfigUtil->encrypt(\GuzzleHttp\json_encode($formParams, JSON_UNESCAPED_UNICODE), $headers);
                $httpBody = $signContent;

            } else {
                // for HTTP post (form)
                $signContent = $this->alipayConfigUtil->encrypt(ObjectSerializer::buildQuery($formParams), $headers);
                $httpBody = $signContent;
            }
        }


        if ($isEncrypt) {
            $headers['alipay-encrypt-type'] = $this->alipayConfigUtil->getEncryptType();
            //除文件上传接口，加密后Content-Type均为"text/plain"
            if (!$multipart) {
                $headers['Content-Type'] = 'text/plain';
            }
        }

        if ($customizedParams != null) {
            //额外query参数
            if (is_array($customizedParams->getQueryParams()) && count($customizedParams->getQueryParams()) >= 0) {
                foreach ($customizedParams->getQueryParams() as $k => $v) {
                    if (is_array($v)) {
                        $v = ObjectSerializer::serializeCollection($v, 'form');
                    }
                    $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue($v, $k) ?? []);
                }
            }

            if (!$this->alipayConfigUtil->checkEmpty($customizedParams->getAppAuthToken())) {
                $headerParams["alipay-app-auth-token"] = $customizedParams->getAppAuthToken();
            }

            //额外非全局header参数
            if (is_array($customizedParams->getHeaderParams()) && count($customizedParams->getHeaderParams()) >= 0) {
                foreach ($customizedParams->getHeaderParams() as $k => $v) {
                    if (is_array($v)) {
                        $v = ObjectSerializer::serializeCollection($v, 'form');
                    }
                    $headerParams[$k] = ObjectSerializer::toHeaderValue($v);
                }
            }
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        if ($this->config->getSdkVersion()) {
            $defaultHeaders['alipay-sdk-version'] = $this->config->getSdkVersion();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        if (!array_key_exists('alipay-request-id', $headers)) {
            $headers['alipay-request-id'] = $this->alipayConfigUtil->createUuid();
        }

        $query = ObjectSerializer::buildQuery($queryParams);
        $url = $resourcePath . ($query ? "?{$query}" : '');
        //加签
        $this->alipayConfigUtil->sign('POST', $url, $signContent, $headers);

        $basePath = $this->alipayConfigUtil->checkEmpty($this->alipayConfigUtil->getServerUrl()) ? $this->config->getHost() : $this->alipayConfigUtil->getServerUrl();
        AlipayLogger::logBizInfo($basePath . $url, $signContent, 'POST', $multipart ? "multipart/form-data" : $headers['Content-Type'], $headers['alipay-request-id']);
        return new Request(
            'POST',
            $basePath . $url,
            $headers,
            $httpBody
        );
    }

    /**
     * Operation refund
     *
     * 资金退回接口
     *
     * @param  \Alipay\OpenAPISDK\Model\AlipayFundTransRefundModel $alipayFundTransRefundModel alipayFundTransRefundModel (optional)
     * @param CustomizedParams $customizedParams
     *
     * @throws \Alipay\OpenAPISDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Alipay\OpenAPISDK\Model\AlipayFundTransRefundResponseModel|\Alipay\OpenAPISDK\Model\AlipayFundTransRefundDefaultResponse
     */
    public function refund($alipayFundTransRefundModel = null, CustomizedParams $customizedParams = null)
    {
        list($response) = $this->refundWithHttpInfo($alipayFundTransRefundModel, $customizedParams);
        return $response;
    }

    /**
     * Operation refundWithHttpInfo
     *
     * 资金退回接口
     *
     * @param  \Alipay\OpenAPISDK\Model\AlipayFundTransRefundModel $alipayFundTransRefundModel (optional)
     * @param CustomizedParams $customizedParams
     *
     * @throws \Alipay\OpenAPISDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Alipay\OpenAPISDK\Model\AlipayFundTransRefundResponseModel|\Alipay\OpenAPISDK\Model\AlipayFundTransRefundDefaultResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function refundWithHttpInfo($alipayFundTransRefundModel = null, CustomizedParams $customizedParams = null)
    {
        $request = $this->refundRequest($alipayFundTransRefundModel, $customizedParams);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getResponse()) {
                    //验签
                    $this->alipayConfigUtil->verifyResponse((string)$e->getResponse()->getBody(),
                        $e->getResponse()->getHeaders(), true);
                }
                AlipayLogger::logBizError("code:{$e->getCode()}, message:{$e->getMessage()}");
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                AlipayLogger::logBizError("code:{$e->getCode()}, message:{$e->getMessage()}");
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                //验签
                $bodyStr = (string)$response->getBody();
                $this->alipayConfigUtil->verifyResponse($bodyStr, $response->getHeaders(), true);
                AlipayLogger::logBizError("code:{$statusCode}, message:{$bodyStr}");
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $bodyStr
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Alipay\OpenAPISDK\Model\AlipayFundTransRefundResponseModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        //验签
                        $this->alipayConfigUtil->verifyResponse($content, $response->getHeaders(), false);
                        //解密
                        $content = $this->alipayConfigUtil->decrypt($content);
                        if ('\Alipay\OpenAPISDK\Model\AlipayFundTransRefundResponseModel' !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    AlipayLogger::logBizResponseInfo($response->getStatusCode(), $content, $response->getHeaders());

                    return [
                        ObjectSerializer::deserialize($content, '\Alipay\OpenAPISDK\Model\AlipayFundTransRefundResponseModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                                
                default:
                    if ('\Alipay\OpenAPISDK\Model\AlipayFundTransRefundDefaultResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        //验签
                        $this->alipayConfigUtil->verifyResponse($content, $response->getHeaders(), true);
                        if ('\Alipay\OpenAPISDK\Model\AlipayFundTransRefundDefaultResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    AlipayLogger::logBizResponseInfo($response->getStatusCode(), $content, $response->getHeaders());

                    return [
                        //ObjectSerializer::deserialize($content, '\Alipay\OpenAPISDK\Model\AlipayFundTransRefundDefaultResponse', []),
                        $content,
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Alipay\OpenAPISDK\Model\AlipayFundTransRefundResponseModel';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                //验签
                $this->alipayConfigUtil->verifyResponse($content, $response->getHeaders(), false);
                //解密
                $content = $this->alipayConfigUtil->decrypt($content);
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            AlipayLogger::logBizResponseInfo($response->getStatusCode(), $content, $response->getHeaders());

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Alipay\OpenAPISDK\Model\AlipayFundTransRefundResponseModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                                
                default:
                    //$data = ObjectSerializer::deserialize(
                    //    $e->getResponseBody(),
                    //    '\Alipay\OpenAPISDK\Model\AlipayFundTransRefundDefaultResponse',
                    //    $e->getResponseHeaders()
                    //);
                    //$e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation refundAsync
     *
     * 资金退回接口
     *
     * @param  \Alipay\OpenAPISDK\Model\AlipayFundTransRefundModel $alipayFundTransRefundModel (optional)
     * @param CustomizedParams $customizedParams
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function refundAsync($alipayFundTransRefundModel = null, CustomizedParams $customizedParams = null)
    {
        return $this->refundAsyncWithHttpInfo($alipayFundTransRefundModel, $customizedParams)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation refundAsyncWithHttpInfo
     *
     * 资金退回接口
     *
     * @param  \Alipay\OpenAPISDK\Model\AlipayFundTransRefundModel $alipayFundTransRefundModel (optional)
     * @param CustomizedParams $customizedParams
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function refundAsyncWithHttpInfo($alipayFundTransRefundModel = null, CustomizedParams $customizedParams = null)
    {
        $returnType = '\Alipay\OpenAPISDK\Model\AlipayFundTransRefundResponseModel';
        $request = $this->refundRequest($alipayFundTransRefundModel, $customizedParams);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        //验签
                        $this->alipayConfigUtil->verifyResponse($content, $response->getHeaders(), false);
                        //解密
                        $content = $this->alipayConfigUtil->decrypt($content);
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    //验签
                    $this->alipayConfigUtil->verifyResponse((string)$response->getBody(), $response->getHeaders(), true);
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'refund'
     *
     * @param  \Alipay\OpenAPISDK\Model\AlipayFundTransRefundModel $alipayFundTransRefundModel (optional)
     * @param CustomizedParams $customizedParams
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function refundRequest($alipayFundTransRefundModel = null, CustomizedParams $customizedParams = null)
    {

        $resourcePath = '/v3/alipay/fund/trans/refund';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        $signContent = '';
        $isEncrypt = $this->alipayConfigUtil->isEncrypt();





        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']
        );
        if ($headers['Content-Type'] === 'multipart/form-data') {
            $multipart = true;
            unset($headers['Content-Type']);
        }

        // for model (json/xml)
        //自定义body内容
        if (($customizedParams != null && !$this->getAlipayConfigUtil()->checkEmpty($customizedParams->getBodyContent()))
            && ($headers['Content-Type'] === 'application/json' || $isEncrypt)) {
            $signContent = $this->alipayConfigUtil->encrypt($customizedParams->getBodyContent(), $headers, $multipart);
            $httpBody = $signContent;
        } elseif (isset($alipayFundTransRefundModel)) {
            $signContent = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($alipayFundTransRefundModel), JSON_UNESCAPED_UNICODE);
            if ($headers['Content-Type'] === 'application/json' || $isEncrypt) {
                $signContent = $this->alipayConfigUtil->encrypt($signContent, $headers, $multipart);
                $httpBody = $signContent;
            } else {
                $httpBody = $alipayFundTransRefundModel;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        if (is_string($formParamValueItem)) {
                            $signContent = $formParamValueItem;
                        }
                        //加密时非文件字段对应的Content-Type类型为text/plain
                        if ($isEncrypt && is_string($formParamValueItem)) {
                            $signContent = $this->alipayConfigUtil->encrypt($formParamValueItem, $headers, true);
                            $multipartContents[] = [
                                'name' => $formParamName,
                                'contents' => $signContent,
                                'headers' => ['Content-Type' => 'text/plain']
                            ];
                        } else {
                            $multipartContents[] = [
                                'name' => $formParamName,
                                'contents' => $formParamValueItem,
                                'headers' => ['Content-Type' => 'application/json']
                            ];
                        }
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $signContent = $this->alipayConfigUtil->encrypt(\GuzzleHttp\json_encode($formParams, JSON_UNESCAPED_UNICODE), $headers);
                $httpBody = $signContent;

            } else {
                // for HTTP post (form)
                $signContent = $this->alipayConfigUtil->encrypt(ObjectSerializer::buildQuery($formParams), $headers);
                $httpBody = $signContent;
            }
        }


        if ($isEncrypt) {
            $headers['alipay-encrypt-type'] = $this->alipayConfigUtil->getEncryptType();
            //除文件上传接口，加密后Content-Type均为"text/plain"
            if (!$multipart) {
                $headers['Content-Type'] = 'text/plain';
            }
        }

        if ($customizedParams != null) {
            //额外query参数
            if (is_array($customizedParams->getQueryParams()) && count($customizedParams->getQueryParams()) >= 0) {
                foreach ($customizedParams->getQueryParams() as $k => $v) {
                    if (is_array($v)) {
                        $v = ObjectSerializer::serializeCollection($v, 'form');
                    }
                    $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue($v, $k) ?? []);
                }
            }

            if (!$this->alipayConfigUtil->checkEmpty($customizedParams->getAppAuthToken())) {
                $headerParams["alipay-app-auth-token"] = $customizedParams->getAppAuthToken();
            }

            //额外非全局header参数
            if (is_array($customizedParams->getHeaderParams()) && count($customizedParams->getHeaderParams()) >= 0) {
                foreach ($customizedParams->getHeaderParams() as $k => $v) {
                    if (is_array($v)) {
                        $v = ObjectSerializer::serializeCollection($v, 'form');
                    }
                    $headerParams[$k] = ObjectSerializer::toHeaderValue($v);
                }
            }
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        if ($this->config->getSdkVersion()) {
            $defaultHeaders['alipay-sdk-version'] = $this->config->getSdkVersion();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        if (!array_key_exists('alipay-request-id', $headers)) {
            $headers['alipay-request-id'] = $this->alipayConfigUtil->createUuid();
        }

        $query = ObjectSerializer::buildQuery($queryParams);
        $url = $resourcePath . ($query ? "?{$query}" : '');
        //加签
        $this->alipayConfigUtil->sign('POST', $url, $signContent, $headers);

        $basePath = $this->alipayConfigUtil->checkEmpty($this->alipayConfigUtil->getServerUrl()) ? $this->config->getHost() : $this->alipayConfigUtil->getServerUrl();
        AlipayLogger::logBizInfo($basePath . $url, $signContent, 'POST', $multipart ? "multipart/form-data" : $headers['Content-Type'], $headers['alipay-request-id']);
        return new Request(
            'POST',
            $basePath . $url,
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
