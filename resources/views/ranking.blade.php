@extends('layouts.app')

@section('content')
    <div class="container rk">

        <h1>Ranking</h1>

        <div class="ranking-container">
            @php
                $counter = 1;
            @endphp
            @foreach($users as $user)
            <div class="ranking-card">
                <div class="counter">
                   &nbsp;#{{ $counter++ }}
                </div>
                <div class="score">
                    {{ $user->score }}
                </div>
                <div class="name">
                    {{ $user->name }}
                </div>
            </div>
            </tr>
            @endforeach
        </div>
    </div>
@endsection
