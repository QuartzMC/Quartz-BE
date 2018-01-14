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

use pocketmine\item\{Item, Food};

class CookedMutton extends Food {
	
	public function __construct($meta = 0, $count = 1){
		parent::__construct(self::COOKED_MUTTON, $meta, $count, "Cooked Mutton");
	}
	
	public function getFoodRestore(): int{
		return 6;
	}
	
	public function getSaturationRestore(): float{
		return 9.6;
	}
}
