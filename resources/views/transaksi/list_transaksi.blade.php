@extends('admin.layouts.admin')
@section('content')
<!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Transaksi</h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
				
				<table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th><center>Atas Nama</center></th>
                                <th><center>Meja</center></th>
                                <th><center>Tanggal Transaksi</center></th>
                                <th><center>Total</center></th>
                                <th><center>Aksi</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            
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


