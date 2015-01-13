<?php

class PDOConnectionFactory {
    public static function getConnection() {
        try {
            
            $config = include '/var/www/app_pdo_codedu/config/config.php';

            if (!isset($config['db']['host'])) {
                throw new InvalidArgumentException("Conexao nao existe");
            }

            $host = isset($config['db']['host']) ? ($config['db']['host']) : null;
            $dbname = isset($config['db']['dbname']) ? ($config['db']['dbname']) : null;
            $user = isset($config['db']['user']) ? ($config['db']['user']) : null;
            $password = isset($config['db']['password']) ? ($config['db']['password']) : null;


            return $pdo = new PDO("mysql:host=" . $host . ";dbname=" . $dbname, $user, $password);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
}
