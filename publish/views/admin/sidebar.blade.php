<div
    class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
    id="example-collapse-sidebar">
    <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-gray-300">
        <div class="flex flex-wrap">
            <div class="w-6/12">
                <a class="md:block text-center md:pb-2 text-gray-700 mr-0 inline-block whitespace-no-wrap text-sm uppercase font-bold p-4 px-0"
                   href="javascript:void(0)">
                    Laravel App
                </a>
            </div>
            <div class="w-6/12 flex justify-end">
                <button
                    class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                    onclick="toggleNavbar('example-collapse-sidebar')"
                    type="button">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    </div>
    <form class="mt-6 mb-4 md:hidden">
        <div class="mb-3 pt-0">
            <input
                class="px-3 py-2 h-12 border border-solid  border-gray-600 placeholder-gray-400 text-gray-700 bg-white rounded text-base leading-snug shadow-none outline-none focus:outline-none w-full font-normal"
                placeholder="Search"
                type="text"/>
        </div>
    </form>
    <hr class="my-4 md:min-w-full"/>
    <h6 class="md:min-w-full text-gray-600 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
        Admin
    </h6>
    <ul class="md:flex-col md:min-w-full flex flex-col list-none">
        <li class="items-center">
            <a class="text-white hover:shadow-sm rounded-lg my-1 px-4 bg-gray-800 text-xs uppercase py-3 font-bold block"
               href="{{route('/')}}"><i class="fas fa-tv mr-2 text-sm tracking-wider"></i>
                Dashboard</a>
        </li>
        <li class="items-center">
            <a class="my-1 hover:shadow-md text-gray-800 hover:text-white rounded-lg px-4 hover:bg-gray-800 text-xs uppercase py-3 font-bold block"
               href="#example"><i class="fas fa-newspaper mr-2 text-sm"></i>
                Sample Page</a>
        </li>
    </ul>
</div>
