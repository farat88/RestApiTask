@extends('layouts.app')

@section('title-block')
    Книги
@endsection

@section('content')
    <h1>Книги</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('book-form') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name-book"></label>
            <input type="text" class="form-control" name="name-book" placeholder="Введите название книги"
                   id="name-book">
        </div>
        <br>
        <div class="form-group">
            <label for="publication-year"></label>
            <input type="number" step="1" min="0" max="2022" class="form-control" name="publication-year"
                   placeholder="Введите год публикации" id="year-birth">
        </div>
        <br>
        <div class="form-group">
            <label for="summary-book"></label>
            <textarea type="text" class="form-control" name="summary-book"
                      placeholder="Введите краткое содержание книги" id="summary-book"></textarea><br>
            <div class="form-group">
                <label for="contact-authors"></label>
                <input type="text" class="form-control" name="contact with authors"
                       placeholder="Связь с авторами" id="contact with authors">
            </div>
            <br>
            <input type="submit" value="Поиск" class="btn btn-success">
    </form>
@endsection




