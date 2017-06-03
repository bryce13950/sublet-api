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

/**
 * Class BaseModel
 * @package Sublet\Models
 *
 * @property int id the db id of this model
 */
class BaseModel extends Model
{

    use SoftDeletes;

}