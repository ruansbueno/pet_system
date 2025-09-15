<h2 class="text-xl mb-3">Adicionar Novo Produto</h2>
<form method="post" action="{{ route('products.store') }}" class="w-full flex items-center justify-between flex-wrap">
    @csrf
    <input type="text" name="name" class="mb-4 rounded-md focus:border-lime-600 w-full" placeholder="Nome do Produto">
    <input type="number" class="w-[33%] rounded-md focus:border-lime-600" name="price" placeholder="Preço">
    <input type="number" class="w-[33%] rounded-md focus:border-lime-600" name="weight" placeholder="Peso">
    <div class="w-[33%] rounded-md focus:border-lime-600 p-1.5 border border-gray-600">
        <input type="file" name="arquivo" placeholder="Imagem do produto">
    </div>
    <textarea name="description" placeholder="Descrição do Produto" class="mb-4 rounded-md focus:border-lime-600 w-full mt-4 resize-none" cols="30" rows="10"></textarea>
    <input type="hidden" name="author" value="{{ $user }}">
    <input type="submit" value="Adicionar" class="bg-lime-600 text-white px-5 py-2 text-bold rounded-md hover:bg-lime-700 duration-300 cursor-pointer text-md">
</form>