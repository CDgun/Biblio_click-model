<?php if (!isset($_SESSION['user'])): ?>
    <div><a href="?a=getLogin&r=auth" class="header-connect__link" >s’identifier</a> <p class="header-connect__or"> | </p> <a href="?a=getRegister&r=auth" class="header-connect__link">s’enregistrer</a></div>
<?php else: ?>
    <?php $user = json_decode($_SESSION['user']); ?>
    <div><a href="#">connecté en tant que <?php echo $user->pseudo; ?></a> - <a href="?a=getLogout&r=auth">se déconnecter</a></div> -
    <a href="?a=admin&r=page">Aller à l’admin</a>
<?php endif; ?>
