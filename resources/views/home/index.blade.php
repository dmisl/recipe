@extends('layout.main')

@section('title', 'Список рецептів')

@section('content')

<div class="container">

    <div class="mx-auto" style="width: 90%; z-index: 10;">

        <div class="row mt-5">

            @foreach ($recipes as $recipe)

                <div class="col-md-4 mt-3 user-select-none text-dark">

                    <div class="hover mx-auto border rounded-4 p-3 px-4 d-flex" style="width: 90%;">

                        <a href="{{ route('home.show', [$recipe->id]) }}" style="text-decoration: none; flex-grow: 1;">
                            <h3 class="p-0 m-0">{{ $recipe->name }}</h3>
                        </a>
                        <div class="ms-auto" style="width: 20px;" role="button" data-bs-toggle="modal" data-bs-target="#deleteModal{{$recipe->id}}" class="bg-light mx-auto border rounded-4 p-3 px-4" style="width: 90%;">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="20" height="20" viewBox="0 0 256 256" xml:space="preserve">

                                <defs>
                                </defs>
                                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                    <path d="M 73.771 19.39 c -0.378 -0.401 -0.904 -0.628 -1.455 -0.628 H 17.685 c -0.551 0 -1.077 0.227 -1.455 0.628 c -0.378 0.4 -0.574 0.939 -0.542 1.489 l 3.637 62.119 C 19.555 86.924 22.816 90 26.75 90 h 36.499 c 3.934 0 7.195 -3.076 7.427 -7.003 l 3.637 -62.119 C 74.344 20.329 74.148 19.79 73.771 19.39 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(204,51,51); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 78.052 14.538 H 11.948 c -1.104 0 -2 -0.896 -2 -2 s 0.896 -2 2 -2 h 66.104 c 1.104 0 2 0.896 2 2 S 79.156 14.538 78.052 14.538 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(204,51,51); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 57.711 14.538 H 32.289 c -1.104 0 -2 -0.896 -2 -2 V 7.36 c 0 -4.059 3.302 -7.36 7.36 -7.36 h 14.703 c 4.058 0 7.359 3.302 7.359 7.36 v 5.178 C 59.711 13.643 58.815 14.538 57.711 14.538 z M 34.289 10.538 h 21.422 V 7.36 c 0 -1.853 -1.507 -3.36 -3.359 -3.36 H 37.649 c -1.853 0 -3.36 1.507 -3.36 3.36 V 10.538 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(204,51,51); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 57.342 76.103 c -0.039 0 -0.079 -0.001 -0.119 -0.004 c -1.103 -0.064 -1.944 -1.011 -1.879 -2.113 l 2.29 -39.113 c 0.063 -1.103 0.993 -1.952 2.113 -1.88 c 1.103 0.064 1.944 1.011 1.88 2.113 L 59.336 74.22 C 59.274 75.282 58.393 76.103 57.342 76.103 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 32.658 76.103 c -1.051 0 -1.933 -0.82 -1.995 -1.883 l -2.29 -39.114 c -0.064 -1.103 0.777 -2.049 1.88 -2.113 c 1.088 -0.062 2.049 0.777 2.113 1.88 l 2.29 39.113 c 0.064 1.103 -0.777 2.049 -1.88 2.113 C 32.737 76.102 32.698 76.103 32.658 76.103 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 45 76.103 c -1.104 0 -2 -0.896 -2 -2 V 34.989 c 0 -1.104 0.896 -2 2 -2 s 2 0.896 2 2 v 39.114 C 47 75.207 46.104 76.103 45 76.103 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                </g>
                            </svg>
                        </div>

                    </div>

                </div>

                <div class="modal fade" id="deleteModal{{$recipe->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="{{ route('home.delete') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $recipe->id }}">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Видалення рецепту</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="px-3">

                                        <h4>Ви впевнені що хочете видалити рецепт під назвою "{{ $recipe->name }}"?</h4>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ні</button>
                                    <button type="submit" class="btn btn-danger">Так</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            @endforeach

            <div class="col-md-4 mt-3 user-select-none text-dark">

                <div style="text-decoration: none;">

                    <div role="button" data-bs-toggle="modal" data-bs-target="#addModal" class="bg-light mx-auto border rounded-4 p-3 px-4" style="width: 90%;">

                        <h2 class="p-0 m-0 text-success text-center">+</h2>

                    </div>

                </div>

            </div>

        </div>

        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="{{ route('home.store') }}" method="POST">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Додавання рецепту</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="px-3">

                                <label for="name">Назва страви</label>
                                <input id="name" name="name" class="form-control">

                                <label for="desc" class="mt-1">Опис</label>
                                <input id="desc" name="desc" class="form-control">

                                <label for="time" class="mt-1">Час приготування (в хв.)</label>
                                <input id="time" name="time" class="form-control">

                                <label class="mt-1">Інградієнти</label>
                                <ol class="list">
                                    <li>
                                        <input name="ingredients[]" class="form-control form-control-sm">
                                    </li>
                                    <li>
                                        <button type="button" class="btn btn-secondary btn-sm w-100 list_add">+</button>
                                    </li>
                                </ol>

                                <label class="mt-1">Інстукції</label>
                                <ol class="instructions">
                                    <li>
                                        <input name="instructions[]" class="form-control form-control-sm">
                                    </li>
                                    <li>
                                        <button type="button" class="btn btn-secondary btn-sm w-100 instructions_add">+</button>
                                    </li>
                                </ol>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрити</button>
                            <button type="submit" class="btn btn-success">Додати</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>


</div>

<script>

    let list = document.querySelector('.list')
    let list_add = document.querySelector('.list_add')

    list_add.addEventListener('click', function () {
        let newListEl = document.createElement('li')
        let newListInput = document.createElement('input')
        newListInput.classList.add('form-control')
        newListInput.classList.add('form-control-sm')
        newListInput.setAttribute('name', 'ingredients[]')
        newListEl.appendChild(newListInput)
        list.insertBefore(newListEl, list_add.parentElement)
    })

    let instructions = document.querySelector('.instructions')
    let instructions_add = document.querySelector('.instructions_add')

    instructions_add.addEventListener('click', function () {
        let newListEl = document.createElement('li')
        let newListInput = document.createElement('input')
        newListInput.classList.add('form-control')
        newListInput.classList.add('form-control-sm')
        newListInput.setAttribute('name', 'instructions[]')
        newListEl.appendChild(newListInput)
        instructions.insertBefore(newListEl, instructions_add.parentElement)
    })

</script>

@endsection
