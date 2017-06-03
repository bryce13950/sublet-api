<?php
/**
 * Created by PhpStorm.
 * User: brycemeyer
 * Date: 6/2/17
 * Time: 7:51 PM
 */

namespace Sublet\Models;


/**
 * Class AuthenticationToken
 * @package Sublet\Models
 *
 * @property int user_id the id of the user for this authentication token
 * @property User user the user object for this authentication token
 * @property string key the authentication token value
 */
class AuthenticationToken extends BaseModel
{

}