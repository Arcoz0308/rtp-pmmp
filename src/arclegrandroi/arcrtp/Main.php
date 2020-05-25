<?php

namespace arclegrandroi\arcrtp;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\level\Position;
use pocketmine\Server;
use pocketmine\utils\Config;

class Main extends PluginBase {
 
   public function onLoad() {
       $this->saveDefaultConfig();
   }
   
    public function onEnable() {
          @mkdir($this->getDataFolder());

        $this->getResource("config.yml");
    }
    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
         if($command->getName() == "rtp") {
            if($sender instanceof Player) {
                $world2 = $this->getConfig()->get("world1");
                $world1 = $this->getConfig()->get("world2");
                if($sender->getLevel()->getFolderName() == $world2||$sender->getLevel()->getFolderName() == $world1) {
                    $xmin = $this->getConfig()->get("xmin");
                    $xmax = $this->getConfig()->get("xmax");
                    $ymin = $this->getConfig()->get("ymin");
                    $ymax = $this->getConfig()->get("ymax");
                    $zmin = $this->getConfig()->get("zmin");
                    $zmax = $this->getConfig()->get("zmax");
                    $x = mt_rand($xmin, $xmax);
                    $y = mt_rand($ymin, $ymax);
                    $z = mt_rand($zmin, $zmax);
                    $sender->teleport(new position($x, $y ,$z));
                    $message = $this->getConfig()->get("teleportation");
                    $msg = str_replace(["{x}", "{y}", "{z}"], [$x, $y, $z], $message );  
                    $sender->sendMessage($msg);
                } else {
                    $sender->sendMessage($this->getConfig()->get("bad_world"));
                }
             } else {
             $sender->sendMessage($this->getConfig()->get("in-game"));
             }
        }
         return true;
    }
}
