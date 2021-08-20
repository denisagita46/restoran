@extends('admin.layouts.admin')

@section('content')

   
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div id="log_activity" class="dashboard_graph">
                Welcome To Dashboard
            </div>
            <br/>
        </div>
    </div>

@endsection
@section('scripts')
    @parent
    {{ Html::script(mix('assets/admin/js/dashboard.js')) }}
@endsection

@section('styles')
    @parent
    {{ Html::style(mix('assets/admin/css/dashboard.css')) }}
@endsection
