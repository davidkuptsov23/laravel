<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountType extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'account_types';

    /**
     * Disabling timestamps.
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['code', 'description'];

    /**
     * Get the bank record associated with the account type.
     */
    public function bank(){
        return $this->hasOne(Bank::class, 'account_types_id');
    }

}
