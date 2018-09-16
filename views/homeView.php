<?php
    $pageTitle = "Home";
?>

<?php ob_start();
    echo '
        <h1>Home</h1>
    ';
$mainHeader = ob_get_clean();?>

<?php ob_start();
    echo '
        <ul>
            <li><a href="?action=inscription">Inscription</a></li>
        </ul>
    ';
$mainNav = ob_get_clean();?>

<?php ob_start();
    echo '
        <article>
            <h2>Article 1</h2>
            <p>Contenu de l\'article 1.</p>
        </article>
    ';
$mainContent = ob_get_clean();?>

<?php ob_start();
    echo '
        <fieldset>
            <legend>Menu</legend>
            <ul>
                <li><a href="?action=inscription">Inscription</a></li>
            </ul>
        </fieldset>
    ';
$mainAside = ob_get_clean();?>

<?php ob_start();
    echo '
        <p>Contenu du footer...</p>
    ';
$mainFooter = ob_get_clean();?>
<?php require('templates/gridTemplate.php'); ?>