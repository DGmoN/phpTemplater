<?php
require_once("phpModules/class.module.php");

class phpTemplaterModule extends Module{
	
	private $PAGE_MANAGER;
	private $XML_SRC;
	private $ASSET_ROOT;
	
	function __construct($json){
		$this->MODULEName = "phpTemplater";
		$this->MODULESrc = "phpTemplater/";
		$this->MODULEScripts = $json->MODULEScripts;
		$this->XML_SRC = $json->XMLSrc;
		$this->ASSET_ROOT = $json->ASSET_ROOT;
	}
	
	public function Load(){
<<<<<<< HEAD
		if($this->LOADED) return 1;
=======
>>>>>>> 2b411c602f2720fa7a86d88c2af9212d38ed2033
		parent::Load();
		$MEM = memory_get_usage();
		$this->PAGE_MANAGER = new Pagemanager(simplexml_load_file($this->XML_SRC), $this->ASSET_ROOT);
		__APPEND_LOG("XML Memory allocation:".(memory_get_usage()-$MEM));
<<<<<<< HEAD
		$this->LOADED = true;
=======
>>>>>>> 2b411c602f2720fa7a86d88c2af9212d38ed2033
	}
	
	// ARGS
	/*		page
				LABEL	-	The label of the page
	*/
	
	
	public function create($create, $args=array()){
		switch($create){
			case "page":
				return $this->PAGE_MANAGER->get_page($args['LABEL']);
		}
	}
<<<<<<< HEAD
	
	function __destruct(){
		$hold = memory_get_usage();
		unset($this->PAGE_MANAGER);
		__APPEND_LOG($this->MODULEName." destructed, freed ".((memory_get_usage()-$hold)/1024)."KB");
	}
=======
>>>>>>> 2b411c602f2720fa7a86d88c2af9212d38ed2033
}


?>