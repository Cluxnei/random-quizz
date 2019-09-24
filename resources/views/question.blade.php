@extends('layouts.app')

@section('content')
    <div class="container">
        <strong><span class="score">{{ (string) $userScore ?: '0' }}</span> correta(s) / <span>{{ $questionsToWin }}</span> para ganhar</strong>
        <hr>
        <h1 class="question-title">{{ $question->title }}</h1>
        <small class="categories">Categoria(s): {{ $question->commaCategories }}</small>
        <p class="question-description">{{ $question->description }}</p>

        <h2>Resposta:</h2>
        <div class="question-answers">
            @foreach($question->answers as $answer)
            <a href="{{ route('check.answer', $answer->id) }}" class="check-answer">{{ $answer->title }}</a><br>
            @endforeach
        </div>
    </div>
@endsection
