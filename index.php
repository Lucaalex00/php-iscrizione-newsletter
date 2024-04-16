<?php

/* 

Milestone 1: scriviamo tutto (logica e layout) in un unico file index.php

Milestone 2: verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
Aggiungere anche un po’ di stile alla pagina tramite Bootstrap.

Bonus :

Milestone 3: invece di usare una classe statica per lo stile dell’alert, modificarla in base all’esito della funzione. Usare alert-danger in caso di errore e alert-success in caso di esito positivo.

Milestone 4: invece di visualizzare il messaggio di success nella index.php, in caso di esito positivo effettuare un redirect ad una thankyou page.

Milestone 5: sullo stesso stile del metodo old() di Laravel, far vedere come utilizzare $_GET per valorizzare il campo di input in caso il controllo del server dia esito negativo (KO)

*/
?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrazione Newsletter</title>
  <!-- Link a Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h2>Registrazione alla Newsletter</h2>
    <form action="registrazione_newsletter.php" method="POST">
      <div class="form-group">
        <label for="nome">Nome: </label>
        <input type="text" class="form-control" name="nome" required>
      </div>
      <div class="form-group">
        <label for="email">Email: </label>
        <input type="email" class="form-control" name="email" required>
      </div>
      <button type="submit" class="btn btn-primary">Registrati</button>
    </form>
  </div>

  <!-- Link a Bootstrap JS (opzionale, necessario solo per alcune funzionalità di Bootstrap) -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
