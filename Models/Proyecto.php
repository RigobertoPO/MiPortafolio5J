<?php
    class Proyecto{
        public function ObtenerProyectos($idUsuario){
            include 'conexion.php';
            $conectar=new Conexion();
            $consulta="SELECT * FROM Proyectos WHERE IdUsuario=:idUsuario";
            $query=$conectar->prepare($consulta); //preparas la consulta
            $query->bindParam(":idUsuario",$idUsuario,PDO::PARAM_STR);
            $query->execute(); //ejecutas
            $query->setFetchMode(PDO::FETCH_ASSOC);
            return $query->fetchAll();
        }
        public function EliminarProyecto($id){
            include 'conexion.php';
            $conectar=new Conexion();
            $consulta=$conectar->prepare("DELETE FROM Proyectos WHERE Id=:id");
            $consulta->bindParam(":id",$id,PDO::PARAM_STR);
            $consulta->execute();
            return true;
        }
        public function InsertarProyecto($nombre,$descripcion,$idTipoProyecto,$costo){
            try {
                include '../conexion.php';
                $conectar=new Conexion();
                $consulta=$conectar->prepare("INSERT INTO proyectos(Nombre,Descripcion, IdTipoProyecto,Costo)
                    VALUES(:nombre, :descripcion, :idTipoProyecto, :costo)");
                $consulta ->bindParam(":nombre",$nombre,PDO::PARAM_STR);   
                $consulta ->bindParam(":descripcion",$descripcion,PDO::PARAM_STR);  
                $consulta ->bindParam(":idTipoProyecto",$idTipoProyecto,PDO::PARAM_STR);  
                $consulta ->bindParam(":costo",$costo,PDO::PARAM_STR);  
                $consulta->execute();
                return true; 
            } catch (Exception $e) {
                return false; 
            }
            
        }
        public function ModificarProyecto($id,$nombre,$descripcion,$idTipoProyecto,$costo){
            include 'conexion.php';
            $conectar=new Conexion();
            $consulta=$conectar->prepare("UPDATE productos SET Nombre=:nombre,Descripcion=:descripcion,IdTipoProyecto=:idTipoProyecto,
                                         Costo=:costo WHERE Id=:id");
                    $consulta ->bindParam(":id",$id,PDO::PARAM_INT);                       
                    $consulta ->bindParam(":nombre",$nombre,PDO::PARAM_STR);   
                    $consulta ->bindParam(":descripcion",$descripcion,PDO::PARAM_STR);  
                    $consulta ->bindParam(":idTipoProyecto",$idTipoProyecto,PDO::PARAM_STR);  
                    $consulta ->bindParam(":costo",$costo,PDO::PARAM_STR);                                            
            $consulta->execute();
            return true;
        }
        public function ObtenerProyectoId($id){
            include 'conexion.php';
            $conectar=new Conexion();
            $consulta=$conectar->prepare("SELECT * FROM Proyectos WHERE Id=:id");
            $consulta->bindParam(":id",$id,PDO::PARAM_STR);
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            $conectar = null;
            return $consulta->fetchAll();
        }  
        public function ModificarImagen($id,$nombreImagen){
            include 'conexion.php';
            $conectar=new Conexion();
            $consulta=$conectar->prepare("UPDATE proyectos SET Imagen=:nombreImagen
                                         WHERE Id=:id");
                    $consulta ->bindParam(":id",$id,PDO::PARAM_INT);                       
                    $consulta ->bindParam(":nombreImagen",$nombreImagen,PDO::PARAM_STR);                                          
            $consulta->execute();
            return true;
        } 
    }
?>