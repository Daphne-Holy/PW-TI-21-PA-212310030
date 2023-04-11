@extends('LaporPak.Templates.layout')
@section('content')

<div class="d-flex align-items-center p-3 my-3 text-white bg-purple
rounded">
    <div class="lh-1">
        <h1 class="h6 mb-0 text-secondary lh-1"></h1>
        <small class="text-secondary"></small>
    </div>
</div>



<div class="container card border-white bg-secondary text-white">
    <div class="card-body">

        <label for="exampleFormControlInput1" class="form-label">Nama Pelapor</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Pelapor">


        <label for="exampleFormControlTextarea1" class="form-label">Permasalahan</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Permasalahan"></textarea>

        <label for="exampleFormControlTextarea1" class="form-label">Lokasi</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Lokasi"></textarea>

        <div class="align-contents-center">
            <a href="/progress" class="btn btn-white border m-3">Kirim</a>
        </div>
    </div>
</div>


@endsection