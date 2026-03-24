<?php
$images = array(
    array('url' => 'images/image1.jpg', 'titre' => 'Image 1', 'description' => 'Description de l\'image 1'),
    array('url' => 'images/image2.jpg', 'titre' => 'Image 2', 'description' => 'Description de l\'image 2'),
    array('url' => 'images/image3.jpg', 'titre' => 'Image 3', 'description' => 'Description de l\'image 3'),
    array('url' => 'images/image4.jpg', 'titre' => 'Image 4', 'description' => 'Description de l\'image 4'),
    array('url' => 'images/image5.jpg', 'titre' => 'Image 5', 'description' => 'Description de l\'image 5'),
    array('url' => 'images/image6.jpg', 'titre' => 'Image 6', 'description' => 'Description de l\'image 6'),
);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie d'Images</title>
    <link rel="stylesheet" href="cssbar.css">
</head>
<body>
    <?php include 'nav.php'; ?>

    <div class="container-galerie">
        <h2 class="titre-galerie">Galerie</h2>
        
        <div class="galerie">
            <?php foreach($images as $image): ?>
                <div class="carte-image">
                    <div class="image-wrapper">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['titre']; ?>" class="image-principale">
                        <div class="overlay">
                            <button class="btn-zoom">Voir plus</button>
                        </div>
                    </div>
                    <div class="contenu-carte">
                        <h3><?php echo $image['titre']; ?></h3>
                        <p><?php echo $image['description']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Modal pour agrandir l'image -->
    <div id="modal" class="modal">
        <span class="fermer">&times;</span>
        <img class="modal-contenu" id="modal-image">
        <div id="caption"></div>
    </div>

    <script>
        var modal = document.getElementById("modal");
        var images = document.querySelectorAll(".image-principale");
        var modalImg = document.getElementById("modal-image");
        var captionText = document.getElementById("caption");
        var fermer = document.querySelector(".fermer");

        // === SUIVI DE SOURIS - Images qui bougent ===
        var cartes = document.querySelectorAll(".carte-image");
        
        cartes.forEach(function(carte) {
            carte.addEventListener("mousemove", function(e) {
                var rect = this.getBoundingClientRect();
                var x = e.clientX - rect.left - rect.width / 2;
                var y = e.clientY - rect.top - rect.height / 2;
                
                // Limite le mouvement
                var strength = 20;
                var moveX = (x / rect.width) * strength;
                var moveY = (y / rect.height) * strength;
                
                var img = this.querySelector(".image-principale");
                img.style.transform = `scale(1.1) translate(${moveX}px, ${moveY}px)`;
            });
            
            carte.addEventListener("mouseleave", function() {
                var img = this.querySelector(".image-principale");
                img.style.transform = "scale(1) translate(0, 0)";
            });
        });

        images.forEach(function(img) {
            img.addEventListener("click", function() {
                modal.style.display = "block";
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
            });
        });

        fermer.addEventListener("click", function() {
            modal.style.display = "none";
        });

        modal.addEventListener("click", function(event) {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        });

        // Zoom au click des boutons
        document.querySelectorAll(".btn-zoom").forEach(function(btn) {
            btn.addEventListener("click", function(event) {
                event.stopPropagation();
                var img = this.closest(".image-wrapper").querySelector(".image-principale");
                modal.style.display = "block";
                modalImg.src = img.src;
                captionText.innerHTML = img.alt;
            });
        });
    </script>

    <?php include 'form.php'; ?>
</body>
</html>
