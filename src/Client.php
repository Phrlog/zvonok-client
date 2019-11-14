<?php

namespace Phrlog\Zvonok;

use JsonMapper, JsonMapper_Exception;
use Http\Client\{Exception, HttpClient};
use Http\Discovery\{HttpClientDiscovery, Psr17FactoryDiscovery};
use Psr\Http\Message\RequestFactoryInterface;
use Phrlog\Zvonok\Exception\{EmptyResponseException, ResponseWithErrorException, UnknownRequestException};
use Phrlog\Zvonok\Phone\Mapper\{AddCallMapper, GetCallByIdMapper, GetRegionByPhoneMapper, GetCallByPhoneMapper};
use Phrlog\Zvonok\Phone\Request\{
    RequestInterface,
    AddCallRequest,
    GetCallByIdRequest,
    GetRegionByPhoneRequest,
    GetCallByPhoneRequest
};
use Phrlog\Zvonok\Phone\Response\{AddCallResponse, CallResultResponse, RegionResponse};

/**
 * Class Client
 */
class Client
{
    public const VERSION = '1.1.0';

    /**
     * @var Config
     */
    private $config;

    /**
     * @var HttpClient
     */
    private $httpClient;

    /**
     * @var RequestFactoryInterface
     */
    private $requestFactory;

    /**
     * @var JsonMapper
     */
    private $jsonMapper;

    /**
     * Client constructor.
     *
     * @param Config $config
     * @param JsonMapper|null $jsonMapper
     * @param HttpClient|null $httpClient
     * @param RequestFactoryInterface|null $requestFactory
     */
    public function __construct(
        Config $config,
        JsonMapper $jsonMapper = null,
        HttpClient $httpClient = null,
        RequestFactoryInterface $requestFactory = null)
    {
        $this->config = $config;
        $this->jsonMapper = $jsonMapper ?? new JsonMapper();
        $this->httpClient = $httpClient ?? HttpClientDiscovery::find();
        $this->requestFactory = $requestFactory ?? Psr17FactoryDiscovery::findRequestFactory();
    }

    /**
     * @param RequestInterface $request
     * @return AddCallResponse|CallResultResponse|RegionResponse
     * @throws Exception
     * @throws JsonMapper_Exception
     */
    public function execute(RequestInterface $request)
    {
        $class = get_class($request);

        switch($class) {
            case AddCallRequest::class:
                return $this->addCall($request);
            case GetCallByIdRequest::class:
                return $this->getCallById($request);
            case GetCallByPhoneRequest::class:
                return $this->getCallByPhone($request);
            case GetRegionByPhoneRequest::class:
                return $this->getRegionByPhone($request);
            default:
                throw new UnknownRequestException($class);
        }
    }

    /**
     * @param AddCallRequest $request
     *
     * @return AddCallResponse
     *
     * @throws Exception
     * @throws JsonMapper_Exception
     */
    public function addCall(AddCallRequest $request): AddCallResponse
    {
        $request->setPublicKey($this->config->publicKey());

        $requestBody = $this->doRequest($request);

        $mapper = new AddCallMapper($this->jsonMapper);

        return $mapper->map($requestBody);
    }

    /**
     * @param GetCallByIdRequest $request
     *
     * @return CallResultResponse
     *
     * @throws Exception
     * @throws JsonMapper_Exception
     */
    public function getCallById(GetCallByIdRequest $request): CallResultResponse
    {
        $request->setPublicKey($this->config->publicKey());

        $requestBody = $this->doRequest($request);

        $mapper = new GetCallByIdMapper($this->jsonMapper);

        return $mapper->map($requestBody);
    }
    /**
     * @param GetCallByPhoneRequest $request
     *
     * @return CallResultResponse
     *
     * @throws Exception
     * @throws JsonMapper_Exception
     */
    public function getCallByPhone(GetCallByPhoneRequest $request): CallResultResponse
    {
        $request->setPublicKey($this->config->publicKey());

        $requestBody = $this->doRequest($request);

        $mapper = new GetCallByPhoneMapper($this->jsonMapper);

        return $mapper->map($requestBody);
    }

    /**
     * @param GetRegionByPhoneRequest $request
     *
     * @return RegionResponse
     *
     * @throws Exception
     * @throws JsonMapper_Exception
     */
    public function getRegionByPhone(GetRegionByPhoneRequest $request): RegionResponse
    {
        $requestBody = $this->doRequest($request);

        $mapper = new GetRegionByPhoneMapper($this->jsonMapper);

        return $mapper->map($requestBody);
    }

    /**
     * @param RequestInterface $request
     *
     * @return string
     *
     * @throws Exception
     */
    private function doRequest(RequestInterface $request): string
    {
        $apiResponse = $this->httpClient->sendRequest(
            $this->requestFactory->createRequest(
                'GET',
                $this->config->domain() . $request->generateUri()
            )->withHeader('user-agent', $this->composeUserAgent())
        );

        $requestBody = $apiResponse->getBody()->getContents();

        $this->throwExceptionIfError($requestBody);

        return $requestBody;
    }

    /**
     * @return string
     */
    private function composeUserAgent(): string
    {
        return 'phrlog/zvonok-client ' . static::VERSION;
    }

    /**
     * @param string $requestBody
     */
    private function throwExceptionIfError(string $requestBody)
    {
        $body = json_decode($requestBody, true);

        if (null === $body) {
            throw new EmptyResponseException('Ответ API пуст');
        }

        if (isset($body['status']) && $body['status'] === 'error') {
            $message = $body['data'] ?? null;
            throw new ResponseWithErrorException($message);
        }
    }
}
