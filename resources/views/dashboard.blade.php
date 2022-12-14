<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('歴史年表') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    正しくログインされています！
                </div>
                <div class="p-6 text-gray-900 leading-tight font-semibold text-red-800">
                    <a href="/">歴史年表を見る</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
