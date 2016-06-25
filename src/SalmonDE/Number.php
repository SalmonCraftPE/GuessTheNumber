<?php
namespace SalmonDE;

use pocketmine\command\Command;
use pocketmine\command\CommandExecutor;
use pocketmine\command\CommandSender;
use pocketmine\command\PluginCommand;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\Player;
use pocketmine\plugin\Plugin;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as TF;
use pocketmine\nbt\tag\StringTag;
use pocketmine\nbt\tag\IntTag;

class Number extends PluginBase implements Listener{

	public function onEnable(){
	    @mkdir($this->getDataFolder());
	    $this->saveResource("config.yml");
	    $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info(TF::GREEN."Enabled!");
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
		$sender->sendMessage("Not finished");
	    $number = mt_rand(1,100);//To-Do: Make it configurable
		$sender->sendMessage((string) $number);
		return true;
	}
	
	public function onChat(PlayerChatEvent $event){
	}
	
	public function givePrize(){

	}
}