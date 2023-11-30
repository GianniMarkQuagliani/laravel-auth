@extends('layouts.admin')

@section('content')
    <h1>Elenco Categorie</h1>

    <div class="row">
        <div class="col">

            @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
            @endif

            @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif

            <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Nuova Categoria" name="name">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cerca</button>
            </div>
            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>
                            <form id="form-edit" action="{{ route('admin.categories.update', $category) }} "method="POST">
                                @csrf
                                @method('PUT')
                                <input type="text" class="from-hidden" value="{{ $category->name }}" name="name">
                            </form>
                        </td>
                        <td>
                            <button onclick="submitForm()" class="btn btn-warning" type="submit" id="button-addon2"><i class="fa-solid fa-pencil"></button>
                            @include('admin.partials.form', [
                                'route' => route('admin.categories.destroy', $category),
                                'message' => 'Sei sicuro di voler eliminare?'
                            ])


                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function submitForm(event) {
            const form = document.getElementById('form-edit');
            form.submit();
        }
    </script>
@endsection
