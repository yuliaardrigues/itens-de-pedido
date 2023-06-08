<?php


class Conexao {
    private static $instance;

    public static function getConn(){

        if (!isset(self::$instance)){
            self::$instance = new \PDO();
        }
        return self::$instance;
    }
}