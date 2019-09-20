@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Home</h1>

        <input type="text" id="username" placeholder="Digite seu nickname">

        <a id="random-question" href="{{ route('random.question') }}">
            Gerar Pergunta
        </a>

    </div>
@endsection
