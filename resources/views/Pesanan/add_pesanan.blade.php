<head>
  <script src="{{ url('js/jquery.js')}}"></script>
  <link rel="stylesheet" href="{{ url('css/bootstrap.min.css')}}">
</head>
<body>
<br>
<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Form Pemesanan</div>
    <div class="panel-body">
        <form action=" method="POST">
          <div class="control-group after-add-more">
			<br>
			<label>Atas Nama :</label>
            <input type="text" name="atas_nama">
            </br><br></br>
			<label>Menu :</label>
			<select name="nama_menu">
				@foreach ($menu as $data)
					<option value="{{ $data->nama_menu }}">{{ $data->id_menu }} . {{ $data->nama_menu}}</option>
				@endforeach
			</select>
            <label>Qty :</label>
            <input type="text" name="qty[]">
            <label>Catatan :</label>
            <input type="text" name="catatan[]">

            <button class="btn btn-success add-more" type="button">
               Add
            </button>
            <hr>
          </div>
          <button class="btn btn-success" type="submit">Submit</button>
        </form>

        <div class="copy hide">
            <div class="control-group">
              <label>Menu :</label>
              <select name="nama_menu">
				@foreach ($menu as $data)
					<option value="{{ $data->nama_menu }}">{{ $data->id_menu }} . {{ $data->nama_menu}}</option>
				@endforeach
			</select>
              <label>Qty :</label>
              <input type="text" name="qty[]">
              <label>Catatan :</label>
              <input type="text" name="catatan[]">
            
              <button class="btn btn-danger remove" type="button">Remove</button>
              <hr>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });

      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });
    });
</script>
</body>
