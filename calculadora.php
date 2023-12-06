
<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>
    <h2>Calculadora</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <input type="text" name="num1" placeholder="Número 1">
        <input type="text" name="num2" placeholder="Número 2">
        <select name="operator">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>
        <input type="submit" value="Calcular">
    </form>
    <p>El resultado es:</p>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        switch ($operator) {
            case "sumar":
                echo $num1 + $num2;
                break;
            case "restar":
                echo $num1 - $num2;
                break;
            case "multiplicar":
                echo $num1 * $num2;
                break;
            case "dividir":
                if ($num2 != 0) {
                    echo $num1 / $num2;
                } else {
                    echo "Error: No se puede dividir por cero";
                }
                break;
        }
    }
    ?>
</body>
</html>