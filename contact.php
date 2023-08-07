<?php 
/*$recup = gentallheaders();
echo $recup["Prénom", "Adresse e-mail", "Numéro de téléphone",
"Message"]*/

if ($_POST["nom"] == "teapot") {
    http_response_code(418);
   echo"<p>".http_response_code()."</p>";
 //condition verrifie en premier si jamais la condidtion 
 //est juste ca existe ce code
 //on aurait ou faire l'inverse càd= si c'est =! de teapot echo $_POST
 //et else ".https_response..."
}else{
echo $_POST["nom"];
echo $_POST["prenom"];
echo $_POST["mail"];
echo $_POST["numero"];
echo $_POST["message"];

}
