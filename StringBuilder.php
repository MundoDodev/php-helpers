<?php

namespace Analystics\Libs;
/* Evita Acessos Diretos Ao Arquivo */

class StringBuilder{
    private $array=[];

    public function append($paramets){
        $this->array[]=$paramets;
    }

    public function clear(){
        $this->array=[];
    }

    public function toString()
    {
        $ArrayToString="";
        foreach($this->array as $str){
            $ArrayToString.=$str;
        }

        return $ArrayToString;        
    }



    
}




?>