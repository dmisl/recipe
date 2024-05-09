@extends('layout.main')

@section('title', 'Рецепт '.$recipe->name)

@section('content')

<div class="container bg-light rounded-4 p-3 mt-5">

    <div class="px-5">

        <a href="{{ route('home.index') }}">Назад</a>

        <h1 class="mt-2">{{ $recipe->name }}</h1>

        <h3 class="pt-1">Час приготування: {{ $recipe->time }} хвилин</h3>

        <h5 class="fw-light pt-1">{{ $recipe->desc }}</h5>

        <h3 class="py-2">Інградієнти:</h3>

        <ul>
            @foreach($recipe->ingredients as $ingredient)
                <li>
                    {{ $ingredient }}
                </li>
            @endforeach
        </ul>

        <h3 class="py-2">Інструкції:</h3>

        <ul>
            @foreach($recipe->instructions as $instruction)
                <li>
                    {{ $instruction }}
                </li>
            @endforeach
        </ul>

    </div>

</div>

@endsection
