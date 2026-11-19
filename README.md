# PROVA TECNICA — RIEPILOGO ORDINI (durata indicativa: 30–40 minuti)

## Consegna
Scrivi una funzione che riceva una lista di ordini, ciascuno con ID,
importo e stato, e restituisca:
- la somma degli importi degli ordini con stato "pagato";
- il numero degli ordini pagati validi conteggiati.

La funzione deve ignorare gli ordini "annullato" o "in_attesa" e
gestire senza interrompersi dati non validi (per esempio importo
mancante, negativo, non numerico, oppure campi obbligatori mancanti).
Gli importi positivi con decimali devono essere accettati.

Esempio di input:
[
  {"id": 1, "importo": 120, "stato": "pagato"},
  {"id": 2, "importo": 50, "stato": "annullato"},
  {"id": 3, "importo": 80, "stato": "pagato"},
  {"id": 4, "importo": -20, "stato": "pagato"},
  {"id": 5, "importo": 40, "stato": "in_attesa"}
]

Risultato atteso: totale 200; ordini validi conteggiati 2.

Puoi utilizzare il linguaggio che preferisci (Python, Java,
JavaScript, PHP o altro), senza obbligo di framework. Inserisci almeno
due test, uno sul caso normale e uno su un caso con dati non validi,
verificando esplicitamente i risultati. Allega il codice oppure
condividi un link a un repository e aggiungi una breve spiegazione di
come hai impostato la soluzione.


## Come ho impostato la soluzione

Ho creato due array, primary_orders con dati corretti e secondary_orders con dati non validi, prima di scrivere il codice ho impostato la logica in pseudocodice (human code) come traccia per sviluppare la funzione. Durante lo sviluppo ho controllato i dati in pagina con var_dump.

La funzione usa due variabili, una per la somma degli importi e una per il numero di ordini validi. 
Con il foreach ciclo l'array degli ordini e con l'if prendo solo quelli con stato "pagato", per ognuno incremento $paid_orders di 1 e aggiungo l'importo a $orders_sum. 
Alla chiamata la funzione stampa con un echo il totale e il numero di ordini validi conteggiati.

Dopo aver verificato il risultato con il primo array sono passato al secondo, che contiene importi testuali, campi mancanti, stato vuoto, importi negativi e importi null.

- Il primo test ha generato un errore per l'importo mancante nell'ID 2, risolto aggiungendo all'if la condizione isset($order["importo"]).
- Il totale risultava poi sbagliato per l'importo testuale e per quello negativo, risolto aggiungendo !is_string($order["importo"]) e $order["importo"] > 0.

Infine ho spostato la funzione in functions.php e l'ho collegata a index.php con require_once. Ho scelto require perché senza quel file la pagina non può funzionare, quindi in caso di file mancante è giusto che si fermi con un errore invece di proseguire come farebbe include. Con _once il file viene caricato una sola volta, evitando di dichiarare la funzione due volte. 
Ho aggiunto anche due regole CSS inline per separare i risultati in pagina.