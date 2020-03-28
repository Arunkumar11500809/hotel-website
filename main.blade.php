@extends('layouts.master')
@section('content')
<section>
    <div class="tourz-search">
        <div class="container">
            <div class="row">
                <div class="tourz-search-1">
                    <h1>Plan Your Travel Nowwwwwwwwwwww!</h1>
                    <p>Experience the various exciting tour and travel packages and Make hotel reservations, find vacation packages, search cheap hotels and events</p>
                    <form class="tourz-search-form" action="{!! url('hotels') !!}" method="get">
                        <div class="input-field">
                            <input type="text" name="keywords" id="select-city" class="autocomplete">
                            <label for="select-city">Enter Hotel</label>
                        </div>

                        <div class="input-field">
                            <input type="submit" value="search" class="waves-effect waves-light tourz-sear-btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END HEADER SECTION-->
<!--====== HOME PLACES ==========-->
<section>
    <div class="rows pad-bot-redu tb-space">
        <div class="container">
            <!-- TITLE & DESCRIPTION -->
            <div class="spe-title">
                <h2>Top <span>Packages</span></h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
            </div>

            <?php $packages = (new \App\Packages)->get(); ?>
            @if(isset($packages) && count($packages) > 0)
            <div>
                <?php $i = 1; ?>
                @foreach($packages as $key => $package)
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages">
                        <div class="v_place_img"> <img src="images/t{!! $i++ !!}.png" alt="Tour Booking" title="Tour Booking" /> </div>
                        <div class="b_pack rows">
                            <div class="col-md-8 col-sm-8">
                                <h4>
                                    <a href="{!! url('packages/'.$package->id) !!}">
                                        <span class="v_pl_name">
                                            {!! $package->package_name !!}
                                        </span>
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</section>

<section>
    <div class="rows tb-space">
        <div class="container events events-1" id="inner-page-title">
            <!-- TITLE & DESCRIPTION -->
            <div class="spe-title">
                <h2>Top <span>Hotels</span></h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
            </div>

            <table id="myTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Hotel</th>
                        <th>Contact Number</th>
                        <th>Location</th>
                    </tr>
                </thead>
                <?php $hotels = (new \App\Hotel)->getHotel(); ?>
                @if(isset($hotels) && count($hotels) > 0)
                    <tbody>
                        <?php $k = 1; ?>
                        @foreach($hotels as $key => $hotel)
                            <tr>
                                <td>{!! $k++ !!}</td>
                                <td><img src="{!! asset('images/'.$hotel->image) !!}" alt=""></td>
                                <td>{!! $hotel->hotel_name !!}</td>
                                <td>{!! $hotel->contact_number !!}</td>
                                <td>{!! $hotel->address !!}</td>
                            </tr>
                        @endforeach
                    </tbody>
                @endif
            </table>
        </div>
    </div>
</section>

@endsection