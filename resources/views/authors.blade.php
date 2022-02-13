@extends('layouts.app')

@section('title-block')
    Авторы
@endsection

@section('content')
    <h1>Авторы</h1>
    <form action="{{ route('author-form') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name-author"></label>
            <input type="text" class="form-control" name="name-author" placeholder="Введите имя автора"
                   id="name-author">
        </div>
        <br>
        <div class="form-group">
            <label for="year-birth"></label>
            <input type="number" step="1" min="0" max="2022" class="form-control" name="year-birth"
                   placeholder="Введите год рождения автора" id="year-birth">
        </div>
        <br>
        <div class="form-group">
            <label for="year-death"></label>
            <input type="number" step="1" min="0" max="2022" class="form-control" name="year-death"
                   placeholder="Введите год смерти автора" id="year-death">
        </div>
        <br>
        <input type="submit" value="Поиск" class="btn btn-success">
    </form>
@endsection
