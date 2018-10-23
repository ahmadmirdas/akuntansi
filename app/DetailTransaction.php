<?php

namespace App;

use App\Account;
use App\Models\Master\Transaction;
use Illuminate\Database\Eloquent\Model;

class DetailTransaction extends Model
{
    protected $guarded = [];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
