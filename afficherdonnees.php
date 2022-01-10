<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <section>
        <?php
       
        $pdo = new PDO('sqlite:listeemploye.db');  
        $requete = $pdo->query("SELECT * FROM Liste"); 
        $listeEmployes = $requete->fetchAll(PDO::FETCH_ASSOC);

        // print_r(listeEmployes);
        foreach($listeEmployes as $value) {      
                          
            echo '<div>';
            echo '<h1>L employe avec l identifiant '.$value['identifiant'].' se nomme : '.$value['FirstName'].' '.$value['FamilyName']. ' et ce petit veinard palpe environ '.$value['Salaire']. ' K€ par mois !! </h1>';
            echo "</div>";
        }
              ?>        
        </section>
    </main>
    
</body>
</html>