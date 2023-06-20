@extends('footer')
@section('content')

		<div class="under_header">
			<img src="{{asset('sound')}}/images/assets/breadcrumbs12.png" alt="#">
		</div><!-- under header -->

		<div class="page-content back_to_up">
      
			<div class="row clearfix mb">
				<div class="breadcrumbIn">
					<ul>
						<li><a href="{{url('index')}}" class="toptip" title="Homepage"> <i class="icon-home"></i> </a></li>
						<li> About Us </li>
					</ul>
				</div><!-- breadcrumb -->
			</div><!-- row -->

			<div class="row row-fluid clearfix mbf">
				<div class="def-block clearfix">
					
    <!-- ABOUT US  -->
    <div class=" mx-auto">
      <h4> About Us </h4><span class="liner"></span>
      <p class=" mt-3 mb-3" style=" opacity: 0.7;">Welcome to SOUND Group, your ultimate destination for a captivating entertainment experience. Discover a diverse collection of new and old videos and songs, spanning both regional and English languages. Immerse yourself in the rhythm of music that transcends boundaries and indulge in a visual feast of engaging videos. Whether you're a fan of soulful melodies or high-energy beats, our website has something for everyone. Join us and embark on a thrilling journey through the vibrant world of entertainment.
      </p>
      <h4> Meet Our <span style="color:#ff0090; ">Team</span> </h4><span class="liner"></span>
   </div>
   <div>
   </div><br>
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
</div>

			</div><!-- row clearfix -->
		</div><!-- end page content -->

			@endsection
@extends('.header')