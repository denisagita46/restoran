@extends('admin.layouts.user')

@section('content')
<head>
    <title>Restoran</title>

</head>
    <div>Welcome to Kitchen Panel</div>
  
@endsection

@section('scripts')
    @parent
    {{ Html::script(mix('assets/admin/js/dashboard.js')) }}
@endsection

@section('styles')
    @parent
    {{ Html::style(mix('assets/admin/css/dashboard.css')) }}
@endsection
