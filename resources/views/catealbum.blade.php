@extends('footer')
@section('content')
		<div class="under_header">
			<img src="{{asset('sound')}}/images/assets/breadcrumbs10.png" alt="#">
		</div><!-- under header -->

		<div class="page-content back_to_up">
			<div class="row row-fluid clearfix mbf">
				<div class=" posts">
					<div class="def-block">
						<ul class="tabs">
							<li><a href="#Latest" class="active">Album</a></li>
						</ul><!-- tabs -->

						<ul class="tabs-content">
							<li id="Latest" class="active">
								<div class="post no-border no-mp clearfix">
									<ul class="tab-content-items">
									@foreach($albums as $album)
									<a href="{{ route('albums.songs', ['album' => $album->name]) }}" class="grid_2 mysrch">
										<img src="{{ asset('storage/'.$album->album_image) }}" alt="#" class="mti">
										<span><strong>{{ $album->name }}</strong></span>
									</a>
									@endforeach
									</ul>
								</div><!-- latest -->
							</li><!-- tab content -->

						</ul><!-- end tabs -->

					</div><!-- def block -->
				</div><!-- span8 posts -->

				
			</div><!-- row clearfix -->
		</div><!-- end page content -->

		@endsection
@extends('.header')