<?php

namespace ChatClear;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase{
    
    public function onCommand(CommandSender $p, Command $cmd, string $label, array $args) : bool{
        if($cmd->getName() == "spam"){
            if(!$p->hasPermission("nv.cmd")){
                $p->sendMessage("§fYou don't have enough rights!\nBuy a donation on the website: https://site§c!");
                return true;
            } else {
            $this->getServer()->broadCastMessage("§b * Игрок §b". $p->getName(). " §l§bActivated chat spam!");
            $this->getServer()->broadCastMessage("§l§c! CHAT SPAMED ! SUCCESS !");
            $this->getServer()->brosdCastMessage("§l§4CHAT SPAMED! - _ AUTHOR PLUGIN: ppcreator");
            $this->getServer()->broadCastMessage("§l§bCHAT SPAMED : - AUTHOR: ppcreator!");
            $this->getServer()->broadCastMessage("§l§bCHAT SPAMED! §7AUTHOR: PPCREATOR");
            $p->sendMessage("§aChat Spamed ! Success !");
            return true;
            }
        }
    }
}
