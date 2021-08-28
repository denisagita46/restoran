@extends('admin.layouts.admin')
@section('content')
<!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>List Menu</h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
		
		<a href="{{ route('form_menu_create') }}" class="btn btn-primary"><span class="fa fa-plus"></span> Tambah Data</a>
                <a href="" class="btn btn-primary"><span class="fa fa-print"></span> Export To Excel</a>
				
                @if(count($table_menu) > 0)

                <div class="title_right">
                    <div class="col-md-2 col-sm-2 form-group pull-right top_search">
                        <div class="input-group">
                            <form action="{{ url('cari_menu') }}" method="GET">
                                {{ @csrf_field() }}
                                <input type="text" class="form-control" name="nama_menu" placeholder="Pencarian...">
                            </form>
                        </div>
                    </div>
                </div>

		<table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th><center>Kategori Menu</center></th>
                                <th><center>Nama Menu</center></th>
                                <th><center>Harga</center></th>
                                <th><center>Deskripsi</center></th>
                                <th><center>Action</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($table_menu as $k => $menu)
                                <tr>
                                    <th>{{ $k+1 }}</th>
                                        <th scope="row"> {{ $menu->kategori_menu }}</th>
                                        <td>{{ $menu->nama_menu }}</td>
                                        <td>{{ $menu->harga }}</td>
                                        <td>{{ $menu->deskripsi }}</td>
					<td><center> 
						<a href="" class="btn btn-primary"><span class="fa fa-check"> View |</a>
					        <a href="" class="btn btn-warning"><span class="fa fa-edit"> Edit</a>
						<a href=""  onclick="return confirm('Yakin mau hapus data ini?')" class="btn btn-danger"><span class="fa fa-trash"> Delete |</a>
					</center></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                @endif
            </div>
            {{ $table_menu->links() }}
        </div>
    </div>    
</script>

@endsection

@section('scripts')
    @parent
    {{ Html::script(mix('assets/admin/js/dashboard.js')) }}
@endsection

@section('styles')
    @parent
    {{ Html::style(mix('assets/admin/css/dashboard.css')) }}
@endsection


