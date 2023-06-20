@extends('footer')
@section('content')

		<div class="under_header">
			<img src="{{asset('sound')}}/images/assets/breadcrumbs14.png" alt="#">
		</div><!-- under header -->

		<div class="page-content back_to_up">
			<div class="row row-fluid clearfix mbf">
				<div class="posts">
					<div class="def-block">
						<ul class="tabs">
							<li><a href="#Featured" class="active">Categories</a></li>
						</ul><!-- tabs -->

						<ul class="tabs-content">

							<li id="Featured" class="active">
								<div class="video-grid">
									<div class="grid-container">
									<a href="{{url('cateartist')}}" class="grid_3">
										<img src="{{ asset('sound') }}/images/assets/musicartist.png" class="vci" alt="#">
										<span><strong>Music Artists</strong></span>
									</a>
									<a href="{{url('catealbum')}}" class="grid_3">
										<img src="{{ asset('sound') }}/images/assets/musicalbum.png" class="vci" alt="#">
										<span><strong>Music Albums</strong></span>
									</a>
									<a href="{{url('cateyears')}}" class="grid_3">
										<img src="{{ asset('sound') }}/images/assets/musicyear.png" class="vci" alt="#">
										<span><strong>Music Years</strong></span>
									</a>
									<a href="{{url('catevideoartist')}}" class="grid_3">
										<img src="{{ asset('sound') }}/images/assets/videoartist.png" class="vci" alt="#">
										<span><strong>Video Artists</strong></span>
									</a>
									<a href="{{url('catevideoalbum')}}" class="grid_3">
										<img src="{{ asset('sound') }}/images/assets/videoalbum.png" class="vci" alt="#">
										<span><strong>Video Albums</strong></span>
									</a>
									<a href="{{url('catevideoyears')}}" class="grid_3">
										<img src="{{ asset('sound') }}/images/assets/videoyears.png" class="vci" alt="#">
										<span><strong>Video Years</strong></span>
									</a>
									
								</div><!-- video grid -->
							</li><!-- tab content -->

						</ul><!-- end tabs -->

					</div><!-- def block -->
				</div><!-- posts -->

			</div><!-- row clearfix -->
		</div><!-- end page content -->

@endsection
@extends('.header')