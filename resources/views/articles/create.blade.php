<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('名利五金官網') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                <a href="{{ route('articles.index') }}"
                    class="inline-flex items-center px-4 py-2 mb-4 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-green-600 border border-transparent rounded-md hover:bg-green-500 active:bg-green-700 focus:outline-none focus:border-green-700 focus:shadow-outline-gray disabled:opacity-25">
                    <- Go back
                </a>
                <form action="{{ route('articles.store') }}" method="POST" >
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
                <div>
                    <button type="submit"
                    class="inline-flex items-center px-4 py-2 my-3 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25">
                        Save
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>