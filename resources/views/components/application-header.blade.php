<header class="border-b-2 border-gray-400/30">
    <div class="mx-auto w-full md:max-w-7xl px-2 py-5 flex items-center justify-between">
        <h1 class="text-3xl font-bold">
            <a href="{{ url('/') }}">Chame Rações 133</a>
        </h1>

        @if($location != 'dashboard')
        <nav>
            <ul class="flex items-center justify-around gap-9 text-lg">
                <li>
                    <a href="#">Produtos</a>
                </li>
                <li>
                    <a 
                    href="#" 
                    class="bg-lime-600 text-white px-5 py-2 text-bold rounded-full hover:bg-lime-700 duration-300">Entrar em contato</a>
                </li>
            </ul>
        </nav>
        @endif
    </div>
</header>