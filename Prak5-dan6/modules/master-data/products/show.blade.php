@extends ('templates.layouts')
@section('content')

<div class="row">
    <div class="col-lg-6 col-xxl-6">
        <div class="info">
            <p class="text-4xl mb-3">{{$product->name}}</p>
            <p class="text-4xl mb-2">{{$product->price}}</p>
            <div class="border-top border-bottom p-2 mt-3">
                <span class="text-1xl">description</span>
            </div>
            <div class="description p-2">{{$product->description}}</div>
        </div>
    </div>
    <div class="col-lg-2 col-xxl-2">
        <div class="border rounded bg-white p-3">
            <div class="mb-3">
                <p class="text-dark text-sm mb-2">Created at <br/>{{$product->created_at}}</p>
                <p class="text-dark text-sm">Last Updated at <br/>{{$product->updated_at}}</p>
            </div>
            <div class="d-grid gap-2">
                <a href="" class="btn btn-sm btn-warning">Edit</a>
                <a href="" class="btn btn-sm btn-danger">Remove</a>
            </div>
        </div>
    </div>
</div>
@endsection