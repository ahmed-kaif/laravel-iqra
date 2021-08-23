<x-guest-layout>
    <div>
        @forelse ($books as $book)
            <ul>
                <li>{{$book->title}}</li>
                <li>{{$book->genre->name}}</li>
            </ul>
        @empty
            <p>No books found</p>
        @endforelse
        </div>
</x-guest-layout>
