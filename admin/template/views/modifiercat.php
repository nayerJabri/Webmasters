
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="modifcat.php">
        <table border="1px">
            <tr>
                <td>reference catégorie</td>
                <td><input type="number" name="referencee" value="<?PHP echo $_POST['referencee']; ?>"  ></td>
                </tr>
                <tr>
                <td>nom catégorie</td>
                <td><input type="text" name="nomcat"  value="<?PHP echo $_POST['nomcat']; ?>" ></td>
                </tr>
                <td><input type="submit" name="modifier" value="confirmer la modification"></td>
                </tr>
        </table>
    </form>
</body>
</html>