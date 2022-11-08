<?php

class Get {
    public function get(string $index){
        if (empty($index)) return '';

        return isset($_GET[$index]) ? $_GET[$index] : '';
    }
}