@extends('admin.layouts.admin')

@section('content')

    <div class="col-md-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Add Pengguna</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <br />
                <form class="form-horizontal form-label-left" action="{{ route('pengguna_save') }}" method="post">

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Lengkap</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="name" id="name" value="{!! old('name') !!}"
                                   class="form-control" required="required"
                                   placeholder="Nama Lengkap">
                        </div>
                        @if($errors->has('name'))
                            <span class="text-danger">{!! $errors->first('name') !!}</span>
                        @endif
                    </div>
					
                    <div class="form-group">
                        <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input  type="text" name="email" id="email"
                                    value="{!! old('email') !!}"  class="form-control"
                                    required="required" placeholder="Email">
                        </div>
                        @if($errors->has('email'))
                            <span class="text-danger">{!! $errors->first('email') !!}</span>
                        @endif
                    </div>


                    <div class="form-group">
                        <label for="password" class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input  type="password" name="password" id="password"
                                    value="{!! old('password') !!}"  class="form-control"
                                    required="required" placeholder="password">
                        </div>
                        @if($errors->has('password'))
                            <span class="text-danger">{!! $errors->first('password') !!}</span>
                        @endif
                    </div>
					
                    <div class="form-group">
                        <label for="confirm-password" class="control-label col-md-3 col-sm-3 col-xs-12">Confirm Password</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input  type="password" name="password_confirmation" id="confirm-password"
                                    class="form-control"
                                    required="required" placeholder="Confirm Password">
                        </div>
                    </div>
					
					<div class="form-group">
						<label for="role"  class="control-label col-md-3 col-sm-3 col-xs-12">Role</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						<select name="role" class="form-control" id="role">
							<option>--choose--</option>
							<option value="admin">admin</option>
							<option value="user">user</option>
						</select>
						</div>
					</div>
					
                    @csrf
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">

                            <button type="submit" class="btn btn-success">Create</button>
                        </div>
                    </div>
                </form>
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
