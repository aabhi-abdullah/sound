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
							<li><a href="#Latest" class="active"> Video Songs </a></li>
						</ul><!-- tabs -->

						<ul class="tabs-content">
							<li id="Latest" class="active">
								<div class="video-grid vg">
									@if($songs->count() > 0)
									  @foreach($songs as $song)
									  <a href="{{ route('playvideo', ['id' => $song->id]) }}" class="grid_3 mysrch">
										<div class="image-container">
										  <img src="{{asset('storage')}}/{{$song['thumbnailimage']}}" style="height: 160px;" alt="#">
										  <div class="play-button-container">
											<div class="play-button-bg"></div>
											<div class="play-button">
											  <i class="fas fa-play"></i>
											</div>
										  </div>
										</div>
										<span><strong>{{$song['title']}}</strong>{{$song['releasedate']}}</span>
									  </a>
									  @endforeach
									@else
									  <p>No songs found.</p>
									@endif
								  </div><!-- video grid -->
								  
							</li><!-- tab content -->

						</ul><!-- end tabs -->

					</div><!-- def block -->
				</div><!-- posts -->

			</div><!-- row clearfix -->
		</div><!-- end page content -->

		@endsection
@extends('.header')