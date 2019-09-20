@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Home</h1>

        <form id="random-question" action="{{ route('random.question') }}">
            <input type="text" id="username" placeholder="Digite seu nickname">

            <button type="submit">
                Gerar Pergunta
            </button>
        </form>

    </div>
@endsection
