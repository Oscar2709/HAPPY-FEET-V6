<?php
    class producto{

                    public $categoria;
                    public $color_producto;
                    public $descripcion_producto;
                    public $id_imagen;
                    public $id_marca;
                    public $id_producto;
                    public $nombre_producto;
                    public $precio_producto;
                    public $stock_producto;
                    public $talla_producto;


                    function agregar(){
                                        $conet = new Conexion();
                                        $c = $conet->conectando();
                                        $query = "select * from producto where id_producto = '$this->id_producto'";
                                        $ejecuta = mysqli_query($c, $query);
                                        if(mysqli_fetch_array($ejecuta)){
                                           echo "<script> alert('el usuario ya Existe en el Sistema')</script>";
                                        }else{
                                           $insertar = "insert into producto value(
                                                                                    '$this->Categoria',
                                                                                   
                                                                                    '$this->color_producto',
                                                                                    '$this->descripcion_producto',
                                                                                    '$this->id_imagen',
                                                                                    '$this->id_marca',
                                                                                    '$this->id_producto',
                                                                                    '$this->nombre_producto',
                                                                                    '$this->precio_producto',
                                                                                    '$this->stock_producto',
                                                                                    '$this->talla_producto'
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