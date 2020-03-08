<html>
  <head>
    <meta charset="utf-8">
    <title>Struktura</title>
  </head>
  <body>
    <?php
      $name="Janusz";
      $surname="Kowal";

      echo "$name $surname";
      echo $name.$surname;
      echo $name,$surname;

      //heredoc

      echo <<<SHOW
        <hr>
        Imię: $name<br>
        Nazwisko: $surname
        <hr>
SHOW;


//nowdoc

$name="Janusz";
echo <<<'X'
    Imię: $name
X;

     ?>

  </body>
</html>
