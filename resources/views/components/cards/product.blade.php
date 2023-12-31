@props(['product', 'link' => 'true'])

<a @if ($link == 'true') href="{{ route('products.show', ['product' => $product]) }}" @endif class="grow"
    style="max-width: 290px;max-height: 600px;width: 100%;height: auto;">
    <form action="{{ route('cart.store') }}" method="POST"
        class="shadow border rounded-xl bg-whiteColor w-full h-50 sm:w-72">
        @csrf

        <div class="h-40 sm:h-52 flex items-center justify-center">
            <img src="{{ asset('storage/' . $product->image) }}" alt="product-img"
                class="object-cover w-full h-full rounded-lg">
        </div>

        <div class="p-4">
            <div class="mb-1">
                <span class="text-sm">{{ $product->category->name }} - {{ $product->subcategory->name }}</span>
            </div>
            <h1 class="font-bold text-sm md:text-lg">{{ $product->name }}</h1>
            <span class="text-sm">${{ $product->price }}</span>
            <div class="flex flex-wrap justify-start items-center space-x-2 mb-2">
                @foreach ($product->productsizes as $productsize)
                    <div class="border border-primaryColor rounded px-1 mb-1">
                        <input type="radio" id="size_{{ $product->id }}_{{ $productsize->size->id }}"
                            name="size_{{ $product->id }}" value="{{ $productsize->size->id }}"
                            @if (old('size_' . $product->id) === $productsize->size->id) selected @endif>
                        <label class="text-xs text-primaryColor"
                            for="size_{{ $product->id }}_{{ $productsize->size->id }}">{{ $productsize->size->name }}</label>
                    </div>
                @endforeach

                <x-form.error name="size_{{ $product->id }}" />
            </div>
            @if ($link == 'true')
                <div class="flex justify-between items-center">
                    <input type="hidden" name="quantity" value="1">
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <x-form.button>Add to Cart</x-form.button>
                    <i class="fa-regular fa-heart"></i>
                </div>
            @endif
        </div>
    </form>
</a>
