<?php

namespace Billing\Invoicing;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
	protected $table = 'invoices';
	public $timestamps = true;
	public $primaryKey = 'id';
	protected $guarded = [
	'id'  	
	];
	public function invoiceItems()
	{
		return $this->hasMany('Billing\Invoicing\InvoiceItem');
	}
	public function payments()
	{
		return $this->hasMany('Billing\Transactions\Payment');
	}
	public function client()
	{
		return $this->belongsTo('Billing\Entities\Client');
	}
	public function parentInvoice()
	{
		return $this->belongsTo('Billing\Invoicing\Invoice');
	}
}
