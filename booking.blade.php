@extends('layouts.master')

@section('content')
	<section>
		<div class="tr-register">
			<div class="tr-regi-form">
				<h4>Booking by <span>Email</span></h4>
				<p>It's free and always will be.</p>
				<form class="col s12" action="{!! url('save-booking') !!}" method="post">
					{!! csrf_field() !!}
					<div class="row">
						<div class="input-field col s12">
							{!! (new \App\Http\Controllers\FrontController)->select('hotel_id', $hotel, $hotelId, ['id' => 'hotel_id', 'required' => 'required']) !!}
						</div>
					</div>

					<div class="row">
						<div class="input-field col s12">
							{!! (new \App\Http\Controllers\FrontController)->select('package_id', $package, $packageId, ['id' => 'package_id', 'required' => 'required']) !!}
						</div>
					</div>

					<div class="row">
						<div class="input-field col s12">
							{!! (new \App\Http\Controllers\FrontController)->select('hotel_package_id', [], null, ['id' => 'hotel_package_id', 'required' => 'required']) !!}
						</div>
					</div>

					@if(!\Illuminate\Support\Facades\Auth::check())
						<div class="row">
							<div class="input-field col m6 s12">
								@if ($errors->has('name'))
									<span class="red-text"><strong>{{ $errors->first('name') }}</strong></span>
								@endif
								<label>Name</label>
								<input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
							</div>

							<div class="input-field col m6 s12">
								@if ($errors->has('email'))
									<span class="red-text"><strong>{{ $errors->first('email') }}</strong></span>
								@endif
								<input id="email" type="email" name="email" value="{{ old('email') }}" required>
								<label>E-Mail Address</label>
							</div>
						</div>

						<div class="row">
							<div class="input-field col m6 s12">
								@if ($errors->has('password'))
									<span class="red-text"><strong>{{ $errors->first('password') }}</strong></span>
								@endif
								<label>Password</label>
								<input id="password" type="password" name="password" required>
							</div>


						</div>
					@endif

					<div class="row">
						<div class="input-field col m6 s12">
							<input type="number" name="no_of_adult" required>
							<label>No of Adults</label>
						</div>

						<div class="input-field col m6 s12">
							<input type="number" name="no_of_children" required>
							<label>No of Childrens</label>
						</div>
					</div>


					<div class="row">
						<div class="input-field col s12">
							<input type="submit" value="submit" class="waves-effect waves-light btn-large full-btn"> </div>
					</div>
				</form>
			</div>
		</div>
	</section>
@endsection