# zvonok-client
[![Build Status](https://scrutinizer-ci.com/g/Phrlog/zvonok-client/badges/build.png?b=master)](https://scrutinizer-ci.com/g/Phrlog/zvonok-client/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Phrlog/zvonok-client/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Phrlog/zvonok-client/?branch=master)
[![License](https://poser.pugx.org/phrlog/zvonok-client/license)](https://packagist.org/packages/phrlog/zvonok-client)

## Description
Library for interacting with [Zvonok(CallTools)](https://zvonok.com/) API

## Installation
`composer require phrlog/zvonok-client`

## Examples

### Client initialization
```php
$client = new \Phrlog\Zvonok\Client(\Phrlog\Zvonok\Config::createCalltools('your_public_key'));
```

### Add call
[Docs](https://api-docs.zvonok.com/?version=latest#ca6f7010-34b2-49e5-93e7-876d08b0b0d6)
```php
$request = new \Phrlog\Zvonok\Phone\Request\AddCallRequest('+79857777777', 'campaign_id');
$response = $client->execute($request);
```

### Get call by id
[Docs](https://api-docs.zvonok.com/?version=latest#50b1f5ff-200b-4177-b2e5-19aa806e5f63)
```php
$request = new \Phrlog\Zvonok\Phone\Request\GetCallByIdRequest('234');
$response = $client->execute($request);
```

### Get call by phone
[Docs](https://api-docs.zvonok.com/?version=latest#8031f9ee-daa5-4d41-9197-118e93efb62b)
```php
$request = new \Phrlog\Zvonok\Phone\Request\GetCallByPhoneRequest('+79857777777', 'campaign_id');
$response = $client->execute($request);
```

### Get region by phone
[Docs](https://api-docs.zvonok.com/?version=latest#8031f9ee-daa5-4d41-9197-118e93efb62b)
```php
$request = new \Phrlog\Zvonok\Phone\Request\GetRegionByPhoneRequest('+79857777777');
$response = $client->execute($request);
```

## License
This project is licensed under the MIT License - see the [LICENSE.md](LICENSE) file for details
