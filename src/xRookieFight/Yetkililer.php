<?php

namespace xRookieFight;
use pocketmine\command\{Command, CommandSender, PluginCommand};
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;

class Yetkililer extends PluginBase implements Listener {
  public function onEnable(){
  $this->getLogger()->info("
		§bPlugin Aktif - By xRookieFight");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
   }
public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool {
		$player = $sender->getPlayer();
		switch($command->getName()){
			case "yetkililer":
			$this->menuForm($player);
		}
		return true;
	}
  public function menuForm($player){
		if($player instanceof Player){
			$api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
			$form = $api->createSimpleForm(function (Player $sender, array $data){
				if(isset($data[0])){
					switch($data[0]){
					}
					
				}
			});
			$form->setTitle("§b» §3Yetkililer");
			$form->setContent("§7» §8[§cKurucu§8] §3xRookieFight §7( §3Mert Yıldırım §7)
      §7» §8[§bYönetici§8] §3Alınacak §7( §3Alınacak §7)
      §7» §8[§bYönetici§8] §3Alınacak §7( §3Alınacak §7)
      §7» §8[§dYetkili§8] §3Alınacak §7( §3Alınacak §7)
      §7» §8[§dYetkili§8] §3Alınacak §7( §3Alınacak §7)
      §7» §8[§dYetkili§8] §3Alınacak §7( §3Alınacak §7)
      §7» §8[§dYetkili§8] §3Alınacak §7( §3Alınacak §7)
      §7» §8[§9Stajyer§8] §3Alınacak §7( §3Alınacak §7)
      §7» §8[§9Stajyer§8] §3Alınacak §7( §3Alınacak §7)
      §7» §aTüm yetkililerimize görevlerini yaptığı için çok teşekkür ederiz.");
      $form->addButton("§c» Çıkış");
			$form->sendToPlayer($player);			
		}else{
			$sender->sendMessage("§cBu komutu kullanmak için oyunda olmalısınız.");
			return true;
		}
	}
}
  

}
  