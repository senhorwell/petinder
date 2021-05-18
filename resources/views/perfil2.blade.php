@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-12 d-flex justify-content-between">
        <div class="col-5">
            <img class="w-100" src="/img/silvestres.jpg" />
        </div>
        <div class="col-3" style="border: 1px solid gray;">
            <h2>Jorginho</h2>
            <h2>Vacinado e Castrado</h2>
            <p>Jorginho é umg ato foda, ele é meio tristinho, mas ele é massa, dá até joinha</p>
            <button class="w-100" style="line-height: 2rem;">Adicionar ao lar :)</button>
        </div>
        <div class="col-3">
            <h2>Ultimos animais adicionados</h2>
            <div class="d-flex py-1">
                <a href="#">
                    <img style="height:30px" class="w-auto" src="/img/silvestres.jpg"/>
                    <p>Passarinhos legais</p>
                </a>
            </div>
            <div class="d-flex py-1">
                <a href="#">
                    <img style="height:30px" class="w-auto" src="/img/silvestres.jpg"/>
                    <p>Passarinhos legais</p>
                </a>
            </div>
            <div class="d-flex py-1">
                <a href="#">
                    <img style="height:30px" class="w-auto" src="/img/silvestres.jpg"/>
                    <p>Passarinhos legais</p>
                </a>
            </div>
            <div class="d-flex py-1">
                <a href="#">
                    <img style="height:30px" class="w-auto" src="/img/silvestres.jpg"/>
                    <p>Passarinhos legais</p>
                </a>
            </div>
            
            
        </div>
    </div>
</div>
@endsection
