@extends('layouts.template')

@section('title')
    {{ $movie['title'] }}
@endsection

@section('content')
    <main class="container pt-4 pb-5">
        <h1 class="text-center pb-3">{{ $movie['title'] }}</h1>

        <table class="table table-dark table-striped">

            <thead>
                <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Titolo originale</th>
                    <th scope="col">Paese</th>
                    <th scope="col">Data di uscita</th>
                    <th scope="col">Voto</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{$movie["title"]}}</td>
                    <td>{{$movie["original_title"]}}</td>
                    <td>{{$movie["nationality"]}}</td>
                    <td>{{$movie["date"]}}</td>
                    <td>{{$movie["vote"]}}</td>
                </tr>
            </tbody>
        </table>

        <div class="d-flex justify-content-center align-items-center">
            <img src="{{$movie['image']}}" alt="{{$movie['title']}}" class="al-show-img mt-5">
        </div>
    </main>
@endsection
