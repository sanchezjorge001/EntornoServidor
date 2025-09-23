<?php   
    $boolean = true;

    echo $boolean; 


// SI SOLO HAY CODIGO PHP NO HACE FALTA CERRAR LA ETIQUETA PHP 
// SI HAY HTML O MAS COSAS SI


$productos_values = array_values($productos);
+    for ($i = 0; $i < count($productos_values); $i++) {
+        $total = $productos_values[$i] * $cantidad[$i];
+        $product_name = array_keys($productos)[$i];
+        echo "Total for $product_name: " . $total . "<br>";
+    }