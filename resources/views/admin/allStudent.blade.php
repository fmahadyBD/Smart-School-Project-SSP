@extends('layouts.layout')

@section('layouts.body')
    <div class="container">
        <div class="row">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Roll</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col"> Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($key as $i)
                        <tr class="table-secondary">
                            <th scope="row">{{ $i->id }}</th>
                            <th scope="row">{{$i->roll}}</th>
                            <td>{{ $i->name }}</td>
                            <td>{{ $i->phone }}</td>
                            <td>
                                <a href="" class="btn btn-success">Details</a>
                                <a href="" class="btn btn-warning">Edit</a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
