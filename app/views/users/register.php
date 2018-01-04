<?php include APPROOT.'/views/inc/header.php'; ?>
    <div class="grid">
        <div class="col-3">
            <div class="module module--empty"></div>
        </div>   
        <div class="col-6">
            <div class="module">
                <form class="form" action="<?= URLROOT.'/user/register'; ?>" method="post">
                <h1>Create an Account</h1>
                    <div class="form__group">
                        <input class="form__input" type="text" name="name" id="name" value="<?= $data['name']; ?>">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label class="form__label" for="name">Name: </label>
                    </div>
                    <div class="form__group">
                        <input class="form__input" type="email" name="email" id="email" value="<?= $data['email']; ?>">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label class="form__label" for="email">Email: </label>
                    </div>
                    <div class="form__group">
                        <input class="form__input" type="password" name="password" id="password" value="<?= $data['password']; ?>">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label class="form__label" for="password">Password: </label>
                    </div>
                    <div class="form__group">
                        <input class="form__input" type="password" name="confirm_password" id="confirm_password" value="<?= $data['confirm_password']; ?>">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label class="form__label" for="confirm_password">Confirm Password: </label>
                    </div>


                    <input type="submit" value="Register">
                    <a href="<?= URLROOT.'/user/login'; ?>" style="color:white;">Have an account? Log In</a>
                </form>
                <ul>
                    <?php foreach($data as $key=>$value): ?>
                        <?php if(strpos($key, '_err') !== false && !empty($value)): ?>
                            <li><?= "{$key}: {$value}"; ?></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="col-3">
            <div class="module module--empty"></div>
        </div>    
    </div>
<?php include APPROOT.'/views/inc/footer.php'; ?>