<div class="mb-3 flex items-center justify-between">
    <h2 class="text-xl">Adicionar Novo Produto</h2>
    <a href="{{ route('dashboard') }}" class="text-white bg-red-600 rounded-md px-3 py-2 hover:bg-red-900 duration-300">Cancelar</a>
</div>
<form method="post" action="{{ route('products.update', $product->id) }}" class="w-full flex items-center justify-between flex-wrap" enctype="multipart/form-data">
    @csrf @method('put')
    <input value="{{ $product->name }}" type="text" name="name" class="mb-4 rounded-md focus:border-lime-600 w-full" placeholder="Nome do Produto">
    <input value="{{ $product->price }}" type="number" step="0.01" min="0" class="w-[33%] rounded-md focus:border-lime-600" name="price" placeholder="Preço">
    <input value="{{ $product->weight }}" step="0.01" min="0" type="number" class="w-[33%] rounded-md focus:border-lime-600" name="weight" placeholder="Peso">
    <div class="w-[33%] rounded-md focus:border-lime-600 p-1.5 border border-gray-600">
        <input type="file" name="arquivo" placeholder="Imagem do produto">
    </div>
    <textarea name="description" placeholder="Descrição do Produto" class="mb-4 rounded-md focus:border-lime-600 w-full mt-4 resize-none" cols="30" rows="10">{{ $product->description }}</textarea>
    <input type="submit" value="Atualizar" class="bg-lime-600 text-white px-5 py-2 text-bold rounded-md hover:bg-lime-700 duration-300 cursor-pointer text-md">
</form>