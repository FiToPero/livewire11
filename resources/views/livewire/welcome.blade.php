<div>

  <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
   
  @foreach ($products as $product)  
  <div class="sm:col-span-1 min-w-full min-h-full p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
     
         
  <div class="m-auto">
      <div class="w-full mb-2">
          <input type="text" name="productName" class="block py-2.5 px-0 w-full text-sm placeholder-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:placeholder-gray-300 dark:border-gray-600"  placeholder="{{$product->productName}}" disabled/> 
      </div>
      <div class="w-full mb-2">
          <input type="text" name="shortDescription" class="block py-2.5 px-0 w-full text-sm placeholder-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:placeholder-gray-300 dark:border-gray-600" placeholder="{{$product->shortDescription}}" disabled/>
      </div>
      <div class="w-full mb-2 ">
          <input type="text" name="stock" class="block py-2.5 px-0 w-full text-sm text-center placeholder-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:placeholder-gray-300 dark:border-gray-600" placeholder="{{$product->stock}}" disabled/>
      </div>
      <div class="w-full mb-2 ">
          <input type="text" name="price" class="block py-2.5 px-0 w-full text-sm text-center placeholder-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:placeholder-gray-300 dark:border-gray-600" placeholder=" € {{$product->price}}" disabled/>
      </div> 
  </div>
  </div>  

@endforeach 
</div>

{{ $products->links() }}

</div>
