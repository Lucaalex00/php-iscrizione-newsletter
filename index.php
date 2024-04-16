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
include_once __DIR__ . './functions.php';
?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Newsletter</title>
  <!-- /BOOTSTRAP -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h2>Registrazione alla Newsletter</h2>
    <?php
    if(emailChecker('email')){
        echo "Login Successful !";
        
    } else {
        echo "Login Failed, Retry !";
    }



    ?>
    <form action="" method="GET">
      <div class="form-group">
        <label for="nome">Nome: </label>
        <input type="text" class="form-control w-50" name="nome">
      </div>
      <div>
        <label for="email">Email: </label>
        <input type="text" class="form-control w-50" name="email">
      </div>
      <button type="submit" class="btn btn-primary w-25">Registrati</button>
    </form>
  </div>
</body>
</html>
