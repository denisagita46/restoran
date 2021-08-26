@extends('admin.layouts.admin')

@section('content')

    <div class="container">
	    <div class="row">
	        <div class="col-md-6">

	            <form method="POST" action="/edit/update/{{ $table_meja->id_meja }}" >
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
	                <fieldset>
		                <legend><center>Edit Form Meja </center></legend>
			                <div class="form-group">
                                <label>Nomor_Meja</label>
                                    <input type="text" name="nomor_meja" class="form-control" placeholder="nomor_meja" value=" {{ $table_meja->nomor_meja }}">
                                    @if($errors->has('nomor_meja'))
                                        <div class="text-danger">
                                            {{ $errors->first('nomor_meja')}}
                                        </div>
                                    @endif
			                </div>

                              <div class="form-group">
                                <label>Nomor_Meja</label>
                                    <input type="text" name="lokasi" class="form-control" placeholder="lokasi" value=" {{ $table_meja->lokasi }}">
                                    @if($errors->has('lokasi'))
                                        <div class="text-danger">
                                            {{ $errors->first('lokasi')}}
                                        </div>
                                    @endif
			                </div>
                            
			               
                            
                    </fieldset>
                    <center><button type="submit" class="btn btn-primary"><i class="fa fa-save"> Update</i></button>
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
