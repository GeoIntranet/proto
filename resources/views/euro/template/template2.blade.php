<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eurocomputer</title>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>
<body>
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



{{-- CONTENUE-------------}}
@yield('contenue')
{{-- CONTENUE-------------}}


{{-- SOLUTIONS  / PRODUITS-------------}}
@yield('solution')
{{-- FIN SOLUTIONS  / PRODUITS-------------}}

<br><br><br><br>

</body>

</html>
