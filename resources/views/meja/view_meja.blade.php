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
                                <label>Nomor_Meja</label>
                                    <input type="text" name="nomor_meja" readonly="readonly" class="form-control" placeholder="nomor_meja" value=" {{ $table_meja->nomor_meja }}">
                                    @if($errors->has('nomor_meja'))
                                        <div class="text-danger">
                                            {{ $errors->first('nomor_meja')}}
                                        </div>
                                    @endif
			                </div>

                            <div class="form-group">
                                <label>Lokasi</label>
                                    <input type="text" name="lokasi" readonly="readonly" class="form-control" placeholder="lokasi" value=" {{ $table_meja->lokasi }}">
                                    @if($errors->has('lokasi'))
                                        <div class="text-danger">
                                            {{ $errors->first('lokasi')}}
                                        </div>
                                    @endif
							</div>
							<a href="{{ route('meja') }}" class="btn btn-success">Kembali</a>
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
