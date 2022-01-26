<?php

namespace xtakumatutix\KeepInventory;

use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\Listener;
use pocketmine\utils\Server;

class Main extends PluginBase implements Listener
{
    public function onEnable(): void
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onDeath(PlayerDeathEvent $event)
    {
        $event->setKeepInventory(true);
    }
}
