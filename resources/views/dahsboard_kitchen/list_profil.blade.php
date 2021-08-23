@extends('admin.layouts.admin')
@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col col-lg-5 col-md-5">
      <div class="card card-primary card-outline">
        <div class="card-body box-profile">
          <div class="text-center">
            <center><img src="{{ asset('http://localhost:8000/images/deni.jpg') }}" alt="profil" class="profile-user-img img-responsive img-circle"></center>
          </div>
          <h3 class="profile-username text-center">{{ auth()->user()->name }}</h3>
          <p class="text-muted text-center"></p>
          <hr>
          <strong>
            <i class="fa fa-map-marker"></i>
            Alamat
          </strong>
          <p class="text-muted">
            {{ auth()->user()->alamat }}
          </p>
          <hr>
          <strong>
            <i class="fa fa-envelope-o"></i>
            Email
          </strong>
          <p class="text-muted">
            {{ auth()->user()->email }}
          </p>
          <hr>
          <strong>
            <i class="fa fa-phone-square"></i>
            No Tlp
          </strong>
          <p class="text-muted">
          {{ auth()->user()->tlp }}
          </p>
          <hr>
          <a href="" class="btn btn-primary btn-block">Setting</a>
        </div>
      </div>      
    </div>
    </div>
  </div>
</div>

    
@endsection

@section('scripts')
    @parent
    {{ Html::script(mix('assets/admin/js/dashboard.js')) }}
    {{ Html::script(mix('assets/app/js/forms.js')) }}
@endsection

@section('styles')
    @parent
    {{ Html::style(mix('assets/admin/css/dashboard.css')) }}
@endsection

@push('scripts')
    
@endpush
