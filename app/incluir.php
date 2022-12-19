<?
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Origin: *");

include 'conexao.php';

$id = rand('1, 999');
$nome = $_POST["nome"];
$email = $_POST["email"];
$comentario = $_POST["comentario"];

$query = "iNSERT INTO mensagens(id, nome, emai, comentario) VALUES ('$id', '$nome', '$email', '$comentario')";

if ($link->query($query) === TRUE) {
  echo "New record created successfully";
} else{
    echo "Error: " . $link->error;
}
?>