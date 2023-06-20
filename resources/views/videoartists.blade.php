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
								<div class="video-grid mysrch">
									@foreach($artists as $artist)
									<a href="{{ route('albumvideos.songs', $artist->id) }}" class="grid_2">
										<img src="{{ asset('storage/'.$artist->artist_image) }}" alt="#">
										<span><strong>{{ $artist->name }}</strong></span>
									</a>
									@endforeach
								</div><!-- video grid -->
							</li><!-- tab content -->

						</ul><!-- end tabs -->

					</div><!-- def block -->
				</div><!-- posts -->

			</div><!-- row clearfix -->
		</div><!-- end page content -->

		@endsection
@extends('.header')