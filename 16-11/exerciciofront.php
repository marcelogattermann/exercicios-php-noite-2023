<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <input type="number" placeholder="Numero 1" id="num1">
        <input type="number" placeholder="Numero 2" id="num2">

        <button onclick="soma()" type="submit">Calcular</button>
    </form>

    <script>
        function soma() {
            let num1 = document.getElementById('num1');
            let num2 = document.getElementById('num2');

            window.open(`exercicioback.php?num1=${num1}&&num2=${num2}`);

        }
    </script>

</body>

</html>