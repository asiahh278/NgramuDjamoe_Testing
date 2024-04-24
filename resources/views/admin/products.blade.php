<html>

<body class="font-linux" link="{{ url('/product') }}">
   <link href="/css/app.css" rel="stylesheet">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

   {{-- <x-app-layout></x-app-layout> --}}
      
   <div class="w-5/6 p-4">
      <button data-modal-target="crud-product" data-modal-toggle="crud-product" class="absolute mt-200 ml-200 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
         <a href="{{ route('admin.addproduct') }}">Add Product</a>
      </button>
   </div>
   
   <div class="max-w-sm rounded overflow-hidden shadow-lg">
      <img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
        <p class="text-gray-700 text-base">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
        </p>
      </div>
      <div class="px-6 pt-4 pb-2">
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
      </div>
    </div>
      
      
      {{-- <x-form-create-product></x-form-create-product> --}}
      {{-- <x-sidebar></x-sidebar> --}}
 
 

</body>
 
</html>
