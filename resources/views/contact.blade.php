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
						<li> Contact </li>
					</ul>
				</div><!-- breadcrumb -->
			</div><!-- row -->

			<div class="row row-fluid clearfix mbf">
				<div class="def-block clearfix">
					<h4> Contact US </h4><span class="liner"></span>

					<div class="grid_6 mt">
						<p>At SOUND Group, we are dedicated to providing a top-notch entertainment experience through our website. Whether you're seeking the latest regional or English language videos and songs, we've got you covered. Feel free to reach out to us through our Contact Us page for any inquiries or collaborations. We look forward to hearing from you and bringing the best of entertainment to your fingertips.
						</p>
						<p>Feel free to contact us through our Contact Us page to explore a world of entertainment with SOUND Group.
						</p>
						<p>Phone: <strong> +923 002532514 </strong> <br> Email: <strong>info@sound.com</strong></p>
					</div><!-- end grid6 -->

					<div class="grid_6 mt">
						<form method="post" id="contactForm" action="{{url('contact/submit')}}">
							@csrf
							<div class="clearfix">
								<div class="grid_6 alpha fll"><input type="text" name="name" id="senderName" placeholder="Name *" class="requiredField" /></div>
								<div class="grid_6 omega flr"><input type="text" name="email" id="senderEmail" placeholder="Email Address *" class="requiredField email" /></div>
							</div>
							<div><textarea type="text" name="message" id="message" placeholder="Message *" class="requiredField" rows="8"></textarea></div>
							<button type="submit" id="sendMessage" name="submit">Submit</button>
							<span>  </span>
						</form><!-- end form -->
					</div><!-- end grid6 -->

				</div><!-- def block -->

			</div><!-- row clearfix -->
		</div><!-- end page content -->

			@endsection
@extends('.header')