<div>
    <div class="flex gap-5 p-20">
        <img src="{{ asset('images/1.jpg') }}" alt="product-image" class="rounded objek-cover" height="400" width="600">
        <div>
            <h2 class="p-1 font-medium text-2xl     ">Product Title</h2>
            <h2 class="p-1 text-gray-500 line-clamp-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum,
                in fugiat doloremque sequi sunt laudantium mollitia corrupti quod dolore consequuntur sint voluptate,
                nam minima aspernatur maxime dicta soluta necessitatibus voluptates. Corrupti cum nostrum aperiam amet
                atque veritatis? Excepturi placeat rem enim ducimus reiciendis necessitatibus, accusantium expedita
                fugiat iure, fuga animi!</h2>
            <div class="flex gap-10">
                <div class="bg-green-200 p-1 rounded-md">
                    <h2 class="text-1xl">Outfit</h2>
                </div>
                <h2 class="text-2xl font-medium">Rp.100,000</h2>
            </div>
            <div class="my-3">
                <a class="flex gap-2 justify-center w-full rounded bg-orange-500 px-12 py-2 text-sm font-medium text-white shadow hover:bg-orange-800 focus:outline-none focus:ring active:bg-orange-300 sm:w-auto flex items-center justify-center"
                    href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
                    <span>Add to Cart</span>
                </a>
            </div>
        </div>
    </div>
    <div class="my-5 px-20 pt-5">
        <h2 class="text-2xl font-bold">
            RELATED PRODUCT
        </h2>
        <livewire:product-listing>
    </div>
</div>
