<?php

//para imprimir errores en ejecucion;

ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);
require_once ("Conectar.php");
class Camper extends Conectar{

    public function get_empleados(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm=$conectar->prepare("SELECT * FROM empleados");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exeption $e) {
            return $e->getMessage();
        }
        
    }

    public function get_empresa(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm=$conectar->prepare("SELECT * FROM empresa");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exeption $e) {
            return $e->getMessage();
        }
        
    }


    public function get_Alquiler(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm=$conectar->prepare("SELECT * FROM Alquiler");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exeption $e) {
            return $e->getMessage();
        }
        
    }


    public function get_Productos(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm=$conectar->prepare("SELECT * FROM productos");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exeption $e) {
            return $e->getMessage();
        }
        
    }


    
    public function get_Cotizacion(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm=$conectar->prepare("SELECT * FROM alquiler");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exeption $e) {
            return $e->getMessage();
        }
        
    }






    public function get_camper_id($id){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm=$conectar->prepare("SELECT * FROM campers WHERE id=?");
            $stm->bindValue(1,$id);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exeption $e) {
            return $e->getMessage();
        }
    }




    public function get_Factura(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm=$conectar->prepare("SELECT * FROM alquiler");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exeption $e) {
            return $e->getMessage();
        }
        
    }










    public function insert_cotizacion($id_Alquiler,$empleado,$cliente,$producto,$cantidad,$obra,$precio_dia, $fecha_salida, $fecha_entrega, $total ,$detalle,){
        $conectar=parent::Conexion();
        parent::set_name();
        $stm="INSERT INTO alquiler(id_Alquiler,empleado,cliente,producto,cantidad,obra,precio_dia,fecha_salida,fecha_entrega,total,detalle) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
        $stm=$conectar->prepare($stm);
        $stm->bindValue(1,$id_Alquiler);
        $stm->bindValue(2,$empleado);
        $stm->bindValue(3,$cliente);
        $stm->bindValue(4,$producto);
        $stm->bindValue(5,$cantidad);
        $stm->bindValue(6,$obra);
        $stm->bindValue(7,$precio_dia);
        $stm->bindValue(8,$fecha_salida);
        $stm->bindValue(9,$fecha_entrega);
        $stm->bindValue(10,$total);
        $stm->bindValue(11,$detalle);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }

    public function update_camper($id,$imagen,$nombre,$edad, $promedio, $nivelCAmpus, $nivelIngles, $especialidad, $direccion, $celular, $ingles, $Ser,$Review, $Skills, $Asitencia){
        $conectar=parent::conexion();
        parent::set_name();
        $sql="UPDATE campers set imagen=? , nombre=? ,edad=?, promedio=?, nivelCAmpus=?, nivelIngles=?, especialidad=? ,direccion=? , celular=?, ingles=?, Ser=?,  Review=?, Skills=?,  Asitencia=?  WHERE id=?";
        $sql=$conectar->prepare($sql);
        
        $sql->bindValue(1,$imagen);
        $sql->bindValue(2,$nombre);
        $sql->bindValue(3,$edad);
        $sql->bindValue(4,$promedio);
        $sql->bindValue(5,$nivelCAmpus);
        $sql->bindValue(6,$nivelIngles);
        $sql->bindValue(7,$especialidad);
        $sql->bindValue(8,$direccion);
        $sql->bindValue(9,$celular);
        $sql->bindValue(10,$ingles);
        $sql->bindValue(11,$Ser);
        $sql->bindValue(12,$Review);
        $sql->bindValue(13,$Skills);
        $sql->bindValue(14,$Asitencia);
        $sql->bindValue(15,$id);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);


    }
    
    public function delete_camper($id){
        $conectar=parent::conexion();
        parent::set_name();
        $sql="DELETE FROM campers WHERE id=?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$id);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);

    }

}

?>