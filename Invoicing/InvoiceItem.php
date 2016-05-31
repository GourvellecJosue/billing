<?php

namespace Billing\Invoicing;

use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
	protected $table = 'invoice_items';
	public $timestamps = false;
	public $primaryKey = 'id';
	protected $guarded = [
	'id'  	
	];
	public function invoice()
	{
		return $this->belongsTo('Billing\Invoicing\Invoice');
	}
}
