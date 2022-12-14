@extends('dashboard.layout')

@section('content')
    <p class="card-title">Product</p>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right" style="margin-bottom:10px;">
            <a class="btn btn-primary" href="{{ route('create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
 
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/images/{{ $product->image }}" width="100px"></td>
            <td>{{ $product->nama }}</td>
            <td>{{ $product->detail }}</td>
            <td>
                <form onsubmit="return confirm('Apakah anda yakin akan mengapusnya?')" action="{{ route('destroy',$product->id) }}" method="POST">
      
                    <a class="btn btn-info" href="{{ route('show',$product->id) }}">Show</a>
       
                    <a class="btn btn-primary" href="{{ route('edit',$product->id) }}">Edit</a>
      
                    @csrf
                    @method('DELETE')
         
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $products->links() !!}
    @include('sweetalert::alert')
    @endsection
