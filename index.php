<!-- Array di ordini -->
<?php
$primary_orders = [
    ["id" => 1, "importo" => 120.98, "stato" => "pagato"],
    ["id" => 2, "importo" => 15.30, "stato" => "in_attesa"],
    ["id" => 3, "importo" => 92.02, "stato" => "pagato"],
    ["id" => 4, "importo" => 63.16, "stato" => "annullato"],
    ["id" => 5, "importo" => 52.21, "stato" => "pagato"],
    ["id" => 6, "importo" => 85, "stato" => "pagato"],
    ["id" => 7, "importo" => 31.10, "stato" => "in_attesa"],
    ["id" => 8, "importo" => 15, "stato" => "pagato"]
];

$secondary_orders = [
    ["id" => 1, "importo" => "120", "stato" => "pagato"],
    ["id" => 2, "stato" => "pagato"],
    ["id" => 3, "importo" => -5, "stato" => "pagato"],
    ["id" => 4, "importo" => 62.90, "stato" => ""],
    ["id" => 5, "importo" => 16.41, "stato" => "in_attesa"],
    ["id" => 6, "importo" => null, "stato" => "pagato"],
    ["id" => 7, "importo" => 45.85, "stato" => "annullato"],
    ["id" => 8, "importo" => 100.98, "stato" => "pagato"]
];
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Summary</title>
</head>

<body>
    <?php
    echo "<pre>";
    /* var_dump($primary_orders); */
    /* var_dump($secondary_orders); */
    echo "</pre>";
    ?>

    <!-- Resultato Ordini -->
    <?php
    /* 
    Creo la funzione che riceve un'array di ordini e restituisce somma e numeri di ordini pagati 
    */
    function results($orders_array)
    {
        /* Creo due variabili, una per la somma e una per lo stato */
        $orders_sum = 0;
        $paid_orders = 0;

        /* Prendo un'ordine per volta */
        foreach ($orders_array as $order) {
            /* 
            SE 
            - lo stato dell'ordine è pagato 
            - è presente la key importo
            - non è una stringa ma un valore numerico
            - l'importo dell'ordine è superiore a 0 
            ALLORA 
            */
            if ($order["stato"] === "pagato" && isset($order["importo"]) && !is_string($order["importo"]) && $order["importo"] > 0) {
                /* Aggiungo 1 a paid_orders */
                $paid_orders++;

                /* Sommo l'importo dell'ordine con orders_sum    */
                $orders_sum = $orders_sum + $order["importo"];
            }
        }

        /* Alla chiamata della funzione stampo il totale e il numero di ordini validi*/
        echo "Totale: " . $orders_sum . "; Ordini validi conteggiati: " . $paid_orders;
    }

    ?>

    <div style="margin-top: 5rem;">
        <h2>Array Corretta:</h2>

        <h3>Risultato:</h3>
        <p><?php results($primary_orders); ?></p>
    </div>

    <div style="margin-top: 5rem;">
        <h2>Array con valori non validi:</h2>

        <h3>Risultato:</h3>
        <p><?php results($secondary_orders); ?></p>
    </div>


</body>

</html>