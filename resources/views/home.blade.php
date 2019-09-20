@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Home</h1>
        <br>
        <a href="{{ route('ranking') }}">
            Ranking
        </a>
        <br><br>
        <form id="random-question" action="{{ route('random.question') }}">
            <input type="text" id="username" placeholder="Digite seu nickname">
            <br><br>
            <button type="submit">
                Gerar Pergunta
            </button>
        </form>

    </div>
@endsection
