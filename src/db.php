<?php

require_once './config.php';

class DB {
    protected static $instance;

    protected function __construct() {}

    public static function getInstance() {
        if(empty(self::$instance)) {
            $db_info = array(
                "db_host" => Config::$DB_HOST,
                "db_port" => Config::$DB_PORT,
                "db_user" => Config::$DB_USER,
                "db_pass" => Config::$DB_PASSWORD,
                "db_name" => Config::$DB_NAME
            );

            try {
                self::$instance = new PDO("pgsql:host={$db_info['db_host']};port={$db_info['db_port']};dbname={$db_info['db_name']}", $db_info['db_user'], $db_info['db_pass']);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);  
                self::$instance->query('SET NAMES utf8');
                self::$instance->query('SET CHARACTER SET utf8');

            } catch(PDOException $error) {
                echo $error->getMessage();
            }

        }

        return self::$instance;
    }
}