@extends('layouts.master')
@section('content')
	<section>
		<div class="rows inner_banner inner_banner_2">
			<div class="container">
				<h2><span>About Us</span></h2>
				<ul>
					<li><a href="{!! url('main') !!}">Home</a>
					</li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
					<li><a href="javascript:void(0)" class="bread-acti">About Us</a>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<!--====== ABOUT CONTENT ==========-->
	<section class="tourb2-ab-p-2 com-colo-abou">
		<div class="container">
			<!-- TITLE & DESCRIPTION -->
			<div class="spe-title">
				<h2>Top <span> packages</span> in this month</h2>
				<div class="title-line">
					<div class="tl-1"></div>
					<div class="tl-2"></div>
					<div class="tl-3"></div>
				</div>
				<p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
			</div>
			<div class="row tourb2-ab-p1">
				<div class="col-md-6 col-sm-6">
					<div class="tourb2-ab-p1-left">
						<h3>Hi! Welcome to Holiday Tour & Travels</h3> <span>Duis pretium gravida nisi, ut pulvinar lorem bibendum eget</span>
						<p>Aliquam blandit nisl sem. Mauris quis enim purus. Vivamus nec tortor bibendum risus placerat vulputate at gravida ante. Nam sit amet tellus enim. Phasellus consectetur porttitor lobortis. Integer cursus odio at mattis porttitor. In hac habitasse platea dictumst. Nunc sit amet cursus felis. Etiam venenatis auctor metus, et lacinia elit dignissim non. Aenean auctor semper erat porta dictum.</p>
						<p>Fusce velit sem, vestibulum ac enim ut, tincidunt pretium augue. Vestibulum purus sapien, porttitor a porta faucibus, hendrerit eget enim.</p> <a href="#" class="link-btn">Call to us: 13654 87898</a> </div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="tourb2-ab-p1-right"> <img src="{!! asset('images/iplace-8.jpg') !!}" alt="" /> </div>
				</div>
			</div>
		</div>
	</section>
	<section class="tourb2-ab-p-3 com-colo-abou">
		<div class="container">
			<div class="row tourb2-ab-p3">
				<div class="col-md-3 col-sm-6">
					<div class="tourb2-ab-p3-1 tourb2-ab-p3-com"> <span>240</span>
						<h4>Packages</h4>
						<p>Vivamus nec tortor bibendum risus placerat vulputate at gravida ante</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="tourb2-ab-p3-1 tourb2-ab-p3-com"> <span>960</span>
						<h4>Places</h4>
						<p>Vivamus nec tortor bibendum risus placerat vulputate at gravida ante</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="tourb2-ab-p3-1 tourb2-ab-p3-com"> <span>400</span>
						<h4>Events</h4>
						<p>Vivamus nec tortor bibendum risus placerat vulputate at gravida ante</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="tourb2-ab-p3-1 tourb2-ab-p3-com"> <span>120</span>
						<h4>Hotels</h4>
						<p>Vivamus nec tortor bibendum risus placerat vulputate at gravida ante</p>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection