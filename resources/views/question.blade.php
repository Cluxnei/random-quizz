@extends('layouts.app')

@section('content')
    <div class="container">
        <strong>{{ (string) $userScore ?: '0' }} correta(s) / {{ $questionsToWin }} para ganhar</strong>
        <hr>
        <h1>{{ $question->title }}</h1>
        <small>Categoria(s): {{ $question->commaCategories }}</small>
        <p>{{ $question->description }}</p>

        <h2>Resposta:</h2>

        @foreach($question->answers as $answer)
        <a href="{{ route('check.answer', $answer->id) }}" class="check-answer">{{ $answer->title }}</a><br>
        @endforeach
    </div>
@endsection
