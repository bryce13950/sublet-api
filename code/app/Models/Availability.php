<?php
/**
 * Created by PhpStorm.
 * User: brycemeyer
 * Date: 6/2/17
 * Time: 9:07 PM
 */

namespace Sublet\Models;


/**
 * Class Availability
 * @package Sublet\Models
 *
 * @property string month the month when this availability happens
 * @property int year the year that this availability happens
 * @property int room_id the id of the room this availability is for
 * @property Room room the room object for this availability
 */
class Availability extends BaseModel
{

}