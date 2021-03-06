@extends('layouts.app')

@section('body_class','nav-md')

@section('page')
    <div class="container body">
        <div class="main_container">
            @section('header')
                @include('admin.sections.navigation1')
                @include('admin.sections.header')
            @show

            @yield('left-sidebar')

            <div class="right_col" role="main">



                    @yield('content')


            </div>

            <footer>
                @include('admin.sections.footer')
            </footer>
        </div>
    </div>
@stop
@section('head')
    <link rel="shortcut icon" href="{{ asset('images/icon.jpg') }}"><title>Restoran</title>
@stop

@section('styles')
    {{ Html::style(mix('assets/admin/css/admin.css')) }}
@endsection

@section('scripts')

    {{ Html::script(mix('assets/admin/js/admin.js')) }}
@endsection