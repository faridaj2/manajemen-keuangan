<nav class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-4">
        <img alt="Midone - HTML Admin Template" class="w-6"
            src="http://rubick.left4code.com/dist/images/logo.svg">
        <span class="hidden xl:block text-white text-lg ml-3">
            Keuangan
        </span>
    </a>
    
    <div class="side-nav__devider my-6"></div>
    <ul>
        
        <li>
            <button wire:click="$emit('dashboard')" href="javascript:;" class="w-full side-menu side-menu--active">
                <div class="side-menu__icon">
                    <i data-lucide="home"></i>
                </div>
                <div class="side-menu__title">
                    Dashboard
                </div>
            </button>
        </li>

        <li>
            <button wire:click="$emit('transaksi')" href="javascript:;" class="w-full side-menu">
                <div class="side-menu__icon">
                    <i data-lucide="home"></i>
                </div>
                <div class="side-menu__title">
                    Jenis Transaksi
                </div>
            </button>
        </li>

        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon">
                    
                    <i data-lucide="home"></i>
                </div>
                <div class="side-menu__title">
                    Keuangan
                    <div class="side-menu__sub-icon">
                        <x-lucide-chevron-down />
                    </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="javascript:;"
                        class="side-menu">
                        <div class="side-menu__icon">
                            <i data-lucide="activity"></i>
                        </div>
                        <div class="side-menu__title">
                            Overview 1
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;"
                        class="side-menu">
                        <div class="side-menu__icon">
                            <i data-lucide="activity"></i>
                        </div>
                        <div class="side-menu__title">
                            Overview 2
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;"
                        class="side-menu">
                        <div class="side-menu__icon">
                            <i data-lucide="activity"></i>
                        </div>
                        <div class="side-menu__title">
                            Overview 3
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;"
                        class="side-menu">
                        <div class="side-menu__icon">
                            <i data-lucide="activity"></i>
                        </div>
                        <div class="side-menu__title">
                            Overview 4
                        </div>
                    </a>
                </li>
            </ul>
        </li>
        
        
    </ul>
</nav>