<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'houses';

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
        'house_code', 'lot_number',
        'zip', 'city', 'street', 'number',
        'built', 'tax_number', 'date_from', 'date_to'
    ];

    /**
     * The banks that belong to the house.
     */
    public function banks(){
        return $this->belongsToMany(Bank::class);
    }

    /**
     * The insurances that belong to the house.
     */
    public function insurances(){
        return $this->belongsToMany(Insurance::class);
    }

    /**
     * Get the saving record associated with the house.
     */
    public function savings(){
        return $this->hasOne(Saving::class, 'houses_id');
    }

    /**
     * Get the blocks for the house.
     */
    public function blocks(){
        return $this->hasMany(Block::class, 'houses_id');
    }

    /**
     * Get a list of bank ids associated with the current house.
     *
     * @return array
     */
    public function getBankListAttribute(){
        return $this->banks->lists('id')->all();
    }

}
