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

use pocketmine\item\{Item, ItemFactory};

class AddedItems{
	
	public static function init(){
		//Carrot on a stick
		ItemFactory::registerItem(new CarrotOnAStick(), true);
		Item::addCreativeItem(Item::get(398, 0));
		//Poisonous Potato
		ItemFactory::registerItem(new PoisonousPotato(), true);
		Item::addCreativeItem(Item::get(394, 0));
		//Raw Mutton
		ItemFactory::registerItem(new RawMutton(), true);
		Item::addCreativeItem(Item::get(423, 0));
		//Cooked Mutton
		ItemFactory::registerItem(new CookedMutton(), true);
	   	Item::addCreativeItem(Item::get(424, 0));
		//More Soon !
	}
}
