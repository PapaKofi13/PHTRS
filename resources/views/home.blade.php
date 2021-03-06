@extends('layouts.app')

@section('background')

    <img src="{{ URL::asset('images/background.jpg') }}" class="background">

@endsection

@section('content')
    <div class="content">
    <div class="head">
        <h1 class="text-center">Found a Bump on the Road? Submit a Report!</h1>
        <br>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <br><br>
    </div>


    <div class="pothole-form" style="background: #fff url('{{ URL::asset('images/city-buildings.svg') }}') no-repeat bottom; ">

        <form action="{{ url('potholes') }}" method="post" class="form-horizontal">
            {!! csrf_field() !!}

            <!-- Pothole Form -->
            <div class="form-group" >
                <h3 class="text-center">Submit a Pothole Repair Request </h3>


                <div class="form-data">
                    <label for="pothole" class="control-label">Street Address</label>
                    <input type="text" name="street" id="street-address" class="form-control" placeholder="Street Name, District">

                    <label for="pothole" class="control-label">Location</label>
                    <select class="form-control" name="location">
                        <option>Vehicle Lane</option>
                        <option>Sidewalk</option>
                        <option>Bike Lane</option>
                        <option>Curb</option>
                    </select>

                    <label for="pothole" class="control-label">Hole Size</label>
                    <select class="form-control" name="size">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                    </select>

                    <label for="pothole" class="control-label">Email</label>
                    <input type="email" name="user_email" id="submit-email" class="form-control" placeholder="{{ 'john@example.com' }}">

                </div>
            </div>

            <div class="form-group">
                <div class="form-data">
                    <button type="submit" class="btn btn-primary btn-block">
                        <i class="fa fa-plus"></i>Report
                    </button>
                </div>
            </div>
        </form>

        @include('common.errors')

    </div>
    </div>


@endsection