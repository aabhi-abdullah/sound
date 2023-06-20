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
							<li><a href="#Latest" class="active"> Songs </a></li>
						</ul><!-- tabs -->

						<ul class="tabs-content">
							<li id="Latest" class="active">
								<div class="post no-border no-mp clearfix">
									<ul class="tab-content-items">
                                        @foreach($songs as $song)
                                        <li class="grid_4 mysrch">
											<a class="m-thumbnail"><img width="50" height="50" src="{{asset('storage')}}/{{$song['image']}}" alt="#"></a>
											<h6><a href="{{ route('playmusic', ['id' => $song->id]) }}">{{$song['title']}}</a></h6>
											<span> {{$song['artist']}} </span>
											<span> {{$song['releasedate']}} </span>
										</li>
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