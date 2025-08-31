<!-- Assurez-vous d'inclure Font Awesome dans votre <head> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

<div class="social-media">
    <a href="https://www.facebook.com" target="_blank" class="social-icon facebook">
        <i class="fab fa-facebook-f"></i>
    </a>
    <a href="https://www.instagram.com" target="_blank" class="social-icon instagram">
        <i class="fab fa-instagram"></i>
    </a>
    <a href="https://www.youtube.com" target="_blank" class="social-icon youtube">
        <i class="fab fa-youtube"></i>
    </a>
    <a href="https://www.tiktok.com" target="_blank" class="social-icon tiktok">
        <i class="fab fa-tiktok"></i>
    </a>
</div>

<!-- Style simple pour les icônes -->
<style>
.social-media {
    display: flex;
    gap: 15px;
    justify-content: center; /* centrer horizontalement */
    margin: 20px 0;
}

.social-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    color: white;
    font-size: 24px;
    text-decoration: none;
    transition: transform 0.3s;
}

.social-icon:hover {
    transform: scale(1.2);
}

.facebook { background: #1877f2; }
.instagram { background: #e4405f; }
.youtube { background: #ff0000; }
.tiktok { background: #010101; }
</style>
