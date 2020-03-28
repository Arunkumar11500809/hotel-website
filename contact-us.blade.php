@extends('layouts.master')
@section('content')
	<section>
		<div class="form form-spac rows">
			<div class="container">
				<!-- TITLE & DESCRIPTION -->
				<div class="spe-title col-md-12">
					<h2>Contact Us</h2>
					<div class="title-line">
						<div class="tl-1"></div>
						<div class="tl-2"></div>
						<div class="tl-3"></div>
					</div>
				</div>
				<div class="col-md-6 col-md-offset-3 col-xs-12 form_1 wow fadeInLeft" data-wow-duration="1s">
					<!--====== THANK YOU MESSAGE ==========-->
					<div class="succ_mess">Thank you for contacting us we will get back to you soon.</div>
					<form id="home_form" name="home_form" action="{!! url('send-mail') !!}">
						<ul>
							<li>
								<input type="text" name="ename" value="" id="ename" placeholder="Name" required> </li>
							<li>
								<input type="tel" name="emobile" value="" id="emobile" placeholder="Mobile" required> </li>
							<li>
								<input type="email" name="eemail" value="" id="eemail" placeholder="Email id" required> </li>
							<li>
								<input type="text" name="esubject" value="" id="esubject" placeholder="Subject" required> </li>
							<li>
								<input type="text" name="ecity" value="" id="ecity" placeholder="City" required> </li>
							<li>
								<input type="text" name="ecount" value="" id="ecount" placeholder="Country" required> </li>
							<li>
								<textarea name="emess" cols="40" rows="3" id="text-comment" placeholder="Enter your message"></textarea>
							</li>
							<li>
								<input type="submit" value="Submit" id="send_button">
							</li>
						</ul>
					</form>
				</div>
			</div>
		</div>
	</section>

@endsection
