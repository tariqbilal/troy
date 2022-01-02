<?php

namespace Tests\Feature;

use App\Services\CustomerService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Mail;

class CustomerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
		Mail::fake();
    $response = $this->get('/');
		$data = ['name' => 'bilal', 'email' => 'bilal@craftconcept.co'];
		$customer_service = new CustomerService();
		$customer_service->save($data);


		Mail::assertSent(WelcomeNewCustomer::class);
        $response->assertStatus(200);
    }
}
