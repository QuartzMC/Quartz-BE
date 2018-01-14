<?php

namespace QuartzTeam\QuartzBE;

//PocketMine
use pocketmine\item\{Item, ItemFactory};
use pocketmine\block\{Block, BlockFactory};
use pocketmine\utils\{TextFormat as TF, Config};
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\event\Listener;
//QUartzBE
use QuartzTeam\QuartzBE\Items\AddedItems;

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

class Main extends PluginBase implements Listener {

	public function onEnable() {	
		$this->saveDefaultConfig();
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getServer()->getLogger()->info("
§e#################################################################
§e#§c    ____                   _              ____  ______ 
§e#§c   / __ \                 | |            |  _ \|  ____|
§e#§c  | |  | |_   _  __ _ _ __| |_ ____ _____| |_) | |__   
§e#§c  | |  | | | | |/ _` | '__| __|_  /|_____|  _ <|  __|  
§e#§c  | |__| | |_| | (_| | |  | |_ / /       | |_) | |____ 
§e#§c   \___\_\\__, _|\__,_|_|   \__/___|      |____/|______|                                                                                                
§e#
§e#             §bwww.github.com/QuartzMC/Quartz-BE
§e#					   
§e#        §6-- Loaded: Properties and Configuration. --
§e#
§e#                      §cVersion:§d 1.0
§e#
§e#################################################################");
	}

	public function onLoad() {
		if(Server::getInstance()->getName() !== "PocketMine-MP"){
			$this->getLogger()->critical("This plugin is for PMMP only.");
		}
		$this->loadProperties();
  	}
	
	private function loadProperties(){
		AddedItems::init();
		//AddedBlocks::init();
	}
	
	public function onDisable() {
		$this->getServer()->getLogger()->info("
§e#################################################################
§e#§c    ____                   _              ____  ______ 
§e#§c   / __ \                 | |            |  _ \|  ____|
§e#§c  | |  | |_   _  __ _ _ __| |_ ____ _____| |_) | |__   
§e#§c  | |  | | | | |/ _` | '__| __|_  /|_____|  _ <|  __|  
§e#§c  | |__| | |_| | (_| | |  | |_ / /       | |_) | |____ 
§e#§c   \___\_\\__, _|\__,_|_|   \__/___|      |____/|______|                                                                                                
§e#
§e#             §bwww.github.com/QuartzMC/Quartz-BE
§e#					   
§e#       §6-- Unloaded: Properties and Configuration. --
§e#
§e#                      §cVersion:§d 1.0
§e#
§e#################################################################");
	}
}
