@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="height:370px;">
            <div class="card h-100">
                <div class="card-header">Chat com o dono do animal</div>
                <div class="card-body p-3 m-0">
                    <div class="w-100 d-flex justify-content-end">
                        <p class="p-3" style="line-height: 1rem; background:green;color:white;width:fit-content;border-radius:15px;">você disse oi?</p>
                    </div>
                    <div class="w-100 d-flex justify-content-start">
                        <p class="p-3" style="line-height: 1rem; background:blue;color:white;width:fit-content;border-radius:15px;">Acho que eu disse sim</p>
                    </div>
                    <input class="m-4 px-2 py-1" type="text" placeholder="Digite sua mensagem" style="border-radius:15px;border:1px solid #ccc;width:-webkit-fill-available;position: absolute; bottom:0px; left:0px;"/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
