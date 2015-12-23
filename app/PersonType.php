<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonType extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'person_types';

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
    protected $fillable = ['description'];

    /**
     * Get the person record associated with the person type.
     */
    public function person(){
        return $this->hasOne(Person::class, 'person_types_id');
    }

}
