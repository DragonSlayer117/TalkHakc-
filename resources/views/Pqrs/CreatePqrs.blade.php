@extends('layouts.admin')

@section('content')

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

        <div class="row">
            <div class="col-xl-6 col-xxl-5 d-flex">
                <div class="w-100">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <form method="POST" action="{{ route('PqrsCreate') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label">Busca tu Eps</label>
                                                <select name="eps_id" id="eps_id">
                                                    @foreach ($eps as $item)
                                                        <option value="{{ $item->id }}">{{ $item->eps }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Nombre de la eps a registrar</label>
                                                <textarea class="form-control form-control-lg" name="pqrs" id="pqrs" cols="30" rows="10" required autofocus placeholder="Enter your Pqrs"></textarea>
                                            </div>
                                            <div class="text-center mt-3">
                                                <button type="submit" class="btn btn-primary">Guardar</button>
                                                <!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection