<?php

namespace FrameHolder;

use pocketmine\block\Lava;
use pocketmine\block\Water;
use pocketmine\event\block\BlockSpreadEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class Loader extends PluginBase implements Listener{
    
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info(TextFormat::GREEN."FrameHolder enabled.");
    }
    
    public function onDisable(){
        $this->getLogger()->info(TextFormat::RED."FrameHolder disabled.");
    }
    
    public function onBlockSpread(BlockSpreadEvent $event){
        $block = $event->getBlock();
        if($block instanceof Lava){
        
        }
        elseif($block instanceof Water){
        
        }
    }
}