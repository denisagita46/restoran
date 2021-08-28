@extends('admin.layouts.admin')
@section('content')
<!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>List Meja</h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
		
		<a href="{{ route('form_meja_create') }}" class="btn btn-primary"><span class="fa fa-plus"></span> Tambah Data</a>
		<a href="" class="btn btn-primary"><span class="fa fa-print"></span> Export To Excel</a>

                <div class="title_right">
                    <div class="col-md-2 col-sm-2 form-group pull-right top_search">
                        <div class="input-group">
                            <form action="{{ url('cari_pelanggan') }}" method="GET">
                                {{ @csrf_field() }}
                                <input type="text" class="form-control" name="nama_pelanggan" placeholder="Pencarian...">
                            </form>
                        </div>
                    </div>
                </div>

		<table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th><center>Nomor Meja</center></th>
                                <th><center>lokasi</center></th>
                                <th><center>Aksi</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($table_meja as $k => $table_meja)
                                <tr>
                                    <th>{{ $k+1 }}</th>
                                        <th scope="row">{{ $table_meja->nomor_meja }}</th>
                                        <td>{{ $table_meja->lokasi }}</td>
					<td>
					<center> 
						<a href="/view/{{ $table_meja->id_meja }}" class="btn btn-primary"><span class="fa fa-check"> View |</a>
						<a href="/edit/{{ $table_meja->id_meja }}" class="btn btn-warning"><span class="fa fa-edit"> Edit</a>
						<a href="/hapus_meja/{{ $table_meja->id_meja }}"  onclick="return confirm('Yakin mau hapus data ini?')" class="btn btn-danger"><span class="fa fa-trash"> Delete |</a>
					</center></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
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


