<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bababuia - Home</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main id="container">

        <h1>Babuia</h1>

        <p>Crie e poste seu bababuia de forma anônima</p>
        
        <form action="index.php" method="post">
            <textarea name="campoConfessao" id="campoComfessao" cols="30" rows="10"></textarea>
            <input type="submit" value="ok"></input>
        </form>
        
    </main>
    <script src="script.js"></script>
</body>
</html>
<?php
if ($_POST != null){
	$txt = $_POST["campoConfessao"];
	echo $_POST["campoConfessao"];
	$s = mysqli_connect("0.0.0.0", "root", "", "clotild");
	$query = mysqli_query($s,"insert into posts(codigo, txt) values (null,'".$txt."');");}

?>
