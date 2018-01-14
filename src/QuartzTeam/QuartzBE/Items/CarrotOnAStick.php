<?php

namespace QuartzTeam\QuartzBE\Items;

/*
 *
 *    ____                   _              ____  ______ 
 *   / __ \                 | |            |  _ \|  ____|
 *  | |  | |_   _  __ _ _ __| |_ __________| |_) | |__   
 *  | |  | | | | |/ _` | '__| __|_  /______|  _ <|  __|  
 *  | |__| | |_| | (_| | |  | |_ / /       | |_) | |____ 
 *   \___\_\\__,_|\__,_|_|   \__/___|      |____/|______|                                                     
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author QuartzTeam
 *
 *
*/

use pocketmine\item\Item;


class CarrotOnAStick extends Item{
	
	public function __construct(int $meta = 0){
		parent::__construct(self::CARROT_ON_A_STICK, $meta, "Carrot on a Stick");
	}
	//TODO
}