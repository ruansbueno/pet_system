<h2 class="text-xl mb-3">Adicionar Novo Produto</h2>
<form method="post" action="{{ route('products.store') }}" class="w-full flex items-center justify-between flex-wrap" enctype="multipart/form-data">
    @csrf 
    @method('post')
    <input type="text" value="{{ old('name')}}" name="name" class="mb-4 rounded-md focus:border-lime-600 w-full" placeholder="Nome do Produto">
    <input type="number" step="0.01" min="0" class="w-[33%] rounded-md focus:border-lime-600" name="price" value="{{ old('price')}}" placeholder="Preço">
    <input value="{{ old('weight')}}" step="0.01" min="0" type="number" class="w-[33%] rounded-md focus:border-lime-600" name="weight" placeholder="Peso">
    <div class="w-[33%] rounded-md focus:border-lime-600 p-1.5 border border-gray-600">
        <input type="file" name="arquivo" placeholder="Imagem do produto">
    </div>
    <textarea name="description" value="{{ old('description')}}" placeholder="Descrição do Produto" class="mb-4 rounded-md focus:border-lime-600 w-full mt-4 resize-none" cols="30" rows="10"></textarea>
    <input type="hidden" name="author" value="{{ $user }}">
    <input type="submit" value="Adicionar" class="bg-lime-600 text-white px-5 py-2 text-bold rounded-md hover:bg-lime-700 duration-300 cursor-pointer text-md">
</form>