<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MercadoPago;

class CartController extends Controller
{
	public function show() {
		return view('carro-de-compras');
	}

	public function summary() {
		return view('carro-de-compras-resumen');
	}

	public function method() {
		return view('carro-de-compras-medio-de-pago');
	}

	public function success() {
		return view('carro-de-compras-compra-exitosa');
	}

    public function checkout()
    {
    	MercadoPago\SDK::setAccessToken(env("MP_TOKEN"));

		$preference = new MercadoPago\Preference();
		$preference->back_urls = array(
		    "success" => url('/carro-de-compras/compra-exitosa'),
		    "failure" => url('/carro-de-compras/compra-exitosa'),
		    "pending" => url('/carro-de-compras/compra-exitosa')
		);
		$preference->external_reference = 'ooo-1';
		$preference->auto_return = "all";

		/*$item = new MercadoPago\Item();
		$item->id => 'ee-1';
		$item->title = 'Mi producto';
		$item->quantity = 1;
		$item->currency_id = 'CLP';
		$item->unit_price = 1000;
		$item->picture_url = 'eee.jpg';
		dd($item);*/

		$preference->items = array(array(
			"id" => 'ee-1',
		    "title" => 'Mi producto',
		    "quantity" =>  1,
		    "currency_id" => 'CLP',
			"unit_price" => 1000
			//"picture_url" => ''
		));
		$preference->save();
		//dd([$preference->init_point, $preference->sandbox_init_point]);

		return redirect()->to($preference->sandbox_init_point);
    }
}
