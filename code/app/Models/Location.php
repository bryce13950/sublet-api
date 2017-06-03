<?php
/**
 * Created by PhpStorm.
 * User: brycemeyer
 * Date: 6/2/17
 * Time: 7:54 PM
 */

namespace Sublet\Models;


/**
 * Class Location
 * @package Sublet\Models
 *
 * @property string name the name of this location
 * @property string address_line_1 the first line of the address
 * @property string address_line_2 the second line of the address
 * @property string postal_code the mailing code for this location
 * @property string city the name of the city for this location
 * @property string state the state that this location is in
 * @property double latitude the latitude coordinate of this location
 * @property double longitude the longitude coordinate of this location
 * @property boolean needs_refresh whether or not this location needs to have it's longitude and latitude refreshed
 * @property int user_id the primary key of the user that owns this location
 * @property User user the object of the user that made this location
 */
class Location extends BaseModel
{

}