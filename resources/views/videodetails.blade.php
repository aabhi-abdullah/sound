@extends('footer')
@section('content')
		<div class="under_header">
			<img src="{{asset('sound')}}/images/assets/breadcrumbs13.png" alt="#">
		</div><!-- under header -->

		<div class="page-content left-sidebar back_to_up">
			<div class="row clearfix mb">
				<div class="breadcrumbIn">
					<ul>
						<li><a href="{{url('index')}}" class="toptip" title="Homepage"> <i class="icon-home"></i> </a></li>
						<li><a href="{{url('videos')}}"> Videos </a></li>
						<li> {{$Videos['title']}} </li>
					</ul>
				</div><!-- breadcrumb -->
			</div><!-- row -->

			<div class="row row-fluid clearfix mbf">
				<div class="span8 posts">
					<div class="def-block">
						<div class="post row-fluid clearfix">
							<video src="{{asset('storage')}}/{{$Videos['video']}}" height="360" controls>VIDEO</video>
							<h4 class="post-title"> {{$Videos['title']}} <span>( {{$Videos['language']}} )</span></h4><br>
							<span><strong>Actor</strong> {{$Videos['artist']}}</span><br>
							<span><strong>Director</strong> {{$Videos['album']}}</span><br>
							<span><strong>Genre</strong> {{$Videos['genre']}}</span><br>
							<span><strong>Release Date</strong> {{$Videos['releasedate']}}</span><br>
							<p><strong>Lyrics</strong> {{$Videos['lyrics']}}</p>

							<div class="meta">
								<span> <i class="icon-user mi"></i> Admin </span>
								<span> <i class="icon-time mi"></i>{{ $Videos->created_at->format('d F, Y') }}</span>
							</div><!-- meta -->
						</div><!-- post -->
						<div class="clearfix">
							<h4>Write a review</h4><span class="liner"></span>
							@auth
							<form action="{{url('video_reviews_submit')}}" method="post" enctype="multipart/form-data" id="commentform">
								@csrf
								  @if (Auth::check())
								  {{-- <div class="thumb">
									<a href="#"><img type="file" name="author_picture" class="img-r" src="{{ Auth::user()->profile_photo_url }}" alt="#"></a>
								  </div><br> --}}
								  <div>
									<h3 class="entry-title"><a href="#" class="title" name="author_name">{{ Auth::user()->name }} </a><span>{{ Auth::user()->role }}</span></h3>
								  </div>
								@endif
								<div class="rating">
									<span class="fa fa-star" onclick="rate(1)"></span>
									<span class="fa fa-star" onclick="rate(2)"></span>
									<span class="fa fa-star" onclick="rate(3)"></span>
									<span class="fa fa-star" onclick="rate(4)"></span>
									<span class="fa fa-star" onclick="rate(5)"></span>
								</div>
								<input type="hidden" name="rating" id="rating" value="0"><br>
							  <textarea name="comment" rows="8" placeholder="Your Review *" required=""></textarea>
							  <p>
								<input name="submit" type="submit" class="send-message" value="Submit">
								<input type="hidden" name="comment_post_ID" value="6" id="comment_post_ID">
								<input type="hidden" name="comment_parent" id="comment_parent" value="0">
							  </p>
							</form>
							@else
								<h6>Please <a href="{{ route('login') }}">login</a> to submit a review.</h6>
							@endauth
						  </div>
						  
						<div class="user-comments mbs">
							<h4>Review & Rating</h4>
							<span class="liner"></span>
							<ul class="showcomments clearfix">
								@foreach($Reviews as $review)
								<li class="clearfix liner">
									<h5 class="entry-title">
										<span class="title">{{ $review->author_name }}</span>
										<i>{{ $review->author_role }}</i>
										<span class="date">{{ $review->created_at->format('d F, Y') }}</span>
									</h5>
									<div class="rating">
										@for($i = 1; $i <= 5; $i++)
										<span class="fa fa-star {{ $review->rating >= $i ? 'checked' : '' }}"></span>
										@endfor
									</div>
									<p class="rcp">{{ $review->comment }}</p>
									<div class="table-data-feature ">
										@auth
										<button class="btn tbutton small" onclick="toggleReviewEdit({{ $review->id }})">Edit</button>
										<form id="reviewEditForm{{ $review->id }}" action="{{ route('video_reviews_update', $review->id) }}" method="POST" style="display: none;">
											@csrf
											<div class="form-group">
												<label for="rating{{ $review->id }}">Rating:</label>
												<select id="rating{{ $review->id }}" name="rating" class="form-control">
													@for($i = 1; $i <= 5; $i++)
													<option value="{{ $i }}" {{ $review->rating == $i ? 'selected' : '' }}>{{ $i }}</option>
													@endfor
												</select>
											</div>
											<div class="form-group" >
												<label for="comment{{ $review->id }}">Review:</label>
												<textarea id="comment{{ $review->id }}" rows="4" name="comment" class="form-control" required="" style="resize: vertical; width: 98%; overflow-x: hidden; word-break: break-word;">{{ $review->comment }}</textarea>
											</div>
											<button type="submit" class="btn btn-primary tbutton small">Update</button>
											<button type="button" class="btn btn-secondary" onclick="toggleReviewEdit({{ $review->id }})">Cancel</button>
										</form>
										@endauth
									</div>
								</li>
								@endforeach
							</ul>
						</div>
						
						
						<script>
							function toggleReviewEdit(reviewId) {
								const reviewEditForm = document.getElementById(`reviewEditForm${reviewId}`);
								if (reviewEditForm.style.display === 'none') {
									reviewEditForm.style.display = 'block';
								} else {
									reviewEditForm.style.display = 'none';
								}
							}
						</script>
						  
						  

					</div><!-- def block -->
				</div><!-- span8 posts -->

				<div class="span4 sidebar">

					<div class="def-block widget">
						<h4> Categories </h4><span class="liner"></span>
						<div class="widget-content">
							<ul class="list">
								<li><a href="{{url('cateartist')}}"><i class="icon-caret-right"></i> Music by Artist </a></li>
								<li><a href="{{url('catealbum')}}"><i class="icon-caret-right"></i> Music by Album</a></li>
								<li><a href="{{url('cateyears')}}"><i class="icon-caret-right"></i> Music by Year</a></li>
								<li><a href="{{url('catevideoartist')}}"><i class="icon-caret-right"></i> Video by Artist</a></li>
								<li><a href="{{url('catevideoalbum')}}"><i class="icon-caret-right"></i> Video by Album</a></li>
								<li><a href="{{url('catevideoyears')}}"><i class="icon-caret-right"></i> Video by Year</a></li>
							</ul>
						</div><!-- widget content -->
					</div><!-- def block widget categories -->

					<div class="def-block widget">
						<h4> Featured Videos </h4><span class="liner"></span>
						<div class="widget-content row-fluid">
							<div class="videos clearfix flexslider">
								<ul class="slides">
									<li class="featured-video">
										<a href="video_single_wide.html">
											<img src="{{asset('sound')}}/images/assets/video1.jpg" alt="#">
											<i class="icon-play-sign"></i>
											<h3>I Know You Want Me</h3>
											<span>Fitbull</span>
										</a>
									</li><!-- slide -->
									<li class="featured-video">
										<a href="video_single_wide.html">
											<img src="{{asset('sound')}}/images/assets/video2.jpg" alt="#">
											<i class="icon-play-sign"></i>
											<h3>I Like It</h3>
											<span>Enrique</span>
										</a>
									</li><!-- slide -->
									<li class="featured-video">
										<a href="video_single_wide.html">
											<img src="{{asset('sound')}}/images/assets/video3.jpg" alt="#">
											<i class="icon-play-sign"></i>
											<h3>Tommorow</h3>
											<span>Dj Michele</span>
										</a>
									</li><!-- slide -->
								</ul>
							</div>
						</div><!-- widget content -->
					</div><!-- def block widget videos -->

					<div class="def-block widget">
						<h4> Popular Tracks </h4><span class="liner"></span>
						<div class="widget-content row-fluid">
							<div class="scroll-mp3" style="height: 220px;">
								<div class="content">
									<ul class="tab-content-items">
										<li class="clearfix">
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="{{asset('sound')}}/images/assets/thumb-mp3-1.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">Don’t go mary ( Remix )</a></h3>
											<span> Alexander </span>
											<span> 1,892,250 Plays </span>
										</li>
										<li class="clearfix">
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="{{asset('sound')}}/images/assets/thumb-mp3-2.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">That's My Kind Of Night </a></h3>
											<span> Alexander Mikoole </span>
											<span> 998,879 Plays </span>
										</li>
										<li class="clearfix">
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="{{asset('sound')}}/images/assets/thumb-mp3-3.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">Magna Carta... Holy Grail </a></h3>
											<span> Joe </span>
											<span> 792,240 Plays </span>
										</li>
										<li class="clearfix">
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="{{asset('sound')}}/images/assets/thumb-mp3-4.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">If you love me</a></h3>
											<span> Enrique </span>
											<span> 788,471 Plays </span>
										</li>
										<li class="clearfix">
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="{{asset('sound')}}/images/assets/thumb-mp3-5.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">Burning For you</a></h3>
											<span> Lura </span>
											<span> 710,105 Plays </span>
										</li>
										<li class="clearfix">
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="{{asset('sound')}}/images/assets/thumb-mp3-6.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">Skyfool ( Dubstep Remix )</a></h3>
											<span> Babel </span>
											<span> 611,748 Plays </span>
										</li>
									</ul>
								</div>
							</div>
						</div><!-- widget content -->
					</div><!-- def block widget popular items -->

					<div class="def-block widget">
						<h4> Ads </h4><span class="liner"></span>
						<div class="widget-content tac">
							<a href="#" title="Advertise"><img src="{{asset('sound')}}/images/ads1.gif" alt="#"></a>
						</div><!-- widget content -->
					</div><!-- def block widget ads -->

				</div><!-- span4 sidebar -->
			</div><!-- row clearfix -->
		</div><!-- end page content -->

		@endsection
		@extends('.header')