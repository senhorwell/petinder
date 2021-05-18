@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
            <img class="w-100" src="/img/filhotes.jpg"/>
            <div class="d-flex justify-content-around text-center">
                <a href="/chat" class="col-3 mt-3" style="border:none;background:blue;color:white;">Contato com o doador</a>
                <a href="#" class="col-3 mt-3" style="border:none;background:red;color:white;">Like</a>
            </div>
        </div>
        <div class="col-12 text-center pt-5">
            <h1>Categorias de adoção</h1>
            <div class="d-flex justify-content-around">
            <div class="col-3">
                    <a href="/perfil/1">
                        <img src="/img/filhotes.jpg" class="w-100">
                        <h2>Doguinhos</h2>
                        <p>dog duplo com salsicha, bacon e tomate</p>
                    </a>
                </div>
                <div class="col-3">
                    <a href="/perfil/1">
                        <img src="/img/gatos.jpeg" class="w-100">
                        <h2>Gatinhos</h2>
                        <p>Miau miau, disse o felino</p>
                    </a>
                </div>
                <div class="col-3">
                    <a href="/perfil/1">
                        <img src="/img/silvestres.jpg" class="w-100">
                        <h2>Silvestres</h2>
                        <p>Animais silvestres pra chamar de seu. Claro, se tiver licença</p>
                    </a>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
