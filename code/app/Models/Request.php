<?php
/**
 * Created by PhpStorm.
 * User: brycemeyer
 * Date: 6/2/17
 * Time: 7:34 PM
 */

namespace Sublet\Models;


/**
 * Class Request
 * @package Sublet\Models
 *
 * @property int availability_id the id of the availability object this is associated with
 * @property Availability availability the availability object for this request
 * @property int user_id the id of the user that made this request
 * @property User user the user object that made this request
 * @property boolean accepted whether or not this request has been accepted
 */
class Request extends BaseModel
{

}


