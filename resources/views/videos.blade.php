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
							<li><a href="#Latest" class="active">All Videos</a></li>
							<li><a href="#Albums">Album</a></li>
							<li><a href="#Artists">Artist</a></li>
							<li><a href="#Years">Years</a></li>
							<li><a href="#Genre">Genres</a></li>
							<li><a href="#Language">Language</a></li>
						</ul><!-- tabs -->
		
						<ul class="tabs-content">
							<div id="no-results" style="display: none;">No Results Found</div>
							<li id="Latest" class="active">
								@foreach($Videos as $v)
								<div class="mitem grid_3 mb mysrch">
									<a href="{{'playvideo/'.$v['id']}}">
										<img src="{{asset('storage')}}/{{$v['thumbnailimage']}}" class="vci" alt="#">
										<span class="cat">{{ $v['language'] }}</span>
										<h3>{{$v['title']}}<small>{{$v['artist']}}</small></h3>
									</a>
								</div>
								@endforeach
							</li><!-- tab content -->
		
							<li id="Albums">
								<div class="video-grid">
									@foreach($albums as $album)
									<a href="{{ route('albumvideos.songs', ['id' => $album->id]) }}" class="grid_2 mysrch">
										<img src="{{ asset('storage/'.$album->album_image) }}" alt="#" class="mti">
										<span><strong>{{ $album->name }}</strong></span>
									</a>
									@endforeach
								</div><!-- video grid -->
							</li><!-- tab content -->
							<li id="Artists">
								<div class="video-grid">
									@foreach($artists as $artist)
									<a href="{{ route('videos.songs', $artist->id) }}" class="grid_3 mysrch">
										<img src="{{ asset('storage/'.$artist->artist_image) }}" alt="#" class="vci">
										<span><strong>{{ $artist->name }}</strong>{{ $artist->releasedate }}</span>
									</a>
									@endforeach
								</div><!-- video grid -->
							</li><!-- tab content -->
							<li id="Years">
								<div class="video-grid">
									@foreach($years as $year)
									<a href="{{ route('yearvideosongs', $year->name) }}" class="grid_3 mysrch">
										<img src="{{ asset('storage/'.$year->year_image) }}" alt="#" class="vci">
										<span><strong>{{ $year->name }}</strong>{{ $year->releasedate }}</span>
									</a>
									@endforeach
								</div><!-- video grid -->
							</li><!-- tab content -->
							<li id="Genre">
								<div class="video-grid">
									@foreach($genres as $genre)
									<a href="{{ route('video.by.genre', ['genre' => $genre->genre]) }}" class="grid_3 mysrch">
										<img src="{{ asset('storage/'.$genre->thumbnailimage) }}" alt="#" class="vci">
										<span><strong>{{ $genre->genre }}</strong>{{ $genre->releasedate }}</span>
									</a>
									@endforeach
								</div><!-- video grid -->
							</li><!-- tab content -->
							<li id="Language">
								<div class="video-grid">
									@foreach($languages as $language)
									<a href="{{ route('videolanguages', ['language' => $language->language]) }}" class="grid_3 mysrch">
										<img src="{{ asset('storage/'.$language->thumbnailimage) }}" alt="#" class="vci">
										<span><strong>{{ $language->language }}</strong>{{ $language->releasedate }}</span>
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