<?php


namespace ShadowMikado\ChooseSize;


use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use ShadowMikado\ChooseSize\Commands\ChooseSize;


class Main extends PluginBase implements Listener
{
    public function onEnable(): void
    {
        $this->getServer()->getLogger()->info("ChooseSize lancé avec succès");
        //$this->getServer()->getCommandMap()->register("", new ChooseSize());
        $this->getServer()->getCommandMap()->registerAll("", [new ChooseSize()]);
    }


    public function onDisable(): void
    {
        $this->getServer()->getLogger()->info("ChooseSize arrété avec succès");
    }
}