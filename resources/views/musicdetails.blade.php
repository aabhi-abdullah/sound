@extends('footer')
@section('content')

		<div class="under_header">
			<img src="{{asset('sound')}}/images/assets/breadcrumbs2.png" alt="#">
		</div><!-- under header -->

		<div class="page-content back_to_up">
			<div class="row clearfix mb">
				<div class="breadcrumbIn">
					<ul>
						<li><a href="{{url('index')}}" class="toptip" title="Homepage"> <i class="icon-home"></i> </a></li>
						<li><a href="{{url('musics')}}"> Musics </a></li>
						<li> {{$Audios['title']}} </li>
					</ul>
				</div><!-- breadcrumb -->
			</div><!-- row -->

			<div class="row row-fluid clearfix mbf">
				<div class="span8 posts">
					<div class="def-block">
						<div class="post row-fluid clearfix">
							<div class="mbf clearfix">
								<div class="ttw-music-player">
									<div class=" ">
										<div class="album-cover">
											<span class="img"></span>
											<span class="highlight"></span>
											<img src="{{asset('storage')}}/{{$Audios['image']}}" alt="">
										</div>
										<div class="track-info">
											<h4 class="title">{{$Audios['title']}} <span>( {{$Audios['language']}} )</span></h4>
											<p class="artist-outer"><strong>By</strong><span class="artist">{{$Audios['artist']}}</span></p>
											<p class="artist-outer"><strong>Album</strong> <span class="artist">{{$Audios['album']}}</span></p>
											<p class="artist-outer"><strong>Release Date</strong> <span class="artist">{{$Audios['releasedate']}}</span></p>
											<audio src="{{asset('storage')}}/{{$Audios['music']}}" controls loop type="audio/*" class="black-theme"></audio>
										</div>
									</div>
								</div>
							</div>
							<p><strong>Lyrics</strong> {{$Audios['lyrics']}}</p>
							<div class="meta">
								<span> <i class="icon-user mi"></i> Admin </span>
								<span> <i class="icon-time mi"></i>{{$Audios['created_at']}} </span>
							</div><!-- meta -->

						</div><!-- post -->

						{{-- <div class="user-comments mbs">
							<h4>Review & Rating</h4>
							<span class="liner"></span>
							<ul class="showcomments clearfix">
								@foreach($Reviews as $review)
								<li class="clearfix">
									<h5 class="entry-title">
										<a href="#" class="title" data-toggle="modal" data-target="#editReviewModal{{ $review->id }}">
											{{ $review->author_name }}
										</a>
										<i>{{ $review->author_role }}</i>
										<span class="date">{{ $review->created_at->format('d F, Y') }}</span>
									</h5>
									<div class="rating">
										<span class="fa fa-star {{ $review->rating >= 1 ? 'checked' : '' }}"></span>
										<span class="fa fa-star {{ $review->rating >= 2 ? 'checked' : '' }}"></span>
										<span class="fa fa-star {{ $review->rating >= 3 ? 'checked' : '' }}"></span>
										<span class="fa fa-star {{ $review->rating >= 4 ? 'checked' : '' }}"></span>
										<span class="fa fa-star {{ $review->rating >= 5 ? 'checked' : '' }}"></span>
									</div>
									<p class="rcp">{{ $review->comment }}</p>
									<div class="table-data-feature">
										<a href="#" class="title" data-toggle="modal" data-target="#editReviewModal{{ $review->id }}">
											Edit
										</a>
									</div>
								</li>
						
								<!-- Edit Review Modal -->
								<div class="modal fade" id="editReviewModal{{ $review->id }}" tabindex="-1" role="dialog" aria-labelledby="editReviewModalLabel{{ $review->id }}" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="editReviewModalLabel{{ $review->id }}">Edit Review</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<form action="{{ url('update') }}" method="POST">
													@csrf
													<div class="rating">
														<input type="radio" id="star1_{{ $review->id }}" name="rating" value="1" {{ $review->rating == 1 ? 'checked' : '' }}/>
														<label for="star1_{{ $review->id }}"><span class="fa fa-star"></span></label>
														<input type="radio" id="star2_{{ $review->id }}" name="rating" value="2" {{ $review->rating == 2 ? 'checked' : '' }}/>
														<label for="star2_{{ $review->id }}"><span class="fa fa-star"></span></label>
														<input type="radio" id="star3_{{ $review->id }}" name="rating" value="3" {{ $review->rating == 3 ? 'checked' : '' }}/>
														<label for="star3_{{ $review->id }}"><span class="fa fa-star"></span></label>
														<input type="radio" id="star4_{{ $review->id }}" name="rating" value="4" {{ $review->rating == 4 ? 'checked' : '' }}/>
														<label for="star4_{{ $review->id }}"><span class="fa fa-star"></span></label>
														<input type="radio" id="star5_{{ $review->id }}" name="rating" value="5" {{ $review->rating == 5 ? 'checked' : '' }}/>
														<label for="star5_{{ $review->id }}"><span class="fa fa-star"></span></label>
													</div>
													<textarea class="textareamodal" name="comment" rows="8" placeholder="Your Review *" required>{{ $review->comment }}</textarea>
													<button type="submit" class="send-message">Submit</button>
												</form>
											</div>
										</div>
									</div>
								</div>
								<!-- End Edit Review Modal -->
								@endforeach
							</ul>
						</div> --}}
						<div class="clearfix">
							<h4>Write a review</h4>
							<span class="liner"></span>
							@auth
								<form action="{{ url('audio_reviews_submit') }}" method="post" enctype="multipart/form-data" id="commentform">
									@csrf
									<div>
										<h3 class="entry-title">
											<a href="#" class="title" name="author_name">{{ Auth::user()->name }} </a>
											<span>{{ Auth::user()->role }}</span>
										</h3>
									</div>
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
										<div class="table-data-feature">
											@auth
												<button class="btn tbutton small" onclick="toggleReviewEdit({{ $review->id }})">Edit</button>
												<form id="reviewEditForm{{ $review->id }}" action="{{ route('audio_reviews_update', $review->id) }}" method="POST" style="display: none;">
													@csrf
													<div class="form-group">
														<label for="rating{{ $review->id }}">Rating:</label>
														<select id="rating{{ $review->id }}" name="rating" class="form-control">
															@for($i = 1; $i <= 5; $i++)
																<option value="{{ $i }}" {{ $review->rating == $i ? 'selected' : '' }}>{{ $i }}</option>
															@endfor
														</select>
													</div>
													<div class="form-group">
														<label for="comment{{ $review->id }}">Review:</label>
														<textarea id="comment{{ $review->id }}" rows="4" name="comment" class="form-control" required="" style="resize: vertical; width: 98%; overflow-x: hidden; word-break: break-word;">{{ $review->comment }}</textarea>
													</div>
													<button type="submit" class="btn tbutton small">Update</button>
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
						<h4> Popular <span>Musics</span> </h4><span class="liner"></span>
						<div class="widget-content row-fluid">
							<div class="scroll-oneperson" style="height: 420px;">
								<div class="content">
									<ul class="tab-content-items">
										@for($i = 0; $i < 10; $i++)
											@if(isset($audiosongs[$i]))
											<li>
												<a class="m-thumbnail" ><img width="50" height="50" src="{{ asset('storage').'/'.$audiosongs[$i]['image'] }}" alt="#"></a>
												<h3><a href="{{ '/playmusic/'.$audiosongs[$i]['id'] }}">{{ $audiosongs[$i]['title'] }}</a></h3>
												<span> {{ $audiosongs[$i]['artist'] }}</span>
												<span> {{ $audiosongs[$i]['language'] }} </span>
											</li>
											@endif
										@endfor
										{{-- <li>
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="{{asset('sound')}}/images/assets/alexander1.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">Don’t go mary ( Remix )</a></h3>
											<span> Alexander Doe </span>
											<span> 922,250 Plays </span>
										</li>
										<li>
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="{{asset('sound')}}/images/assets/alexander2.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">That's My Kind Of Night </a></h3>
											<span> Alexander Doe </span>
											<span> 838,879 Plays </span>
										</li>
										<li>
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="{{asset('sound')}}/images/assets/alexander3.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">Magna Carta... Holy Grail </a></h3>
											<span> Alexander Doe </span>
											<span> 772,240 Plays </span>
										</li>
										<li>
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="{{asset('sound')}}/images/assets/alexander4.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">If you love me</a></h3>
											<span> Alexander Doe </span>
											<span> 668,471 Plays </span>
										</li>
										<li>
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="{{asset('sound')}}/images/assets/alexander5.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">Burning For you</a></h3>
											<span> Alexander Doe </span>
											<span> 550,105 Plays </span>
										</li>
										<li>
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="{{asset('sound')}}/images/assets/alexander6.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">Skyfool ( Dubstep Remix )</a></h3>
											<span> Alexander Doe </span>
											<span> 441,748 Plays </span>
										</li>
										<li>
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="{{asset('sound')}}/images/assets/alexander7.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">Don’t go mary ( Remix )</a></h3>
											<span> Alexander Doe </span>
											<span> 382,250 Plays </span>
										</li>
										<li>
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="{{asset('sound')}}/images/assets/alexander8.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">That's My Kind Of Night </a></h3>
											<span> Alexander Doe </span>
											<span> 228,879 Plays </span>
										</li>
										<li>
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="{{asset('sound')}}/images/assets/alexander9.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">Magna Carta... Holy Grail </a></h3>
											<span> Alexander Doe </span>
											<span> 122,240 Plays </span>
										</li>
										<li>
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="{{asset('sound')}}/images/assets/alexander10.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">If you love me</a></h3>
											<span> Alexander Doe </span>
											<span> 80,471 Plays </span>
										</li>
										<li>
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="{{asset('sound')}}/images/assets/alexander11.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">Burning For you</a></h3>
											<span> Alexander Doe </span>
											<span> 80,105 Plays </span>
										</li>
										<li>
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="{{asset('sound')}}/images/assets/alexander12.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">Skyfool ( Dubstep Remix )</a></h3>
											<span> Alexander Doe </span>
											<span> 60,748 Plays </span>
										</li>
										<li>
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="{{asset('sound')}}/images/assets/alexander13.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">Magna Carta... Holy Grail </a></h3>
											<span> Alexander Doe </span>
											<span> 509,240 Plays </span>
										</li>
										<li>
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="{{asset('sound')}}/images/assets/alexander14.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">If you love me</a></h3>
											<span> Alexander Doe </span>
											<span> 48,471 Plays </span>
										</li> --}}
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