<?php

namespace ShadowMikado\ChooseSize\Commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;

class ChooseSize extends Command
{

    public function __construct()
    {
        parent::__construct("size", "", "/size <int>");
        $this->setPermission("choosesize.cmd");
    }
    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        if ($sender instanceof Player) {
            if ($sender->hasPermission("choosesize.cmd"))
            {
                if (isset($args[0])) {
                    switch ($args[0]) {
                        case "0,5":
                            $sender->sendMessage("§aVous avez bien changé de taille, vous faites §b1 §abloc de haut");
                            $sender->setScale("0.5");
                            break;

                        case "1":
                            $sender->sendMessage("§aVous avez bien changé de taille, vous faites §b2 §abloc de haut");
                            $sender->setScale("1");
                            break;

                        case "2":
                            $sender->sendMessage("§aVous avez bien changé de taille, vous faites §b4 §abloc de haut");
                            $sender->setScale("2");
                            break;

                        case "3":
                            $sender->sendMessage("§aVous avez bien changé de taille, vous faites §b6 §abloc de haut");
                            $sender->setScale("3");
                            break;

                        case "4":
                            $sender->sendMessage("§aVous avez bien changé de taille, vous faites §b8 §abloc de haut");
                            $sender->setScale("4");
                            break;

                        case "5":
                            $sender->sendMessage("§aVous avez bien changé de taille, vous faites §b10 §abloc de haut");
                            $sender->setScale("5");
                            break;

                        case "6":
                            $sender->sendMessage("§aVous avez bien changé de taille, vous faites §b12 §abloc de haut");
                            $sender->setScale("6");
                            break;

                        case "7":
                            $sender->sendMessage("§aVous avez bien changé de taille, vous faites §b14 §abloc de haut");
                            $sender->setScale("7");
                            break;

                        case "8":
                            $sender->sendMessage("§aVous avez bien changé de taille, vous faites §b16 §abloc de haut");
                            $sender->setScale("8");
                            break;

                        case "9":
                            $sender->sendMessage("§aVous avez bien changé de taille, vous faites §b18 §abloc de haut");
                            $sender->setScale("9");
                            break;

                        case "10":
                            $sender->sendMessage("§aVous avez bien changé de taille, vous faites §b20 §abloc de haut");
                            $sender->setScale("10");
                            break;


                        case "reset":
                            $sender->sendMessage("§aVous avez bien réinitialisé votre taille");
                            $sender->setScale("1");
                            break;


                    }

                } else {
                    $sender->sendMessage("§cVous ne pouvez pas faire cela");
                }

            }
        }
    }
}