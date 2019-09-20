@extends('layouts.app')

@section('content')

    <h1>Ranking</h1>
    
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th >Nick</th>
                <th>Score</th>
            </tr>
        </thead>
        <tbody>
            @php
                $counter = 1;
            @endphp
            @foreach($users as $user)
            <tr>
                <th scope="row">{{ $counter++ }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->score }}</td>
            </tr>
            @endforeach
         
        </tbody>
      </table>

@endsection
