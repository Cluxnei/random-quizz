@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex flex-column justify-content-center align-itens-center q-bg-2">
            <div>
                <img src="{{ asset('img/question-2.jpg') }}" class="mw-100 w-50">
            </div>
            <h1 class="question-title">{{ $question->title }}</h1>
            <small class="categories">Categoria(s): {{ $question->commaCategories }}</small>
            <p class="question-description">{{ $question->description }}</p>
            <h2>respostas:</h2>
            <div class="question-answers">
                @foreach($question->answers->shuffle() as $answer)
                <a href="{{ route('check.answer', $answer->id) }}" class="check-answer">{{ $answer->title }}</a>
                @endforeach
            </div>
            <strong><span class="score">{{ (string) $userScore ?: '0' }}</span> correta(s) / <span> 3 total ({{ $questionsToWin }}</span> para ganhar)</strong>
        </div>
        <hr>
    </div>
@endsection
