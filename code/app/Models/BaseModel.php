<?php
/**
 * Created by PhpStorm.
 * User: brycemeyer
 * Date: 6/2/17
 * Time: 7:33 PM
 */

namespace Sublet\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BaseModel extends Model
{

    use SoftDeletes;

}