<?php namespace App\Controllers;

class Mpesa extends BaseController
{
	public function index()
	{
		return view('welcome_message');
    }
    

    public function recordpayment()
	{
		echo 'record payment';
    }
    

    public function validatepayment()
	{
		echo 'validate payment';
    }
    
    public function checktransaction()
	{
		echo 'check transaction';
    }
    
    public function checkbalance()
	{
		echo 'check balannce';
	}

	

}
