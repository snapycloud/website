<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use SnapyCloud\PhpApi\Client\SnapyClient;
use App\User;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $client;

    public function __construct()
    {
        $url = 'https://server.app.snapycloud.com';
        $this->client = new SnapyClient($url);
        $this->client->setApiKey('2434bacac4b4abf96d0d7fb0ec19fc5c');
        $this->client->setSecretKey('769fce1f0b7264f9c9371f1cb9598662');
    }
    public function client()
    {
        return $this->client;
    }


    public function getPlaneRegister($id)
    {
    	return view('register', [
            'id' => $id
        ]);
    }

    public function postPlaneRegister(Request $request)
    {
    	// $request->validate([
    	// 	'firstname' => 'required|max:120',
    	// 	'lastname' => 'required|max:120',
    	// 	'email' => 'required|email',
    	// 	'phone' => 'required|regex:/(09)[0-9]{8}/',
    	// 	'password' => 'required|min:8|regex:/^(?=.*[a-zA-Z])(?=.*\d).+$/',
    	// ]);
        // need user create
        $postDataAccount = [
            'name' => $request->get('company'),
            'type' => 'Customer',
            'description' => 'New Register From Form Website',
            'emailAddress' => $request->get('email'),
            'emailAddressIsOptedOut' => false,
            'phoneNumber' => $request->get('phone'),
        ];

        $postDataContact = [
            'lastName' => $request->get('lastname'),
            'firstName' => $request->get('firstname'),
            'description' => 'New Register From Form Website',
            'emailAddress' => $request->get('email'),
            'emailAddressIsOptedOut' => false,
            'phoneNumber' => $request->get('phone'),
        ];

        // $account = $this->client()->entity('account')->create($postDataAccount);
        $account = false;
        if ($account) {
            $postDataContact['accountId'] = $account['id'];
            $postDataContact['accountName'] = $account['name'];
            $postDataContact['accountType'] = $account['type'];
        }


    	// $contact = $this->client()->entity('contact')->create($postDataContact);

        // need change id
        $product = $this->client()->request('GET', 'product', [
            'where[0][type]' => 'in',
            'where[0][attribute]' => 'id',
            'where[0][value][]' => $request->get('id')
        ]);

        return view('checkout', [
            'product' => $product['list'][0]
        ]);
    }

    public function postPayment($id, Request $request)
    {
        // get payment links
        dd($id, $request->all());
    }

    public function getPayment(Request $request)
    {
        $data['transid'] = $request->get('transId');
        $data['status'] = "Approved";
        // need update invoice
        $product = $this->client()->request('PUT', 'Quote/' . $request->get('factorNumber'), $data);

        dd($product, $data);
        return view('confirmation');
    }

    public function getLogin()
    {
        return view('login');
    }
}
