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

$nameValue= $_GET['name'];
$emailValue= $_GET['email'];
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
    if(!empty($emailValue) && !empty($nameValue) && (emailChecker('email'))){
        echo "<span class='text-success'>Login Successful ! </span>";
        /* echo "<script> 
            setTimeout(function(){
            window.location.href= 'https://boolean.careers/'; 
            }, 3000); 
            </script>"; */
            header("Location: ./thankyou.php");
        }     
        elseif(empty($emailValue) && empty($nameValue)){
        echo "<span class='text-warning'>Insert your INFO</span>";
        } elseif (empty($emailValue) && !empty($nameValue)){
            echo "<span class='text-danger'>Login Failed, Need an EMAIL!</span>"; 
        } elseif(!empty($emailValue) && empty($nameValue)){
            echo "<span class='text-danger'>Login Failed, Need a NAME </span>";
        } elseif(!empty($emailValue) && !empty($nameValue)) {
            echo "<span class='text-danger'>Login Failed, retry with correct Values !</span>";
        } 


    ?>
    <form action="" method="GET">
      <div class="form-group">
        <label for="nome">Nome: </label>
        <input type="text" class="form-control w-50" name="name" value="<?=isset($nameValue) ? $nameValue : '' ?>">
      </div>
      <div>
        <label for="email">Email: </label>
        <input type="text" class="form-control w-50" name="email" value="<?=isset($emailValue) ? $emailValue : '' ?>">
      </div>
      <button type="submit" class="btn btn-primary w-25">Registrati</button>
    </form>
  </div>
</body>
</html>
