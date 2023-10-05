<header class="w-full grid grid-cols-12">


    <a href="{{ url('/') }}" class="col-span-8 md:col-span-4">
        <img src="{{ asset('./img/logo.png') }}" alt="GSBD - Global Sources BD - Logo">
    </a>

    <nav class="col-span-4 md:col-span-8 bg-white border-gray-200">
        <div class="relative max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">


            <div class="hidden md:w-auto items-center justify-between w-full md:flex md:order-1" id="navbar-user">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white">
                    <li><a href="{{ url('./login') }}" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-gray-900 md:p-0" aria-current="page">Home</a></li>
                    <li><a href="{{ url('./login') }}" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-gray-900 md:p-0" aria-current="page">Home</a></li>
                </ul>
            </div>

            <div class="flex items-center md:order-2 relative">
                <span class="group relative">
                    <a href="{{ url('./login') }}">
                        <svg class="w-6 h-6 mt-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>
                    </a>&nbsp;&nbsp;
                    <div class="hidden group-hover:block absolute top-10 right-0 z-30 bg-white px-3 py-2">
                        <a href="{{ url('./login') }}"
                            class="px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign In</a>
                        <a href="{{ url('./register') }}"
                            class="px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Ragistration</a>
                    </div>
                </span>
                <button id="navbar-user-toggle" data-collapse-toggle="navbar-user" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>


        </div>
    </nav>
</header>
<!-- /Header -->


<script>
    // Get references to the button and dropdown elements
    const userMenuButton = document.getElementById('user-menu-button');
    const userDropdown = document.getElementById('user-dropdown');
  
    // navbar user
    const navbarUserButton = document.getElementById('navbar-user-toggle');
    const navbarUser = document.getElementById('navbar-user');
  
  if(userMenuButton && userDropdown){
      // Add a click event listener to the button
      userMenuButton.addEventListener('click', () => {
      // Toggle the 'hidden' class to show/hide the dropdown
      userDropdown.classList.toggle('hidden');
    });
  
  };
  
  if(navbarUserButton && navbarUser){
    // Add a click event listener to the button
    navbarUserButton.addEventListener('click', () => {
      // Toggle the 'hidden' class to show/hide the dropdown
      navbarUser.classList.toggle('hidden');
      navbarUser.classList.toggle('absolute');
      navbarUser.classList.toggle('top-14');
      navbarUser.classList.toggle('right-0');
      navbarUser.classList.toggle('z-40');
    });
  };
  
  </script>