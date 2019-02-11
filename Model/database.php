<?php
class Database
{
    //Esta función permite la conexión al SGBD: MariaDB.
    //host = tipo de conexión local - 'localhost'.
    //dbname = nombre de la base de datos.
    //charset = utf8, indica la codificación de caracteres utilizada.
    //root = nombre de usuario (solo para fines académicos=root).
    //'' = contraseña del root (solo para fines académicos).

    public static function Conectar()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=caprepol;charset=utf8', 'root', '');
        //Filtrando posibles errores de conexión.
        $pdo->setAttribute(pdo::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);
        return $pdo;
    }
}
