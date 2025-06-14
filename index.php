<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathis VOSGIEN - Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <script src="script.js"></script>
</head>

<body>
    <div id="loader">
        <div class="spinner"></div>
        <p>Chargement en cours...</p>
    </div>

    <div class="flecheUp">
        <a href="#header"><img src="img/logo/fleche-droite.png" alt=""></a>
    </div>
    <header id="header">
        <a href="#header" class="a_unset">
            <h1>MV</h1>
        </a>

        <button class="burger" aria-label="Menu">
            <span></span><span></span><span></span>
        </button>

        <nav>
            <ul class="nav-links">
                <li><a href="#apropos">À propos</a></li>
                <li><a href="#competences">Compétences</a></li>
                <li><a href="#projets">Projets</a></li>
                <li><a href="#experiences">Expériences</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="apropos" class="apropos">
        <div class="avatar">
            <img src="https://avatars.githubusercontent.com/u/84449523?v=4" alt="">
        </div>
        <div class="presentation">
            <h1>Mathis Vosgien</h1>
            <p>Développeur FullStack Junior basé à Paris. Passionné de développement web, je suis actuellemnt en stage du 2 au 27 juin 2025 chez MozArtsduWeb à Chantilly. Je suis étudiant au Lycée Saint Vincent à Senlis. Vous trouverez mon CV au format PDF ci-dessous.</p>
            <div class="logo">
                <a href="https://github.com/mathis-vosgien" target="_blank"><img src="img/logo/github.png" alt=""></a>
                <a href="https://www.linkedin.com/in/mathis-vosgien/" target="_blank"><img src="img/logo/linkedin.png" alt=""></a>
                <a href=""><img src="img/logo/cv.png" alt=""></a>
            </div>
        </div>
    </section>
    <section id="competences" class="competences">
        <div>
            <h1>Compétences</h1>
        </div>
        <div class="timeline-section">

            <div class="timeline-items">

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date"></div>
                    <div class="timeline-content">
                        <h3>Front-End</h3>
                        <p>
                            <strong>HTML5</strong> pour la structure, <strong>CSS3</strong> pour la mise en forme responsive, et <strong>JavaScript</strong> pour l’interactivité. Expérience avec des bibliothèques modernes comme <strong>React</strong> (en cours d'apprentissage) pour créer des interfaces dynamiques, modulaires et réactives.
                        </p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date"></div>
                    <div class="timeline-content">
                        <h3>Back-End</h3>
                        <p>
                            <strong>PHP</strong> pour le traitement des requêtes côté serveur et la logique métier, avec une base solide en <strong>MySQL</strong> pour la gestion des bases de données relationnelles.
                        </p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date"></div>
                    <div class="timeline-content">
                        <h3>Programmation Orientée Objet</h3>
                        <p>
                            Solide compréhension des principes de la <strong>programmation orientée objet</strong>, appliqués en <strong>Python</strong> et <strong>C#</strong> dans des projets concrets. <strong>Go</strong> (en cours d'apprentissage), avec une approche orientée objet adaptée à sa philosophie de conception.
                        </p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date"></div>
                    <div class="timeline-content">
                        <h3>Bureautique & Outils Collaboratifs</h3>
                        <p>
                            À l’aise avec la suite <strong>Office 365</strong> pour la création de documents professionnels, ainsi que <strong>Canva</strong> pour des visuels clairs. Expérience des outils de gestion de projet comme <strong>Trello</strong> et <strong>Notion</strong> pour organiser le travail en équipe. Maîtrise de <strong>Git & GitHub</strong> pour le versioning, avec utilisation de <strong>VS Code</strong>, <strong>Google Colab</strong> pour le développement, et <strong>WSL</strong> pour un environnement Linux sous Windows.
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <div class="resume-block">
            <ul>
                <a href="https://html.spec.whatwg.org/">
                    <li>HTML5</li>
                </a>
                <a href="https://developer.mozilla.org/fr/docs/Web/CSS">
                    <li>CSS3</li>
                </a>
                <a href="">
                    <li>JavaScript</li>
                </a>
                <a href="">
                    <li>React</li>
                </a>
                <a href="">
                    <li>PHP</li>
                </a>
                <a href="">
                    <li>mySQL</li>
                </a>
                <a href="">
                    <li>Python</li>
                </a>
                <a href="">
                    <li>C#</li>
                </a>
                <a href="">
                    <li>Go</li>
                </a>
                <a href="">
                    <li>Office 365</li>
                </a>
                <a href="">
                    <li>Canva</li>
                </a>
                <a href="">
                    <li>Trello</li>
                </a>
                <a href="">
                    <li>Notion</li>
                </a>
                <a href="">
                    <li>Git/GitHub</li>
                </a>
                <a href="">
                    <li>VS Code</li>
                </a>
                <a href="">
                    <li>Google Colab</li>
                </a>
                <a href="">
                    <li>WSL</li>
                </a>
            </ul>
        </div>

    </section>
    <section id="projets" class="projets">
        <div>
            <h1>En cours...</h1>
        </div>
    </section>
    <section id="experiences" class="experiences">
        <div>
            <h1>En cours...</h1>
        </div>
    </section>
    <section id="contact" class="contact">
        <div>
            <h1>En cours...</h1>
        </div>
    </section>

    <script>
        const burger = document.querySelector('.burger');
        const navLinks = document.querySelector('.nav-links');

        burger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    </script>


</body>

</html>