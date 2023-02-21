<div>
    <div class="col-span-12 mt-6" x-data="{nama: 'Oke'}">
        {{-- Form --}}
        <div x-data="{ open: false }">
            <button @click=" open = ! open" x-show="!open" class="btn btn-elevated-rounded-primary w-24 mr-1 mb-2">New
                Pay</button>
            <div class="intro-y col-span-12 lg:col-span-6" x-show="open" @click.outside="open = false">
                <div class="block flex justify-end">
                    <button @click=" open = ! open" class="btn btn-elevated-rounded-secondary w-24 mr-1 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>

                    </button>
                </div>
                <!-- BEGIN: Form Layout -->
                <div class="intro-y box p-5">
                    <div>
                        <label for="crud-form-1" class="form-label">Nama Pembayaran</label>
                        <input id="crud-form-1" type="text" class="form-control w-full"
                            placeholder="Nama Pembayaran">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-2-tomselected" class="form-label" id="crud-form-2-ts-label">Kategory
                            Pembayaran</label>
                        <select data-placeholder="Pilih Kategori Pembayaran" class="tom-select w-full tomselected"
                            id="crud-form-2" tabindex="-1" hidden="hidden">
                            <option value="1" selected="true">Sport &amp; Outdoor</option>
                            <option value="3">Smartphone &amp; Tablet</option>

                            <option value="2">PC &amp; Laptop</option>

                            <option value="4">Photography</option>
                        </select>

                    </div>
                    <div class="mt-3">
                        <label class="form-label">Price</label>
                        <div class="sm:grid grid-cols-3 gap-2">
                            <div class="input-group">
                                <div id="input-group-3" class="input-group-text">Rp.</div>
                                <input type="text" class="form-control" placeholder="-"
                                    aria-describedby="input-group-3">
                            </div>

                        </div>
                    </div>
                    <div class="mt-3">
                        <label class="form-label">Jenis Transaksi</label>
                        <select class="tom-select w-full">
                            <option value="1" selected="true">Masuk</option>
                            <option value="3">Keluar</option>
                        </select>

                    </div>
                    {{-- <div class="mt-3">
                        <label>Active Status</label>
                        <div class="form-switch mt-2">
                            <input type="checkbox" class="form-check-input">
                        </div>
                    </div> --}}

                    <div class="text-right mt-5">
                        <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                        <button type="button" class="btn btn-primary bg-primary text-primary w-24">Save</button>
                    </div>
                </div>
                <!-- END: Form Layout -->
            </div>
        </div>
        <!-- BEGIN: Modal Content -->
        <div id="delete-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="p-5 text-center">
                            <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                            <div class="text-3xl mt-5">Apa kamu yakin?</div>
                            <div class="text-slate-500 mt-2" >Apa kamu akan menghapus <span x-text="nama"></span></div>
                        </div>
                        <div class="px-5 pb-8 text-center">
                            <button type="button" data-tw-dismiss="modal"
                                class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                            <button type="button" class="btn btn-danger bg-danger bg-red-700 w-24">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Modal Content -->

        {{-- Table --}}
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">

            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">#</th>
                        <th class="whitespace-nowrap">Pembayaran</th>
                        <th class="whitespace-nowrap">Total</th>
                        <th class="text-center whitespace-nowrap">Status</th>
                        <th class="text-center whitespace-nowrap">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="intro-x">
                        <td class="w-40">
                            1

                        </td>
                        <td>
                            <a href="" class="font-medium whitespace-nowrap">Nike Air Max 270</a>
                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Sport &amp; Outdoor</div>
                        </td>
                        <td>Rp. 50000</td>
                        <td class="w-40">
                            <div class="flex items-center justify-center text-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" icon-name="check-square"
                                    data-lucide="check-square" class="lucide lucide-check-square w-4 h-4 mr-2">
                                    <polyline points="9 11 12 14 22 4"></polyline>
                                    <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                                </svg> Keluar
                            </div>
                        </td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a class="flex items-center mr-3" href="javascript:;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" icon-name="check-square"
                                        data-lucide="check-square" class="lucide lucide-check-square w-4 h-4 mr-1">
                                        <polyline points="9 11 12 14 22 4"></polyline>
                                        <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                                    </svg> Edit
                                </a>
                                <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-modal-preview" @click="nama = nama = 'Anjali'" class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
                                    data-tw-target="#delete-confirmation-modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" icon-name="trash-2"
                                        data-lucide="trash-2" class="lucide lucide-trash-2 w-4 h-4 mr-1">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path
                                            d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2">
                                        </path>
                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                        <line x1="14" y1="11" x2="14" y2="17"></line>
                                    </svg> Delete
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr class="intro-x">
                        <td class="w-40">
                            2
                        </td>
                        <td>
                            <a href="" class="font-medium whitespace-nowrap">Apple MacBook Pro 13</a>
                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">PC &amp; Laptop</div>
                        </td>
                        <td>Rp. 50000</td>
                        <td class="w-40">
                            <div class="flex items-center justify-center text-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" icon-name="check-square"
                                    data-lucide="check-square" class="lucide lucide-check-square w-4 h-4 mr-2">
                                    <polyline points="9 11 12 14 22 4"></polyline>
                                    <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                                </svg> Masuk
                            </div>
                        </td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a class="flex items-center mr-3" href="javascript:;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" icon-name="check-square"
                                        data-lucide="check-square" class="lucide lucide-check-square w-4 h-4 mr-1">
                                        <polyline points="9 11 12 14 22 4"></polyline>
                                        <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                                    </svg> Edit
                                </a>
                                <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-modal-preview" @click="nama = nama = 'Farid'" class="flex items-center text-danger"
                                    href="javascript:;" data-tw-toggle="modal"
                                    data-tw-target="#delete-confirmation-modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" icon-name="trash-2"
                                        data-lucide="trash-2" class="lucide lucide-trash-2 w-4 h-4 mr-1">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path
                                            d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2">
                                        </path>
                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                        <line x1="14" y1="11" x2="14" y2="17"></line>
                                    </svg> Delete
                                </a>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
