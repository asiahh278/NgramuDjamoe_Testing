<html>
    <body class="font-linux">
        <link href="resourcs/src/output.css" rel="stylesheet">

      @extends('admin.products')

      <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a new product</h2>
            {{-- <form action="/addproduct" method="POST"> --}}
            <form action="/{{ route('/addproduct') }}" method="POST">
                @method('POST')
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="gallery_product" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gallery Product</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                    </div>
                    <div class="w-full">
                        <label for="product_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name</label>
                        <input type="text" name="brand" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Product brand" required="">
                    </div>
                    <div class="w-full">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                        <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
                    </div>
                    <div>
                        <label for="ingredients" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                        <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Select category</option>
                            <option value="Jamu">Jamu</option>
                            <option value="Sambel">Sambel</option>
                            <option value="Fresh Drink">Fresh Drink</option>
                        </select>
                    </div>
                    
                    <div class="sm:col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea id="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Your description here"></textarea>
                    </div>
                </div>
                <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Add product
                </button>
            </form>
        </div>
      </section>
      
      {{-- <x-success-status class="mb-4" :status="session('message')" /> --}}
      {{-- <x-validation-error class="mb-4" :status="session('message')"/>
      <div class="py-12">
        <div class="max-w-7xl mx-auto sm-px-6 lg:px:8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm-rounded-lg">

                <form action="{{ url('add-product') }}" method="GET">
                @csrf
                <div>
                    <x-input-label for="nama_barang" :value="__('Nama Barang')" />
                    <x-text-input id="nama_barang" class="block mt-1 w-full" type="text" name="nama_barang" :value="old('nama_barang')" required autofocus/>
                </div>
                <div>
                    <x-input-label for="harga_barang" :value="__('Harga Barang')" />
                    <x-text-input id="harga_barang" class="block mt-1 w-full" type="text" name="harga_barang" :value="old('harga_barang')" required autofocus/>
                </div>
                <div>
                    <x-input-label for="bahan" :value="__('Bahan')" />
                    <x-text-input id="bahan" class="block mt-1 w-full" type="text" name="bahan" :value="old('bahan')" required autofocus/>
                </div>
                <div>
                    <x-input-label for="jumlah" :value="__('Jumlah')" />
                    <x-text-input id="jumlah" class="block mt-1 w-full" type="text" name="jumlah" :value="old('jumlah')" required autofocus/>
                </div>
                <div>
                    <x-input-label for="deskripsi" :value="__('Deskripsi')" />
                    <x-text-input id="deskripsi" class="block mt-1 w-full" type="text" name="deskripsi" :value="old('deskripsi')" required autofocus/>
                </div>
                

                <button type="submit" @disabled($errors->isNotEmpty())>Submit</button>
                {{-- <x-primary-button class="ml-3">
                    {{ __('products') }}
                </x-primary-button> --}}
                </form>
            </div>
        </div> --}}
      </div>

    </body>
</html>




