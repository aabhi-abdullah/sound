@extends('master')
@section('body')
<h1>Welcome Dashbord</h1>
<!-- STATISTIC-->
<section class="statistic statistic2">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <a href="{{ url('dashboard/user/index') }}" class="statistic__item statistic__item--blue">
                    <h2 class="number">{{ $count1 }}</h2>
                    <span class="desc">Users</span>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-3">
                <a href="{{ url('dashboard/audio/index') }}" class="statistic__item statistic__item--green">
                    <h2 class="number">{{ $count }}</h2>
                    <span class="desc">Audio Songs</span>
                    <div class="icon">
                        <i class="fas fa-music"></i>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-3">
                <a href="{{ url('dashboard/video/index') }}" class="statistic__item statistic__item--orange">
                    <h2 class="number">{{ $count2 }}</h2>
                    <span class="desc">Video Songs</span>
                    <div class="icon">
                        <i class="fas fa-video"></i>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-3">
                <a href="{{ url('dashboard/artist/index') }}" class="statistic__item statistic__item--blue">
                    <h2 class="number">{{ $count3 }}</h2>
                    <span class="desc">Artist</span>
                    <div class="icon">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-3">
                <a href="{{ url('dashboard/album/index') }}" class="statistic__item statistic__item--red">
                    <h2 class="number">{{ $count4 }}</h2>
                    <span class="desc">Album</span>
                    <div class="icon">
                        <i class="fas fa-album"></i>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-3">
                <a href="{{ url('dashboard/year/index') }}" class="statistic__item statistic__item--red">
                    <h2 class="number">{{ $count5 }}</h2>
                    <span class="desc">Years</span>
                    <div class="icon">
                        <i class="fas fa-calendar"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- END STATISTIC-->
@stop