<section class="mx-auto w-full md:max-w-7xl px-5 py-5 mt-12 bg-sky-50 rounded-md">
    <h2 class="text-xl text-center">Produtos em destaque:</h2>

    <ul class="flex justify-between items-center my-5">
        @foreach ($products as $product)
            <li class="w-1/5 px-6 m-3 h-[350px] bg-white h-sm text-center p-4 roundend rounded-md relative">
                <a href="" class="flex items-center justify-center flex-wrap p-3 mt-2">
                    <img 
                    class="h-[220px]"
                    src="{{ asset('images/'.$product->arquivo) }}">
                    <p class="text-lg leading-none mt-4">{{ $product->name }}</p>
                    <p class="text-xl text-lime-600 mt-2 font-bold">R${{ $product->price }}</p>
                    <span class="absolute right-1 top-1 bg-teal-400 rounded-md text-white px-2">{{ $product->weight }} Kg</span>
                </a>
            </li>
        @endforeach
    </ul>

    <p class="text-center">
        <a href="#" class="hover:border-b hover:border-b-gray-400 pb-1 duration-300">Ver todos os produtos <i class="fas fa-arrow-right ml-2 "></i></a>
    </p>
</section>