<?PHP
include "../core/ProduitC.php";
$produit1C=new ProduitC();
if(isset($_POST['rechercher']))
{
    $listeproduits=$produit1C->rechercherproduit($_POST['rechercher']);
}
else if(isset($_POST['tri']))
{
    $listeproduits=$produit1C->trierproduit();
}
else
{
    $listeproduits=$produit1C->afficherproduit();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listeproduits</title>
</head>
<body>

<form action="listeproduits.php" method="post">
            <input type="text" name="rechercher" placeholder="reference a rechercher"><br><br>
            <input type="submit" name="search" value="search"><br><br>
        </form>
<table border="1">
<tr>
<td>reference</td>
<td>nom</td>
<td>categorie</td>
<td>prix</td>
<td>description</td>
<td>image</td>
<td>date</td>
</tr>
<?PHP
foreach($listeproduits as $row){   
        
	?>
	<tr>   
	<td><?PHP echo $row['reference']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['categorie']; ?></td>
	<td><?PHP echo $row['prix']; ?></td>
    <td><?PHP echo $row['description']; ?></td>
    <td><?PHP echo $row['image']; ?></td>
    <td><?PHP echo $row['date']; ?></td>
    <td><form method="POST" action="modifierproduit.php">
    <input type="hidden" name="reference" value='<?PHP echo $row['reference']; ?>'>
    <input type="hidden" name="nom" value='<?PHP echo $row['nom']; ?>'>
    <input type="hidden" name="categorie" value='<?PHP echo $row['categorie']; ?>'>
    <input type="hidden" name="prix" value=<?PHP echo $row['prix']; ?>>
    <input type="hidden" name="description" value=<?PHP echo $row['description']; ?>>
     <input type="hidden" name="image" value=<?PHP echo $row['image']; ?>>
     <input type="hidden" name="date" value=<?PHP echo $row['date']; ?>>
    <input type="submit" value="modifier">
</form></td>
<form method="POST" action="supprimerproduit.php">
<td>
        <input type="hidden" name="reference" value='<?PHP echo $row['reference']; ?>'>
        <input type="submit" value='supprimer'>
</td>
</form>
    </tr>
	<?PHP
}
?>
</table>
<div>
    <form method="POST" action="listeproduits.php">
        <input type="hidden" name="tri" value='xxx'>
        <input type="submit" value='trier par date'>
        </form>
</div>
<div><a href="ajouterProduit.html">ajouter un produit</a></div>
</body>
</html>