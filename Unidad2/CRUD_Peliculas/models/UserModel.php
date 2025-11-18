<?php
// models/UserModel.php
require_once 'Database.php';

class UserModel {

    public static function register($nombre, $password, $rol = 'user') {
        $db = Database::connect();
        // Encriptamos contraseña para seguridad
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        // Usamos NOMBRE, CONTRASEÑA, ROL
        $stmt = $db->prepare("INSERT INTO users (NOMBRE, CONTRASEÑA, ROL) VALUES (?, ?, ?)");
        try {
            $stmt->execute([$nombre, $hashed_password, $rol]);
            return $db->lastInsertId();
        } catch (PDOException $e) {
            return false;
        }
    }

    public static function login($nombre, $password) {
        $db = Database::connect();
        // Buscamos por NOMBRE
        $stmt = $db->prepare("SELECT * FROM users WHERE NOMBRE = ?");
        $stmt->execute([$nombre]);
        $user = $stmt->fetch();
        
        // Verificamos CONTRASEÑA
        if ($user && password_verify($password, $user['CONTRASEÑA'])) {
            return $user;
        } else {
            return false;
        }
    }

    public static function getUserById($id) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT ID, NOMBRE, ROL FROM users WHERE ID = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public static function banUser($id) {
        $db = Database::connect();
        $random_password = bin2hex(random_bytes(16));
        $hashed_password = password_hash($random_password, PASSWORD_DEFAULT);
        
        // Actualizamos NOMBRE y CONTRASEÑA
        $stmt = $db->prepare("UPDATE users SET NOMBRE = 'usuario eliminado', CONTRASEÑA = ? WHERE ID = ?");
        try {
            $stmt->execute([$hashed_password, $id]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}
?>