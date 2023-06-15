<?php
    class Usuario{

                    public $id_usuario;
                    public $nombres;
                    public $apellidos;
                    public $dirrecion_entrega;
                    public $ciudad_de_entrega;
                    public $correo_electronico;
                    public $numero_de_contacto;


                    function agregar(){
                                        $conet = new Conexion();
                                        $c = $conet->conectando();
                                        $query = "select * from usuario where id_usuario = '$this->id_usuario'";
                                        $ejecuta = mysqli_query($c, $query);
                                        if(mysqli_fetch_array($ejecuta)){
                                           echo "<script> alert('el usuario ya Existe en el Sistema')</script>";
                                        }else{
                                           $insertar = "insert into usuario value(
                                                                                    '$this->id_usuario',
                                                                                   
                                                                                    '$this->nombres',
                                                                                    '$this->apellidos',
                                                                                    '$this->direccion_entrega',
                                                                                    '$this->ciudad_de_entrega',
                                                                                    '$this->correo_electronico',
                                                                                    '$this->numero_de_contacto'
                                           )";
                                           echo $insertar;
                                           mysqli_query($c,$insertar);
                                           echo "<script> alert('el usuario fue Creado en el Sistema')</script>";
                                            
                                        }

                    }

                    function modificar(){

                    }   
                    
                    function eliminar(){

                    }

                    function limpiar(){

                    }
















    }
?>