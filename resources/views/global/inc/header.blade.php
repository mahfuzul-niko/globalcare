<!-- Top Header -->
    <header class="bg-white py-1 border-b border-[#cccccc6d] sticky top-0 z-56">
      <div class="c-container flex items-center justify-between gap-2">
        <!-- Logo -->
        <div class="flex gap-4 items-center">
          <button id="mobile-menu-btn" class="cursor-pointer block lg:hidden">
            <i class="fa-solid fa-bars text-[25px]"></i>
          </button>
          <a href="#" class="hidden lg:flex items-center">
            <img src="{{asset('global/assets') }}/images/logo.svg" class="w-[120px]" alt="Logo" />
          </a>
        </div>

        <!-- Location -->
        <div
          class="hidden lg:flex items-center space-x-2 ml-6 hover:bg-hover px-2 py-2 rounded-md cursor-pointer transition duration-200"
        >
          <i class="fa-solid fa-location-dot"></i>
          <span class="text-sm font-[600]"
            >Delivery to <br />
            Bangladesh <i class="fa-solid fa-caret-down"></i
          ></span>
        </div>

        <!-- Search Bar -->
        <div class="flex-1">
          <div class="flex rounded-md overflow-hidden bg-hover">
            <select
              class="bg-[#F7FAFC] px-2 text-sm font-[500] text-gray-700 w-fit outline-none cursor-pointer hidden md:block"
            >
              <option>All</option>
              <option>Medicine</option>
              <option>Healthcare</option>
              <option>Lab Test</option>
              <option>Beauty</option>
            </select>
            <input
              type="text"
              class="flex-1 px-4 py-3 bg-transparent text-gray-700 placeholder-gray-400 outline-none w-[90%]"
              placeholder='Search for "medicine products"'
            />
            <button
              class="bg-primary text-white px-4 flex items-center justify-center"
            >
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </div>
        </div>

        <!-- User & Cart -->
        <div class="flex items-center gap-2">
          <div
            class="flex items-center justify-center hover:bg-hover p-1 sm:p-2 rounded-md transition duration-200 cursor-pointer"
          >
            <div
              class="min-w-10 h-10 sm:min-w-12 sm:h-12 rounded-full bg-gray-100 flex items-center justify-center"
            >
              <i class="fa-solid fa-user text-gray-500"></i>
            </div>
            <div class="hidden lg:flex flex-col">
              <span class="text-sm text-gray-500"
                >Hello,
                <span class="font-[500] text-gray-700"
                  >User <br />
                  Account & Orders</span
                ></span
              >
            </div>
          </div>
          <div class="relative">
            <i class="fa-solid fa-cart-shopping text-[20px]"></i>
            <span
              class="absolute -top-3 -right-3 h-5 w-5 bg-red-500 text-white text-xs rounded-full flex justify-center items-center"
              >0</span
            >
          </div>
        </div>
      </div>
    </header>