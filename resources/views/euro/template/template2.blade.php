<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Eurocomputer</title>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>
<body>
<div id="app">

    @include('euro.links')


    {{-- BAR CONTACT-------------}}
    @include('euro.component.contact')

    {{-- FIN BAR CONTACT-------------}}

    {{-- LOGO / MENU-------------}}
    @yield('menu')

    {{-- FIN LOGO / MENU-------------}}

    {{-- BANNIERE-------------}}
    @yield('banniere')
    {{-- FIN BANNIERE-------------}}


    {{-- RECERCHE-------------}}
    @yield('vuejs')
    {{-- FIN RECERCHE-------------}}

    {{-- RECERCHE-------------}}
    @yield('recherche')
    {{-- FIN RECERCHE-------------}}

    {{-- CONTENUE-------------}}
    @yield('contenue')
    {{-- CONTENUE-------------}}


    {{-- SOLUTIONS  / PRODUITS-------------}}
    @yield('solution')
    {{-- FIN SOLUTIONS  / PRODUITS-------------}}
</div>


<br><br><br><br>
<script src="{{ mix('/js/app.js') }}"></script>
</body>

</html>
