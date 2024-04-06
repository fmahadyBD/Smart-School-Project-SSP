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
        <h1>Today:</h1>
        <p>{{$date_of_today}}</p>
    </div>
</div>



    <div class="container">
        <div class="row">


            <form action="{{ route('Attendence') }}" method="POST">
                @csrf
                <div>
                    <h3 name="">Class: {{ $pclass }}</h3>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col">Roll</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($key as $i)
                            @if ($i->class == $pclass )
                                <tr class="table-secondary">
                                    <th scope="row">{{ $i->roll }}</th>
                                    <td>{{$i->name}}</td>
                                    <td>
                                        <input type="radio" class="btn-check present-absent"
                                            name="attendance[{{ $i->id }}]" id="present_{{ $i->id }}"
                                            value="present" autocomplete="off">
                                        <label class="btn btn-outline-success btn-sm"
                                            for="present_{{ $i->id }}"> _P_ </label>
                                        </td>
                                        <td>
                                        <input type="radio" class="btn-check present-absent"
                                            name="attendance[{{ $i->id }}]" id="absent_{{ $i->id }}"
                                            value="absent" autocomplete="off">
                                        <label class="btn btn-outline-danger btn-sm"
                                            for="absent_{{ $i->id }}"> _A_ </label>
                                    </td>
                                    <td>{{$i->roll}}</td>
                                    <td></td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>

    <div class="text-green-400">Total Present: <span id="presentCount">0</span></div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var presentAbsentRadios = document.querySelectorAll('.present-absent');

            function updateCount() {
                var presentCount = 0;
                presentAbsentRadios.forEach(function(radio) {
                    if (radio.checked && radio.value === 'present') {
                        presentCount++;
                    }
                });
                document.getElementById('presentCount').innerText = presentCount;
            }

            presentAbsentRadios.forEach(function(radio) {
                radio.addEventListener('click', updateCount);
            });
        });
    </script>
@endsection
