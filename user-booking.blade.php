@extends('layouts.master')

@section('content')
    <section>
        <div class="rows tb-space">
            <div class="container events events-1" id="inner-page-title">
                <div class="spe-title">
                    <h2>Booking <span>Details</span></h2>
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
                            <th>Package</th>
                            <th>Price</th>
                            <th>Hotel</th>
                            <th>Package Type</th>
                            <th>Location</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($result) && count($result) > 0)
                            <?php $index = 1; ?>
                            @foreach($result as $key => $row)
                                <tr>
                                    <td>{!! $index++ !!}</td>
                                    <td>{!! $row->title !!}</td>
                                    <td>{!! $row->price !!}</td>
                                    <td>{!! $row->hotel_name !!}</td>
                                    <td>{!! $row->package_name !!}</td>
                                    <td>{!! $row->address !!}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7"></td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection