<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'banks';

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
    protected $fillable = [
        'bank_name', 'bank_address',
        'account_number', 'account_types_id',
        'selenium'
    ];

    /**
     * Get the account type that owns the bank.
     */
    public function accountType(){
        return $this->belongsTo(AccountType::class, 'account_types_id');
    }

    /**
     * The houses that belong to the bank.
     */
    public function houses(){
        return $this->belongsToMany(House::class);
    }

    /**
     * Get a list of house ids associated with the current bank.
     *
     * @return array
     */
    public function getHouseListAttribute(){
        return $this->houses->lists('id')->all();
    }

}
