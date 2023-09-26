<?php 

namespace Botble\Demo\Models;

use Illuminate\Database\Eloquent\Model;

class Demo extends Model
{
    /**
     * @var string 
     */
    protected $table = 'demos';

    /**
     * @var array 
     */
    protected $fillable = ['name',];
}