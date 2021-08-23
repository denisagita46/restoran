<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="/home" class="site_title"></i><span>Aplkasi Restoran</span></a>
        </div>

        <div class="clearfix"></div>

        <div class="profile clearfix">
            <div class="profile_pic">
				<img src="{{ asset('images/img.jpg') }}" alt="..." class="img-circle profile_img">    
            </div>
			
            <div class="profile_info">
                <span>Welcome,</span>
				{{ session('flag=1') }}
				<h2>{{ auth()->user()->name }}</h2>
               
            </div>
        </div>
    </div>
</div>
