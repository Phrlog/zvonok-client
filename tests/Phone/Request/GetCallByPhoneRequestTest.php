<?php

namespace Phrlog\Zvonok\Tests\Phone\Request;

use Phrlog\Zvonok\Phone\Request\GetCallByPhoneRequest;
use PHPUnit\Framework\TestCase;

class GetCallByPhoneRequestTest extends TestCase
{
    public function testGenerateLink()
    {
        $request = new GetCallByPhoneRequest('customer_phonenumber', 'your_campaign_id');
        $this->assertEquals(
            $request
                ->setPublicKey('public_key')
                ->setFromCreatedDate('from_created_date')->setToCreatedDate('to_created_date')
                ->setFromUpdatedDate('from_updated_date')->setToUpdatedDate('to_updated_date')
                ->generateUri(),
            '/lk/cabapi_external/api/v1/phones/calls_by_phone/?campaign_id=your_campaign_id&phone=customer_phonenumber&from_created_date=from_created_date&to_created_date=to_created_date&from_updated_date=from_updated_date&to_updated_date=to_updated_date&public_key=public_key'
        );

    }
}
