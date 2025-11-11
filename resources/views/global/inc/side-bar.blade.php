 <!-- Sidebar -->
    <div
      id="sidebar-overlay"
      class="fixed inset-0 bg-[#00000080] z-40 transition-opacity duration-300 opacity-0 pointer-events-none lg:hidden"
    ></div>

    <nav
      id="sidebar"
      class="nav-sidebar fixed top-0 left-0 lg:left-4 2xl:left-18 lg:top-0 h-screen max-w-80 w-[90%] bg-white z-56 lg:z-40 transform -translate-x-full transition-transform duration-300 lg:translate-x-0 lg:w-70 xl:w-80 lg:max-w-none lg:bg-white lg:border-l border-[#c2c2c255] pr-4 lg:pr-0 pl-4 pt-12 lg:pt-22 pb-20 overflow-y-auto"
    >
      <!-- Close Button -->
      <button
        id="sidebar-close-btn"
        class="absolute top-4 right-4 text-2xl text-red-500 lg:hidden"
      >
        <i class="fa-solid fa-xmark"></i>
      </button>

      <h4 class="flex items-center gap-1 mb-6">
        <img src="{{asset('global/assets') }}/images/icons/column.svg" alt="Column Icons" />
        <span
          class="text-sm xl:text-base text-primary font-[500] whitespace-nowrap"
          >Shop By Category</span
        >
      </h4>

      <!-- Flash Sale -->
      <a href="#" class="flex items-center gap-2 mb-4">
        <svg
          stroke="currentColor"
          fill="currentColor"
          stroke-width="0"
          version="1"
          viewBox="0 0 48 48"
          enable-background="new 0 0 48 48"
          height="32"
          width="32"
          xmlns="http://www.w3.org/2000/svg"
          style="width: 32px; height: 32px"
        >
          <polygon
            fill="#FFC107"
            points="33,22 23.6,22 30,5 19,5 13,26 21.6,26 17,45"
          ></polygon>
        </svg>
        <img
          src="{{asset('global/assets') }}/images/flash-sale.jpg"
          alt="Flash Sale"
          class="w-[120px]"
        />
        <span
          class="border border-red-400 text-red-500 px-2 py-1 rounded text-xs font-semibold"
          >1000+</span
        >
      </a>
      <!-- Dropdown Menu -->
      <ul class="space-y-1" id="sidenav-list">
        <!-- 4 level menu -->
        <li>
          <a
            href="#"
            class="flex items-center w-full px-2 py-2 rounded hover:bg-gray-100 group"
          >
            <img
              src="{{asset('global/assets') }}/images/menu-1.webp"
              class="w-9 h-9 mr-2 object-contain border border-[#ccc] rounded-full"
              alt=""
            />
            <span class="flex-1 text-left truncate text-primary font-medium"
              >Medicine</span
            >
            <i
              class="arrow fa-solid fa-angle-right text-gray-400 group-hover:text-primary"
            ></i>
          </a>
          <ul class="sidenav-submenu ml-6 mt-1 space-y-1">
            <li>
              <a
                href="#"
                class="flex items-center w-full px-2 py-2 rounded hover:bg-gray-100 group"
              >
                <img
                  src="{{asset('global/assets') }}/images/menu-2.png"
                  class="w-9 h-9 mr-2 object-contain border border-[#ccc] rounded-full"
                  alt=""
                />
                <span class="flex-1 text-left truncate text-primary font-medium"
                  >Anesthetics & Ne...</span
                >
                <i
                  class="arrow fa-solid fa-angle-right text-gray-400 group-hover:text-primary"
                ></i>
              </a>
              <ul class="sidenav-submenu ml-6 mt-1 space-y-1">
                <li>
                  <a
                    href="#"
                    class="flex items-center w-full px-2 py-2 rounded hover:bg-gray-100 group"
                  >
                    <img
                      src="{{asset('global/assets') }}/images/menu-2.png"
                      class="w-9 h-9 mr-2 object-contain border border-[#ccc] rounded-full"
                      alt=""
                    />
                    <span
                      class="flex-1 text-left truncate text-primary font-medium"
                      >Muscle Relaxants</span
                    >
                    <i
                      class="arrow fa-solid fa-angle-right text-gray-400 group-hover:text-primary"
                    ></i>
                  </a>
                  <ul class="sidenav-submenu ml-6 mt-1 space-y-1">
                    <li>
                      <a
                        href="#"
                        class="flex items-center w-full px-2 py-2 rounded hover:bg-gray-100 group"
                      >
                        <img
                          src="{{asset('global/assets') }}/images/menu-2.png"
                          class="w-9 h-9 mr-2 object-contain border border-[#ccc] rounded-full"
                          alt=""
                        />
                        <span class="flex-1 text-left truncate text-gray-700"
                          >Non Depolarizing...</span
                        >
                      </a>
                    </li>
                    <li>
                      <a
                        href="#"
                        class="flex items-center w-full px-2 py-2 rounded hover:bg-gray-100 group"
                      >
                        <img
                          src="{{asset('global/assets') }}/images/menu-2.png"
                          class="w-9 h-9 mr-2 object-contain border border-[#ccc] rounded-full"
                          alt=""
                        />
                        <span class="flex-1 text-left truncate text-gray-700"
                          >Depolarizing Mus...</span
                        >
                      </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a
                    href="#"
                    class="flex items-center w-full px-2 py-2 rounded hover:bg-gray-100 group"
                  >
                    <img
                      src="{{asset('global/assets') }}/images/menu-4.webp"
                      class="w-9 h-9 mr-2 object-contain border border-[#ccc] rounded-full"
                      alt=""
                    />
                    <span class="flex-1 text-left truncate text-gray-700"
                      >Post-Operative Pain</span
                    >
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a
                href="#"
                class="flex items-center w-full px-2 py-2 rounded hover:bg-gray-100 group"
              >
                <img
                  src="{{asset('global/assets') }}/images/menu-3.png"
                  class="w-9 h-9 mr-2 object-contain border border-[#ccc] rounded-full"
                  alt=""
                />
                <span class="flex-1 text-left truncate text-gray-700"
                  >Antimicrobial</span
                >
              </a>
            </li>
          </ul>
        </li>
        <!-- 2 level menu -->
        <li>
          <a
            href="#"
            class="flex items-center w-full px-2 py-2 rounded hover:bg-gray-100 group"
          >
            <img
              src="{{asset('global/assets') }}/images/menu-5.webp"
              class="w-9 h-9 mr-2 object-contain border border-[#ccc] rounded-full"
              alt=""
            />
            <span class="flex-1 text-left truncate text-primary font-medium"
              >Lab Test</span
            >
            <i
              class="arrow fa-solid fa-angle-right text-gray-400 group-hover:text-primary"
            ></i>
          </a>
          <ul class="sidenav-submenu ml-6 mt-1 space-y-1">
            <li>
              <a
                href="#"
                class="flex items-center w-full px-2 py-2 rounded hover:bg-gray-100 group"
              >
                <img
                  src="{{asset('global/assets') }}/images/menu-8.webp"
                  class="w-9 h-9 mr-2 object-contain border border-[#ccc] rounded-full"
                  alt=""
                />
                <span class="flex-1 text-left truncate text-gray-700"
                  >Blood Test</span
                >
              </a>
            </li>
          </ul>
        </li>
        <!-- 1 level -->
        <li>
          <a
            href="#"
            class="flex items-center w-full px-2 py-2 rounded hover:bg-gray-100 group"
          >
            <img
              src="{{asset('global/assets') }}/images/menu-3.png"
              class="w-9 h-9 mr-2 object-contain border border-[#ccc] rounded-full"
              alt=""
            />
            <span class="flex-1 text-left truncate text-gray-700"
              >Healthcare</span
            >
          </a>
        </li>
        <!-- 3 level menu -->
        <li>
          <a
            href="#"
            class="flex items-center w-full px-2 py-2 rounded hover:bg-gray-100 group"
          >
            <img
              src="{{asset('global/assets') }}/images/menu-3.png"
              class="w-9 h-9 mr-2 object-contain border border-[#ccc] rounded-full"
              alt=""
            />
            <span class="flex-1 text-left truncate text-primary font-medium"
              >Beauty</span
            >
            <i
              class="arrow fa-solid fa-angle-right text-gray-400 group-hover:text-primary"
            ></i>
          </a>
          <ul class="sidenav-submenu ml-6 mt-1 space-y-1">
            <li>
              <a
                href="#"
                class="flex items-center w-full px-2 py-2 rounded hover:bg-gray-100 group"
              >
                <img
                  src="{{asset('global/assets') }}/images/menu-3.png"
                  class="w-9 h-9 mr-2 object-contain border border-[#ccc] rounded-full"
                  alt=""
                />
                <span class="flex-1 text-left truncate text-primary font-medium"
                  >Skin Care</span
                >
                <i
                  class="arrow fa-solid fa-angle-right text-gray-400 group-hover:text-primary"
                ></i>
              </a>
              <ul class="sidenav-submenu ml-6 mt-1 space-y-1">
                <li>
                  <a
                    href="#"
                    class="flex items-center w-full px-2 py-2 rounded hover:bg-gray-100 group"
                  >
                    <img
                      src="{{asset('global/assets') }}/images/menu-10.webp"
                      class="w-9 h-9 mr-2 object-contain border border-[#ccc] rounded-full"
                      alt=""
                    />
                    <span class="flex-1 text-left truncate text-gray-700"
                      >Moisturizers</span
                    >
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <!-- 4 level menu -->
        <li>
          <a
            href="#"
            class="flex items-center w-full px-2 py-2 rounded hover:bg-gray-100 group"
          >
            <img
              src="{{asset('global/assets') }}/images/menu-1.webp"
              class="w-9 h-9 mr-2 object-contain border border-[#ccc] rounded-full"
              alt=""
            />
            <span class="flex-1 text-left truncate text-primary font-medium"
              >Medicine</span
            >
            <i
              class="arrow fa-solid fa-angle-right text-gray-400 group-hover:text-primary"
            ></i>
          </a>
          <ul class="sidenav-submenu ml-6 mt-1 space-y-1">
            <li>
              <a
                href="#"
                class="flex items-center w-full px-2 py-2 rounded hover:bg-gray-100 group"
              >
                <img
                  src="{{asset('global/assets') }}/images/menu-2.png"
                  class="w-9 h-9 mr-2 object-contain border border-[#ccc] rounded-full"
                  alt=""
                />
                <span class="flex-1 text-left truncate text-primary font-medium"
                  >Anesthetics & Ne...</span
                >
                <i
                  class="arrow fa-solid fa-angle-right text-gray-400 group-hover:text-primary"
                ></i>
              </a>
              <ul class="sidenav-submenu ml-6 mt-1 space-y-1">
                <li>
                  <a
                    href="#"
                    class="flex items-center w-full px-2 py-2 rounded hover:bg-gray-100 group"
                  >
                    <img
                      src="{{asset('global/assets') }}/images/menu-2.png"
                      class="w-9 h-9 mr-2 object-contain border border-[#ccc] rounded-full"
                      alt=""
                    />
                    <span
                      class="flex-1 text-left truncate text-primary font-medium"
                      >Muscle Relaxants</span
                    >
                    <i
                      class="arrow fa-solid fa-angle-right text-gray-400 group-hover:text-primary"
                    ></i>
                  </a>
                  <ul class="sidenav-submenu ml-6 mt-1 space-y-1">
                    <li>
                      <a
                        href="#"
                        class="flex items-center w-full px-2 py-2 rounded hover:bg-gray-100 group"
                      >
                        <img
                          src="{{asset('global/assets') }}/images/menu-2.png"
                          class="w-9 h-9 mr-2 object-contain border border-[#ccc] rounded-full"
                          alt=""
                        />
                        <span class="flex-1 text-left truncate text-gray-700"
                          >Non Depolarizing...</span
                        >
                      </a>
                    </li>
                    <li>
                      <a
                        href="#"
                        class="flex items-center w-full px-2 py-2 rounded hover:bg-gray-100 group"
                      >
                        <img
                          src="{{asset('global/assets') }}/images/menu-2.png"
                          class="w-9 h-9 mr-2 object-contain border border-[#ccc] rounded-full"
                          alt=""
                        />
                        <span class="flex-1 text-left truncate text-gray-700"
                          >Depolarizing Mus...</span
                        >
                      </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a
                    href="#"
                    class="flex items-center w-full px-2 py-2 rounded hover:bg-gray-100 group"
                  >
                    <img
                      src="{{asset('global/assets') }}/images/menu-4.webp"
                      class="w-9 h-9 mr-2 object-contain border border-[#ccc] rounded-full"
                      alt=""
                    />
                    <span class="flex-1 text-left truncate text-gray-700"
                      >Post-Operative Pain</span
                    >
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a
                href="#"
                class="flex items-center w-full px-2 py-2 rounded hover:bg-gray-100 group"
              >
                <img
                  src="{{asset('global/assets') }}/images/menu-3.png"
                  class="w-9 h-9 mr-2 object-contain border border-[#ccc] rounded-full"
                  alt=""
                />
                <span class="flex-1 text-left truncate text-gray-700"
                  >Antimicrobial</span
                >
              </a>
            </li>
          </ul>
        </li>
        <!-- 2 level menu -->
        <li>
          <a
            href="#"
            class="flex items-center w-full px-2 py-2 rounded hover:bg-gray-100 group"
          >
            <img
              src="{{asset('global/assets') }}/images/menu-5.webp"
              class="w-9 h-9 mr-2 object-contain border border-[#ccc] rounded-full"
              alt=""
            />
            <span class="flex-1 text-left truncate text-primary font-medium"
              >Lab Test</span
            >
            <i
              class="arrow fa-solid fa-angle-right text-gray-400 group-hover:text-primary"
            ></i>
          </a>
          <ul class="sidenav-submenu ml-6 mt-1 space-y-1">
            <li>
              <a
                href="#"
                class="flex items-center w-full px-2 py-2 rounded hover:bg-gray-100 group"
              >
                <img
                  src="{{asset('global/assets') }}/images/menu-8.webp"
                  class="w-9 h-9 mr-2 object-contain border border-[#ccc] rounded-full"
                  alt=""
                />
                <span class="flex-1 text-left truncate text-gray-700"
                  >Blood Test</span
                >
              </a>
            </li>
          </ul>
        </li>
        <!-- 1 level -->
        <li>
          <a
            href="#"
            class="flex items-center w-full px-2 py-2 rounded hover:bg-gray-100 group"
          >
            <img
              src="{{asset('global/assets') }}/images/menu-3.png"
              class="w-9 h-9 mr-2 object-contain border border-[#ccc] rounded-full"
              alt=""
            />
            <span class="flex-1 text-left truncate text-gray-700"
              >Healthcare</span
            >
          </a>
        </li>
        <!-- 3 level menu -->
        <li>
          <a
            href="#"
            class="flex items-center w-full px-2 py-2 rounded hover:bg-gray-100 group"
          >
            <img
              src="{{asset('global/assets') }}/images/menu-3.png"
              class="w-9 h-9 mr-2 object-contain border border-[#ccc] rounded-full"
              alt=""
            />
            <span class="flex-1 text-left truncate text-primary font-medium"
              >Beauty</span
            >
            <i
              class="arrow fa-solid fa-angle-right text-gray-400 group-hover:text-primary"
            ></i>
          </a>
          <ul class="sidenav-submenu ml-6 mt-1 space-y-1">
            <li>
              <a
                href="#"
                class="flex items-center w-full px-2 py-2 rounded hover:bg-gray-100 group"
              >
                <img
                  src="{{asset('global/assets') }}/images/menu-3.png"
                  class="w-9 h-9 mr-2 object-contain border border-[#ccc] rounded-full"
                  alt=""
                />
                <span class="flex-1 text-left truncate text-primary font-medium"
                  >Skin Care</span
                >
                <i
                  class="arrow fa-solid fa-angle-right text-gray-400 group-hover:text-primary"
                ></i>
              </a>
              <ul class="sidenav-submenu ml-6 mt-1 space-y-1">
                <li>
                  <a
                    href="#"
                    class="flex items-center w-full px-2 py-2 rounded hover:bg-gray-100 group"
                  >
                    <img
                      src="{{asset('global/assets') }}/images/menu-10.webp"
                      class="w-9 h-9 mr-2 object-contain border border-[#ccc] rounded-full"
                      alt=""
                    />
                    <span class="flex-1 text-left truncate text-gray-700"
                      >Moisturizers</span
                    >
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </nav>