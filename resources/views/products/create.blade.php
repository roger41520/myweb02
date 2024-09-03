@extends('products.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>圖片CRUD</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
     
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
        <div class="mb-4">
           <label for="text產品名稱"
               class="block mb-2 text-sm font-bold text-gray-700">產品名稱</label>
           <input type="text"
               class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
               name="產品名稱"
               placeholder="Enter 產品名稱">
            @error('產品名稱') <span class="text-red-500">{{ $message }}
            </span>@enderror
        </div>
			
        <div class="mb-4">
           <label for="text產品資訊"
               class="block mb-2 text-sm font-bold text-gray-700">產品資訊</label>
           <input type="text"
               class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
               name="產品資訊"
               placeholder="Enter 產品資訊">
            @error('產品資訊') <span class="text-red-500">{{ $message }}
            </span>@enderror
        </div>
		<div class="mb-4">
           <label for="text產品售價"
               class="block mb-2 text-sm font-bold text-gray-700">產品售價</label>
           <input type="text"
               class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
               name="產品售價"
               placeholder="Enter 產品售價">
            @error('產品售價') <span class="text-red-500">{{ $message }}
            </span>@enderror
        </div>
		<div class="mb-4">
           <label for="text目前庫存"
               class="block mb-2 text-sm font-bold text-gray-700">目前庫存</label>
           <input type="text"
               class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
               name="目前庫存"
               placeholder="Enter 目前庫存">
            @error('目前庫存') <span class="text-red-500">{{ $message }}
            </span>@enderror
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>image:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
				<input type="file" name="image2" class="form-control" placeholder="image2">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
     
</form>
@endsection