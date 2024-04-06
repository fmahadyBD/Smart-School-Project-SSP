@extends('layouts.layout')
@section('layouts.body')
    <form action="{{ route('storeNewStudent') }}" method="POST">
        @csrf

        <div class="mb-3 col-8 shadow-lg ">
            <label for="" class="form-label">Name</label>
            <input type="text" class="form-control "
            name="name" id="name" placeholder="Enter Student's name">

        </div>
        <div class="mb-3 col-8 ">
            <label for="" class="form-label">Phone</label>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Student's phone number">
        </div>
        {{-- <div class="mb-3 col-8 ">
            <label for="" class="form-label">Roll</label>
            <input type="text" class="form-control" name="roll" id="roll" placeholder="Enter Student's roll">
        </div> --}}
        <div class="mb-3 col-8 ">
            <label for="" class="form-label">Class</label>
            <input type="number" class="form-control " name="class" id="class" placeholder="Enter Student's class">
        </div>
        <div class="mb-3 col-8 ">
            <label for="" class="form-label">SEX</label>
            <select name="sexSelect" id="sexSelect" class="form-select" aria-label="Default select example">
                <option value="" selected> </option>
                <option value="M">Boy</option>
                <option value="F">Girl</option>
                <option value="T">Third</option>

            </select>
        </div>


        <div class="d-flex justify-content-start">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
@endsection
