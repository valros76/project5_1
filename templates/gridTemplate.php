<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $pageTitle; ?></title>
</head>
<body>
    <div class="wrapper">
        <header class="main-header">
            <?= $mainHeader; ?>
        </header>

        <section class="main-content">
            <?= $mainContent; ?>
        </section>

        <aside class="main-side">
            <?= $mainAside; ?>
        </aside>

        <footer class="main-footer">
            <?= $mainFooter; ?>
        </footer>
    </div>
</body>
</html>