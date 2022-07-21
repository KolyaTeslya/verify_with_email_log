<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Главная страница</title>
    <style>
        p { color:  navy; }
    </style>
</head>
<body>
        <div class="sm:mb-0 self-center">
            @auth("web")
                <a href="{{route("logout")}}" class=" text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Выйти</a>
            @endauth


            @guest("web")
                    <a href="{{route("login")}}" class=" text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Войти</a>
            @endguest

        </div>
        <h1>Главная страница</h1>
</body>
</html>
