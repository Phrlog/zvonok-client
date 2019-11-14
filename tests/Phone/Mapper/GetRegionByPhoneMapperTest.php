<?php

namespace Phrlog\Zvonok\Tests\Phone\Mapper;

use PHPUnit\Framework\TestCase;
use Phrlog\Zvonok\Phone\Mapper\GetRegionByPhoneMapper;
use Phrlog\Zvonok\Phone\Response\RegionResponse;

/**
 * Class GetRegionByPhoneMapperTest
 *
 * @package Phrlog\Zvonok\Tests\Phone\Mapper
 */
class GetRegionByPhoneMapperTest extends TestCase
{
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testNotValidJson()
    {
        $json = 'some_text';

        $mapper = new GetRegionByPhoneMapper(new \JsonMapper());

        $mapper->map($json);
    }

    public function testValidJson()
    {
        $mapper = new GetRegionByPhoneMapper(new \JsonMapper());

        $response = $mapper->map($this->jsonProvider());

        $this->assertInstanceOf(RegionResponse::class, $response);

        $this->assertEquals($response->status, 'ok');
        $this->assertEquals($response->data->firstCode, '968');
        $this->assertEquals($response->data->operator, 'ВымпелКом');
        $this->assertEquals($response->data->region, '77');
        $this->assertEquals($response->data->regionName, 'г. Москва, Московская область');
        $this->assertEquals($response->data->timezone, 'Europe/Moscow');
        $this->assertEquals($response->data->phoneType, 'def');
        $this->assertEquals($response->data->MNC, '99');
    }

    protected function jsonProvider()
    {
        return '{
        "status": "ok",
        "data":{
            "first_code": "968", 
            "from_code": "3500000", 
            "to_code": "7999999", 
            "block_size": 4500000, 
            "operator": "ВымпелКом", 
            "region": "77", 
            "region_name": "г. Москва, Московская область", 
            "timezone": "Europe/Moscow", 
            "phone_type": "def", 
            "GMT": "+03:00", 
            "MNC": 99
            }       
        }';
    }
}
