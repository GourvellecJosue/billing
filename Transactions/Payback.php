<?php

namespace Billing\Transactions;

use Illuminate\Database\Eloquent\Model;

class Payback extends Model
{
	protected $table = 'paybacks';
	public $timestamps = true;
	public $primaryKey = 'id';
	protected $guarded = [
	'id'  	
	];
	public function client()
	{
		return $this->belongsTo('Billing\Entities\Client');
	}
}
