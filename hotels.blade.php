@extends('layouts.master')
@section('content')
<section class="hot-page2-alp hot-page2-pa-sp-top">
	<div class="container">
		<div class="row inner_banner inner_banner_3 bg-none">
			<div class="hot-page2-alp-tit">
				<h1>Our Hotels </h1>
				<ul>
					<li><a href="{!! url('main') !!}">Home</a> </li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
					<li><a href="javascript:void(0)" class="bread-acti">Hotels</a> </li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="hot-page2-alp-con">
				<div class="col-md-12 hot-page2-alp-con-right">
					<div class="hot-page2-alp-con-right-1">
						<?php $hotels = (new App\Hotel)->getHotel(); ?>
						@if(isset($hotels) && count($hotels) > 0)
							@foreach($hotels as $key => $hotel)
								<div class="row">
									<div class="hot-page2-alp-r-list">
										<div class="col-md-3 hot-page2-alp-r-list-re-sp">
											<a href="javascript:void(0);">
												<div class="hot-page2-hli-1"> <img src="{!! asset('images/'.$hotel->image) !!}" alt=""> </div>
												<div class="hom-hot-av-tic hom-hot-av-tic-list"> Available Rooms: {!! $hotel->total_rooms !!} </div>
											</a>
										</div>
										<div class="col-md-9">
											<div class="hot-page2-alp-ri-p2"> <h3>{!! $hotel->hotel_name !!}</h3>
												<ul>
													<li style="width: 100%">{!! $hotel->address !!}</li>
													<li style="width: 100%">{!! $hotel->contact_number !!}</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							@endforeach
						@else
							<div class="row">
								<div class="col-md-12" style="margin-top: 30px;">
									<div class="well">
										No Data Found
									</div>
								</div>
							</div>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection