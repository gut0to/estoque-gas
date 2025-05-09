<div>
    <div class="mb-4">
        <x-input-label for="name" value="Nome da Categoria" />
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" value="{{ old('name', $category?->name) }}" required autofocus />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>
</div>
