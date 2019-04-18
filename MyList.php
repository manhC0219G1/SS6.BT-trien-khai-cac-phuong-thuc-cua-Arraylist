<?php
class MyList
{
    public $size = 0;
    const DEFAULT_CAPACITY = 10;
    public $elemente = array();
    public function __construct($array)
    {
        $this->elemente = [];
        $this->size = count($array);
    }
    public function add($indexAdd, $element)
    {
        for ($index = count($this->elemente); $index > $indexAdd; $index--) {
            $this->elemente[$index] = $this->elemente[$index - 1];
        }
        $this->elemente[$indexAdd] = $element;
    }
    public function remove($index)
    {
        unset($this->elemente[$index]);
        $array = array_values($this->elemente);
        $this->elemente = $array;
        return $this->elemente;
    }
    public function getSize()
    {
        return $this->size;
    }

    public function contains($item)
    {
        function check($arr, $item)
        {
            foreach ($arr as $key => $value) {
                if ($value === $item) {
                    return true;
                } else {
                    return false;
                }
            }
        }
        if(check($this->elemente,$item)){
            echo $item." in array";
        }else{
            echo $item."not in array";
        }
    }
    public function get($index){
        return $this->elemente[$index];
    }
    public function clear(){
        $this->elemente= [];
    }
}
