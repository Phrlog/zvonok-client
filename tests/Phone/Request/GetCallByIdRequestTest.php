<?php

namespace Phrlog\Zvonok\Tests\Phone\Request;

use Phrlog\Zvonok\Phone\Request\GetCallByIdRequest;
use PHPUnit\Framework\TestCase;

class GetCallByIdRequestTest extends TestCase
{
    public function testGenerateLink()
    {
        $request = new GetCallByIdRequest(123);

        $this->assertEquals(
            $request->setPublicKey('public_key')->generateUri(),
            '/lk/cabapi_external/api/v1/phones/call_by_id/?call_id=123&public_key=public_key'
        );
    }
}
