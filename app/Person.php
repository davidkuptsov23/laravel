<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'persons';

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
        'person_types_id', 'name',
        'mail_address_name', 'mail_address_zip',
        'mail_address_city', 'mail_address_street',
        'mail_address_number', 'email_1', 'email_2',
        'tel_1', 'tel_2', 'date_from', 'date_to'
    ];

    /**
     * Get the person type that owns the person.
     */
    public function personType(){
        return $this->belongsTo(PersonType::class, 'person_types_id');
    }

    /**
     * The blocks that belong to the person.
     */
    public function blocks(){
        return $this->belongsToMany(Block::class);
    }

}
