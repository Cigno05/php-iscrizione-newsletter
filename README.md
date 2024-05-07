## Esercizio
- Creare una pagina html con il form di iscrizione ad una newsletter.
- La pagina deve contenere un form con un input di tipo email e un bottone di invio.
- I form invierà i dati alla stessa pagina index.php con metodo POST.
- Nel momento in cui il form viene inviato recuperiamo la mail dell’utente e usando una funzione controlliamo che sia formattata bene con queste logiche:
    - la mail deve contenere la @
    - la mail deve contenere un punto .
- Se la mail è corretta allora stampare nella pagina un messaggio si success usando il componente alert di Bootstrap
- altrimenti stampate un messaggio di error sempre con un componente alert di Bootstrap.


- Inizialmente mettere tutto il codice nel file index.php, poi quando funziona tutto. spostate la funzione in un file utilities.php ed includetelo nel file inde.php come visto in classe.
- Stilizzate la pagina con Bootstrap a piacimento rendendola un minino presentabile.


## BONUS 1
aggiungete anche un header e un footer nella pagina includendoli da file separati

## BONUS 2
create una seconda pagina subscription.php che utilizzando la sessione mostrerà l’esito dell’iscrizione alla newsletter con gli alert di Bootstrap. Quindi nel file index.php dopo aver controllato la mail, salvate l’esito in una variabile di sessione e fate un redirect alla pagina subscription.php.