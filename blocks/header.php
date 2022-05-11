<header class="p-3 bg-dark text-white">
        <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/" class="nav-link px-2 text-white">МОРКОВЬ ВСЕГО МИРА</a></li>
            <li><a href="/audio.php" class="nav-link px-2 text-white">Аудио</a></li>
            <li><a href="/articles.php" class="nav-link px-2 text-white">Статьи</a></li>
            <li><a href="/about.php" class="nav-link px-2 text-white">Контакты</a></li>
            </ul>

            <div class="text-end">
            <?php
                if($_COOKIE['user'] === 'yes'):
            ?>
            <a href="/auth.php" class="btn btn-outline-light me-2">Выйти</a>
            <?php else: ?>
            <a href="/auth.php" class="btn btn-success me-2">Войти</a>
            <?php endif; ?>
            </div>
        </div>
        </div>
</header>