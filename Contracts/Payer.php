<?php namespace Hht\Support\Contracts;


interface Payer  
{

	public function makeSign(Order $order);

	public function createSDKOrder(Order $order);

	public function verifySign(Order $order);

}
