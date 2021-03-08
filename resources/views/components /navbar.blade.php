<header class="lg:px-16 px-6 bg-white flex flex-wrap items-center lg:justify-between lg:py-3 py-2">

    <div class="flex-1 lg:flex-none md:flex-none flex justify-between items-center">
        <a class="lg:w-1/12 w-2/12" href="#">
            <img src="blu.png" alt="">
        </a>
        <h1 class="w-10/12 ms-10 lg:text-2xl text-xl items-center self-center">
            بلو للأصباغ الايطالية
        </h1>
    </div>

    <label for="menu-toggle" class="pointer-cursor lg:hidden block">

        <svg  class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
             viewBox="0 0 20 20">
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
        </svg>

    </label>

    <input class="hidden" type="checkbox" id="menu-toggle"/>
    <div class="hidden lg:flex lg:items-center lg:justify-between lg:w-auto md:w-full sm:w-full w-full" id="menu">

        <scrollactive active-class="active"
                      class="lg:flex items-center justify-between text-lg text-gray-700 pt-4"
                      :offset="100" :duration="800"
                      bezier-easing-value=".5,0,.35,1">

            {{--            <a href="#vision"--}}
            {{--               class="scrollactive-itemscrollactive-item  lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-yellow-300">--}}
            {{--                الرؤية--}}
            {{--            </a>--}}

            <a href="#goals"
               class="scrollactive-item lg:p-4 py-3 px-0 block border-b-4 transition duration-300 ease-in-out transform hover:scale-110 border-transparent hover:border-yellow-300">
                من نحن
            </a>

            <a href="#stages"
               class="scrollactive-item lg:p-4 py-3 px-0 block border-b-4 transition duration-300 ease-in-out transform hover:scale-110 border-transparent hover:border-yellow-300">
                منتجاتنا </a>

            <a href="#participation"
               class="scrollactive-item lg:p-4 py-3 px-0 block border-b-4 transition duration-300 ease-in-out transform hover:scale-110 border-transparent hover:border-yellow-300">
                خدماتنا </a>

            <a href="#organizers"
               class="scrollactive-item lg:p-4 py-3 px-0 block border-b-4 transition duration-300 ease-in-out transform hover:scale-110 border-transparent hover:border-yellow-300">
                وكالاتنا
            </a>

            <a href="#contact"
               class="scrollactive-item lg:p-4 py-3 px-0 block border-b-4 transition duration-300 ease-in-out transform hover:scale-110 border-transparent hover:border-yellow-300">
                اراء الزبائن </a>

            <a href="#partners"
               class="scrollactive-item lg:p-4 py-3 px-0 block border-b-4 transition duration-300 ease-in-out transform hover:scale-110 border-transparent hover:border-yellow-300">
                تواصل معنا </a>


        </scrollactive>


    </div>

</header>