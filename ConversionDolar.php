<?php
$euros = $_GET["euros"];
$dolares = $euros * 1.12;
echo "<h3>Coversion sin control de errores</h3>";
echo "<p><b>Realizamos la conversion a US Dollars</b></p>";
echo "<p>Realizamos la siguiente conversion</p>";
echo "<p>Cantidad = $euros Euros";
echo "<p>Resultado de la conversion = $dolares US Dollars</p>";