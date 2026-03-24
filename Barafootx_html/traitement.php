<!DOCTYPE html>
<html>
    <head>
        <title>traitement du formulaire</title>
        <meta charset="utf-8">
        <meta name="traitement du formulaire" content="Découvrez les horaires d'ouverture et les tarifs de consommation du bar Footx, le lieu idéal pour les passionnés de football.">
        <meta name="keywords" content="bar, football, horaires, tarifs, consommation, Footx, passionnés">
        <link rel="stylesheet" href="bootstrap-5.3.8-dist/bootstrap-5.3.8-dist/css/bootstrap.css">
        <link rel="stylesheet" href="cssbar.css">
    </head>
    <body>
        <div class="container">
            <h1>traitement du formulaire</h1>
            <?php
             

                $servername='localhost';
                $dbname='barafootx';
		        $username='root';
		        $password='';

                $prenom=$_POST['prenom'];
                $email=$_POST['email'];
                $age=$_POST['age'];
                $sexe=$_POST['sexe'];
                $pays=$_POST['pays'];
                $commentaires=$_POST['commentaires'];

		        try{
			    $conn=new
			    PDO("mysql:host=$servername;dbname=barafootx",$username,$password);
			    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                
                
                try {
                    $conn->exec("ALTER TABLE appreciations ADD COLUMN commentaires TEXT");
                } catch(PDOException $e) {
                        if ($e->getCode() == '42S21') {
                            echo "La colonne 'commentaires' existe déjà.";
                        } else {
                            throw $e;
                        }
                }
                
                $sth=$conn->prepare("INSERT INTO appreciations (prenom,email,age,sexe,pays,commentaires) VALUES (:prenom,:email,:age,:sexe,:pays,:commentaires)");
                $sth->bindValue(':prenom',$prenom);
                $sth->bindValue(':email',$email);
                $sth->bindValue(':age',$age);
                $sth->bindValue(':sexe',$sexe);
                $sth->bindValue(':pays',$pays);
                $sth->bindValue(':commentaires',$commentaires);
                $sth->execute(array
                                    (':prenom'=>$prenom,
                                    ':email'=>$email,
                                    ':age'=>$age,
                                    ':sexe'=>$sexe,
                                    ':pays'=>$pays,
                                    ':commentaires'=>$commentaires));
                echo "données insérées avec succès";

			    echo'connexion reussie';
		        }
		        catch(PDOException $e){
			    echo"erreur:" .$e->getMessage();
		        }
		        $conn=null;

                echo'prenom: '.$_POST['prenom'].'<br>';
                echo'email:'.$_POST['email'].'<br>';
                echo'age:'.$_POST['age'].'<br>';
                echo'sexe:'.$_POST['sexe'].'<br>';
                echo'Pays:'.$_POST['pays'].'<br>'; 
                echo'Commentaires:'.$_POST['commentaires'].'<br>';
            ?>

        </div>
        <hr>
    </body>
</html>