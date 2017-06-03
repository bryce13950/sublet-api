<?php
/**
 * Created by PhpStorm.
 * User: brycemeyer
 * Date: 6/2/17
 * Time: 8:03 PM
 */

namespace Sublet\Models;


/**
 * Class Room
 * @package Sublet\Models
 *
 * @property int location_id the id of the location this room is in
 * @property Location location the location object this room is in
 * @property string name the assigned name of this  room
 * @property int cost how much this room costs per month
 * @property int guests how many guests can stay here
 * @property int beds how many beds are in the room
 * @property string description the content of the description for this room
 */
class Room extends BaseModel
{

}