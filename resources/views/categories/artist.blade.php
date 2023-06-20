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
							<li><a href="#Featured" class="active"> Categories </a></li>
						</ul><!-- tabs -->

						<ul class="tabs-content">

							<li id="Featured" class="active">
								<div class="video-grid">
									@foreach($categories as $category)
									<a href="{{ route('categories.show', $category->title) }}">
										<img src="{{ asset('storage/' . $category->cat_image) }}" style="height: 160px;" alt="#">
										<span><strong>{{ $category->title }}</strong>{{ $category->descr }}</span>
									</a>
									@endforeach
									{{-- @foreach($Categories as $c)
									<a href="{{'play/'.$c['id']}}" class="grid_3">
										<img src="{{asset('storage')}}/{{$c['cat_image']}}" style="height: 160px;" alt="#">
										<span><strong>{{$c['title']}}</strong>{{$c['descr']}}</span>
									</a>
									@endforeach --}}
									<a href="video_single_wide.html" class="grid_3">
										<img src="{{asset('sound')}}/images/assets/videos6.jpg" alt="#">
										<span><strong>Dj Back</strong>I Like It (Radio Edit)</span>
									</a>
									<a href="video_single_wide.html" class="grid_3">
										<img src="{{asset('sound')}}/images/assets/videos7.jpg" alt="#">
										<span><strong>Anna</strong>Bad Dog</span>
									</a>
									<a href="video_single_wide.html" class="grid_3">
										<img src="{{asset('sound')}}/images/assets/videos8.jpg" alt="#">
										<span><strong>Armando</strong>On Time</span>
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