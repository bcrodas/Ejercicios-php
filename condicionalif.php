/*Ejercicio Marcos Bajaña*/
<html>
    <head>
        <title>Condicionales IF</title>
    </head>
    <body>
        <?php
            /*La asociación de vinicultores tiene como política fijar un precio inicial al kilo de uva, 
            la cual se clasifica en tipos A y B, y además en tamaños 1 y 2. Cuando se realiza la venta del producto, 
            ésta es de un solo tipo y tamaño, se requiere determinar cuánto recibirá un productor por la uva que entrega en un 
            embarque, considerando lo siguiente: si es de tipo A, se le cargan 20¢ al precio inicial cuando es de tamaño 1; y 30¢ 
            si es de tamaño 2. Si es de tipo B, se rebajan 30¢ cuando es de tamaño 1, y 50¢ cuando es de tamaño 2.*/
            $precioini=2.00; 
            $tipo= "B";
            $tamaño=1;
            $kilo=100;

            $preciofin = $precioini;

            if ($tipo == "A") {
                if ($tamaño== 1) {
                    $preciofin = $precioini + 0.20;
                } elseif ($tamaño== 2) {
                    $preciofin = $precioini + 0.30;
                }
            } elseif ($tipo == "B") {
                if ($tamaño== 1) {
                    $preciofin = $precioini - 0.30;
                } elseif ($tamaño== 2) {
                    $preciofin = $precioini - 0.50;
                }
            }

            $totalpaga = $preciofin * $kilo;


            echo "Precio final por kilo: $" . $preciofin;
            echo "<br>Total a pagar: $" . $totalpaga;
        ?>
</html>