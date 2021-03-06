<?php
class ElectronicItems {
    private $items = array();

    public function __construct(array $items)  {
        $this->items = $items;
    // @return array
   
    }

 /*@param string $type*/
       



        /**
        * Returns the items depending on the sorting type requested
        */
        public function getSortedItems($type)
         { 
             foreach ($this->items as $item)
            {
                $sorted[($item->price * 100)] = $item;
            
            }
                $sorted = array();
                return ksort($sorted, SORT_NUMERIC);
        // @return array

        }

        public function getItemsByType($type){
        
           if(in_array($type, ElectronicItem::$types))   {
         
                $callback = function getType($item) use ($type);
                $items = array_filter($this->items, $callback);
                return $item->type == $type;
            } 
            
            else
                                {
        
            return false;
            }

         }

}