<x-layout>
    <x-card class="!p-10">
        <header>
            <h1 class="text-3xl text-center font-bold my-6 uppercase">
                Manage Jobs
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">
            <tbody>
                @unless ($listings->isEmpty())
                    @foreach ($listings as $listing)
                        <tr class="border-gray-300">
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                <a href="/listings/{{ $listing->id }}">
                                    {{ $listing->title }}
                                </a>
                            </td>
                            <td class="px-4 py-8 border-t border-b border-gray-300">
                                <a href="/listings/{{ $listing->id }}/edit" class="w-full text-center text-blue-400">
                                    <i class="fa-solid fa-pen-to-square">
                                        <span class="ms-1">Edit</span>
                                    </i>
                                </a>
                            </td>
                            <td class="px-4 py-8 border-t border-b border-gray-300">
                                <form method="POST" action="/listings/{{ $listing->id }}"
                                    class="text-red-500 w-full text-center">
                                    @csrf
                                    @method('DELETE')
                                    <button class="w-full text-center">
                                        <i class="fa-solid fa-trash">
                                            <span class="ms-1">Delete</span>
                                        </i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="border greay-300">
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            <p class="text-center">No Listings Found</p>
                        </td>
                    </tr>
                @endunless
            </tbody>
        </table>
    </x-card>
</x-layout>
