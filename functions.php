<!-- Resultato Ordini -->
<?php
/* Creo la funzione che riceve un'array di ordini e restituisce somma e numeri di ordini pagati */

/**
 * Calcola e stampa il totale degli importi degli ordini pagati validi e il numero di ordini conteggiati.
 * Ignora gli ordini annullati, in attesa e quelli con dati non validi.
 *
 * @param array $orders_array Array di ordini, ognuno con id, importo e stato
 * @return void
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