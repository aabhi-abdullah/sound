@extends('footer')
@section('content')
		<div class="under_header">
			<img src="{{asset('sound')}}/images/assets/breadcrumbs10.png" alt="#">
		</div><!-- under header -->
		
		<div class="page-content back_to_up" id="main-content">
			<div class="row row-fluid clearfix mbf">
				<div class="posts">
					<div class="def-block">
						<ul class="tabs">
							<li><a href="#Latest" class="active">All Musics</a></li>
							<li><a href="#Albums">Album</a></li>
							<li><a href="#Artists">Artist</a></li>
							<li><a href="#Genres">Genre</a></li>
							<li><a href="#Year">Year</a></li>
							<li><a href="#Language">Language</a></li>
						</ul><!-- tabs -->
		
						<ul class="tabs-content">
							<div id="no-results" style="display: none;">No Results Found</div>
							<li id="Latest" class="active">
								<div class="post no-border no-mp clearfix">
									<ul class="tab-content-items">
										@foreach($Audios as $a)
										<li class="grid_4 mysrch">
											<a class="m-thumbnail" href="{{'playmusic/'.$a['id']}}"><img width="50" height="50" src="{{asset('storage')}}/{{$a['image']}}" alt="#"></a>
											<h3><a href="{{'playmusic/'.$a['id']}}">{{$a['title']}}</a></h3>
											<span>{{$a['artist']}}</span>
											<span>{{$a['releasedate']}}</span>
										</li>
										@endforeach
									</ul>
								</div><!-- latest -->
							</li><!-- tab content -->
		
							<li id="Albums">
								<div class="mp3-albums">
									@foreach($albums as $album)
									<a href="{{ route('albums.songs', ['album' => $album->name]) }}" class="grid_2 mysrch">
										<img src="{{ asset('storage/'.$album->album_image) }}" alt="#" class="mti">
										<span><strong>{{ $album->name }}</strong></span>
									</a>
									@endforeach
								</div><!-- mp3 albums -->
							</li><!-- tab content -->
							<li id="Artists">
								<div class="mp3-albums">
									@foreach($artists as $artist)
									<a href="{{ route('artists.songs', $artist->id) }}" class="grid_2 mysrch">
										<img src="{{ asset('storage/'.$artist->artist_image) }}" alt="#" class="mti">
										<span><strong>{{ $artist->name }}</strong></span>
									</a>
									@endforeach
								</div><!-- mp3 albums -->
							</li><!-- tab content -->
							<li id="Genres">
								<div class="mp3-albums">
									@foreach($genres as $genre)
									<a href="{{ route('songs.by.genre', ['genre' => $genre->genre]) }}" class="grid_2 mysrch">
										<img src="{{ asset('storage/'.$genre->image) }}" alt="#" class="mti">
										<span><strong>{{ $genre->genre }}</strong></span>
									</a>
									@endforeach
								</div><!-- mp3 albums -->
							</li><!-- tab content -->
							<li id="Year">
								<div class="mp3-albums">
									@foreach($years as $year)
									<a href="{{ route('yearsongs', ['year' => $year->name]) }}" class="grid_2 mysrch">
										<img src="{{ asset('storage/' . $year->year_image) }}" alt="#" class="mti">
										<span><strong>{{ $year->name }}</strong></span>
									</a>
									@endforeach
								</div><!-- mp3 albums -->
							</li><!-- tab content -->
							<li id="Language">
								<div class="mp3-albums">
									@foreach($languages as $language)
									<a href="{{ route('songs.by.language', ['language' => $language->language]) }}" class="grid_2 mysrch">
										<img src="{{ asset('storage/' . $language->image) }}" alt="#" class="mti">
										<span><strong>{{ $language->language }}</strong></span>
									</a>
									@endforeach
								</div><!-- mp3 albums -->
							</li><!-- tab content -->
						</ul><!-- end tabs -->
					</div><!-- def block -->
				</div><!-- span8 posts -->
			</div><!-- row clearfix -->
		</div><!-- end page content -->
	
		{{-- <div class="page-content back_to_up" >
			<div class="row row-fluid clearfix mbf mysrch" style="margin-top: 11.2rem;">
				<div class="posts">
					<div class="def-block">
						<div class="post no-border no-mp clearfix">
						<h2 id="search-heading" style="display: none;">Search Results</h2>
							<div class="tab-content-items" id="search-results" style="display: none;">
								<!-- Yahaan search ke parinam show honge -->
							</div><!-- tab-content-items -->
						</div>
						
					</div><!-- def-block -->
				</div><!-- posts -->
			</div><!-- row clearfix -->
		</div><!-- page-content --> --}}
		
		@endsection
@extends('.header')