@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="d-flex flex-column justify-content-center align-items-center main-content">
                    <h1>Você conhece a FATEC?</h1>
                    <form id="random-question" action="{{ route('random.question') }}">
                        <input type="text" id="username" placeholder="Digite seu nickname">
                        <br><br>
                        <button type="submit">
                            Gerar Pergunta
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-md-6 bg">
                {{-- <img src="{{ asset('img/question.jpg') }}" class="w-100 justfy-self-center" alt=""> --}}
            </div>
        </div>

        <br><br>


    </div>
@endsection
