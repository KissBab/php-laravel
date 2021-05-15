@extends('layout.template')
@section('content')

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Action</th>

        </tr>
        </thead>
        <tbody>

        @foreach($applicants as $applicant)
        <tr>
            <td>{{$applicant->id}}</td>
            <td>{{$applicant->name}}</td>
            <td>{{$applicant->surname}}</td>
            <td>
                <a class="nav-link disabled" href="{{route('edit', $applicant->id)}}">edit</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{$applicants -> links()}}
@endsection
