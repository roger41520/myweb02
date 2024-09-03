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
    
    <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
     
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>產品名稱:</strong>
                    <input type="text" name="產品名稱" value="{{ $product->產品名稱 }}" class="form-control" placeholder="產品名稱">
                </div>
            </div>
			
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>產品資訊:</strong>
                    <textarea class="form-control" style="height:150px" name="產品資訊" placeholder="產品資訊">{{ $product->產品資訊 }}</textarea>
                </div>
            </div>
			<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>產品售價:</strong>
                    <input type="text" name="產品售價" value="{{ $product->產品售價 }}" class="form-control" placeholder="產品售價">
                </div>
            </div>
			<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>目前庫存:</strong>
                    <input type="text" name="目前庫存" value="{{ $product->目前庫存 }}" class="form-control" placeholder="目前庫存">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image">
                    <img src="/images/{{ $product->image }}" width="300px">
					<input type="file" name="image2" class="form-control" placeholder="image2">
                    <img src="/images/{{ $product->image2 }}" width="300px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
     
    </form>
@endsection
