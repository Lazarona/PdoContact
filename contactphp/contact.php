<?php
/*$recup = gentallheaders();
echo $recup["Prénom", "Adresse e-mail", "Numéro de téléphone",
"Message"]*/

if ($_POST["nom"] == "teapot") {
  http_response_code(418);
  echo "<p>" . http_response_code() . "</p>";
  //condition verrifie en premier si jamais la condidtion 
  //est juste ca existe ce code
  //on aurait ou faire l'inverse càd= si c'est =! de teapot echo $_POST
  //et else ".https_response..."
} else {
  echo $_POST["nom"];
  echo $_POST["prenom"];
  echo $_POST["mail"];
  echo $_POST["numero"];
  echo $_POST["message"];
}

$recup = new PDO("mysql:dbname=formulaire_contact;host=127.
0.0.1", "", "");

$contact = $recup->query("SELECT * FROM contact");

$contact = $recup->prepare("SELECT `nom`,`prenom`,`mail`,`numero`,`message`FROM");
//PDOStatement::fetchAll(int $mode = PDO::FETCH_DEFAULT): array;

$contact = $recup->exec("INSERT INTO contact `nom`,`prenom`,`mail`,`numero`,`message`");
var_dump("Votre formulaire a bien été enregistré");

//print("Votre formulaire a bien été enregistré");


// $contact = $recup->fetchAll();

//print_r($contact);
//public PDOStatement::execute(?array $contact = null): bool