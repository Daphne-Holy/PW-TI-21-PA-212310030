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

        <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="25"
            aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 25%">Laporan sedang
                diproses</div>
        </div>

        <ul>
            <br>
            <br><li>Petugas sedang memproses laporan</li>
            <br><li>Petugas sedang menuju ke lokasi</li>
        </ul>

    </div>
</div>





@endsection