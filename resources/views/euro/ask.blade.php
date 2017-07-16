@extends('euro.template.template2')

@extends('euro.template.template2')



@section('menu')
    {{-- BAR CONTACT-------------}}
    @include('euro.component.menu')
    {{-- FIN BAR CONTACT-------------}}
@endsection


@section('banniere')
    {{-- BAR CONTACT-------------}}
    @include('euro.component.baniere.baniere')
    {{-- FIN BAR CONTACT-------------}}
@endsection



@section('recherche')
    {{-- BAR CONTACT-------------}}
    @include('euro.component.recherche')
    {{-- FIN BAR CONTACT-------------}}
@endsection

@section('contenue')
    {{-- BAR CONTACT-------------}}
    @include('euro.component.ask.ask')
    {{-- FIN BAR CONTACT-------------}}

    <div class="bg "></div>
@endsection

@section('solution')
    {{-- BAR CONTACT-------------}}
    @include('euro.component.solution.solution_1')
    {{-- FIN BAR CONTACT-------------}}
@endsection