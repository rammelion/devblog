<div x-data="{ open: false }" class="hamburger shadow-md">
      <div class="container mx-auto flex justify-between items-center p-4">
        
        <button @click="open = !open" class="lg:hidden text-blue-500">
          <div class="w-6 h-6 relative">
            <svg
              x-show="!open"
              class="w-6 h-6"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"
              />
            </svg>

            <svg
              x-show="open"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="w-6 h-6"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M6 18L18 6M6 6l12 12"
              />
            </svg>
          </div>
        </button>
        <div class="hidden lg:flex">
          <ul class="lg:flex space-x-4">
            <li><a class="text-blue-500" href="#">Home</a></li>
            <li><a class="text-blue-500" href="#">About</a></li>
            <li><a class="text-blue-500" href="#">Services</a></li>
            <li><a class="text-blue-500" href="#">Contact</a></li>
          </ul>
        </div>
      </div>
      <div
        x-show="open"
        x-transition:enter="transform ease-out duration-300 transition-translate-opacity"
        x-transition:enter-start="translate-y-10 opacity-0"
        x-transition:enter-end="translate-y-0 opacity-100"
        x-transition:leave="transform ease-in duration-300 transition-translate-opacity"
        x-transition:leave-start="translate-y-0 opacity-100"
        x-transition:leave-end="translate-y-10 opacity-0"
        class="lg:hidden"
      >
        <ul class="bg-white p-4">
          <li><a class="text-blue-500" href="#">Home</a></li>
          <li><a class="text-blue-500" href="#">About</a></li>
          <li><a class="text-blue-500" href="#">Services</a></li>
          <li><a class="text-blue-500" href="#">Contact</a></li>
        </ul>
      </div>
    </div>