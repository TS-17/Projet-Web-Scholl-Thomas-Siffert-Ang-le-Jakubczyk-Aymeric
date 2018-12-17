<!doctype html>
  <html lang="fr">
    <head>
    <meta charset="UTF8" />
    <link rel="stylesheet" href="css/menu.css" />
    <link rel="stylesheet" href="css/Murpapier.css" />
    <title>Adopte un animal rejeté.com</title>
      </head>
      <body>
      <nav>
      <ul>
      <li class="menu_accueil"><a href="Accueil.html">Menu</a>
      <ul class="submenu">
      	<li><a href="Nessie.html"> Fiche de Nathalie</a>
      	<li><a href="Chupacabra.html"> Fiche de Choupi</a></li>
      	<li><a href="Jackalope.html"> Fiche de Jacouille</a></li>
      	<li><a href="Mothman.html"> Fiche de Cyndy</a></li>	
      	<li><a href="Pedo.html"> Fiche de Nounours</a></li>
      	<li><a href="Accueil.html"> Retour à l'accueil</a></li>
      </li>
      </ul>
      </nav>
      <p class='p'>Votre réponse est donc:</p>
      <?php
          $score1     = 0;
          $score2     = 0;
          $score3     = 0;
          $score4     = 0;
          $score5     = 0;
    foreach($_GET as $numero=>$reponse){
      //echo "<li>" , $numero, " : ", $reponse, "</li>";
      $score += $reponse;
      if ($reponse==1){
      $score1+=1;
      }
      if ($reponse==2){
      $score2+=1;
      }
      if ($reponse==3){
      $score3+=1;
      }
      if ($reponse==4){
      $score4+=1;
      }
      if ($reponse==5){
      $score5+=1;
      }
    }
    
    
    $stock = 1;
    $compar = $score1;
    if ($compar<=$score2){
    $compar=$score2;
    $stock=2;
    }
    if ($compar<=$score3){
    $compar=$score3;
    $stock=3;
    }
    if ($compar<=$score4){
    $compar=$score4;
    $stock=4;
    }
    if ($compar<=$score5){
    $compar=$score5;
    $stock=5;
    }
    
    if ($stock==1){
      echo "<p class='p'>L'animal qui vous correspond le mieux est <a class='p' href='Jackalope.html'>Jacouille</a></p>";
    }
    if ($stock==2){
      echo "<p class='p'>L'animal qui vous correspond le mieux est <a class='p' href='Pedo.html'>Pedo</a></p>";
    }
    if ($stock==3){
      echo "<p class='p'>L'animal qui vous correspond le mieux est <a class='p' href='Nessie.html'>Nessie</a></p>";
    }
    if ($stock==4){
      echo "<p class='p'>L'animal qui vous correspond le mieux est <a href='Chupacabra.html'>Choupi</a></p>";
    }
    if ($stock==5){
      echo "<p class='p'>L'animal qui vous correspond le mieux est <a class='p' href='Mothman.html'>Cyndy</a></p>";
    }
      
    
    //echo $score;
    echo "</br>","</br>";
    echo "<a class='p' href='Quizz.html'>Retour au qcm</a>"; 
    ?>
    
    
      </body>
      </html>
