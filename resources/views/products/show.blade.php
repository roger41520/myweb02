@extends('products.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> 圖片CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
     
    <div class="row">
	    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>產品名稱:</strong>
                {{ $product->產品名稱 }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>產品資訊:</strong>
                {{ $product->產品資訊 }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>產品價格:</strong>
                {{ $product->產品價格 }}
            </div>
        </div>
	    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>目前庫存:</strong>
                {{ $product->目前庫存 }}
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>image:</strong>
                <img src="/images/{{ $product->image }}" width="500px">
				<img src="/images/{{ $product->image2 }}" width="500px">
            </div>
        </div>
        
    </div>
@endsection