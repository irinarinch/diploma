<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        @hasSection('main')
        <title>ИдёмВКино</title>
        @endif

        @hasSection('login')
        <title>Авторизация | ИдёмВКино</title>
        @endif

        <link rel="stylesheet" href="../files/admin/CSS/normalize.css">
        <link rel="stylesheet" href="../files/admin/CSS/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">        
    </head>

    <body>
        <header class="page-header">
            <h1 class="page-header__title">Идём<span>в</span>кино</h1>
            <span class="page-header__subtitle">Администраторррская</span>
        </header> 

        @yield('main')
        @yield('login')

        <script src="../files/admin/js/accordeon.js"></script>
    </body>
</html>