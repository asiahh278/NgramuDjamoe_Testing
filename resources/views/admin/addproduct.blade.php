<html>
    <head>
        <link href="resourcs/src/output.css" rel="stylesheet">
    </head>
    <body class="font-linux">
        <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
      {{-- @extends('admin.products') --}}

      <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a new product</h2>
            
            <form action="{{ url('/addproduct') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- @method('POST') --}}
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <!-- Other form elements -->
                    
                    <div class="sm:col-span-2">
                        <label for="images" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Images</label>
                        <input type="file" name="images[]" multiple id="images" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
                    
                    <!-- Other form elements -->
                </div>
                
                <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Add product
                </button>
            </form>
        </div>
      </section>
      

                </form>
            </div>
        </div>
      </div>

    </body>
</html>




