<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice Simple</title>
</head>
<body>

<h2>Calculatrice Simple</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="num1">Premier nombre:</label><br>
    <input type="text" id="num1" name="num1"><br><br>
    <label for="num2">Deuxième nombre:</label><br>
    <input type="text" id="num2" name="num2"><br><br>
    <label for="operation">Opération:</label><br>
    <select name="operation" id="operation">
        <option value="addition">Addition</option>
        <option value="subtraction">Soustraction</option>
        <option value="multiplication">Multiplication</option>
        <option value="division">Division</option>
    </select><br><br>
    <input type="submit" value="Calculer">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
   
    switch ($operation) {
        case 'addition':
            $result = $num1 + $num2;
            break;
        case 'subtraction':
            $result = $num1 - $num2;
            break;
        case 'multiplication':
            $result = $num1 * $num2;
            break;
        case 'division':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Erreur: Division par zéro";
            }
            break;
        default:
            $result = "Opération non valide";
            break;
    }
   
    echo "<h2>Résultat:</h2>";
    echo "<p>$num1 $operation $num2 = $result</p>";
}
?>
