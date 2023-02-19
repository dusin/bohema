<?php

$tel = "603 446 233";

list($x,$path,$subpath,$x)=explode("/",$_SERVER[REDIRECT_URL]);
switch($path) {

	case "eshop":
		#if($subpath) 
		include "cat.php"; break;
		break;
				
	case "o-nas":
		switch($subpath) {
			case "kontakt": include "contact.php"; break;
			case "caste-otazky": include "faq.php"; break;
			default: include "about.php"; break;
		}
		break;
		
	case "checkout":
		switch($subpath) {
			case "2": include "checkout2.php"; break;
			case "3": include "checkout3.php"; break;
			default: include "checkout1.php"; break;
		}
		break;
		
	case "palackeho": include "palackeho.php"; break;
	
	case "cart": include "cart.php"; break;
	
	case "deset-duvodu-proc-jet-s-nami": include "deset-duvodu.php"; break;
	case "vybiras-tabor-sama": include "vybiras-tabor-sama.php"; break;
	case "poprve-na-tabor": include "poprve-na-tabor.php"; break;
	
	case "prihlaska-2023": include "prihlaska.php"; break;
	case "prihlaska-test": include "prihlaska.php"; break;
	case "prihlaska-zajem": include "prihlaska-zajem.php"; break;
	
	case "taborove-fotky": include "fotky.php"; break;
	case "vseobecne-podminky": include "podminky.php"; break;
	
	case "caste-otazky": include "caste-otazky.php"; break;
	case "taborovi-vedouci": include "vedouci.php"; break;
	case "hledame-vedouci": include "hledame-vedouci.php"; break;
	
	case "novinky": include "novinky.php"; break;
	case "novinka": include "novinka.php"; break;
	
	case "test": include "test.php"; break;
	
	
	case "": include "hp.php"; break;
	default:
		http_response_code(404);	
}