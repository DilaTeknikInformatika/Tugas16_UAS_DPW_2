@extends('admin.template.app')
@section('title', 'Detail Produk')

@section('content')

<div class="container">
        <div class="row ">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Detail Produk
                    </div>
                    <div class="card-body">
                    <h3>{{$produk->nama}}</h3>
                    <hr>
                    @include('admin.produk.show.detail')
                    <p>
                        {!! nl2br ($produk->deskripsi) !!}
                    </p>
                    <p>
					<img src="{{ url('public', $produk->foto) }}" alt="{{$produk->foto}}" class="img-fluid" width="40%">
            	</p>
                    
                    </div>
                </div>           
            </div>
        </div>
    </div>

@endsection