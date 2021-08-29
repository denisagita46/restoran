@extends('admin.layouts.admin')

@section('content')

    <div class="container">
	    <div class="row">
	        <div class="col-md-6">

	            <form method="POST" action="/edit/update/{{ $table_menu->id_menu }}" >
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
	                <fieldset>
							<div class="form-group">
                                <label>kategori menu</label>
                            
									<select id="kategori_menu" class="form-control" name="kategori_menu">			
										<option value="Makanan" {{($table_menu->kategori_menu === 'Makanan') ? 'Selected' : ''}}>Makanan</option>
										<option value="minuman" {{($table_menu->kategori_menu === 'minuman') ? 'Selected' : ''}}>minuman</option>
										<option value="cemilan" {{($table_menu->kategori_menu === 'cemilan') ? 'Selected' : ''}}>cemilan</option>
									</select>
									
									@if($errors->has('kategori_menu'))
                                        <div class="text-danger">
                                            {{ $errors->first('kategori_menu')}}
                                        </div>
                                    @endif
			                </div>
							
							<div class="form-group">
                                <label>Nama Menu</label>
                                    <input type="text" name="nama_menu" class="form-control" placeholder="nama_menu" value=" {{ $table_menu->nama_menu }}">
                                    @if($errors->has('nama_menu'))
                                        <div class="text-danger">
                                            {{ $errors->first('nama_menu')}}
                                        </div>
                                    @endif
			                </div>
							
							<div class="form-group">
                                <label>Harga</label>
                                    <input type="text" name="harga" value=" {{ $table_menu->harga }}"  class="form-control" placeholder="harga" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this)" >
                                    @if($errors->has('harga'))
                                        <div class="text-danger">
                                            {{ $errors->first('harga')}}
                                        </div>
                                    @endif
			                </div>
							
							<div class="form-group">
                                <label>Deskripsi</label>
                                    <input type="text" name="deskripsi" class="form-control" placeholder="deskripsi" value=" {{ $table_menu->deskripsi }}">
                                    @if($errors->has('deskripsi'))
                                        <div class="text-danger">
                                            {{ $errors->first('deskripsi')}}
                                        </div>
                                    @endif
			                </div>
                            
                    </fieldset>
                    <center><button type="submit" class="btn btn-success"><i class="fa fa-save"> Update</i></button>
					<a href="{{ route('menu') }}" class="btn btn-success">Kembali</a>
	            </form>
	        </div>
	    </div>
	</div>

<script>

function tandaPemisahTitik(b){
var _minus = false;
if (b<0) _minus = true;
b = b.toString();
b=b.replace(".","");
b=b.replace("-","");
c = "";
panjang = b.length;
j = 0;
for (i = panjang; i > 0; i--){
j = j + 1;
if (((j % 3) == 1) && (j != 1)){
c = b.substr(i-1,1) + "." + c;
} else {
c = b.substr(i-1,1) + c;
}
}
if (_minus) c = "-" + c ;
return c;
}

function numbersonly(ini, e){
if (e.keyCode>=49){
if(e.keyCode<=57){
a = ini.value.toString().replace(".","");
b = a.replace(/[^\d]/g,"");
b = (b=="0")?String.fromCharCode(e.keyCode):b + String.fromCharCode(e.keyCode);
ini.value = tandaPemisahTitik(b);
return false;
}
else if(e.keyCode<=105){
if(e.keyCode>=96){
//e.keycode = e.keycode - 47;
a = ini.value.toString().replace(".","");
b = a.replace(/[^\d]/g,"");
b = (b=="0")?String.fromCharCode(e.keyCode-48):b + String.fromCharCode(e.keyCode-48);
ini.value = tandaPemisahTitik(b);
//alert(e.keycode);
return false;
}
else {return false;}
}
else {
return false; }
}else if (e.keyCode==48){
a = ini.value.replace(".","") + String.fromCharCode(e.keyCode);
b = a.replace(/[^\d]/g,"");
if (parseFloat(b)!=0){
ini.value = tandaPemisahTitik(b);
return false;
} else {
return false;
}
}else if (e.keyCode==95){
a = ini.value.replace(".","") + String.fromCharCode(e.keyCode-48);
b = a.replace(/[^\d]/g,"");
if (parseFloat(b)!=0){
ini.value = tandaPemisahTitik(b);
return false;
} else {
return false;
}
}else if (e.keyCode==8 || e.keycode==46){
a = ini.value.replace(".","");
b = a.replace(/[^\d]/g,"");
b = b.substr(0,b.length -1);
if (tandaPemisahTitik(b)!=""){
ini.value = tandaPemisahTitik(b);
} else {
ini.value = "";
}

return false;
} else if (e.keyCode==9){
return true;
} else if (e.keyCode==17){
return true;
} else {
//alert (e.keyCode);
return false;
}
}

</script>
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
