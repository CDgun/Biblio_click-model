<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title><?php echo $data['resource_title']; ?></title>
        <link rel="stylesheet" href="css/styles.css" />
    </head>
    <body>
        <?php include('header.php');?>
        <?php include($data['view']); ?>
        <?php include('footer.php');?>
    </body>
</html>
