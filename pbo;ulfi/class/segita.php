<!DOCTYPE html>
<html>
<head>
    <title>Aritmatika Luas Segitiga</title>
</head>
<body>
    <h1>Aritmatika Luas Segitiga</h1>
    <form method="post">
        <label for="alas">Alas:</label>
        <input type="text" name="alas" id="alas" required><br>
        <label for="tinggi">tinggi:</label>
        <input type="text" name="tinggi" id="tinggi" required><br>

        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];
        $luas = 0.5 * $alas * $tinggi;
        echo "<h2>Luas Segitiga: $luas</h2>";
    }
    ?>
</body>
</html>