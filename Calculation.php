<?php

class Calculation {

    public $result = 0;
    
    public function addValue($val)
    {
        return $this->result += $val;
    }
    
    public function substractValue($val)
    {
        return $this->result -= $val;
    }
    
    public function devideValue($val)
    {
        return $this->result = $this->result / $val;
    }
    
    public function multipleValue($val)
    {
        return $this->result = $this->result * $val;
    }
    
    public function roundValue($val)
    {
        return $this->result = round($val);
    }

}
