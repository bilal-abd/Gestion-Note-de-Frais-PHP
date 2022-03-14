
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ajoutfichefraisadmin.css">
    <title>Document</title>
</head>
<body>
<form action="insertion.php" method="POST">

<center >


Nom<input class="nom" type="text" name="nom" placeholder="Entrez votre nom"><br> 
            

            
            <table>
                <tr>
                    <th scope="col">Type de prestation</th>
                    <th scope="col">Saisie</th>
                    <th scope="col">Nom</th>

                    
                </tr>
                <tr>
                    <th scope="row"><label>Frais de déplacements</label></th>
                    <td><input type="number" name="deplacement" ></td>
                </tr>
                <tr>
                    <th scope="row"><label>Frais d'hôtellerie</label></th>
                    <td><input type="number" name="hotel" ></td>
                </tr>
                <tr>
                    <th scope="row"><label>Frais de restauration :</label></th>
                    <td><input type="number" name="restauration" ></td>
                </tr>
                
        
            </table>
            <input type="submit" value="Envoyer" name="envoyer">
                
            </center>



</form>

</body>
</html>