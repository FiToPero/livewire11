<div>
    
    <div class="w-[350px] h-[550px] mx-auto my-6 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
        <div class="m-auto">
            <h2 class="text-2xl mb-5 font-bold text-gray-700 dark:text-gray-200">Add Product</h2>
            <div class="w-full mb-2">
                <label for="productName" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Product Name</label>
                <input wire:model="productName" type="text" name="productName" class="block py-2.5 px-0 w-full text-sm placeholder-gray-900 bg-transparent border-2 border-gray-300 appearance-none dark:placeholder-gray-300 dark:border-gray-600"  /> 
            </div>
            <div class="w-full mb-2">
                <label for="shortDescription" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Short Description</label>
                <input wire:model="shortDescription" type="text" name="shortDescription" class="block py-2.5 px-0 w-full text-sm placeholder-gray-900 bg-transparent border-2 border-gray-300 appearance-none dark:placeholder-gray-300 dark:border-gray-600" />
            </div>
            <div class="w-full mb-2 ">
                <label for="stock" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Stock</label>
                <input wire:model="stock" type="text" name="stock" class="block py-2.5 px-0 w-full text-sm text-center placeholder-gray-900 bg-transparent border-2 border-gray-300 appearance-none dark:placeholder-gray-300 dark:border-gray-600" />
            </div>
            <div class="w-full mb-2 ">
                <label for="price" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Price</label>
                <input wire:model="price" type="text" name="price" class="block py-2.5 px-0 w-full text-sm text-center placeholder-gray-900 bg-transparent border-2 border-gray-300 appearance-none dark:placeholder-gray-300 dark:border-gray-600" />
            </div> 
        </div>
    </div>  

</div>
