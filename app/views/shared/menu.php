<!-- template for the horizontal menu -->

<nav class=" z-10 lg:sticky top-0 bg-primary-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">

                <div class=" hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="<?php echo SERVER_ROOT ?>/home" class="hover:bg-secondary-100 hover:text-primary-300 font-bold text-white px-3 py-2 rounded-md text-sm ">Home</a>

                        <a href="<?php echo SERVER_ROOT ?>/about" class="text-white hover:bg-secondary-100 hover:text-primary-300 px-3 py-2 rounded-md text-sm font-medium">About school</a>
                        <div class="ml-3 relative">
                            <button onclick="addMenu()" href="#" class="text-white hover:bg-secondary-100 hover:text-primary-300 px-3 py-2 rounded-md text-sm font-medium  border-none">Teaching levels</button>
                            <div class="hidden origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white " role="menu" aria-orientation="vertical" id="cycle-menu">
                                <a href="<?php echo SERVER_ROOT ?>/level/1" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Junior</a>

                                <a href="<?php echo SERVER_ROOT ?>/level/2" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Middle</a>

                                <a href="<?php echo SERVER_ROOT ?>/level/3" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Senior</a>
                            </div>
                        </div>
                        <a href="<?php echo SERVER_ROOT ?>/student" class="text-white hover:bg-secondary-100 hover:text-primary-300 px-3 py-2 rounded-md text-sm font-medium">Student space</a>

                        <a href="<?php echo SERVER_ROOT ?>/parent" class="text-white hover:bg-secondary-100 hover:text-primary-300 px-3 py-2 rounded-md text-sm font-medium">Parent space</a>

                        <a href="<?php echo SERVER_ROOT ?>/contact" class="text-white hover:bg-secondary-100 hover:text-primary-300 px-3 py-2 rounded-md text-sm font-medium">Contact</a>

                    </div>
                </div>
            </div>
            <div class=" hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">


                    <div class="hidden ml-3 relative">
                        <div>
                            <button class="max-w-xs bg-gray-800 rounded-full text-white flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu" aria-haspopup="true">
                                <span>Teacher</span>
                            </button>
                        </div>

                        <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your Profile</a>

                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a>

                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign out</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                <button type="button" class="bg-secondary-200 inline-flex items-center justify-center p-2 rounded-md text-white hover:text-white hover:bg-secondary-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-secondary-100 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>

                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>

                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="<?php echo SERVER_ROOT ?>/home" class="hover:bg-secondary-100 hover:text-primary-300 text-white block px-3 py-2 rounded-md text-base font-bold">Home</a>

            <a href="<?php echo SERVER_ROOT ?>/about" class="text-white hover:bg-secondary-100 hover:text-primary-300 block px-3 py-2 rounded-md text-base font-medium">About school</a>


            <a href="<?php echo SERVER_ROOT ?>/level/1" class="text-white hover:bg-secondary-100  hover:text-primary-300 block px-3 py-2 rounded-md text-base font-medium">Junior</a>

            <a href="<?php echo SERVER_ROOT ?>/level/2" class="text-white hover:bg-secondary-100  hover:text-primary-300 block px-3 py-2 rounded-md text-base font-medium">Middle</a>


            <a href="<?php echo SERVER_ROOT ?>/level/3" class="text-white hover:bg-secondary-100  hover:text-primary-300 block px-3 py-2 rounded-md text-base font-medium">Senior</a>


            <a href="<?php echo SERVER_ROOT ?>/student" class="text-white hover:bg-secondary-100  hover:text-primary-300 block px-3 py-2 rounded-md text-base font-medium">Student space</a>

            <a href="<?php echo SERVER_ROOT ?>/parent" class="text-white hover:bg-secondary-100  hover:text-primary-300 block px-3 py-2 rounded-md text-base font-medium">Parent space</a>

            <a href="<?php echo SERVER_ROOT ?>/contact" class="text-white hover:bg-secondary-100  hover:text-primary-300 block px-3 py-2 rounded-md text-base font-medium">Contact</a>
        </div>

    </div>
</nav>
<script src="<?php echo SERVER_ROOT ?>/script.js" type="text/javascript"> </script>