<div>
    <div class="col-span-12 mt-6" >
        <div "
            class="intro-y col-span-12 flex flex-wrap justify-between sm:flex-nowrap items-center mt-2">
            {{-- <button  class="btn btn-primary shadow-md mr-2">Add
                New Product</button>
            <div  class="flex align-middle px-2">
                <input wire:model.defer="nama" type="text" placeholder="Tambah Kategori..." class="my-form "
                    name="" id="">
                <button wire:click="save" class="btn bg-blue-500 text-white mx-2 hover:bg-blue-700">Save</button>
            </div> --}}
            
            <div  class="flex align-middle justify-start">
                <input wire:model.defer="nama" type="text" placeholder="Tambah Kategori..." class="my-form "
                    name="" id="">
                <button wire:click="save" class="btn bg-blue-500 text-white mx-2 hover:bg-blue-700">Save</button>
            </div>
            <div class="hidden md:block mx-auto text-slate-500"></div>
            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-slate-500">
                    <input type="text"
                        class="shadow appearance-none border-none rounded w-full py-2 px-3 text-gray-700 leading-tight outline-none focus:shadow-outline"
                        placeholder="Search...">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" icon-name="search"
                        class="lucide lucide-search w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0"
                        data-lucide="search">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-3">

        <select wire:model="paginate"
            class="w-20 form-select box mt-3 sm:mt-0 shadow appearance-none border-none rounded w-full py-2 px-3 text-gray-700 leading-tight outline-none focus:shadow-outline">
            <option value="10" selected>10</option>
            <option value="25">25</option>
            <option value="35">35</option>
            <option value="50">50</option>
        </select>
    </div>
    <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
        
        <table class="table table-report sm:mt-2">
            <thead>
                <tr>
                    <th class="whitespace-nowrap">#</th>
                    <th class="whitespace-nowrap">Nama</th>

                    <th class="text-center whitespace-nowrap">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                   @foreach ($c as $kategori)
            <tr class="intro-x" :wire:key="$kategori->id">
                <td class="w-40">
                    <div class="flex">
                        <div class="w-10 h-10 image-fit zoom-in">
                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full"
                                src="http://rubick.left4code.com/dist/images/preview-15.jpg">
                        </div>

                    </div>
                </td>
                <td>
                    <a href="" class="font-medium whitespace-nowrap">{{ $kategori->nama_kategori }}</a>
                    {{-- <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">PC &amp; Laptop</div> --}}
                </td>

                <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">
                        <a class="flex items-center mr-3" href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" icon-name="check-square" data-lucide="check-square"
                                class="lucide lucide-check-square w-4 h-4 mr-1">
                                <polyline points="9 11 12 14 22 4"></polyline>
                                <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                            </svg> Edit
                        </a>
                        <a class="flex items-center text-danger" href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" icon-name="trash-2" data-lucide="trash-2"
                                class="lucide lucide-trash-2 w-4 h-4 mr-1">
                                <polyline points="3 6 5 6 21 6"></polyline>
                                <path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2">
                                </path>
                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                <line x1="14" y1="11" x2="14" y2="17"></line>
                            </svg> Delete
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach

            </tbody>
            </table>
            

        </div>
        






    </div>




</div>
