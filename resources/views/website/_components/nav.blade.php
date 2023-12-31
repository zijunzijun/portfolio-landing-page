<header>
  <!-- This example requires Tailwind CSS v2.0+ -->
  <div class="relative bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
        <div class="flex justify-start lg:w-0 lg:flex-1">
          <a href="#">
            <span class="sr-only">Workflow</span>
            <img class="h-8 w-auto sm:h-10"
                 src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="">
          </a>
        </div>
        {{--Toogle button--}}
        <div class="-mr-2 -my-2 md:hidden">
          <button type="button"
                  class="nav-trigger bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-50 focus:outline-none focus:ring-0">
            <span class="sr-only">Open menu</span>
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
          </button>
        </div>
        <nav id="menu" class="absolute z-10 top-0 inset-x-0 hidden
                transform origin-top-right
                transition duration-100 ease-in
                md:relative md:block">
          <div class="bg-white rounded-lg shadow-lg ring-1 ring-black ring-opacity-5
                    divide-y-2 divide-gray-50 md:shadow-none md:ring-0">

            <div class="flex flex-col md:flex-row md:space-x-10 pt-5 pb-6 px-4 md:p-0">
              <a href="#"
                 class="block py-3 md:py-2 text-base font-medium text-gray-900 hover:text-gray-700 md:text-gray-500 md:hover:text-gray-900">
                Home
              </a>

              <div class="custom-dropdown py-3 md:py-2 relative">
                <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                <button type="button"
                        class="dropdown-trigger w-full group rounded
                    inline-flex items-center justify-between md:justify-start
                    bg-white
                    text-base font-medium text-gray-900 hover:text-gray-700 md:text-gray-500 md:hover:text-gray-900

                    focus:outline-none">
                  <span>Dropdown</span>
                  <svg class="ml-1 h-5 w-5 text-gray-400 group-hover:text-gray-500 transform transition-transform duration-150 ease-in-out"
                       xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                       aria-hidden="true">
                    <path fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd"/>
                  </svg>
                </button>

                <div class="dropdown-menu hidden md:absolute md:z-10 md:top-full transform md:px-2 w-full md:w-screen max-w-md sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
                  <div class="md:rounded-lg md:shadow-lg md:ring-1 md:ring-black md:ring-opacity-5 overflow-hidden">
                    <div class="relative grid gap-6 bg-white md:px-5 py-6 sm:gap-8 sm:p-8">
                      <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                        <!-- Heroicon name: outline/chart-bar -->
                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                        <div class="ml-4">
                          <p class="text-base font-medium text-gray-900">
                            Analytics
                          </p>
                          <p class="mt-1 text-sm text-gray-500">
                            Get a better understanding of where your traffic is coming from.
                          </p>
                        </div>
                      </a>

                      <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                        <!-- Heroicon name: outline/cursor-click -->
                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"/>
                        </svg>
                        <div class="ml-4">
                          <p class="text-base font-medium text-gray-900">
                            Engagement
                          </p>
                          <p class="mt-1 text-sm text-gray-500">
                            Speak directly to your customers in a more meaningful way.
                          </p>
                        </div>
                      </a>

                      <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                        <!-- Heroicon name: outline/shield-check -->
                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                        <div class="ml-4">
                          <p class="text-base font-medium text-gray-900">
                            Security
                          </p>
                          <p class="mt-1 text-sm text-gray-500">
                            Your customers&#039; data will be safe and secure.
                          </p>
                        </div>
                      </a>

                      <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                        <!-- Heroicon name: outline/view-grid -->
                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                        </svg>
                        <div class="ml-4">
                          <p class="text-base font-medium text-gray-900">
                            Integrations
                          </p>
                          <p class="mt-1 text-sm text-gray-500">
                            Connect with third-party tools that you&#039;re already using.
                          </p>
                        </div>
                      </a>

                      <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                        <!-- Heroicon name: outline/refresh -->
                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                        </svg>
                        <div class="ml-4">
                          <p class="text-base font-medium text-gray-900">
                            Automations
                          </p>
                          <p class="mt-1 text-sm text-gray-500">
                            Build strategic funnels that will drive your customers to convert
                          </p>
                        </div>
                      </a>
                    </div>
                    <div class="px-5 py-5 bg-gray-50 space-y-6 sm:flex sm:space-y-0 sm:space-x-10 sm:px-8">
                      <div class="flow-root">
                        <a href="#"
                           class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">
                          <!-- Heroicon name: outline/play -->
                          <svg class="flex-shrink-0 h-6 w-6 text-gray-400"
                               xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                               stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                          </svg>
                          <span class="ml-3">Watch Demo</span>
                        </a>
                      </div>

                      <div class="flow-root">
                        <a href="#"
                           class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">
                          <!-- Heroicon name: outline/phone -->
                          <svg class="flex-shrink-0 h-6 w-6 text-gray-400"
                               xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                               stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                          </svg>
                          <span class="ml-3">Contact Sales</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="custom-dropdown py-3 md:py-2 relative">
                <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                <button type="button"
                        class="dropdown-trigger w-full group rounded
                    inline-flex items-center justify-between md:justify-start
                    bg-white
                    text-base font-medium text-gray-900 hover:text-gray-700 md:text-gray-500 md:hover:text-gray-900

                    focus:outline-none">
                  <span>Dropdown</span>
                  <svg class="ml-1 h-5 w-5 text-gray-400 group-hover:text-gray-500 transform transition-transform duration-150 ease-in-out"
                       xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                       aria-hidden="true">
                    <path fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd"/>
                  </svg>
                </button>

                <div class="dropdown-menu hidden md:absolute md:z-10 md:top-full transform md:px-2 w-full md:w-screen max-w-md sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
                  <div class="md:rounded-lg md:shadow-lg md:ring-1 md:ring-black md:ring-opacity-5 overflow-hidden">
                    <div class="relative grid gap-6 bg-white md:px-5 py-6 sm:gap-8 sm:p-8">
                      <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                        <!-- Heroicon name: outline/chart-bar -->
                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                        <div class="ml-4">
                          <p class="text-base font-medium text-gray-900">
                            Analytics
                          </p>
                          <p class="mt-1 text-sm text-gray-500">
                            Get a better understanding of where your traffic is coming from.
                          </p>
                        </div>
                      </a>

                      <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                        <!-- Heroicon name: outline/cursor-click -->
                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"/>
                        </svg>
                        <div class="ml-4">
                          <p class="text-base font-medium text-gray-900">
                            Engagement
                          </p>
                          <p class="mt-1 text-sm text-gray-500">
                            Speak directly to your customers in a more meaningful way.
                          </p>
                        </div>
                      </a>

                      <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                        <!-- Heroicon name: outline/shield-check -->
                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                        <div class="ml-4">
                          <p class="text-base font-medium text-gray-900">
                            Security
                          </p>
                          <p class="mt-1 text-sm text-gray-500">
                            Your customers&#039; data will be safe and secure.
                          </p>
                        </div>
                      </a>

                      <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                        <!-- Heroicon name: outline/view-grid -->
                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                        </svg>
                        <div class="ml-4">
                          <p class="text-base font-medium text-gray-900">
                            Integrations
                          </p>
                          <p class="mt-1 text-sm text-gray-500">
                            Connect with third-party tools that you&#039;re already using.
                          </p>
                        </div>
                      </a>

                      <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                        <!-- Heroicon name: outline/refresh -->
                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                        </svg>
                        <div class="ml-4">
                          <p class="text-base font-medium text-gray-900">
                            Automations
                          </p>
                          <p class="mt-1 text-sm text-gray-500">
                            Build strategic funnels that will drive your customers to convert
                          </p>
                        </div>
                      </a>
                    </div>
                    <div class="px-5 py-5 bg-gray-50 space-y-6 sm:flex sm:space-y-0 sm:space-x-10 sm:px-8">
                      <div class="flow-root">
                        <a href="#"
                           class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">
                          <!-- Heroicon name: outline/play -->
                          <svg class="flex-shrink-0 h-6 w-6 text-gray-400"
                               xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                               stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                          </svg>
                          <span class="ml-3">Watch Demo</span>
                        </a>
                      </div>

                      <div class="flow-root">
                        <a href="#"
                           class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">
                          <!-- Heroicon name: outline/phone -->
                          <svg class="flex-shrink-0 h-6 w-6 text-gray-400"
                               xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                               stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                          </svg>
                          <span class="ml-3">Contact Sales</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="order-first mb-6 flex items-center justify-between md:hidden">
                <div>
                  <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                       alt="Workflow">
                </div>
                <div class="-mr-2">
                  <button type="button"
                          class="nav-trigger bg-white rounded-md p-2 inline-flex items-center justify-center
                                        text-gray-400 hover:text-gray-500
                                        hover:bg-gray-50 focus:outline-none
                                        focus:ring-0">
                    <span class="sr-only">Close menu</span>
                    <!-- Heroicon name: outline/x -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                  </button>
                </div>
              </div>
            </div>


            <div class="pt-5 pb-6 px-5 md:p-0 md:hidden">
              <a href="#"
                 class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                Sign up
              </a>
              <p class="mt-6 text-center text-base font-medium text-gray-500">
                Existing customer?
                <a href="#" class="text-indigo-600 hover:text-indigo-500">
                  Sign in
                </a>
              </p>
            </div>
          </div>
        </nav>
        <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
          <a href="#" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
            Sign in
          </a>
          <a href="#"
             class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
            Sign up
          </a>
        </div>
      </div>
    </div>
  </div>
</header>



@push('script')
  <script>
      $('.nav-trigger').on('click', function (event) {
          $('#menu').toggleClass('hidden');
      });

      $('.dropdown-trigger').on('click', function (e) {
          e.preventDefault();
          console.log('avc');
          var $el = $(this);
          if($el.siblings('.dropdown-menu').hasClass("hidden")) {
              $('.dropdown-trigger svg').removeClass('rotate-180');
              $el.children('svg').addClass('rotate-180');
              $('.dropdown-menu').addClass("hidden");
              $el.siblings('.dropdown-menu').removeClass("hidden");
          } else {
              $el.children('svg').removeClass('rotate-180');
              $('.dropdown-menu').addClass("hidden");
          }
      });
  </script>
@endpush
