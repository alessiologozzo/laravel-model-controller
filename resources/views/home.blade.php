@extends("layouts.template")

@section("title")
    Home
@endsection

@section("content")
    <main class="container">

        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 pt-5 pb-5">
                    <a href="{{route('show', $movie['id'])}}" class="al-card">
                        <img src="{{$movie['image']}}" alt="err">
    
                        <div class="d-flex flex-column justify-content-center align-items-center gap-2 pt-3 pb-4 text-center">
                            <h4>{{$movie["title"]}}</h4>
                            
                            <div class="d-flex gap-2 fs-5">
                                <strong>Vote:</strong>
                                <i>{{$movie["vote"]}}</i>
                            </div>

                            <div class="d-flex gap-2">
                                <strong>Release date:</strong>
                                <i>{{$movie["date"]}}</i>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </main>
@endsection