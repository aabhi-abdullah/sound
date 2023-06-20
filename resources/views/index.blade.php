@extends('footer')
@section('content')

		<!-- Start Revolution Slider -->
			<div class="sliderr">
				<div class="tp-banner-container">
					<div class="tp-banner" >
						<ul>
							<!-- SLIDE  -->
							<li data-transition="random" data-slotamount="7" data-masterspeed="5000" >
								<!-- MAIN IMAGE -->
								<img src="{{asset('sound')}}/images/slides/new.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
								<!-- LAYERS -->
								<div class="tp-caption fade"
									data-x="566"
									data-y="306"
									data-hoffset="0"
									data-speed="700"
									data-start="800"
									data-easing="Back.easeInOut"
									data-endspeed="300"
									style="z-index: 11"><img src="{{asset('sound')}}/images/slides/slide1-cap1.png" alt=""></div>
	
								<div class="tp-caption lfb"
									data-x="566"
									data-y="305"
									data-hoffset="0"
									data-speed="700"
									data-start="1200"
									data-easing="Back.easeInOut"
									data-endspeed="300"
									style="z-index: 11"><img src="{{asset('sound')}}/images/slides/slide1-cap2.png" alt=""></div>
	
								<div class="tp-caption lft"
									data-x="741"
									data-y="305"
									data-hoffset="0"
									data-speed="700"
									data-start="1200"
									data-easing="Back.easeInOut"
									data-endspeed="300"
									style="z-index: 11"><img src="{{asset('sound')}}/images/slides/slide1-cap3.png" alt=""></div>
	
								<div class="tp-caption lfb"
									data-x="711"
									data-y="374"
									data-hoffset="0"
									data-speed="700"
									data-start="2000"
									data-easing="Back.easeInOut"
									data-endspeed="300"
									style="z-index: 11"><img src="{{asset('sound')}}/images/slides/slide1-cap4.png" alt=""></div>
	
								<div class="tp-caption lft"
									data-x="714"
									data-y="374"
									data-hoffset="0"
									data-speed="700"
									data-start="2000"
									data-easing="Back.easeInOut"
									data-endspeed="300"
									style="z-index: 11"><img src="{{asset('sound')}}/images/slides/slide1-cap5.png" alt=""></div>
							</li>
	
							<!-- SLIDE  -->
							<li data-transition="random" data-slotamount="7" data-masterspeed="5000" >
								<!-- MAIN IMAGE -->
								<img src="{{asset('sound')}}/images/slides/slider9.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
								<!-- LAYERS -->
								<div class="tp-caption modern_big_bluebg randomrotate"
									data-x="603"
									data-y="384"
									data-hoffset="0"
									data-speed="700"
									data-start="1200"
									data-easing="Back.easeInOut"
									data-endspeed="300"
									style="z-index: 11">Embrace the Melody</div>
	
								<div class="tp-caption modern_big_redbg randomrotate"
									data-x="701"
									data-y="328"
									data-hoffset="0"
									data-speed="700"
									data-start="1700"
									data-easing="Back.easeInOut"
									data-endspeed="300"
									style="z-index: 11">Experience the Power of Music</div>
							</li>
	
							<!-- SLIDE  -->
							<li data-transition="random" data-slotamount="7" data-masterspeed="5000" >
								<!-- MAIN IMAGE -->
								<img src="{{asset('sound')}}/images/slides/slider3.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
								<!-- LAYERS -->
								<div class="tp-caption modern_big_redbg randomrotate"
									data-x="560"
									data-y="253"
									data-hoffset="0"
									data-speed="700"
									data-start="1000"
									data-easing="Back.easeInOut"
									data-endspeed="300"
									style="z-index: 11">Music Where emotions find their voice.</div>
	
								<div class="tp-caption modern_m_bluebg randomrotate"
									data-x="560"
									data-y="310"
									data-hoffset="0"
									data-speed="700"
									data-start="1500"
									data-easing="Back.easeInOut"
									data-endspeed="300"
									style="z-index: 11">Unlock the magic of music.</div>
	
								<div class="tp-caption modern_m_bluebg randomrotate"
									data-x="560"
									data-y="355"
									data-hoffset="0"
									data-speed="700"
									data-start="2000"
									data-easing="Back.easeInOut"
									data-endspeed="300"
									style="z-index: 11">Let the music be your escape.</div>
	
								<div class="tp-caption modern_m_bluebg randomrotate"
									data-x="560"
									data-y="400"
									data-hoffset="0"
									data-speed="700"
									data-start="2500"
									data-easing="Back.easeInOut"
									data-endspeed="300"
									style="z-index: 11">Feel the pulse of the music.</div>
	
								<div class="tp-caption modern_m_bluebg randomrotate"
									data-x="560"
									data-y="445"
									data-hoffset="0"
									data-speed="700"
									data-start="3000"
									data-easing="Back.easeInOut"
									data-endspeed="300"
									style="z-index: 11">Discover the language of melodies.</div>
							</li>

						</ul><!-- End Slides -->
						<div class="tp-bannertimer"></div>										
					</div>					
				</div>
			</div>
		<!-- End Revolution Slider -->

		<div class="page-content">

			<div class="row clearfix mbf">
				<div class="def-block animtt" data-gen="fadeUp" style="opacity:0;">
					<h4> Musics </h4><span class="liner"></span>

					<div class="video-grid clearfix">
						<div class="mp3-carousel">
							<div class="anyClass">
								<ul class="tab-content-items">
        							@foreach($Audios as $a)
										<li>
											<a class="m-thumbnail" href="{{'play2/'.$a['id']}}"><img class="imi" src="{{asset('storage')}}/{{$a['image']}}" alt="#"></a>
											<h3><a href="{{'play2/'.$a['id']}}">{{$a['title']}} </a></h3>
											<span> {{$a['artist']}} </span>
											<span> {{$a['releasedate']}} </span>
										</li>
									@endforeach
								</ul>
							</div><!-- anyclass -->

							<div class="preve"><i class="icon-angle-left"></i></div><!-- carousel left -->
							<div class="nexte"><i class="icon-angle-right"></i></div><!-- carousel right -->

						</div><!-- carousel -->
					</div><!-- mp3s -->
				</div><!-- block -->
			</div><!-- row mp3s jcarousel -->

			<div class="row clearfix mbf">
				<div class="def-block animtt" data-gen="fadeUp" style="opacity:0;">
					<h4>Videos </h4><span class="liner"></span>

					<div class="video-grid clearfix">
						<div class="videos-carousel">
							<div class="anyClass">
								<ul>
        							@foreach($Videos as $v)
										<li>
											<a href="{{'play1/'.$v['id']}}">
												<img src="{{asset('storage')}}/{{$v['thumbnailimage']}}" class="ivt" alt="#">
												<h6 style="text-transform: capitalize"><strong>{{$v['director']}}</strong> {{$v['title']}} ( {{$v['language']}} )</h6>
												
											</a>
										</li>
									@endforeach
								</ul>
							</div><!-- anyclass -->

							<div class="preve"><i class="icon-angle-left"></i></div><!-- carousel left -->
							<div class="nexte"><i class="icon-angle-right"></i></div><!-- carousel right -->

						</div><!-- carousel -->
					</div><!-- videos -->
				</div><!-- block -->
			</div><!-- row video jcarousel -->

			<div class="row clearfix mbf">
				<div class="def-block animtt" data-gen="fadeUp" style="opacity:0;">
					<h4> New Videos </h4><span class="liner"></span>
					<div id="masonry-container" class="transitions-enabled centered clearfix">
						@for($i = 0; $i < 4; $i++)
							@if(isset($videosongs[$i]))
								<div class="mitem grid_6 mb">
									<a href="{{ 'play1/'.$videosongs[$i]['id'] }}">
										<img src="{{ asset('storage').'/'.$videosongs[$i]['thumbnailimage'] }}" class="icci" alt="#">
										<span class="cat">NEW</span>
										<h3>{{ $videosongs[$i]['title'] }}<small>{{ $videosongs[$i]['artist'] }}</small></h3>
									</a>
								</div><!-- mitem -->
							@endif
						@endfor
					</div>
				</div>
			</div>

			<div class="row clearfix mbf">
				<div class="def-block animtt" data-gen="fadeUp" style="opacity:0;">
					<h4> New Musics </h4><span class="liner"></span>
				<div id="masonry-container" class="transitions-enabled centered clearfix">
					{{-- @foreach ($songs as $song)
						<div>
							<img src="{{ $song->image }}" alt="Song Image">
							<h3>{{ $song->title }}</h3>
							<!-- Other song details -->
						</div>
					@endforeach --}}
					@for($i = 0; $i < 10; $i++)
						@if(isset($audiosongs[$i]))
							<div class="mitem grid_3 mb">
								<a href="{{ 'play2/'.$audiosongs[$i]['id'] }}">
									<img src="{{ asset('storage').'/'.$audiosongs[$i]['image'] }}" class="icfi" alt="#">
									<span class="cat">NEW</span>
									<h3>{{ $audiosongs[$i]['title'] }} ({{ $audiosongs[$i]['language'] }})<small>{{ $audiosongs[$i]['artist'] }}</small></h3>
								</a>
							</div><!-- mitem -->
						@endif
					@endfor

				</div><!-- masonry -->
				</div>
			</div><!-- row clearfix -->
			<div class="row clearfix mbf">
				<div class="def-block animtt" data-gen="fadeUp" style="opacity:0;">
					<h4> About Us </h4><span class="liner"></span>
					<p class=" mt-3 mb-3" style=" opacity: 0.7;">Welcome to SOUND Group, your ultimate destination for a captivating entertainment experience. Discover a diverse collection of new and old videos and songs, spanning both regional and English languages. Immerse yourself in the rhythm of music that transcends boundaries and indulge in a visual feast of engaging videos. Whether you're a fan of soulful melodies or high-energy beats, our website has something for everyone. Join us and embark on a thrilling journey through the vibrant world of entertainment.
					</p>
					<h4> Meet Our <span style="color:#ff0090; ">Team</span> </h4><span class="liner"></span><br>
				<div id="masonry-container" class="transitions-enabled centered clearfix">
					<div class="team-card grid_3">
						<div class="team-card-detail">
						  <img class="team-card-img  mx-auto" src="{{ asset('sound') }}/images/assets/aaabhi.JPEG">
							  <h4 >Mr Abdullah</h4><br><br>
							  <h6 >full stack developer</h6>
							  <p>I'm Abdullah, a skilled full-stack developer specializing in web application development. With a focus on creating seamless user experiences, I deliver innovative and efficient solutions for your digital needs.</p>
							  <div class="social tsi">
								<a href="#" class="bottomtip tcsi" title="Follow us on Twitter" target="_blank"><i class="icon-twitter"></i></a>
								<a href="#" class="bottomtip tcsi" title="Like us on Facebook" target="_blank"><i class="icon-facebook"></i></a>
								<a href="#" class="bottomtip tcsi" title="Linkedin" target="_blank"><i class="icon-linkedin"></i></a>
							  </div><!-- end social -->
						</div>
					 </div>
					<div class="team-card grid_3">
						<div class="team-card-detail">
						  <img class="team-card-img  mx-auto" src="{{ asset('sound') }}/images/assets/222.JPG">
							  <h4 >Mr Usama</h4><br><br>
							  <h6 >full stack developer</h6>
							  <p>I'm Usama, a skilled full-stack developer specializing in web application development. With a focus on creating seamless user experiences, I deliver innovative and efficient solutions for your digital needs.</p>
							  <div class="social tsi">
								<a href="#" class="bottomtip tcsi" title="Follow us on Twitter" target="_blank"><i class="icon-twitter"></i></a>
								<a href="#" class="bottomtip tcsi" title="Like us on Facebook" target="_blank"><i class="icon-facebook"></i></a>
								<a href="#" class="bottomtip tcsi" title="Linkedin" target="_blank"><i class="icon-linkedin"></i></a>
							  </div><!-- end social -->
						</div>
					 </div>
					<div class="team-card grid_3">
						<div class="team-card-detail">
						  <img class="team-card-img  mx-auto" src="{{ asset('sound') }}/images/assets/ubaid.JPEG">
							  <h4 >Mr Ubaid</h4><br><br>
							  <h6 >full stack developer</h6>
							  <p>I'm Ubaid, a skilled full-stack developer specializing in web application development. With a focus on creating seamless user experiences, I deliver innovative and efficient solutions for your digital needs.</p>
							  <div class="social tsi">
								<a href="#" class="bottomtip tcsi" title="Follow us on Twitter" target="_blank"><i class="icon-twitter"></i></a>
								<a href="#" class="bottomtip tcsi" title="Like us on Facebook" target="_blank"><i class="icon-facebook"></i></a>
								<a href="#" class="bottomtip tcsi" title="Linkedin" target="_blank"><i class="icon-linkedin"></i></a>
							  </div><!-- end social -->
						</div>
					 </div>
					<div class="team-card grid_3">
						<div class="team-card-detail">
						  <img class="team-card-img  mx-auto" src="{{ asset('sound') }}/images/assets/muneza.JPEG">
							  <h4 >Muneeza</h4><br><br>
							  <h6 >full stack developer</h6>
							  <p>I'm Muneeza, a skilled full-stack developer specializing in web application development. With a focus on creating seamless user experiences, I deliver innovative and efficient solutions for your digital needs.</p>
							  <div class="social tsi">
								<a href="#" class="bottomtip tcsi" title="Follow us on Twitter" target="_blank"><i class="icon-twitter"></i></a>
								<a href="#" class="bottomtip tcsi" title="Like us on Facebook" target="_blank"><i class="icon-facebook"></i></a>
								<a href="#" class="bottomtip tcsi" title="Linkedin" target="_blank"><i class="icon-linkedin"></i></a>
							  </div><!-- end social -->
						</div>
					 </div>

				</div><!-- masonry -->
				</div>
			</div><!-- row clearfix -->

			{{-- <div class="row row-fluid clearfix mbf">
				<div class="span8">
					<div class="def-block">
						<h4> Latest News </h4><span class="liner"></span>

						<div class="news row-fluid animtt" data-gen="fadeUp" style="opacity:0;">
							<div class="span5"><img class="four-radius" src="{{asset('sound')}}/images/assets/news1.jpg" alt="#"></div>
							<div class="span7">
								<h3 class="news-title"> <a href="news_single.html">Australia’s 2014 Soundwave Festival</a> </h3>
								<p>Nine Inch Nails aren't on the bill, and they won't play the fest anytime soon. Soundwave promoter AJ Maddah started a Twitter war-of-words with a few choice comments about NIN's Trent Reznor.</p>
								<div class="meta">
									<span> <i class="icon-time mi"></i>August 26, 2022 5:09 AM </span> | <span> <a href="#"><i class="icon-comments-alt"></i> 14</a> </span>
								</div><!f-- meta -->
								<a href="news_single.html" class="sign-btn tbutton small"><span>Read More</span></a>
							</div><!-- span7 -->
						</div><!-- news -->
						

						<div class="news row-fluid animtt" data-gen="fadeUp" style="opacity:0;">
							<div class="span5"><img class="four-radius" src="{{asset('sound')}}/images/assets/news2.jpg" alt="#"></div>
							<div class="span7">
								<h3 class="news-title"> <a href="news_single.html">MTV Video Music Awards 2022</a> </h3>
								<p>Nine Inch Nails aren't on the bill, and they won't play the fest anytime soon. Soundwave promoter AJ Maddah started a Twitter war-of-words with a few choice comments about NIN's Trent Reznor.</p>
								<div class="meta">
									<span> <i class="icon-time mi"></i>August 24, 2022 8:10 PM </span> | <span> <a href="#"><i class="icon-comments-alt"></i> 5</a> </span>
								</div><!-- meta -->
								<a href="news_single.html" class="sign-btn tbutton small"><span>Read More</span></a>
							</div><!-- span7 -->
						</div><!-- news -->

						<div class="news row-fluid animtt" data-gen="fadeUp" style="opacity:0;">
							<div class="span5"><img class="four-radius" src="{{asset('sound')}}/images/assets/news3.jpg" alt="#"></div>
							<div class="span7">
								<h3 class="news-title"> <a href="news_single.html">VMAs With A Round Of 'Applause'</a> </h3>
								<p>Nine Inch Nails aren't on the bill, and they won't play the fest anytime soon. Soundwave promoter AJ Maddah started a Twitter war-of-words with a few choice comments about NIN's Trent Reznor.</p>
								<div class="meta">
									<span> <i class="icon-time mi"></i>August 20, 2022 2:00 AM </span> | <span> <a href="#"><i class="icon-comments-alt"></i> 27</a> </span>
								</div><!-- meta -->
								<a href="news_single.html" class="tbutton small"><span>Read More</span></a>
							</div><!-- span7 -->
						</div><!-- news -->

						<div class="load-news tac"><a href="#" class="tbutton small"><span>Load More</span></a></div>
					</div><!-- def block -->
				</div><!-- span8 news -->

				<div class="span4">

					<div class="def-block widget animtt" data-gen="fadeUp" style="opacity:0;">
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

					<div class="def-block widget animtt" data-gen="fadeUp" style="opacity:0;">
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

				</div><!-- span4 sidebar -->
			</div><!-- row clearfix --> --}}

		</div><!-- end page content -->

		@endsection
		@extends('.header')