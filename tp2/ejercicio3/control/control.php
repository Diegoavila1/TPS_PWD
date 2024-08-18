<?php


class verificacion{
    

    /**-Los datos del formulario son enviados a un script verificaPass.php
     en el que contienen un arreglo asociativo por cada usuario del sistema. 
 
     -El arreglo asociativo tiene como claves: “usuario” y “clave”. El script debe visualizar un mensaje 
     de bienvenida si los datos ingresados coinciden con alguno de los almacenados en el arreglo 
     y en caso contrario un mensaje de error.*/

   public function check($datos,$usuarios){
    print_r($datos);
    $nombreUsuario = $datos["name"];
    $contraseniaUsuario = $datos["password"];
        
       // Verificar si el usuario y la contraseña son correctos
       $i = 0;
       $userEncontrado = null;
       while ($i < count($usuarios) && $userEncontrado == null) {
           if ($usuarios[$i]['usuario'] == $nombreUsuario && $usuarios[$i]['clave'] == $contraseniaUsuario) {
               $userEncontrado = $usuarios[$i]['usuario'];
           }else{
               $i++;
           }
       }
       return $userEncontrado;
    }



    
    public function comprobarUsuario($datos,$usuarios){

        $mensaje = "mensaje de error";

        if($this->check($datos,$usuarios) != null){
        $mensaje = "hola {$this->check($datos,$usuarios)}, Como estas master(●'◡'●)?.";
        }
        return $mensaje;
    }
}