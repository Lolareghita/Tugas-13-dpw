@extends('Template.base')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <div class="card">
            <div class="card-header">
              Detail Data Kategori
            </div>
            <div class="card-body">
                <h3>{{$kategori->nama_kategori}}</h3>
                <hr>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection