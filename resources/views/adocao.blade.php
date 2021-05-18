@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Novos Animais</h1>
    </div>

    <div class="row text-center pb-5 pt-3">
        <div class="col-3 pb-4">
            <a href="/perfil/1">
                <img src="/img/filhotes.jpg" class="w-100"/>
                <h1>Me adota</h1>
                <p>Por favor</p>
            </a>
        </div>
        <div class="col-3 pb-4">
            <a href="/perfil/1">
                <img src="/img/filhotes.jpg" class="w-100"/>
                <h1>Me adota</h1>
                <p>Por favor</p>
            </a>
        </div>
        <div class="col-3 pb-4">
            <a href="/perfil/1">
                <img src="/img/filhotes.jpg" class="w-100"/>
                <h1>Me adota</h1>
                <p>Por favor</p>
            </a>
        </div>
        <div class="col-3 pb-4">
            <a href="/perfil/1">
                <img src="/img/filhotes.jpg" class="w-100"/>
                <h1>Me adota</h1>
                <p>Por favor</p>
            </a>
        </div>
        <div class="col-3 pb-4">
            <a href="/perfil/1">
                <img src="/img/filhotes.jpg" class="w-100"/>
                <h1>Me adota</h1>
                <p>Por favor</p>
            </a>
        </div>
        <div class="col-3 pb-4">
            <a href="/perfil/1">
                <img src="/img/filhotes.jpg" class="w-100"/>
                <h1>Me adota</h1>
                <p>Por favor</p>
            </a>
        </div>
        <div class="col-3 pb-4">
            <a href="/perfil/1">
                <img src="/img/filhotes.jpg" class="w-100"/>
                <h1>Me adota</h1>
                <p>Por favor</p>
            </a>
        </div>
    </div>
    
    <h2>Nossos parceiros</h2>
    <div id="parceiros" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block" style="max-width:300px !important;" src="/img/gatos.jpeg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block" style="max-width:300px !important;" src="/img/dog.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block" style="max-width:300px !important;" src="/img/silvestres.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#parceiros" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#parceiros" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
@endsection
