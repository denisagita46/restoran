@extends('admin.layouts.admin')

@section('content')

    <div class="col-md-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Add Pelanggan</h2>
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
				
	
                <form class="form-horizontal form-label-left" action="{{ route('pelanggan_save') }}" method="post">
				
                    <div class="form-group">
                        <label for="nama_pelanggan" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pelanggan</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input  maxlength="11" type="text" name="nama_pelanggan" id="nama_pelanggan"
                                    value="{!! old('nama_pelanggan') !!}"  class="form-control"
                                    required="required" placeholder="nama pelanggan">
                        </div>
                        @if($errors->has('nama_pelanggan'))
                            <span class="text-danger">{!! $errors->first('nama_pelanggan') !!}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="telepon" class="control-label col-md-3 col-sm-3 col-xs-12">Telepon/HP</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input  maxlength="11" type="text" name="telepon" id="telepon"
                                    value="{!! old('telepon') !!}"  class="form-control"
                                    required="required" placeholder="telepon">
                        </div>
                        @if($errors->has('telepon'))
                            <span class="text-danger">{!! $errors->first('telepon') !!}</span>
                        @endif
                    </div>

                    <div class="form-group">
					    <label for="jenis_kelamin"  class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						<select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
							<option>--choose--</option>
							<option value="Laki-laki">laki-laki</option>
							<option value="perempuan">perempuan</option>
						</select>
						</div>
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
                        <label for="alamat" class="control-label col-md-3 col-sm-3 col-xs-12">Alamat Pelanggan</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea  name="alamat" id="alamat"
                                    value="{!! old('alamat') !!}"  class="form-control"
                                    required="required" placeholder="alamat"></textarea>
                        </div>
                        @if($errors->has('alamat'))
                            <span class="text-danger">{!! $errors->first('alamat') !!}</span>
                        @endif
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
