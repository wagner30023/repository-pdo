<?php

include '/var/www/app_pdo_codedu/lib/PDOConnectionFactory.php';


class AmigoDAO extends PDOConnectionFactory {

    public static function Insert(Amigo $amigo) {
        try {
            $pdo = parent::getConnection();
            $sql = "INSERT INTO amigos(idamigos,nome,telefone_fixo,telefone_celular,email,endereco) VALUES(?,?,?,?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(1, $amigo->getIdamigos(), PDO::PARAM_INT);
            $stmt->bindParam(2, $amigo->getNome(), PDO::PARAM_STR);
            $stmt->bindParam(3, $amigo->getEmail(), PDO::PARAM_STR);
            $stmt->bindParam(4, $amigo->getTelefone_fixo(), PDO::PARAM_STR);
            $stmt->bindParam(5, $amigo->getTelefone_celular(), PDO::PARAM_STR);
            $stmt->bindParam(6, $amigo->getEndereco(), PDO::PARAM_STR);

            return $stmt->execute();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString() . "\n\n" . $exc->getCode();
        }
    }

    public static function FetchAll($where = null) {
        try {
            $pdo = parent::getConnection();
            $sql = "SELECT * FROM amigos";
            if ($where == null) {
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                return $stmt->fetchAll();
                $pdo = null;
            } else {
                $sql = "SELECT  nome,telefone_fixo,telefone_celular,email,endereco FROM `Agenda`.`amigos` WHERE nome LIKE  ?";
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(1, $where . "%");
                $stmt->execute();
                return $stmt->fetchAll();
            }
        } catch (Exception $ex) {
            $ex->getCode() . "" . $ex->traceAsString();
        }
    }
}
