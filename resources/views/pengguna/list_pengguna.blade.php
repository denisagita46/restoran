@extends('admin.layouts.admin')
@section('content')
<!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>List Pengguna</h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if(count($users) > 0)
				
				<a href="{{ route('pengguna_create') }}" class="btn btn-primary"><span class="fa fa-plus"></span> Tambah Data</a>
                <a href="{{ route('export_excel') }}" class="btn btn-primary"><span class="fa fa-print"></span> Export To Excel</a>

                <div class="title_right">
                    <div class="col-md-2 col-sm-2 form-group pull-right top_search">
                        <div class="input-group">
                            <form action="{{ url('cari') }}" method="GET">
                                {{ @csrf_field() }}
                                <input type="text" class="form-control" name="name" placeholder="Pencarian...">
                            </form>
                        </div>
                    </div>
                </div>

				<table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th><center>Name</center></th>
                                <th><center>Email</center></th>
								<th><center>Role</center></th>
							    <th><center>Action</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $k => $user)
                                <tr>
                                    <th>{{ $k+1 }}</th>
                                        <th scope="row"> {{ $user->name }}</th>
                                        <td>{{ $user->email }}</td>
										<td>{{ $user->role }}</td>
                                    </center></td>
							        <td><center> 
									    <a data-toggle="modal" id="smallButton" data-target="#smallModal" href="" class="btn btn-primary"><span class="fa fa-check"> View |</a>
									    <a href="" class="btn btn-warning"><span class="fa fa-edit"> Edit</a>
									    <a href="/hapus/{{ $user->id }}"  onclick="return confirm('Yakin mau hapus data ini?')" class="btn btn-danger"><span class="fa fa-trash"> Delete |</a>
								    </center></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                @endif
            </div>
			 {{ $users->links() }}
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


