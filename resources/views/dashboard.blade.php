<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('名利五金簡介') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p style="margin-top: 30px;">{{ __("不為名、不為利、拚一句阿莎力!!") }}</p>
                    <p style="margin-top: 30px;">{{ __("名利五金向來都是誠信至上;你有錢我們就有信用，乖乖把錢準備好就對了!!") }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


