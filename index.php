<html>
<head>
    <meta charset="utf-8">
    <title>я пыталась</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lobster&amp;subset=cyrillic-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>
<body>
    <header>
        <p>IMAGE</p>
    </header>
    <nav>
        <div>
            <p id="logo">Logo</p>
            <p id="simple">Simple text</p>
        </div>
        <div id="shop">Shop</div>
        <div>item-1</div>
        <div>item-2</div>
        <div>item-3</div>
    </nav>
    <main>
        <div id="navBlock">
            <ul> Меню
                <li>item1</li>
                <li>item2</li>
                <li>item3</li>
            </ul>
        </div>
        <div id="mainInfo">
            <?php
                for ($i=0; $i<9; $i++){
                    include ('Position');
                }
            ?>
        </div>
    </main>
    <footer>
        <p>футер-хуютер</p>
        <p>футер-хуютер</p>
        <p>футер-хуютер</p>
        <p>футер-хуютер</p>
    </footer>
</body>
</html>
