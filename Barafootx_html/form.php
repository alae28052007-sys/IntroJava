<!DOCTYPE html>
<html>
    <head>
        <title>formulaire</title>
		<meta charset="utf-8">
		<meta name="formulaire" content="Découvrez les horaires d'ouverture et les tarifs de consommation du bar Footx, le lieu idéal pour les passionnés de football.">
		<meta name="keywords" content="bar, football, horaires, tarifs, consommation, Footx, passionnés">
		<link rel="stylesheet" href="bootstrap-5.3.8-dist/bootstrap-5.3.8-dist/css/bootstrap.css">
		<link rel="stylesheet" href="cssbar.css">
    </head>
    <body>
        <?php include 'nav.php'; ?>
        <h1>Formulaire de d'appretiation</h1>
        <form action="traitement.php" method="post">
            <label for="prenom">Prénom:</label><br>
            <input type="text" id="prenom" name="prenom" required><br><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>
            <label for="age">Age:</label><br>
            <input type="number" id="age" name="age" required><br><br>
            <label for="sexe">Sexe:</label><br>
            <input type="radio" id="homme" name="sexe" value="homme" required>
            <label for="homme">homme</label><br>
            <input type="radio" id="femme" name="sexe" value="femme" required>
            <label for="femme">femme</label><br>
            <input type="radio" id="autre" name="sexe" value="autre" required>
            <label for="autre">autre</label><br><br>
            </select><br><br>
            <label for="pays">Pays de residence:</label><br>
            <select id="pays" name="pays">
                <optgroup label="Europe">
                    <option value="france">France</option>
                    <option value="espagne">Espagne</option>
                    <option value="italie">Italie</option>
                    <option value="allemagne">Allemagne</option>
                    <option value="autre">Autre</option>
                </optgroup>
                <optgroup label="Amérique">
                    <option value="etats-unis">États-Unis</option>
                    <option value="canada">Canada</option>
                    <option value="bresil">Brésil</option>
                    <option value="argentine">Argentine</option>
                    <option value="aurtre">Autre</option>
                </optgroup>
                <optgroup label="Asie">
                    <option value="chine">Chine</option>
                    <option value="japon">Japon</option>
                    <option value="inde">Inde</option>
                    <option value="coree-du-sud">Corée du Sud</option>
                    <option value="laos">Laos</option>
                    <option value="autre">Autre</option>
                </optgroup>
                <optgroup label="Afrique">
                    <option value="nigeria">Nigeria</option>
                    <option value="egypte">Égypte</option>
                    <option value="afrique-du-sud">Afrique du Sud</option>
                    <option value="maroc">Maroc</option> 
                    <option value="autre">Autre</option> 
                </optgroup><br>
</select>
                <h3>Quel est votre niveau de satisfaction global du bar Footx?</h3>
                <input type="radio" id="tresbien" name="appreciation" value="tresbien" required>
                <label for="tresbien">Très bien</label><br>
                <input type="radio" id="bien" name="appreciation" value="bien" required>
                <label for="bien">Bien</label><br>
                <input type="radio" id="moyen" name="appreciation" value="moyen" required>
                <label for="moyen">Moyen</label><br>
                <input type="radio" id="pasbien" name="appreciation" value="pasbien" required>
                <label for="pasbien">Pas bien</label><br>
                <h3>Le bar Footx a-t-il répondu à vos attentes?</h3><br>
                <input type="radio" id="oui" name="attentes" value="oui" required>
                <label for="oui">Oui</label><br>
                <input type="radio" id="non" name="attentes" value="non" required>
                <label for="non">Non</label><br>
                <div class="form-group">
                    <label for="commentaires">Commentaires supplémentaires:</label><br>
                    <textarea id="commentaires" name="commentaires" rows="4" cols="50"></textarea><br><br>
            <input type="submit" value="Envoyer">
        </form>

        <hr>
        <h2>Les 10 derniers commentaires</h2>
        <?php
            $servername='localhost';
            $dbname='barafootx';
            $username='root';
            $password='';

            try{
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $result = $conn->query("SELECT prenom, email, commentaires FROM appreciations ORDER BY id DESC LIMIT 10");
                $commentaires = $result->fetchAll(PDO::FETCH_ASSOC);
                
                if(count($commentaires) > 0){
                    echo '<div style="margin-top: 20px;">';
                    foreach($commentaires as $comment){
                        if(!empty($comment['commentaires'])){
                            echo '<div style="background-color: #e8e8e8; padding: 10px; margin: 10px 0; border-left: 4px solid gold; color: black;">';
                            echo '<strong style="color: black;">' . htmlspecialchars($comment['prenom']) . '</strong> (' . htmlspecialchars($comment['email']) . ')<br>';
                            echo '<p style="color: black;">' . htmlspecialchars($comment['commentaires']) . '</p>';
                            echo '</div>';
                        }
                    }
                    echo '</div>';
                } else {
                    echo '<p>Aucun commentaire pour le moment.</p>';
                }
                
                $conn=null;
            }
            catch(PDOException $e){
                echo "Erreur: " . $e->getMessage();
            }
        ?>
    </body>
</html>