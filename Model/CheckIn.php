<?php

class CheckIn
{
    private  $id;
    private $datej;
    private $codeemp;
    public function  __construct($id,$datej,$codeemp)
    {
        $this->id=$id;
        $this->datej=$datej;

        $this->codeemp=$codeemp;

    }

    public function __get($att){
        return( $this->{$att});
    }

    public function __set($att,$v){
        $this->{$att}=$v;
    }
    public function  __toString()
    {
        // TODO: Implement __toString() method.
        return 'CheckIn [ ID = '.$this->id.'  ,DateJ='.$this->datej.'  , Codeemp='.$this->codeemp.'  ]';
    }

}