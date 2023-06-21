<?php
if (isset($_POST['btnCalcular'])) {
    $a = $_POST['txtnum1'];
    $b = $_POST['txtnum2'];
    $c = $a + $b;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>en clase</title>
</head>

<body>
    <div>
        <form method="post">
            <label>Primer Numero :</label>
            <input type="text" name="txtnum1" value="<?php if(isset($a)) echo $a ?>">
            <br>
            <label>Segundo Numero :</label>
            <input type="text" name="txtnum2" value="<?php if(isset($b)) echo $b ?>">
            <br> 
            <strong>        
            <label> <?php if(isset($c)) echo "Suma = ".$c ."<br>"; ?></label>
            </strong>
            <button type="submit" name="btnCalcular">Calcular</button>
        </form>
    </div>

</body>

</html>