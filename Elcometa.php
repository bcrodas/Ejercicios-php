<html>
<head>
    <title>El cometa</title>
</head>
<body>
    <?php
        /* Fábricas “El cometa” produce artículos con claves (1, 2, 3, 4, 5 y 6). Se requiere un algoritmo para calcular los precios de venta, para esto hay que considerar lo siguiente: 
        Costo de producción = materia prima + mano de obra + gastos de fabri¬cación. 
        Precio de venta = costo de producción + 45 % de costo de producción. 
        El costo de la mano de obra se obtiene de la siguiente forma: para los productos con clave 3 o 4 se carga 75 % del costo de la materia prima; para los que tienen clave 1 y 5 se carga 80 %, y para los que tienen clave 2 o 6, 85 %. 
        Para calcular el gasto de fabricación se considera que, si el artículo que se va a producir tiene claves 2 o 5, este gasto representa 30 % sobre el costo de la materia prima; si las claves son 3 o 6, representa 35 %; si las claves son 1 o 4, representa 28 %. La materia prima tiene el mismo costo para cualquier clave.
        */
        $clave = 4;
        $costoMateriaPrima = 100.00; 
        $manoObra = 0.0;
        $gastosFabricacion = 0.0;

        if ($clave == 3 || $clave == 4) {
            $manoObra = $costoMateriaPrima * 0.75;
        } elseif ($clave == 1 || $clave == 5) {
            $manoObra = $costoMateriaPrima * 0.80;
        } elseif ($clave == 2 || $clave == 6) {
            $manoObra = $costoMateriaPrima * 0.85;
        }

        if ($clave == 2 || $clave == 5) {
            $gastosFabricacion = $costoMateriaPrima * 0.30;
        } elseif ($clave == 3 || $clave == 6) {
            $gastosFabricacion = $costoMateriaPrima * 0.35;
        } elseif ($clave == 1 || $clave == 4) {
            $gastosFabricacion = $costoMateriaPrima * 0.28;
        }

        $costoProduccion = $costoMateriaPrima + $manoObra + $gastosFabricacion;

        $precioVenta = $costoProduccion * 1.45;

        echo "Clave del producto: " . $clave;
        echo "<br>Costo de Producción: $" . $costoProduccion;
        echo "<br>Costo de Materia Prima: $" . $costoMateriaPrima;
        echo "<br>Mano de Obra: %" . $manoObra;
        echo "<br>Precio de venta: $" . $precioVenta;
        echo "<br>Gastos de fabricación: %" . $gastosFabricacion;
    ?>
</body>
</html>