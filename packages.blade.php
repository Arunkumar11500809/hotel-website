@extends('layouts.master')
@section('content')

@include('layouts.banner')
<section>
	@if(isset($packages) && count($packages) > 0)
		@foreach($packages as $package => $detail)
			<div class="rows inn-page-bg com-colo">
				<div class="container inn-page-con-bg tb-space pad-bot-redu-5" id="inner-page-title">
					<div class="spe-title col-md-12">
						<h2>Top <span>{!! $package !!} </span> in this Year</h2>
						<div class="title-line">
							<div class="tl-1"></div>
							<div class="tl-2"></div>
							<div class="tl-3"></div>
						</div>
					</div>

					@foreach($detail as $key => $row)
						<div class="rows p2_2">
							<div class="col-md-6 col-sm-6 col-xs-12 p2_1">
								<img src="{!! asset('images/'.$row['image']) !!}" alt="" />
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12 p2">
								<h3>
									{!! $package .' - '.$row['title'] !!}
									<?php $rand = rand(1, 5); ?>
									<span>
										@for($i = 1; $i <= $rand; $i++)
											{!! '<i class="fa fa-star" aria-hidden="true"></i>' !!}
										@endfor
									</span>
								</h3>
								<p>{!! $row['detail'] !!}</p>
								<div class="ticket">
									<ul>
										<li>Package Price</li>
										<li>{!! $row['price'] !!} <i class="fa fa-rupee"></i></li>
									</ul>
								</div>
								<div class="featur">
									<h4>{!! $row['hotel_name'] !!}</h4>
									<p>Location - {!! $row['address'] !!}</p>
								</div>
								<div class="p2_book">
									<ul>
										<li><a href="{!! url('booking/'.$row['id']) !!}" class="link-btn">Book Now</a> </li>
									</ul>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		@endforeach
		@else
		<div class="rows inn-page-bg com-colo">
			<div class="container inn-page-con-bg tb-space pad-bot-redu-5" id="inner-page-title">
				<div class="spe-title col-md-12">
					<h2>No Data Found!</h2>
				</div>
			</div>
		</div>
	@endif
</section>
@endsection