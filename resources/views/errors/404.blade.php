@extends('errors::minimal')
@section('title', __('Ошибка 404 - Страница не найдена'))
@section('code', '404')
@section('message', __('Страница не найдена. Возможно был неправильно задан запрос или Вы не вошли в личный кабинет. Проверьте правильно входа и отпишите администрации.'))
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>

</body>
</html>
