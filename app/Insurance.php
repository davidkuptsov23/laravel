<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'insurances';

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
        'company_name', 'policy',
        'cc_id', 'broker', 'date_turn',
        'date_from', 'date_to'
    ];

    /**
     * The houses that belong to the insurance.
     */
    public function houses(){
        return $this->belongsToMany(House::class);
    }

}
