<!DOCTYPE html>
<html>
    <head>
        <title>stocker les données dans la table users</title>
    </head>
    <body>
        <?php
        $host='localhost';
        $dbname='test';
        $username='root';
        $password='';
        if (isset($_POST['insert'])){
            try{
                $pdo=new
            PDO("mysql:host=$host;dbname=$dbname","$username","$password");
            $firstname=$_POST['firstname'];
            $lastname=$_POST['lastname']
            $age=$_POST['age'];
            
            $sql="INSERT INTO 'users'('firstname','lastname','age')VALUES(:firstname,:lastname,:age)";
            $res=$pdo->prepare($sql)
            $exec=$res->execute(array(":firstname"=>$firstname,":lastname"=>$lastname,":age=>$age"));

            }
            catch(PDOExeption $exc){
                echo $exe ->getMessage();
                exit();

            }
            $requete='SELECT id, firstname +" "+ lastname AS name FROM users';
            $listeutilisateurss=
                            $pdo->query($requete)->fetchAll(PDO::FETCH_ASSOC);
            $requete='SELECT AVG(age),firstname +" "+ lastname AS Avg_age FROM users'
                
        }       
        ?>
        <h1> Liste des utilisateurs</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($listeutilisateurs as $row) { ?>
                <tr>
                    <td><?php echo $row ['id']; ?></td>
                    <td><?php echo $row ['name']; ?></td>
                    <td><?php echo $row ['age']; ?></td>
                    <td><?php echo $row ['Avg_age']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>