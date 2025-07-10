<?php
class Human {
    public $name;
    public $surname;
   public $kostya;
   public $yanovskiy;

    public function __construct($name, $surname) {
        $this->name = $name;
        $this->surname = $surname;
    }
     public function getFullName() {
        return $this->name . '+' . $this->surname;
}
public function __construct2($kostya, $yanovskiy) {
        $this->kostya = $kostya;
        $this->yanovskiy = $yanovskiy;
}
 public function getInitials() {
        return strtoupper($this->name[0]) . '.' . strtoupper($this->surname[0]) . '.';
    }
    function noSpace($space) {
    return strlen(str_replace( '', ' ',$space));
}
function backWard($rev) {
    return strrev($rev);
}
function passW($long = 8) {
    $symbols = 'dmkfdjkNJDNSJjnJjbjJ34789JBHIPLFdskm1171673kksmni';
    $password = '';
    for ($i = 0; $i < $long; $i++) {
        $random = rand( 0,strlen($symbols)-1);
        $password .= $symbols[$random];
    }
    return $password;
}
}

?>