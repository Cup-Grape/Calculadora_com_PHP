<?php
    class operacao{
        public $result;

        function soma($num1,$num2){
            $obj = new operacao();
            $obj -> result = $num1 + $num2;
            strval($resultado = $obj -> result);
            echo "$resultado";
        }

        function sub($num1,$num2){
            $obj = new operacao();
            $obj -> result = $num1 - $num2;
            strval($resultado = $obj -> result);
            echo "$resultado";
        }

        function div($num1,$num2){
            $obj = new operacao();
            $obj -> result = $num1 / $num2;
            strval($resultado = $obj -> result);
            echo "$resultado";
        }

        function mult($num1,$num2){
            $obj = new operacao();
            $obj -> result = $num1 * $num2;
            strval($resultado = $obj -> result);
            echo "$resultado";
        }


    }




?>