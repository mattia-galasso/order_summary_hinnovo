# PROVA TECNICA — RIEPILOGO ORDINI (durata indicativa: 30–40 minuti)

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