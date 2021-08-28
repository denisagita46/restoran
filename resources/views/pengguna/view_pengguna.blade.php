@extends('admin.layouts.admin')

@section('content')

    <div class="container">
	    <div class="row">
	        <div class="col-md-6">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
	            <fieldset>
		            <legend><center>VIEW</center></legend>
							<div class="form-group">
                                <label>Nama</label>
                                    <input type="text" name="name" readonly="readonly" class="form-control" placeholder="Nama Pengguna" value=" {{ $user->name }}">
                                    @if($errors->has('name'))
                                        <div class="text-danger">
                                            {{ $errors->first('name')}}
                                        </div>
                                    @endif
			                </div>

                            <div class="form-group">
                                <label>Email</label>
                                    <input type="text" name="email" readonly="readonly" class="form-control" placeholder="lokasi" value=" {{ $user->email }}">
                                    @if($errors->has('email'))
                                        <div class="text-danger">
                                            {{ $errors->first('email')}}
                                        </div>
                                    @endif
							</div>
							
							 <div class="form-group">
                                <label>Role</label>
                                    <input type="text" name="role" readonly="readonly" class="form-control" placeholder="lokasi" value=" {{ $user->role }}">
                                    @if($errors->has('role'))
                                        <div class="text-danger">
                                            {{ $errors->first('role')}}
                                        </div>
                                    @endif
							</div>
							
							<a href="{{ route('pengguna') }}" class="btn btn-success">Kembali</a>
                </fieldset>
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
