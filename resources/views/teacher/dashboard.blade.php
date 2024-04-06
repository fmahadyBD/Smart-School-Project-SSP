@extends('layouts.layout')

@section('layouts.body')
    <form action="{{ route('loadStudentData') }}" method="GET" id="loadForm">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-10">

                    Class:
                    <select name="id" id="classSelect" class="form-select" aria-label="Default select example">
                        <option value="" selected> </option>
                        <option value="6">Class Six</option>
                        <option value="7">Class Seven</option>
                        <option value="8">Class Eight</option>
                        <option value="9">Class Nine</option>
                        <option value="10">Class Ten</option>
                    </select>

                  

                </div>
                <div class="col-2">

                </div>
            </div>

        </div>
        <div class="container mt-4">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-2"><button type="submit" class="btn btn-success mr-3" form="loadForm">Load</button>

                </div>
                <div class="col-1"></div>
                <div class="col-2"><a href="#" class="btn btn-warning">Edit</a></div>
            </div>
            <div class="col-3"></div>
        </div>
    </form>
    <div class="container">
        <div class="row">
            <h4>Today:</h4>
            <h4>{{$date_of_today}}</h4>
        </div>
    </div>
@endsection
