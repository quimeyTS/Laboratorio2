<?php
    require_once('php/encabezado.php');

    $coso = mt_rand(10000, 50000); //varible con el nombre del producto declarada y con un valor aleatorio inicializado.
    
    const IVA = 0.21; //Constante declarada con el 21% que es el valor del IVA.

    $iva = $coso * IVA; //Calculo para sacar el precio con el impuesto IVA aplicado.

    $precioCiva = $coso + $iva;
?>

<table>
    <thead>
        <tr>
            <th class="encabezado">DETALLE</th>
            <th class="encabezado">IMPORTE</th>
        </tr>
    </thead>
    <tbody>
        <tr class="recibo">
            <th>COSO</th>
            <th><?php echo $coso ?></th>
        </tr>
        <tr class="recibo">
            <th>Total SIN IVA</th>
            <th><?php echo $coso ?></th>
        </tr>
        <tr class="recibo">
            <th>IVA</th>
            <th><?php echo $iva ?></th>
        </tr>
        <tr class="recibo">
            <th>TOTAL</th>
            <th><?php echo $precioCiva ?></th>
        </tr>
    </tbody>
</table>


<?php
    require_once('php/pie.php');
?>