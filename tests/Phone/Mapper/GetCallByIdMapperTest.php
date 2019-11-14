<?php

namespace Phrlog\Zvonok\Tests\Phone\Mapper;

use PHPUnit\Framework\TestCase;
use Phrlog\Zvonok\Phone\Constant\StatusCodes;
use Phrlog\Zvonok\Phone\Mapper\GetCallByIdMapper;
use Phrlog\Zvonok\Phone\Response\CallResultResponse;

/**
 * Class GetCallByIdMapperTest
 * @package Phrlog\Zvonok\Tests\Phone\Mapper
 */
class GetCallByIdMapperTest extends TestCase
{
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testNotValidJson()
    {
        $json = 'some_text';

        $mapper = new GetCallByIdMapper(new \JsonMapper());

        $mapper->map($json);
    }

    public function testValidJson()
    {
        $mapper = new GetCallByIdMapper(new \JsonMapper());

        $response = $mapper->map($this->jsonProvider());

        $this->assertInstanceOf(CallResultResponse::class, $response);

        $this->assertEquals($response->phone, '+79999999999');
        $this->assertEquals($response->statusDisplay, 'Пользовательский IVR');
        $this->assertEquals($response->recordedAudio, 'https://calltools.ru/lk/cdr/record/263939440/1506099207.4251/?key=6c64c603bd4b0ec216881934b742f340');
        $this->assertEquals($response->status, StatusCodes::USER);
        $this->assertEquals($response->dialStatusDisplay, null);
        $this->assertEquals($response->dialStatus, null);
        $this->assertEquals($response->callId, 170925203120219);
        $this->assertEquals($response->userChoice, null);

        $this->assertInstanceOf(\DateTime::class, $response->updated);
        $this->assertEquals($response->updated->format('Y-m-d'), '2017-09-22');

        $this->assertEquals($response->userChoiceDisplay, 'Смс заказчику на номер +79999999999');
        $this->assertEquals($response->actionType, 'sms_to_client');

        $this->assertInstanceOf(\DateTime::class, $response->created);
        $this->assertEquals($response->created->format('Y-m-d'), '2017-09-22');

        $this->assertInstanceOf(\DateTime::class, $response->completed);
        $this->assertEquals($response->completed->format('Y-m-d'), '2017-09-22');

        $this->assertEquals($response->duration, 20);
        $this->assertEquals($response->buttonNum, 1);
    }

    protected function jsonProvider()
    {
        return '[{
        "phone": "+79999999999",
        "status_display": "Пользовательский IVR",
        "recorded_audio": "https://calltools.ru/lk/cdr/record/263939440/1506099207.4251/?key=6c64c603bd4b0ec216881934b742f340",
        "status": "user",
        "dial_status_display": null,
        "dial_status": null,
        "call_id": 170925203120219,
        "user_choice": null,
        "updated": "2017-09-22T16:53:12.267Z",
        "user_choice_display": "Смс заказчику на номер +79999999999",
        "created": "2017-09-22T16:53:12.267Z",
        "button_num": 1,
        "action_type": "sms_to_client",
        "completed": "2017-09-22T16:53:12.267Z",
        "duration": 20
    }]';
    }
}
