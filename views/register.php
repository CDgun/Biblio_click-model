<main class="wrapper">
    <form action="index.php" method="post">
        <?php if(isset($_SESSION['errors']['email'])): ?>
        <div class="">
            <p>
                <?php echo $_SESSION['errors']['email']; ?>
            </p>
        </div>
        <?php endif ?>
        <div><label for="email">Email</label><input type="email" id="email" name="email" placeholder="mail@adresse.com" value="<?php echo isset($_SESSION['old_datas']['email'])?$_SESSION['old_datas']['email']:''; ?>"></div>
        <div><label for="pseudo">Pseudo</label><input type="text" id="pseudo" name="pseudo" placeholder="pseudo"></div>
        <?php if(isset($_SESSION['errors']['password'])): ?>
        <div class="">
            <p>
                <?php echo $_SESSION['errors']['password']; ?>
            </p>
        </div>
        <?php endif ?>
        <div><label for="password">Password</label><input type="password" id="password" name="password"></div>
        <div><button type="submit">Envoyer</button></div>
        <div>
            <input type="hidden" name="a" value="postRegister">
            <input type="hidden" name="r" value="auth">
        </div>
    </form>
    <?php if(isset($_SESSION['errors'])) {
        unset($_SESSION['errors']);
    }?>
</main >
