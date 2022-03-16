<div class="w-full sticky top-0 bg-white z-10"
     style="box-shadow: 0 1px 15px rgb(0 0 0 / 4%), 0 1px 6px rgb(0 0 0 / 4%);">

    <!-- Page Navigation -->
    <div class="navbar max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
        <div class="header-logo flex-none mr-5">
            <img src="{{ asset('media/logos/logo-light.png') }}" class="max-h-9">

            <!-- TODO: Mobile logo header version -->
        </div>
        <div class="flex-1 px-2 mx-2">
            <div class="items-stretch hidden lg:flex">
                <a class="btn btn-ghost btn-md rounded-md normal-case font-normal mr-1"
                   href="/home">
                    <!-- Sample active menu -->
                    Home
                </a>
                <a class="btn btn-ghost btn-md rounded-md normal-case font-normal mr-1" href="/leads">
                    Leads
                </a>
                <a class="btn btn-ghost btn-md rounded-md normal-case font-normal mr-1" href="/contacts">
                    Contacts
                </a>
                <a class="btn btn-ghost btn-md rounded-md normal-case font-normal mr-1" href="/products">
                    Products
                </a>
                <a class="btn btn-ghost btn-md rounded-md normal-case font-normal mr-1" href="/deals">
                    Deals
                </a>
                <a class="btn btn-ghost btn-md rounded-md normal-case font-normal mr-1" href="/activities">
                    Activities
                </a>
            </div>
        </div>

        <!-- Header buttons -->
        @include('components.header-buttons.notification')
        @include('components.header-buttons.user')
    </div>

    <!-- Page Heading -->
    <header class="bg-white border-t">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-lg leading-tight">
                @yield('title')
            </h2>

            <!-- TODO: Page Crumbs -->

        </div>
    </header>
</div>

