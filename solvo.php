<?php

use ElectronicItems as GlobalElectronicItems;

class ElectronicItems {
    private $items = array();

    public function __construct(array $items)  {
        $this->items = $items;
    // @return array
   
    }

     



        /**
        * Returns the items depending on the sorting type requested
        */
        public function getSortedItems($type)
         {  
             $sorted = array();

             foreach ($this->items as $item)
            {
               
                $sorted[($item->price * 100)] = $item;
            
            }
               
                return ksort($sorted, SORT_NUMERIC);
        // @return array


        }

        public function maxExtras(array $item){
            
            foreach ($this->items as $item){
                
            }

        }

        public function getItemsByType($type){
            $this->type = $type;
           if(in_array($type, ElectronicItem::$types))   {

                $callback = ElectronicItem::$types; 
                $items = array_filter($this->items, $callback);
                return $items;
            } 
            
            else
                                {
        
            return false;
            }

         }

}




class ElectronicItem {
    
 public  $price;
 public  $type;
 public $wired;
 const ELECTRONIC_ITEM_CONSOLE = 'console';
 const ELECTRONIC_ITEM_MICROWAVE = 'microwave';
 const ELECTRONIC_ITEM_TELEVISION = 'television';
 const ELECTRONIC_ITEM_CONTROLLER = 'controller';
 
 public static $types = array(self::ELECTRONIC_ITEM_CONSOLE,self::ELECTRONIC_ITEM_MICROWAVE, self::ELECTRONIC_ITEM_TELEVISION);

    function getPrice() {
            return $this->price;
    }
    function getType(){
        return $this->type;
    }
    function getWired(){
    return $this->wired;
    }

    function setType($type){
        $this->type = $type; 
    }

    function setPrice($price){
    $this->price = $price;
    }

    function setWired($wired){

    $this->type = $wired; 
                    
   }

  
}
$items=array("console","television","microwave","controller");
$myitem = new GlobalElectronicItems($items);
var_dump($myitem);
echo $myitem->getItemsByType("console");

