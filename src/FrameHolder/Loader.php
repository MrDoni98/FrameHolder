<?php

namespace FrameHolder;

use pocketmine\block\Lava;
use pocketmine\block\Water;
use pocketmine\event\block\BlockSpreadEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;

class Loader extends PluginBase implements Listener{
    
    public function onEnable(){
        $this->saveDefaultConfig();
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info(TextFormat::GREEN."FrameHolder включён.");
    }
    
    public function onDisable(){
        $this->getLogger()->info(TextFormat::RED."FrameHolder выключен.");
    }
    
    public function onBlockSpread(BlockSpreadEvent $event){
        $block = $event->getBlock();
        if($block instanceof Lava && $this->getConfig()->get("spread-lava") === false){
            $event->setCancelled();
            return true;
        }
        if($block instanceof Water && $this->getConfig()->get("spread-water") === false){
            $event->setCancelled();
            return true;
        }
    }
}
