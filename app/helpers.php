<?php
    function presentPrice(){
        //return 'Ksh. '.sprintf('%0.2f', $this->price);
        $formatted = "Ksh. " . number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "", $this->price)), 2);
        return $this->price < 0 ? "({$formatted})" : "{$formatted}";
    }
