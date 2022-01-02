<?php

namespace App\Http\Controllers;

use App\Services\CustomerService;
use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;
class CustomerController extends Controller
{
	/**
	 * @param CustomerRequest $request
	 * @return array
	 */
    public function store(CustomerRequest $request)
	{
		$data = $request->all();
		$customer_service = new CustomerService();
		$customer_service->save($data);
		$customer_service->sendEmail($data);
		return [
			'saved' => true
		];
	}
}
