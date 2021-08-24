<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <h1 class="text-4xl text-gray-800">Create New Book</h1>
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('book.store') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="title" :value="__('Title')" />

                <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('email')" placeholder="The Alchemist" required autofocus />
            </div>

            <!-- Password -->
            <div>
                <x-label for="genre_id" :value="__('Genre')"/>

                <select name="genre_id" id="genre_id" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option value="">Select A Genre</option>
                        @foreach($genres as $genre)
                        <option value="{{$genre->id}}">{{$genre->name}}</option>
                        @endforeach
                </select>
            </div>

            <div>
                <x-label for="author_id" :value="__('Author')"/>

                <select name="author_id" id="author_id" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option value="">Select Author</option>
                        @foreach($authors as $author)
                        <option value="{{$author->id}}">{{$author->name}}</option>
                        @endforeach
                </select>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    {{ __('Create Book') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
