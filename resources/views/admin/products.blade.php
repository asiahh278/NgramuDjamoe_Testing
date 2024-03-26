<html>

<body class="font-linux">
   <link href="/css/app.css" rel="stylesheet">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

   {{-- <x-app-layout></x-app-layout> --}}
      
   <div class="w-5/6 p-4">
      <button data-modal-target="crud-product" data-modal-toggle="crud-product" class="absolute mt-200 ml-200 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
         <a href="{{ url('add-product') }}">Add Product</a>
      </button>
   </div>
      
      
      {{-- <x-form-create-product></x-form-create-product> --}}
      {{-- <x-sidebar></x-sidebar> --}}
 
 

</body>
 
</html>
