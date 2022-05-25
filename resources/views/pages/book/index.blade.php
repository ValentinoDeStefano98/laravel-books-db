@extends('layout.layout')

@section('title', 'Home')

@section('content')

    <div class="row row-cols-4 g-3">
            @forelse ($books as $key => $book)
            {{-- Se l'array è pieno --}}
                <div>
                    <div class="col card">
                        <div class="card-body">
                            <h5 class="card-title">{{$book->title}}</h5>
                            <p class="card-text">{{$book->description}}</p>
                            <a href="{{route('book', ['id' => $key])}}" class="card-link">Vai alle info</a>
                        </div>
                    </div> 
                </div>
             @empty
            {{-- Se l'array è vuoto --}}
                <p>Non ci sono elementi libri</p>
             @endforelse
        </div>
@endsection