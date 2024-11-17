<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-r from-green-300 to-blue-500 min-h-screen flex items-center justify-center">
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
            <h2 class="text-3xl font-semibold text-gray-800 mb-4">Selamat Datang, {{ Auth::user()->name }}!</h2>
            <p class="text-lg text-gray-600">Kami senang melihatmu di sini.</p>
        </div>
    </div>

    <!-- Inline CSS for additional styling -->
    <style>
        .bg-gradient-to-r {
            background: linear-gradient(to right, #6EE7B7, #3B82F6); /* Green to Blue gradient */
        }
    </style>
</x-app-layout>
