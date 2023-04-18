@extends('templates.layouts')
@section('content')
<div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
    <img class="me-3" src="{{ url('/assets/ibikNew-logo.png') }}" alt="icon-ibik" width="45" height="45">
    <div class="lh-1">
        <h1 class="h6 mb-0 text-white lh-1">Bootstrap</h1>
        <small>Since 2011</small>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{$data['title']}}</h3>
    </div>
    <div class="card-body">

        <table class="table">
            <thead>
                <tr>
                    <!-- <th>No</th> -->
                    <th>Course</th>
                    <th>Type</th>
                    <th>Rate</th>
                <tr>
            </thead>

            <tbody>
                @foreach ($data['students'] as $index => $result)

                <tr>
                    <!-- <td>{{ $index+1 }}</td> -->
                    <td> {{ $result['course'] }}</td>
                    <td> {{ $result['type'] }}</td>
                    <td> 
                    <div>
                        @for ($i = $result['rate']; $i > 0; $i--) <span class="me-1 text-warning bi bi-star">
                            <i class="bi bi-star{{ ($i < 5) ? '-fill' : ' '}}"></i>
                        </span>
                        {{ $result['rate'] }}
                        @endfor
                    </div>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @endsection