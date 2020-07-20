
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="modif.php">
        <table border="1px">
            <tr>
                <td>reference</td>
                <td><input type="number" name="reference" value="<?PHP echo $_POST['reference']; ?>" readonly ></td>
                </tr>
                <tr>
                <td>nom</td>
                <td><input type="text" name="nom"  value="<?PHP echo $_POST['nom']; ?>" ></td>
                </tr>
                <tr>
                <td>catégorie</td>
                <td><input type="text" name="categorie"  value="<?PHP echo $_POST['categorie']; ?>" ></td>
                </tr>
                <tr>
                <td>prix</td>
                <td><input type="number" name="prix"  value="<?PHP echo $_POST['prix']; ?>" ></td>
                </tr>
                <tr>
                <td>description</td>
                <td><input type="text" name="description"  value="<?PHP echo $_POST['description']; ?>" ></td>
                </tr>
                <tr>
                <td>Image</td>
                <td><input type="text" name="image"  value="<?PHP echo $_POST['image']; ?>" ></td>
                </tr>
                <tr>
                <td>date</td>
                <td><input type="text" name="date"  value="<?PHP echo $_POST['date']; ?>" ></td>
                </tr>
                <tr>
                <td></td>
                <td><input type="submit" name="modifier" value="confirmer la modification"></td>
                </tr>
        </table>
    </form>
</body>
</html>