<?php namespace Ihorr\Tasks\Models;

use Model;

/**
 * Model
 */
class Tasklist extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'ihorr_tasks_tasklist';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
