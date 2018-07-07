@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       <div class="col-12">
           <h2>{{$id->name}}</h2>
           <p>{{$id->description}}</p>
           <p>
                <address>Endereço: {{$id->address}}</address>
           </p>
           <hr>
       </div>
        <div class="col-12">
            Cardápio:
            <ul class="list-group">
                @foreach($id->menus as $m)
                    <li class="list-group-item">
                        {{$m->name}} <br>
                        R$ {{number_format($m->price, '2', ',', '.')}}
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-12">
            <h2>Fotos</h2>
            <hr>
        </div>
        <div class="row">
            @if($id->photos()->count())
                @foreach($id->photos as $photo)
                    <div class="col-4">
                        <img src="{{asset('/images/' . $photo->photo)}}" alt="" class="img-fluid">
                    </div>
                @endforeach
            @else
                <div class="col-12">
                    <span class="alert alert-warning">Sem Fotos para Este Restaurante...</span>
                </div>
            @endif
        </div>

    </div>
</div>
@endsection