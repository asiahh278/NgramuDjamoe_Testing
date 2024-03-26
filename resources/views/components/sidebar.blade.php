<div>
    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
     </button>
     
     <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
           {{-- <a href="https://flowbite.com/" class="flex items-center ps-2.5 mb-5">
              <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 me-3 sm:h-7" alt="Flowbite Logo" />
              <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
           </a> --}}
           <a href="#" class="flex items-center mb-12">
            <img src="./public/assets/ic_logo.svg" class="h-6 me-3 sm:h-7" alt="Ngramu Djamoe Logo" />
         </a>
           <ul class="space-y-2 font-medium">
              <li>
                 <a href="#" class="flex items-center p-2 text-dark-brown rounded-lg dark:text-white  hover:bg-primary dark:hover:bg-gray-700 group">
                    <svg class="w-5 h-5 text-dark-brown transition duration-75 dark:text-dark-brown group-hover:text-white dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                       <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                       <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                    </svg>
                    <span class="ms-3">Dashboard</span>
                 </a>
    
                 
                   <a href="{{ url('/product') }}" class="flex items-center p-2 text-dark-brown rounded-lg dark:text-white hover:bg-primary dark:hover:bg-gray-700 group" aria-hidden="true">
                   <svg class="w-5 h-5 text-dark-brown transition duration-75 dark:text-dark-brown group-hover:text-white dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path fill="none" d="M0 0h24v24H0z"></path><path d="M20.5021 5.92225 12 1 3.49793 5.92225 12 10.8445 20.5021 5.92225ZM2.5 7.6555V17.5L11 22.4211V12.5765L2.5 7.6555ZM13 22.4211 21.5 17.5V7.6555L13 12.5765V22.4211Z"></path></svg>
                     <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                     <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                   </i>
                   <span class="ms-3">All Product</span>
                </a>
       
                <a href="#" class="flex items-center p-2 text-dark-brown rounded-lg dark:text-white hover:bg-primary dark:hover:bg-gray-700 group" aria-hidden="true" fill="currentColor" viewBox="0 0 22 21">
                   <svg class="w-5 h-5 text-dark-brown transition duration-75 dark:text-dark-brown group-hover:text-white dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12H4C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C9.25022 4 6.82447 5.38734 5.38451 7.50024L8 7.5V9.5H2V3.5H4L3.99989 5.99918C5.82434 3.57075 8.72873 2 12 2ZM13 7L12.9998 11.585L16.2426 14.8284L14.8284 16.2426L10.9998 12.413L11 7H13Z"></path></svg>
                     <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                     <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                   </i>
                   <span class="ms-3">History</span>
                </a>
              </li>
           </ul>
    
           <select id="countries" class="flex items-center p-2 w-full mt-14 text-base font-normal  dark:text-dark-brown rounded-lg group-hover:text-dark-brown hover:bg-white dark:hover:bg-primary group" aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages" aria-hidden="true">
             <option selected class="hidden py-2 space-y-2 text-dark-brown">Categories</option>
             <option class="flex items-center p-2 pl-11 w-full text-base font-normal text-dark-brown rounded-lg transition duration-75 group hover:bg-primary dark:text-dark-brown dark:hover:bg-primary"><a href="#">Jamu</a></option>
             <option class="flex items-center p-2 pl-11 w-full text-base font-normal text-dark-brown rounded-lg transition duration-75 group hover:bg-primary dark:text-dark-brown dark:hover:bg-primary"><a href="#">Sambal</a></option>
             <option class="flex items-center p-2 pl-11 w-full text-base font-normal text-dark-brown rounded-lg transition duration-75 group hover:bg-primary dark:text-dark-brown dark:hover:bg-primary"><a href="#">Fresh Drink</a></option>
           </select>
    
        </div>
     </aside>
     
     <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
           <div class="grid grid-cols-3 gap-4 mb-4">
              <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                 <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                       <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                    </svg>
                 </p>
              </div>
           </div>
        </div>
     </div>
</div>