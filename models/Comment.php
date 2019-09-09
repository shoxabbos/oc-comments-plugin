<?php namespace Shohabbos\Comments\Models;

use Model;

/**
 * Model
 */
class Comment extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'shohabbos_comments_comments';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'author_id'       => 'required|exists:users,id',
        'content'         => 'required|min:1',
        'attachment_id'   => 'required|integer',
        'attachment_type' => 'required|string'
    ];

    public $morphTo = [
        'attachment' => []
    ];
    public $belongsTo = [
        'author' => \Rainlab\User\Models\User::class
    ];

    public $guarded = [
        'id'
    ];
}
