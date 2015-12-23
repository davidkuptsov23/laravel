<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'blocks';

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
        'houses_id', 'block_types_id',
        'sub_lot_number', 'prop_share',
        'date_from', 'date_to'
    ];

    /**
     * Get the block type that owns the block.
     */
    public function blockType(){
        return $this->belongsTo(BlockType::class, 'block_types_id');
    }

    /**
     * Get the house that owns the block.
     */
    public function house(){
        return $this->belongsTo(House::class, 'houses_id');
    }

    /**
     * The persons that belong to the block.
     */
    public function persons(){
        return $this->belongsToMany(Person::class);
    }

}
