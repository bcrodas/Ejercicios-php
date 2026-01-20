<html>
<head>
    <title>La langosta ahumada</title>
</head>
<body>
    <?php
    /*ejercicio Bárbara Rodas*/
    /*“La langosta ahumada” es una empresa dedicada a ofrecer banquetes; sus tarifas son las siguientes: 
        el costo de platillo por persona es de $95.00, pero si el número de personas es mayor a 200 pero 
        menor o igual a 300, el costo es de $85.00. Para más de 300 personas el costo por platillo es de $75.00. 
        Se requiere un algoritmo que ayude a determinar el presupuesto que se debe presentar a los clientes que deseen realizar un evento.
     */
    $personas = 150;
    $costoporpersona = 95.00;

    if ($personas > 200 && $personas <= 300) {
        $costoporpersona = 85.00;
    } elseif ($personas > 300) {
        $costoporpersona = 75.00;
    }

    $presupuestototal = $personas * $costoporpersona;

    echo "Número de personas: " . $personas;
    echo "<br>Costo por platillo: $" . $costoporpersona;
    echo "<br>Presupuesto total: $" . $presupuestototal;
    ?>
</body>
</html>