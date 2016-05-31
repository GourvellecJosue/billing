<?php

namespace Billing\MeansOfPayment;

use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{
	protected $table = 'credit_cards';
	public $timestamps = true;
	public $primaryKey = 'id';
	protected $guarded = [
	'id'  	
	];
	public function payments()
	{
		return $this->hasMany('Billing\Transactions\Payment');
	}
	public function client()
	{
		return $this->belongsTo('Billing\Entities\Client');
	}
}
