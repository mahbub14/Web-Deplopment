<?php
class Planet{
    static function echoName(){
        //echo self::getName();
        echo static::getName();
    }
    static function getName(){
        return"Planet\n";
    }

}
class Earth extends Planet{
    // static function echoName(){
    //     echo"Earth\n";
    // }
    static function getName(){
        return "Earth\n";
    }
}
Planet::echoName();
Earth::echoName();

?>