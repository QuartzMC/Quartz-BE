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

use pocketmine\item\{Food,Item};
use pocketmine\entity\Effect;

class PoisonousPotato extends Food {
	
	public function __construct(int $meta = 0){
		parent::__construct(self::POISONOUS_POTATO, $meta, "Poisonous Potato");
	}

	public function getFoodRestore() : int{
		return 2;
	}

	public function getSaturationRestore() : float{
		return 1.2;
	}
	
	public function getAdditionalEffects(): array{
		return [
			Effect::getEffect(Effect::POISON)->setDuration(100)->setAmplifier(0),
		];
	}
}