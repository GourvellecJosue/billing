<?php

namespace Billing\Entities;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    public $timestamps = true;
    public $primaryKey = 'id';
    protected $guarded = [
    'id'  	
    ];
    public function creditCards()
    {
        return $this->hasMany('Billing\MeansOfPayment\CreditCard');
    }
    public function payments()
    {
        return $this->hasMany('Billing\Transactions\Payment');
    }
    public function paybacks()
    {
        return $this->hasMany('Billing\Transactions\Payback');
    }
    public function invoices()
    {
        return $this->hasMany('Billing\Invoicing\Invoice');
    }
}
