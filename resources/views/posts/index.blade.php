<x-layout>
    @include('posts._header')
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
            <x-posts-grid :posts="$posts" />
            {{ $posts->links() }}
        @else <h1 class='text-align:center'> No Post yet, check back later</h1>
        @endif
    </main>

</x-layout>
