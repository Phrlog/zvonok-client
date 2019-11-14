<?php

namespace Phrlog\Zvonok\Tests\Phone\Mapper;

use PHPUnit\Framework\TestCase;
use Phrlog\Zvonok\Phone\Mapper\AddCallMapper;
use Phrlog\Zvonok\Phone\Response\AddCallResponse;

/**
 * Class AddCallMapperTest
 * @package Phrlog\Zvonok\Tests\Phone\Mapper
 */
class AddCallMapperTest extends TestCase
{
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testNotValidJson()
    {
        $json = 'some_text';

        $mapper = new AddCallMapper(new \JsonMapper());

        $mapper->map($json);
    }

    public function testValidJson()
    {
        $mapper = new AddCallMapper(new \JsonMapper());

        $response = $mapper->map($this->jsonProvider());

        $this->assertInstanceOf(AddCallResponse::class, $response);

        $this->assertEquals($response->callId, 1365898635);
        $this->assertEquals($response->balance, '1069.750000');
        $this->assertEquals($response->phone, '+79999999999');

        $this->assertInstanceOf(\DateTime::class, $response->created);
        $this->assertEquals($response->created->format('Y-m-d'), '2017-09-22');
    }

    protected function jsonProvider()
    {
        return '{"call_id": 1365898635, "balance": "1069.750000", "phone": "+79999999999", "created": "2017-09-22T16:53:12.267Z"}';
    }
}
