<?php

    require('torneoAccesoDatos.php');

    class arrayDatos{
        function __construct(){}

        function init($id, $nombre, $fecha, $cantidadJugadores, $estado, $campeon){
            $this->id = $id;
            $this->nombre = $nombre;
            $this->fecha = $fecha;
            $this->cantidadJugadores = $cantidadJugadores;
            $this->estado = $estado;
            $this->campeon = $campeon;
        }

        function getId(){
            return $this->id;
        }

        function getNombre(){
            return $this->nombre;
        }

        function getFecha(){
            return $this->fecha;
        }

        function getCantidadJugadores(){
            return $this->cantidadJugadores;
        }

        function getEstado(){
            return $this->estado;
        }

        function getCampeon(){
            return $this->campeon;
        }

        function cogerDatos(){
            $datosBD = $this-> accesoMySQL();
            $arrayObjetos = array();

            foreach ($datosBD as $torneo) {
                echo $torneo['nombre'];
            }
        }

    }