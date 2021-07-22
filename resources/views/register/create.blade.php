<x-layout>
    <section class="px-6 py-8 pr-30">

        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <form method="POST" action="/register" class="mt-10">
                <div class="mb-6">
                    <h1 class="text-center font-bold text-xl">Register</h1>
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="username">
                        Username
                    </label>

                    <input type="text" class="border border-gray-400 p-2 w-full" name="username" id="username" required>

                    </label>
                </div>

            </form>
        </main>

    </section>
</x-layout>
