@extends('base')

@section('content')
<br><br><br>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-4 offset-md-4">
            <div class="card-header">
                <div>
                    <h1 style="text-align:center; color:rgb(27, 185, 125);">Registration Form</h1>
                </div>
<br>
                <div>
                    <form action="{{url('/register')}}" method="post">
                        {{csrf_field()}}
                        <div class="mb-3">
                            <label for="name" style="font-size:20px; color:rgb(247, 240, 240);">Full Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="email" style="font-size:20px; color:rgb(247, 240, 240);">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="password" style="font-size:20px; color:rgb(247, 240, 240);">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>

                        <button class="btn btn-success form-control" type="submit">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@stop
