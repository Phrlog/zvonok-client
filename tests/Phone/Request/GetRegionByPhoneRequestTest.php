<?php

namespace Phrlog\Zvonok\Tests\Phone\Request;

use Phrlog\Zvonok\Phone\Request\GetRegionByPhoneRequest;
use PHPUnit\Framework\TestCase;

class GetRegionByPhoneRequestTest extends TestCase
{
    public function testGenerateLink()
    {
        $request = new GetRegionByPhoneRequest('phone');
        $this->assertEquals(
            $request->generateUri(),
            '/lk/cabapi_external/api/v1/def_codes/by_phone/?phone=phone'
        );

    }
}
