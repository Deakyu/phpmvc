<nav class="nav">
    <ul class="nav__navbar">
        <li class="nav__item"><a href="/" style="font-size:22px;font-weight:bold;"><?= SITENAME; ?></a></li>

        <?php if(isset($_SESSION['user_id'])): ?>
            <li class="nav__item nav__item--right"><a href="<?= URLROOT.'/user/logout'; ?>">LOGOUT</a></li>
        <?php else: ?>
            <li class="nav__item nav__item--right"><a href="<?= URLROOT.'/user/register'; ?>">REGISTER</a></li>
            <li class="nav__item nav__item--right"><a href="<?= URLROOT.'/user/login'; ?>">LOGIN</a></li>
        <?php endif; ?>

    </ul>
</nav>