<x-app-layout> 
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
        <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('名利五金官網 ') }}
        </h2>
        </x-slot>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> 圖片CRUD</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th class="px-4 py-2 border">產品名稱</th>
            <th class="px-4 py-2 border">產品資訊</th>
			<th class="px-4 py-2 border">產品售價</th>
            <th class="px-4 py-2 border">目前庫存</th>
			<th class="px-4 py-2 border">image</th>
            <th width="280px">CRUD功能</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td class="px-4 py-2 border">{{ $product->產品名稱 }}</td>
            <td class="px-4 py-2 border">{{ $product->產品資訊 }}</td>
			<td class="px-4 py-2 border">{{ $product->產品售價 }}</td>
            <td class="px-4 py-2 border">{{ $product->目前庫存 }}</td>
			<td><img src="/images/{{ $product->image }}" width="100px">
			    <img src="/images/{{ $product->image2 }}" width="100px"></td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $products->links() !!}
        
</x-app-layout> 
