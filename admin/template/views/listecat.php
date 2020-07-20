<?PHP
include "../core/categorieC.php";
$categorie1C=new categorieC();
if(isset($_POST['rechercher']))
{
    $listecat=$categorie1C->rechercherListecategories($_POST['rechercher']);
}
else
{
    $listecat=$categorie1C->affichercategories();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listecategorie</title>
</head>
<body>

<form action="listecat.php" method="post">
            <input type="text" name="rechercher" placeholder="reference a rechercher"><br><br>
            <input type="submit" name="search" value="search"><br><br>
        </form>
<table border="1">
<tr>
<td>referencee</td>
<td>nomcat</td>
</tr>
<?PHP
foreach($listecat as $row){   
        
	?>
	<tr>   
	<td><?PHP echo $row['referencee']; ?></td>
	<td><?PHP echo $row['nomcat']; ?></td>
    <td><form method="POST" action="modifiercat.php">
    <input type="hidden" name="referencee" value='<?PHP echo $row['referencee']; ?>'>
    <input type="hidden" name="nomcat" value='<?PHP echo $row['nomcat']; ?>'>
    
    <input type="submit" value="modifier">
</form></td>
<form method="POST" action="supprimercat.php">
<td>
        <input type="hidden" name="referencee" value='<?PHP echo $row['referencee']; ?>'>
        <input type="submit" value='supprimer'>
</td>
</form>
    </tr>
	<?PHP
}
?>
</table>
<div>
    <form method="POST" action="listecat.php">
        </form>
</div>
<div><a href="ajoutercat.html">ajouter une catégorie</a></div>
</body>
</html>