@extends('admin.layouts.admin')

@section('content')

    <div class="col-md-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Add Meja</h2>
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
				
	
                <form class="form-horizontal form-label-left" action="{{ route('meja_save') }}" method="post">
				
                    <div class="form-group">
                        <label for="nomor_meja" class="control-label col-md-3 col-sm-3 col-xs-12">Nomor Meja</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input  maxlength="11" type="text" name="nomor_meja" id="nomor_meja"
                                    value="{!! old('nomor_meja') !!}"  class="form-control"
                                    required="required" placeholder="Nomor Meja">
                        </div>
                        @if($errors->has('nomor_meja'))
                            <span class="text-danger">{!! $errors->first('nomor_meja') !!}</span>
                        @endif
                    </div>
				
                    <div class="form-group">
                        <label for="lokasi" class="control-label col-md-3 col-sm-3 col-xs-12">Lokasi</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input  maxlength="11" type="text" name="lokasi" id="lokasi"
                                    value="{!! old('nama_menu') !!}"  class="form-control"
                                    required="required" placeholder="Nama Menu">
                        </div>
                        @if($errors->has('lokasi'))
                            <span class="text-danger">{!! $errors->first('lokasi') !!}</span>
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

<!-- <script>
function tampilkan(){
  var nama_kategori=document.getElementById("form1").nama_menu.value;
  if (nama_kategori=="makanan")
    {
        document.getElementById("kategori_menu").innerHTML="<option value='Nasi Goreng'>Nasi Goreng</option><option value='Bakso'>Bakso</option>";
    }
  else if (nama_kategori=="minuman")
    {
        document.getElementById("kategori_menu").innerHTML="<option value='Teh'>Teh</option><option value='kopi'>kopi</option>";
	}
}
</script> -->
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
