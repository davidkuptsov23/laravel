<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlockType extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'block_types';

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
     * Get the block record associated with the block type.
     */
    public function block(){
        return $this->hasOne(Block::class, 'block_types_id');
    }
}
