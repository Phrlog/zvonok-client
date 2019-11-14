<?php

namespace Phrlog\Zvonok\Tests\Phone\Request;

use Phrlog\Zvonok\Phone\Request\AddCallRequest;
use PHPUnit\Framework\TestCase;

class AddCallRequestTest extends TestCase
{
    public function testGenerateLink()
    {
        $request = new AddCallRequest('+788828288828', 'camp_id');

        $this->assertEquals(
            $request->setPublicKey('public_key')->generateUri(),
            '/lk/cabapi_external/api/v1/phones/call/?phone=%2B788828288828&campaign_id=camp_id&public_key=public_key'
        );
    }
}
