<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saving extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'savings';

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
        'houses_id', 'bank_name', 'mod',
        'policy_sum', 'length_months',
        'monthly_savings', 'policy_number',
        'account_number', 'date_end',
        'date_from', 'date_to'
    ];

    /**
     * Get the house record associated with the savings.
     */
    public function house(){
        return $this->belongsTo(House::class, 'houses_id');
    }

}
