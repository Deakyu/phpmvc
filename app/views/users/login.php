<?php include APPROOT.'/views/inc/header.php'; ?>
    <div class="grid">
        <div class="col-3">
            <div class="module module--empty"></div>
        </div>   
        <div class="col-6">
            <div class="module">
                <form class="form" action="<?= URLROOT.'/user/login'; ?>" method="post">
                    <h1>Login</h1>
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
                    
                 
                    <input type="submit" value="Login">
                    <a href="<?= URLROOT.'/user/register'; ?>" style="color:white;">Have an account yet? Register!</a>
                </form>
            </div>
        </div>
        <div class="col-3">
            <div class="module module--empty"></div>
        </div>    
    </div>
<?php include APPROOT.'/views/inc/footer.php'; ?>