<?php

namespace Billing\Transactions;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
	protected $table = 'payments';
	public $timestamps = true;
	public $primaryKey = 'id';
	protected $guarded = [
	'id'  	
	];
	public function client()
	{
		return $this->belongsTo('Billing\Entities\Client');
	}
	public function creditCard()
	{
		return $this->belongsTo('Billing\MeansOfPayment\CreditCard');
	}
	public function invoice()
	{
		return $this->belongsTo('Billing\Invoicing\Invoice');
	}
}
