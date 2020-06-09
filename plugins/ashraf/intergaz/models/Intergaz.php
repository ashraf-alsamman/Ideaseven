<?php namespace Ashraf\Intergaz\Models;

use Model;

/**
 * Model
 */
class Intergaz extends Model
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
    public $table = 'ashraf_intergaz_';
                           protected $jsonable = ["news","solutions","services","products","partners",
                           "social","quick_links","posts","footer_buttom","footer_buttom","footer_right","menu","inner"];

                           public $attachOne = [
                            'gallery_image'=> 'System\Models\File'
                            ];
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
