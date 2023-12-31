<?php
    class Usuario{
        //atributos

        //metodos
        public function AutenticarUsuario($correo,$password){
            include '../conexion.php';
            $conectar = new Conexion ();
            $consulta=$conectar->prepare("SELECT * FROM t_usuario
            WHERE CorreoElectronico=:correo AND Password:password");
            $consulta->bindParam(":correo",$correo,PDO::PARAM_STR);
            $consulta->bindParam(":password",$password,PDO::PARAM_STR);
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            return $consulta->fetchAll();
        }
        public function InsertarUsuario($nombreCompleto,$correo,$password,$tipo){
            include '../conexion.php';
            $conectar = new Conexion ();
            $consulta=$conectar->prepare("INSERT INTO t_usuario (NombreCompleto,CorreoElectronico,Password,Tipo,FechaRegistro) 
            VALUES (:nombreCompleto,:correo,:password,:tipo,NOW())");
            $consulta->bindParam(":nombreCompleto",$nombreCompleto,PDO::PARAM_STR);
            $consulta->bindParam(":correo",$correo,PDO::PARAM_STR);
            $consulta->bindParam(":password",$password,PDO::PARAM_STR);
            $consulta->bindParam(":tipo",$tipo,PDO::PARAM_INT);
            $consulta->execute();
            return true;
        }
        public function ModificarUsuario($id,$nombreCompleto,$correo){
            include '../conexion.php';
            $conectar = new Conexion ();
            $consulta=$conectar->prepare("UPDATE t_usuario SET NombreCompleto=:nombreCompleto,Correo=:correo WHERE Id=:id");
            $consulta->bindParam(":nombreCompleto",$nombreCompleto,PDO::PARAM_STR);
            $consulta->bindParam(":correo",$correo,PDO::PARAM_STR);
            $consulta->bindParam(":id",$id,PDO::PARAM_INT);
            $consulta->execute();
            return true;
        }
        public function EliminarUsuario($id){
            include '../conexion.php';
            $conectar = new Conexion ();
            $consulta=$conectar->prepare("DELETE FROM t_usuario WHERE Id=:id");
            $consulta->bindParam(":id",$id,PDO::PARAM_INT);
            $consulta->execute();
            return true;
        }
    }
?>