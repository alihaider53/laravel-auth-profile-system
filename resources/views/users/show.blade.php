<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Detail') }}
        </h2>
    </x-slot>

    <div class="py-12 max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white p-6 shadow rounded space-y-4">
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Phone:</strong> {{ $user->phone }}</p>
            <p><strong>Bio:</strong> {{ $user->bio }}</p>
            @if ($user->avatar)
                <p><strong>Avatar:</strong></p>
                <img src="{{ asset('storage/' . $user->avatar) }}" alt="Avatar" class="h-20 w-20 rounded-full mb-4">
            @endif

            <p><strong>Role:</strong> {{ ucfirst($user->role) }}</p>


            <div class="pt-4">
                <a href="{{ route('users.index') }}"
                   class="inline-block px-4 py-2 bg-gray-200 text-gray-800 rounded shadow hover:bg-gray-300">
                    Back to Listing
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
