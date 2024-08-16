<?php


class verificacion{
    

    /**-Los datos del formulario son enviados a un script verificaPass.php
     en el que contienen un arreglo asociativo por cada usuario del sistema. 
 
     -El arreglo asociativo tiene como claves: “usuario” y “clave”. El script debe visualizar un mensaje 
     de bienvenida si los datos ingresados coinciden con alguno de los almacenados en el arreglo 
     y en caso contrario un mensaje de error.*/

   public function check($datos){
    
    $nombreUsuario = $datos["nombre"];
    $contraseniaUsuario = $datos["contraseña"];

    $usuarios = [
        ["usuario" => "juan", "clave" => "1234j"],
        ["usuario" => "user1", "clave" => "password1"],
        ["usuario" => "user2", "clave" => "password2"]
    ];

        
       // Verificar si el usuario y la contraseña son correctos
       $encontrado = false;
       $i = 0;
       while ( $i < count($usuarios) && !$encontrado ) {
           if ($usuarios[$i] === $nombreUsuario && $usuarios[$i] === $contraseniaUsuario) {
               $encontrado = true;
           }else{
               $i++;
           }
       }
       return $encontrado;
    }



    
    public function comprobarUsuario($datos){
        if($this->check($datos)){
            echo "Ingreso a su usuario";
        }else{
            echo "mensaje de error";
        }
    }


}