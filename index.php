<?php
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - WebApp</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .carousel {
            position: relative;
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        .carousel img {
            width: 100%;
            display: none;
            animation: fade 1s;
        }
        .carousel img.active {
            display: block;
        }
        .carousel-text {
            text-align: center;
            margin-top: 10px;
            font-style: italic;
            font-size: 1rem;
        }
        @keyframes fade {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
    <script>
	let currentSlide = 0;

	function showSlide(index) {
    		const slides = document.querySelectorAll('.carousel img');
    		const texts = document.querySelectorAll('.carousel-text p');

    		// Masquer toutes les images et tous les textes
    		slides.forEach(slide => slide.classList.remove('active'));
    		texts.forEach(text => text.classList.remove('active'));

   		 // Afficher l'image et le texte correspondant
    		slides[index].classList.add('active');
    		texts[index].classList.add('active');
	}

	function nextSlide() {
    		const slides = document.querySelectorAll('.carousel img');
    		currentSlide = (currentSlide + 1) % slides.length;
    		showSlide(currentSlide);
	}

	document.addEventListener('DOMContentLoaded', () => {
    		showSlide(currentSlide);  // Afficher la première image et son texte
    		setInterval(nextSlide, 5000); // Change d'image toutes les 5 secondes
	});

	document.addEventListener('DOMContentLoaded', () => {
    		const urlForm = document.getElementById('urlForm');
    		const urlInput = document.getElementById('urlInput');
    		const urlResult = document.getElementById('urlResult');

    		urlForm.addEventListener('submit', (e) => {
        		e.preventDefault(); // Empêche l'envoi du formulaire

        		const url = urlInput.value;
        		const isValidUrl = validateUrl(url);

        		if (isValidUrl) {
            			// Si l'URL est valide
            			urlResult.textContent = `L'adresse URL "${url}" est valide.`;
            			urlResult.style.color = 'green';
        		} else {
            			// Si l'URL est invalide
            			urlResult.textContent = 'L\'adresse URL est invalide. Veuillez vérifier le format.';
            			urlResult.style.color = 'red';
        		}
    		});

    		function validateUrl(url) {
        		// Expression régulière pour valider une URL
        		const regex = /^(https?:\/\/)?([a-z0-9]+\.)+[a-z0-9]{2,6}(\/[^\s]*)?$/i;
        		return regex.test(url);
    		}
	});
    </script>
</head>
<body>
    <header>
        Bienvenue sur WebApp
    </header>
    <main>
        <h1>Accueil</h1>
        <p>Bienvenue sur notre application web sécurisée. Prenez soin de vos données !</p>

        <!-- Boutons Se connecter / S'inscrire ou message utilisateur -->
        <div class="user-actions">
            <?php if (isset($_SESSION['username'])): ?>
                <p>Bienvenue, <?php echo htmlspecialchars($_SESSION['username']); ?> !</p>
                <form action="logout.php" method="POST">
                    <button type="submit">Se déconnecter</button>
                </form>
            <?php else: ?>
                <a href="login.php" class="btn">Se connecter</a>
                <a href="register.php" class="btn">S'inscrire</a>
            <?php endif; ?>
        </div>

        <div class="test-url-section">
   		<?php if (isset($_SESSION['username'])): ?>
        		<h2>Tester une adresse Web</h2>
        		<form id="urlForm">
            			<input type="text" id="urlInput" placeholder="Entrez une adresse web" required>
            			<button type="submit" id="testButton">Tester</button>
        		</form>
        		<p id="urlResult"></p>
    		<?php endif; ?>
	</div>

	<!-- Carousel -->
        <div class="carousel">
            <img src="images/cyber1.jpg" alt="Astuce 1 : Utilisez des mots de passe forts">
            <img src="images/cyber2.jpg" alt="Astuce 2 : Mettez à jour vos logiciels">
            <img src="images/cyber3.jpg" alt="Astuce 3 : Activez la double authentification">
            <img src="images/cyber4.jpg" alt="Astuce 4 : Attention aux emails suspects">
        </div>
        <div class="carousel-text">
            <p>Astuce 1 : Utilisez des mots de passe forts</p>
            <p>Astuce 2 : Mettez à jour vos logiciels</p>
            <p>Astuce 3 : Activez la double authentification</p>
            <p>Astuce 4 : Attention aux emails suspects</p>
        </div>
    </main>
    <footer>
        &copy; 2025 WebApp - Protégez vos données
    </footer>
</body>
</html>
