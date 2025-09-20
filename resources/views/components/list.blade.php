<section class="mx-auto w-full md:max-w-7xl px-2 py-5">
    <div class="flex justify-between items-center">
        <h2 class="text-2xl">Produtos:</h2>

        <a class="text-white px-3 py-2 rounded-md bg-lime-600 mt-2 font-bold duration-300 hover:bg-lime-800" href="{{ route('products.create') }}">
            Adicionar Novo
        </a>
    </div>

    <nav class="mt-3">
        <ul class="bg-sky-50 rounded-md px-5 py-3">
            @foreach ($products as $product)
                <li class="border-b border-b-gray-500/30 py-2 flex items-center justify-between">
                    <section class="flex items-center justify-start">
                        <img
                        class="w-[60px] mr-4" 
                        src="{{ asset('storage/images/'.$product->arquivo) }}">

                        <h2>{{ $product->name }}</h2>
                    </section>
                    <section class="flex items-center justify-end gap-x-2">
                        @if(Auth::id() == $product->author)
                            <a href="{{ route('products.edit', $product->id) }}" class="text-white bg-lime-600 rounded-md px-3 py-2 text-xl">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <form method="post" action="{{ route('products.destroy', $product->id) }}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="text-white bg-red-500 rounded-md px-3 py-2 text-xl">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        @else
                            <div class="text-black bg-gray-300 rounded-md px-3 py-2 text-xl">
                                <i class="fas fa-pencil-alt"></i>
                            </div>
                            <div class="text-black bg-gray-300 rounded-md px-3 py-2 text-xl">
                                <i class="fas fa-trash"></i>
                            </div>
                        @endif
                    </section>
                </li>
            @endforeach
        </ul>
        <section class="px-3 mt-3">
            {{ $products->links() }}
        </section>
    </nav>
</section>
