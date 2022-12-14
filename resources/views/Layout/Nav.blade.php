    
    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900 shadow-md mb-3">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <a href="{{ url('/home') }}" class="flex items-center"><h3 class="2x-text"> Small <strong style="color:#4f46e5">Blog</strong></h3></a>
          <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
          </button>
          <div class="w-full md:block md:w-auto" id="navbar-default">
            @if (Route::has('login')) 
            <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
              @auth
              <li>
                <a href="{{ url('/home') }}" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a>
              </li>
              <li>
                <a href="{{ route('logout') }}" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Logout</a>
              </li>
              @else
              <li>
                  <a href="{{ route('login') }}" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Login</a>
              </li>
                @endauth
            </ul>
            @endif
          </div>
        </div>
      </nav>
      
    
    
{{--     
    @if (Route::has('login'))  
    <div class="px-6 py-4 sm:block">
    @auth
    <div class="flex justify-between">
        <section class="left-0">
           <a href="{{ url('/home') }}"><h3 class="2x-text"> Small <strong style="color:#4f46e5">Blog</strong></h3></a>
       </section>
     <section class="right-0">
         <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500">Home</a>
         <a href="{{ route('logout') }}" class="text-sm text-gray-700 dark:text-gray-500">LogOut</a>
     </section>
    </div>
    @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500">Log in</a>

        {{-- @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
        {{-- @endif -- --}}
    {{-- @endauth
</div>
@endif            --}}
