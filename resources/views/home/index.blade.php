@extends('layout.main')

@section('title', 'Список рецептів')

@section('content')

<div class="container">

    <div class="row mt-5">

        @foreach ($recipes as $recipe)

            <a href="{{ route('home.show', [$recipe->id]) }}" class="col-md-4 mt-3 user-select-none text-light hover">

                <div class="mx-auto border rounded-4 p-3 px-4" style="width: 90%;">

                    <h3 class="p-0 m-0">{{ $recipe->name }}</h3>

                </div>

            </a>

        @endforeach

    </div>

</div>

@endsection
