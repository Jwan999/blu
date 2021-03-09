<header class="bg-white sm:flex sm:justify-between sm:items-center sm:px-16 sm:py-6">
    <div class="flex items-center justify-between px-4 py-3 sm:p-0">
        <div class="flex">
            <img class="h-8" src="blu.png" alt="Blu">
            <h1 class="text-2xl mr-4">
                بلو للأصباغ الايطالية
            </h1>
        </div>
        <div class="sm:hidden">
            <button @click="isOpen = !isOpen" type="button"
                    class="block text-gray-500 focus:outline-none">
                <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                    <path v-if="isOpen" fill-rule="evenodd"
                          d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"/>
                    <path v-if="!isOpen" fill-rule="evenodd"
                          d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                </svg>
            </button>
        </div>
    </div>
    <nav :class="isOpen ? 'block' : 'hidden'" class="px-2 pb-4 sm:flex sm:p-0">

        <scrollactive active-class="active"
                      class="lg:flex items-center justify-between text-lg text-gray-700"
                      :offset="100" :duration="800"
                      bezier-easing-value=".5,0,.35,1">

            <a href="#whoarewe"
               class="scrollactive-item block px-3 py-2 font-semibold rounded hover:text-gray-100 hover:bg-gray-800 transition duration-300 ease-in-out transform hover:scale-110 border-transparent">
                من نحن

            </a>

            <a href="#products"
               class="scrollactive-item block px-3 py-2 font-semibold rounded hover:text-gray-100 hover:bg-gray-800 transition duration-300 ease-in-out transform hover:scale-110 border-transparent">
                منتجاتنا
            </a>

            <a href="#agencies"
               class="scrollactive-item block px-3 py-2 font-semibold rounded hover:text-gray-100 hover:bg-gray-800 transition duration-300 ease-in-out transform hover:scale-110 border-transparent">
                وكالاتنا
            </a>

            <a href="#services"
               class="scrollactive-item block px-3 py-2 font-semibold rounded hover:text-gray-100 hover:bg-gray-800 transition duration-300 ease-in-out transform hover:scale-110 border-transparent">
                خدماتنا

            </a>


            <a href="#reviews"
               class="scrollactive-item block px-3 py-2 font-semibold rounded hover:text-gray-100 hover:bg-gray-800 transition duration-300 ease-in-out transform hover:scale-110 border-transparent">
                اراء الزبائن
            </a>

            <a href="#contact"
               class="scrollactive-item block px-3 py-2 font-semibold rounded hover:text-gray-100 hover:bg-gray-800 transition duration-300 ease-in-out transform hover:scale-110 border-transparent">
                تواصل معنا
            </a>

        </scrollactive>

    </nav>
</header>