<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Контактная форма</title>

    <link href="https://unpkg.com/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<nav class="font-sans flex flex-col text-center content-center sm:flex-row sm:text-left sm:justify-between py-2 px-6 bg-white shadow sm:items-baseline w-full">
    <div class="mb-2 sm:mb-0 inner">

        <a href="/" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark font-sans font-bold">Контактная форма</a><br>
        <span class="text-xs text-grey-dark">Контакты:</span>

    </div>

    <div class="sm:mb-0 self-center">
        <a href="{{route("login")}}" class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Войти</a>
    </div>
</nav>

<div class="h-screen bg-white flex flex-col space-y-10 justify-center items-center">
    <div class="bg-white w-96 shadow-xl rounded p-5">
        <h1 class="text-3xl font-medium">Свяжитесь с нами</h1>

        <form class="space-y-5 mt-5" method="POST" action="{{ route("contact_form_process") }}">
            @csrf

            <input name="email" type="text" class="w-full h-12 border border-gray-800 rounded px-3  @error('email') border-red-500 @enderror" placeholder="Email" />

            @error('email')
            <p class="text-red-500"> {{ $message }}</p>
            @enderror

            <input name="text" type="text" class="w-full h-12 border border-gray-800 rounded px-3  @error('text') border-red-500 @enderror" placeholder="Сообщение" />

            @error('text')
            <p class="text-red-500"> {{ $message }}</p>
            @enderror

            <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Написать</button>
        </form>
    </div>
</div>
</body>
</html>
