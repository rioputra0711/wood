<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>B2B WOOD — Timber Marketplace</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#27221e] text-[#f4f0e8] font-['DM_Sans',sans-serif] antialiased">
    <div class="bg-[#27221e] flex flex-col items-start relative w-full min-h-screen" data-node-id="52:8768" data-name="B2B WOOD — Homepage">
        
        <!-- Natural wood hero & Navigation -->
        <div class="flex flex-col items-start overflow-hidden relative w-full" data-node-id="52:8769" data-name="Natural wood hero">
            
            <!-- Navigation -->
            <div class="bg-[#27221e] flex h-[112px] items-center justify-between overflow-hidden px-[60px] relative w-full border-b border-[#3b332c]" data-node-id="52:8770" data-name="Navigation">
                <div class="flex gap-[12px] items-center overflow-hidden relative" data-node-id="52:8771" data-name="Brand">
                    <div class="h-[45px] relative shrink-0 w-[37px]" data-node-id="52:8772" data-name="trees">
                        <img alt="Trees" class="absolute inset-0 w-full h-full" src="{{ asset('images/trees.svg') }}" />
                    </div>
                    <div class="flex flex-col gap-[2px] items-start leading-normal overflow-hidden relative whitespace-nowrap" data-node-id="52:8774" data-name="Wordmark">
                        <p class="font-['Oswald'] font-semibold text-[#f4f0e8] text-[26px] tracking-[0.5px]" data-node-id="52:8775">
                            B2B WOOD
                        </p>
                        <p class="font-['DM_Sans'] font-normal text-[#b8b0a5] text-[8px] tracking-[2.3px]" data-node-id="52:8776" style="font-variation-settings: 'opsz' 14">
                            TIMBER MARKETPLACE
                        </p>
                    </div>
                </div>

                <!-- Main menu -->
                <div class="hidden lg:flex gap-[29px] items-center overflow-hidden relative" data-node-id="52:8777" data-name="Main menu">
                    <div class="flex flex-col gap-[7px] items-start overflow-hidden relative" data-node-id="52:8778" data-name="Navigation item">
                        <a href="#" class="font-['DM_Sans'] font-normal text-[#a18e72] text-[15px]" style="font-variation-settings: 'opsz' 14">Home</a>
                        <div class="bg-[#a18e72] h-px w-[20px]" data-node-id="52:8780"></div>
                    </div>
                    <div class="flex flex-col items-start overflow-hidden relative" data-node-id="52:8781">
                        <a href="{{ route('product') }}" class="font-['DM_Sans'] font-normal text-[#f4f0e8] hover:text-[#a18e72] text-[15px] transition-colors" style="font-variation-settings: 'opsz' 14">Products</a>
                    </div>
                    <div class="flex flex-col items-start overflow-hidden relative" data-node-id="52:8783">
                        <a href="#" class="font-['DM_Sans'] font-normal text-[#f4f0e8] hover:text-[#a18e72] text-[15px] transition-colors" style="font-variation-settings: 'opsz' 14">Categories</a>
                    </div>
                    <div class="flex flex-col items-start overflow-hidden relative" data-node-id="52:8785">
                        <a href="#" class="font-['DM_Sans'] font-normal text-[#f4f0e8] hover:text-[#a18e72] text-[15px] transition-colors" style="font-variation-settings: 'opsz' 14">About</a>
                    </div>
                    <div class="flex flex-col items-start overflow-hidden relative" data-node-id="52:8787">
                        <a href="#" class="font-['DM_Sans'] font-normal text-[#f4f0e8] hover:text-[#a18e72] text-[15px] transition-colors" style="font-variation-settings: 'opsz' 14">Logistics</a>
                    </div>
                </div>

                <!-- Account and shopping -->
                <div class="flex gap-[23px] items-center overflow-hidden relative" data-node-id="52:8789" data-name="Account and shopping">
                    <a href="#" class="font-['DM_Sans'] font-normal text-[#f4f0e8] text-[15px] hover:text-[#a18e72]" style="font-variation-settings: 'opsz' 14">Login</a>
                    <div class="w-[20px] h-[20px] cursor-pointer" data-node-id="52:8791">
                        <img alt="Search" class="w-full h-full" src="{{ asset('images/search.svg') }}" />
                    </div>
                    <div class="flex gap-[5px] items-start overflow-hidden relative" data-node-id="52:8793" data-name="Cart">
                        <div class="w-[20px] h-[20px]" data-node-id="52:8794">
                            <img alt="Cart" class="w-full h-full" src="{{ asset('images/shopping_cart_white.svg') }}" />
                        </div>
                        <span class="font-['DM_Sans'] font-normal text-[#b8b0a5] text-[12px]" style="font-variation-settings: 'opsz' 14">0</span>
                    </div>
                    <a href="#" class="border border-[#51483e] flex h-[54px] items-center justify-center px-[25px] hover:border-[#a18e72] transition-colors" data-node-id="52:8797" data-name="Action">
                        <span class="font-['Oswald'] font-medium text-[#f4f0e8] text-[14px] tracking-[0.5px] uppercase">Daftar B2B</span>
                    </a>
                </div>
            </div>

            <!-- Hero Section -->
            <div class="flex flex-col gap-[24px] h-[750px] items-start overflow-hidden pb-[40px] pl-[120px] pr-[100px] pt-[115px] relative w-full" data-node-id="52:8799" data-name="Hero">
                <div class="absolute inset-0 w-full h-full z-0">
                    <img alt="Natural timber" class="absolute inset-0 object-cover w-full h-full" src="{{ asset('images/foto_material.png') }}" />
                </div>
                <div class="absolute inset-0 bg-gradient-to-r from-[#1c1815]/91 via-[#1c1815]/35 to-[#1c1815]/0 z-0"></div>

                <p class="font-['Oswald'] font-medium text-[#b8b0a5] text-[12px] tracking-[1.8px] uppercase z-10" style="font-variation-settings: 'opsz' 14">
                    Material alami. Kebutuhan industri.
                </p>
                <div class="font-['Oswald'] font-medium text-[#f4f0e8] text-[88px] tracking-[-1px] uppercase w-[740px] leading-[1.08] z-10">
                    <p class="mb-0">Kayu pilihan,</p>
                    <p>untuk karya besar.</p>
                </div>
                <div class="flex flex-col items-start overflow-hidden w-[500px] z-10" data-node-id="52:8804">
                    <p class="font-['DM_Sans'] font-normal text-[#b8b0a5] text-[16px] leading-[1.7] w-full" style="font-variation-settings: 'opsz' 14">
                        Temukan bahan baku kayu untuk furnitur, home décor, dan proyek komersial. Dari stok reguler hingga spesifikasi khusus bisnis Anda.
                    </p>
                </div>
                <div class="flex gap-[14px] items-start z-10" data-node-id="52:8806">
                    <a href="#products" class="bg-[#a18e72] flex gap-[22px] h-[54px] items-center justify-center px-[25px] text-[#f4f0e8] font-['Oswald'] font-medium text-[14px] tracking-[0.5px] uppercase hover:bg-[#8e7a5e] transition-colors">
                        <span>Jelajahi katalog</span>
                        <img alt="Arrow right" class="w-[18px] h-[18px] brightness-0 invert" src="{{ asset('images/arrow_right.svg') }}" />
                    </a>
                    <a href="#" class="border border-[#51483e] flex gap-[22px] h-[54px] items-center justify-center px-[25px] text-[#f4f0e8] font-['Oswald'] font-medium text-[14px] tracking-[0.5px] uppercase hover:border-[#a18e72] transition-colors">
                        <span>Minta penawaran</span>
                        <img alt="Arrow right" class="w-[18px] h-[18px] brightness-0 invert" src="{{ asset('images/arrow_right.svg') }}" />
                    </a>
                </div>

                <p class="absolute bottom-[143px] right-[100px] font-['Oswald'] font-normal text-[66px] text-[#f4f0e8]/46 tracking-[4px] uppercase z-10 hidden xl:block">
                    Natural luxury
                </p>

                <div class="absolute bottom-[45px] flex gap-[12px] items-center left-[120px] z-10">
                    <div class="bg-[#f4f0e8] h-[2px] w-[36px]"></div>
                    <div class="bg-white/31 h-[2px] w-[16px]"></div>
                    <div class="bg-white/31 h-[2px] w-[16px]"></div>
                </div>
            </div>

            <!-- Buying paths / benefits -->
            <div class="bg-[#342e28] flex flex-wrap items-center justify-between px-[120px] py-[28px] relative w-full gap-4" data-node-id="52:8820">
                <div class="flex gap-[12px] items-center">
                    <img alt="Arrow up right" class="w-[20px] h-[20px]" src="{{ asset('images/arrow_up_right.svg') }}" />
                    <span class="font-['DM_Sans'] font-normal text-[#f4f0e8] text-[14px]" style="font-variation-settings: 'opsz' 14">Stok reguler &middot; Beli Sekarang</span>
                </div>
                <div class="flex gap-[12px] items-center">
                    <img alt="Arrow up right" class="w-[20px] h-[20px]" src="{{ asset('images/arrow_up_right.svg') }}" />
                    <span class="font-['DM_Sans'] font-normal text-[#f4f0e8] text-[14px]" style="font-variation-settings: 'opsz' 14">Custom & volume besar &middot; Minta Penawaran</span>
                </div>
                <div class="flex gap-[12px] items-center">
                    <img alt="Arrow up right" class="w-[20px] h-[20px]" src="{{ asset('images/arrow_up_right.svg') }}" />
                    <span class="font-['DM_Sans'] font-normal text-[#f4f0e8] text-[14px]" style="font-variation-settings: 'opsz' 14">Dokumen & asal kayu &middot; Tinjau sebelum beli</span>
                </div>
            </div>
        </div>

        <!-- Popular products & Catalog section -->
        <div id="products" class="flex flex-col gap-[35px] items-start px-[80px] py-[96px] relative w-full" data-node-id="52:8833">
            <div class="flex flex-col gap-[15px] items-center w-full">
                <p class="font-['Oswald'] font-medium text-[#b8b0a5] text-[12px] tracking-[1.8px] uppercase">
                    Pilihan untuk kebutuhan produksi
                </p>
                <h2 class="font-['Oswald'] font-medium text-[#f4f0e8] text-[52px] text-center uppercase">
                    Produk populer
                </h2>
                <p class="font-['DM_Sans'] font-normal text-[#b8b0a5] text-[13px]" style="font-variation-settings: 'opsz' 14">
                    Contoh katalog — harga dan stok ilustratif. Foto tekstur tidak menjadi verifikasi spesies.
                </p>
            </div>

            <!-- Product discovery / filters -->
            <div class="bg-[#342e28] flex flex-col gap-[18px] items-start p-[22px] relative w-full rounded-[6px]" data-node-id="52:8838">
                <div class="border border-[#51483e] flex gap-[14px] h-[46px] items-center px-[14px] w-full rounded-[4px]">
                    <img alt="Search" class="w-[18px] h-[18px]" src="{{ asset('images/search.svg') }}" />
                    <input type="text" placeholder="Cari jenis kayu, produk atau kode — contoh: TW-A-25" class="bg-transparent text-[#b8b0a5] text-[14px] outline-none w-full font-['DM_Sans'] placeholder-[#b8b0a5]" style="font-variation-settings: 'opsz' 14" />
                    <span class="font-['Oswald'] text-[#a18e72] text-[12px] whitespace-nowrap cursor-pointer">CARI PRODUK →</span>
                </div>

                <!-- Specification filters -->
                <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-8 gap-[12px] w-full">
                    <div class="flex flex-col gap-[7px]">
                        <label class="font-['DM_Sans'] text-[#b8b0a5] text-[11px]" style="font-variation-settings: 'opsz' 14">Jenis kayu</label>
                        <div class="border border-[#51483e] flex h-[42px] items-center justify-between px-[12px] rounded-[4px] cursor-pointer">
                            <span class="font-['DM_Sans'] text-[#f4f0e8] text-[12px]" style="font-variation-settings: 'opsz' 14">Semua spesies</span>
                            <img alt="Chevron" class="w-[12px] h-[12px]" src="{{ asset('images/chevron_down.svg') }}" />
                        </div>
                    </div>
                    <div class="flex flex-col gap-[7px]">
                        <label class="font-['DM_Sans'] text-[#b8b0a5] text-[11px]" style="font-variation-settings: 'opsz' 14">Grade</label>
                        <div class="border border-[#51483e] flex h-[42px] items-center justify-between px-[12px] rounded-[4px] cursor-pointer">
                            <span class="font-['DM_Sans'] text-[#f4f0e8] text-[12px]" style="font-variation-settings: 'opsz' 14">Semua grade</span>
                            <img alt="Chevron" class="w-[12px] h-[12px]" src="{{ asset('images/chevron_down.svg') }}" />
                        </div>
                    </div>
                    <div class="flex flex-col gap-[7px]">
                        <label class="font-['DM_Sans'] text-[#b8b0a5] text-[11px]" style="font-variation-settings: 'opsz' 14">Tebal (mm)</label>
                        <div class="border border-[#51483e] flex h-[42px] items-center justify-between px-[12px] rounded-[4px] cursor-pointer">
                            <span class="font-['DM_Sans'] text-[#f4f0e8] text-[12px]" style="font-variation-settings: 'opsz' 14">Semua</span>
                            <img alt="Chevron" class="w-[12px] h-[12px]" src="{{ asset('images/chevron_down.svg') }}" />
                        </div>
                    </div>
                    <div class="flex flex-col gap-[7px]">
                        <label class="font-['DM_Sans'] text-[#b8b0a5] text-[11px]" style="font-variation-settings: 'opsz' 14">Lebar (mm)</label>
                        <div class="border border-[#51483e] flex h-[42px] items-center justify-between px-[12px] rounded-[4px] cursor-pointer">
                            <span class="font-['DM_Sans'] text-[#f4f0e8] text-[12px]" style="font-variation-settings: 'opsz' 14">Semua</span>
                            <img alt="Chevron" class="w-[12px] h-[12px]" src="{{ asset('images/chevron_down.svg') }}" />
                        </div>
                    </div>
                    <div class="flex flex-col gap-[7px]">
                        <label class="font-['DM_Sans'] text-[#b8b0a5] text-[11px]" style="font-variation-settings: 'opsz' 14">Panjang (m)</label>
                        <div class="border border-[#51483e] flex h-[42px] items-center justify-between px-[12px] rounded-[4px] cursor-pointer">
                            <span class="font-['DM_Sans'] text-[#f4f0e8] text-[12px]" style="font-variation-settings: 'opsz' 14">Semua</span>
                            <img alt="Chevron" class="w-[12px] h-[12px]" src="{{ asset('images/chevron_down.svg') }}" />
                        </div>
                    </div>
                    <div class="flex flex-col gap-[7px]">
                        <label class="font-['DM_Sans'] text-[#b8b0a5] text-[11px]" style="font-variation-settings: 'opsz' 14">Volume (m³)</label>
                        <div class="border border-[#51483e] flex h-[42px] items-center justify-between px-[12px] rounded-[4px] cursor-pointer">
                            <span class="font-['DM_Sans'] text-[#f4f0e8] text-[12px]" style="font-variation-settings: 'opsz' 14">Min. volume</span>
                            <img alt="Chevron" class="w-[12px] h-[12px]" src="{{ asset('images/chevron_down.svg') }}" />
                        </div>
                    </div>
                    <div class="flex flex-col gap-[7px]">
                        <label class="font-['DM_Sans'] text-[#b8b0a5] text-[11px]" style="font-variation-settings: 'opsz' 14">Harga / m³</label>
                        <div class="border border-[#51483e] flex h-[42px] items-center justify-between px-[12px] rounded-[4px] cursor-pointer">
                            <span class="font-['DM_Sans'] text-[#f4f0e8] text-[12px]" style="font-variation-settings: 'opsz' 14">Rentang harga</span>
                            <img alt="Chevron" class="w-[12px] h-[12px]" src="{{ asset('images/chevron_down.svg') }}" />
                        </div>
                    </div>
                    <div class="flex flex-col gap-[7px]">
                        <label class="font-['DM_Sans'] text-[#b8b0a5] text-[11px]" style="font-variation-settings: 'opsz' 14">Stok</label>
                        <div class="border border-[#51483e] flex h-[42px] items-center justify-between px-[12px] rounded-[4px] cursor-pointer">
                            <span class="font-['DM_Sans'] text-[#f4f0e8] text-[12px]" style="font-variation-settings: 'opsz' 14">Semua status</span>
                            <img alt="Chevron" class="w-[12px] h-[12px]" src="{{ asset('images/chevron_down.svg') }}" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-between items-center w-full font-['DM_Sans'] text-[13px]">
                <span class="text-[#b8b0a5]" style="font-variation-settings: 'opsz' 14">6 pilihan material / Solid wood & produk olahan</span>
                <span class="text-[#f4f0e8]" style="font-variation-settings: 'opsz' 14">Urutkan: Rekomendasi ↓</span>
            </div>

            <!-- Product Grid (6 products in Figma design) -->
            <div class="flex flex-col gap-[46px] w-full">
                <!-- Row 1: 3 products -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-[30px] w-full">
                    <!-- Product 1: Jati Sawn Timber -->
                    <div class="flex flex-col items-start w-full group">
                        <div class="h-[350px] relative w-full overflow-hidden rounded-[4px]">
                            <img alt="Jati" class="absolute inset-0 object-cover w-full h-full group-hover:scale-105 transition-transform duration-500" src="{{ asset('images/foto_material_jati.png') }}" />
                            <div class="absolute bg-[#27221e] px-[10px] py-[6px] top-[16px] left-[16px]">
                                <span class="font-['DM_Sans'] text-[#f4f0e8] text-[10px] tracking-[0.8px] uppercase" style="font-variation-settings: 'opsz' 14">Stok reguler</span>
                            </div>
                            <div class="absolute bg-[#27221e] flex items-center justify-center w-[32px] h-[32px] top-[14px] right-[14px] cursor-pointer">
                                <span class="text-[#f4f0e8] text-xs">♡</span>
                            </div>
                        </div>
                        <div class="flex flex-col gap-[9px] items-start pt-[22px] w-full">
                            <span class="font-['DM_Sans'] text-[#b8b0a5] text-[11px] tracking-[1px]" style="font-variation-settings: 'opsz' 14">TW-A-25 / Tectona grandis</span>
                            <h3 class="font-['Oswald'] font-medium text-[#f4f0e8] text-[25px] uppercase">Jati &middot; Sawn Timber</h3>
                            <p class="font-['DM_Sans'] text-[#b8b0a5] text-[13px]" style="font-variation-settings: 'opsz' 14">Grade A &middot; 25 &times; 150 mm &times; 2,2 m</p>
                            <p class="font-['DM_Sans'] text-[#b8b0a5] text-[13px]" style="font-variation-settings: 'opsz' 14">Stok 12,5 m³ &middot; MOQ 1 m³</p>
                            <p class="font-['DM_Sans'] font-medium text-[#f4f0e8] text-[17px]" style="font-variation-settings: 'opsz' 14">Rp 18.500.000 / m³</p>
                            <div class="flex gap-[22px] items-center pt-[9px] w-full">
                                <a href="{{ route('product') }}" class="flex gap-[10px] items-center text-[#a18e72] font-['Oswald'] text-[13px] uppercase hover:text-[#f4f0e8]">
                                    <span>Beli Sekarang</span>
                                    <span>→</span>
                                </a>
                                <a href="#" class="font-['DM_Sans'] text-[#b8b0a5] text-[11px] underline hover:text-[#f4f0e8]" style="font-variation-settings: 'opsz' 14">Minta Penawaran</a>
                            </div>
                        </div>
                    </div>

                    <!-- Product 2: Mahoni Kiln Dried -->
                    <div class="flex flex-col items-start w-full group">
                        <div class="h-[350px] relative w-full overflow-hidden rounded-[4px]">
                            <img alt="Mahoni" class="absolute inset-0 object-cover w-full h-full group-hover:scale-105 transition-transform duration-500" src="{{ asset('images/foto_material_mahoni.png') }}" />
                            <div class="absolute bg-[#27221e] px-[10px] py-[6px] top-[16px] left-[16px]">
                                <span class="font-['DM_Sans'] text-[#f4f0e8] text-[10px] tracking-[0.8px] uppercase" style="font-variation-settings: 'opsz' 14">Stok reguler</span>
                            </div>
                            <div class="absolute bg-[#27221e] flex items-center justify-center w-[32px] h-[32px] top-[14px] right-[14px] cursor-pointer">
                                <span class="text-[#f4f0e8] text-xs">♡</span>
                            </div>
                        </div>
                        <div class="flex flex-col gap-[9px] items-start pt-[22px] w-full">
                            <span class="font-['DM_Sans'] text-[#b8b0a5] text-[11px] tracking-[1px]" style="font-variation-settings: 'opsz' 14">MH-AB-30 / Mahogany</span>
                            <h3 class="font-['Oswald'] font-medium text-[#f4f0e8] text-[25px] uppercase">Mahoni &middot; Kiln Dried</h3>
                            <p class="font-['DM_Sans'] text-[#b8b0a5] text-[13px]" style="font-variation-settings: 'opsz' 14">Grade AB &middot; 30 &times; 200 mm &times; 2,4 m</p>
                            <p class="font-['DM_Sans'] text-[#b8b0a5] text-[13px]" style="font-variation-settings: 'opsz' 14">Stok 8,2 m³ &middot; MOQ 1 m³</p>
                            <p class="font-['DM_Sans'] font-medium text-[#f4f0e8] text-[17px]" style="font-variation-settings: 'opsz' 14">Rp 8.750.000 / m³</p>
                            <div class="flex gap-[22px] items-center pt-[9px] w-full">
                                <a href="{{ route('product') }}" class="flex gap-[10px] items-center text-[#a18e72] font-['Oswald'] text-[13px] uppercase hover:text-[#f4f0e8]">
                                    <span>Beli Sekarang</span>
                                    <span>→</span>
                                </a>
                                <a href="#" class="font-['DM_Sans'] text-[#b8b0a5] text-[11px] underline hover:text-[#f4f0e8]" style="font-variation-settings: 'opsz' 14">Minta Penawaran</a>
                            </div>
                        </div>
                    </div>

                    <!-- Product 3: Sungkai Sawn Timber -->
                    <div class="flex flex-col items-start w-full group">
                        <div class="h-[350px] relative w-full overflow-hidden rounded-[4px]">
                            <img alt="Sungkai" class="absolute inset-0 object-cover w-full h-full group-hover:scale-105 transition-transform duration-500" src="{{ asset('images/foto_material_sungkai.png') }}" />
                            <div class="absolute bg-[#27221e] px-[10px] py-[6px] top-[16px] left-[16px]">
                                <span class="font-['DM_Sans'] text-[#f4f0e8] text-[10px] tracking-[0.8px] uppercase" style="font-variation-settings: 'opsz' 14">Stok reguler</span>
                            </div>
                            <div class="absolute bg-[#27221e] flex items-center justify-center w-[32px] h-[32px] top-[14px] right-[14px] cursor-pointer">
                                <span class="text-[#f4f0e8] text-xs">♡</span>
                            </div>
                        </div>
                        <div class="flex flex-col gap-[9px] items-start pt-[22px] w-full">
                            <span class="font-['DM_Sans'] text-[#b8b0a5] text-[11px] tracking-[1px]" style="font-variation-settings: 'opsz' 14">SK-A-20 / Sungkai</span>
                            <h3 class="font-['Oswald'] font-medium text-[#f4f0e8] text-[25px] uppercase">Sungkai &middot; Sawn Timber</h3>
                            <p class="font-['DM_Sans'] text-[#b8b0a5] text-[13px]" style="font-variation-settings: 'opsz' 14">Grade A &middot; 20 &times; 120 mm &times; 2,0 m</p>
                            <p class="font-['DM_Sans'] text-[#b8b0a5] text-[13px]" style="font-variation-settings: 'opsz' 14">Stok 6,8 m³ &middot; MOQ 1 m³</p>
                            <p class="font-['DM_Sans'] font-medium text-[#f4f0e8] text-[17px]" style="font-variation-settings: 'opsz' 14">Rp 9.250.000 / m³</p>
                            <div class="flex gap-[22px] items-center pt-[9px] w-full">
                                <a href="{{ route('product') }}" class="flex gap-[10px] items-center text-[#a18e72] font-['Oswald'] text-[13px] uppercase hover:text-[#f4f0e8]">
                                    <span>Beli Sekarang</span>
                                    <span>→</span>
                                </a>
                                <a href="#" class="font-['DM_Sans'] text-[#b8b0a5] text-[11px] underline hover:text-[#f4f0e8]" style="font-variation-settings: 'opsz' 14">Minta Penawaran</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Row 2: 3 products -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-[30px] w-full">
                    <!-- Product 4: Rubber Wood Kiln Dried -->
                    <div class="flex flex-col items-start w-full group">
                        <div class="h-[350px] relative w-full overflow-hidden rounded-[4px]">
                            <img alt="Rubber Wood" class="absolute inset-0 object-cover w-full h-full group-hover:scale-105 transition-transform duration-500" src="{{ asset('images/foto_material_rubber.png') }}" />
                            <div class="absolute bg-[#27221e] px-[10px] py-[6px] top-[16px] left-[16px]">
                                <span class="font-['DM_Sans'] text-[#f4f0e8] text-[10px] tracking-[0.8px] uppercase" style="font-variation-settings: 'opsz' 14">Stok reguler</span>
                            </div>
                            <div class="absolute bg-[#27221e] flex items-center justify-center w-[32px] h-[32px] top-[14px] right-[14px] cursor-pointer">
                                <span class="text-[#f4f0e8] text-xs">♡</span>
                            </div>
                        </div>
                        <div class="flex flex-col gap-[9px] items-start pt-[22px] w-full">
                            <span class="font-['DM_Sans'] text-[#b8b0a5] text-[11px] tracking-[1px]" style="font-variation-settings: 'opsz' 14">RW-AB-25 / Rubber Wood</span>
                            <h3 class="font-['Oswald'] font-medium text-[#f4f0e8] text-[25px] uppercase">Rubber Wood &middot; Kiln Dried</h3>
                            <p class="font-['DM_Sans'] text-[#b8b0a5] text-[13px]" style="font-variation-settings: 'opsz' 14">Grade AB &middot; 25 &times; 100 mm &times; 2,0 m</p>
                            <p class="font-['DM_Sans'] text-[#b8b0a5] text-[13px]" style="font-variation-settings: 'opsz' 14">Stok 15,0 m³ &middot; MOQ 1 m³</p>
                            <p class="font-['DM_Sans'] font-medium text-[#f4f0e8] text-[17px]" style="font-variation-settings: 'opsz' 14">Rp 6.500.000 / m³</p>
                            <div class="flex gap-[22px] items-center pt-[9px] w-full">
                                <a href="{{ route('product') }}" class="flex gap-[10px] items-center text-[#a18e72] font-['Oswald'] text-[13px] uppercase hover:text-[#f4f0e8]">
                                    <span>Beli Sekarang</span>
                                    <span>→</span>
                                </a>
                                <a href="#" class="font-['DM_Sans'] text-[#b8b0a5] text-[11px] underline hover:text-[#f4f0e8]" style="font-variation-settings: 'opsz' 14">Minta Penawaran</a>
                            </div>
                        </div>
                    </div>

                    <!-- Product 5: Wood Panel Laminated -->
                    <div class="flex flex-col items-start w-full group">
                        <div class="h-[350px] relative w-full overflow-hidden rounded-[4px]">
                            <img alt="Wood Panel" class="absolute inset-0 object-cover w-full h-full group-hover:scale-105 transition-transform duration-500" src="{{ asset('images/foto_material_produk_olahan.png') }}" />
                            <div class="absolute bg-[#27221e] px-[10px] py-[6px] top-[16px] left-[16px]">
                                <span class="font-['DM_Sans'] text-[#f4f0e8] text-[10px] tracking-[0.8px] uppercase" style="font-variation-settings: 'opsz' 14">Stok reguler</span>
                            </div>
                            <div class="absolute bg-[#27221e] flex items-center justify-center w-[32px] h-[32px] top-[14px] right-[14px] cursor-pointer">
                                <span class="text-[#f4f0e8] text-xs">♡</span>
                            </div>
                        </div>
                        <div class="flex flex-col gap-[9px] items-start pt-[22px] w-full">
                            <span class="font-['DM_Sans'] text-[#b8b0a5] text-[11px] tracking-[1px]" style="font-variation-settings: 'opsz' 14">WP-A-18 / Rubber Wood</span>
                            <h3 class="font-['Oswald'] font-medium text-[#f4f0e8] text-[25px] uppercase">Wood Panel &middot; Laminated</h3>
                            <p class="font-['DM_Sans'] text-[#b8b0a5] text-[13px]" style="font-variation-settings: 'opsz' 14">Grade A &middot; 18 &times; 1.220 mm &times; 2,44 m</p>
                            <p class="font-['DM_Sans'] text-[#b8b0a5] text-[13px]" style="font-variation-settings: 'opsz' 14">Stok 4,5 m³ &middot; MOQ 1 m³</p>
                            <p class="font-['DM_Sans'] font-medium text-[#f4f0e8] text-[17px]" style="font-variation-settings: 'opsz' 14">Rp 10.750.000 / m³</p>
                            <div class="flex gap-[22px] items-center pt-[9px] w-full">
                                <a href="{{ route('product') }}" class="flex gap-[10px] items-center text-[#a18e72] font-['Oswald'] text-[13px] uppercase hover:text-[#f4f0e8]">
                                    <span>Beli Sekarang</span>
                                    <span>→</span>
                                </a>
                                <a href="#" class="font-['DM_Sans'] text-[#b8b0a5] text-[11px] underline hover:text-[#f4f0e8]" style="font-variation-settings: 'opsz' 14">Minta Penawaran</a>
                            </div>
                        </div>
                    </div>

                    <!-- Product 6: Wood Components Custom -->
                    <div class="flex flex-col items-start w-full group">
                        <div class="h-[350px] relative w-full overflow-hidden rounded-[4px]">
                            <img alt="Wood Components" class="absolute inset-0 object-cover w-full h-full group-hover:scale-105 transition-transform duration-500" src="{{ asset('images/foto_material_custom.png') }}" />
                            <div class="absolute bg-[#27221e] px-[10px] py-[6px] top-[16px] left-[16px]">
                                <span class="font-['DM_Sans'] text-[#f4f0e8] text-[10px] tracking-[0.8px] uppercase" style="font-variation-settings: 'opsz' 14">Custom order</span>
                            </div>
                            <div class="absolute bg-[#27221e] flex items-center justify-center w-[32px] h-[32px] top-[14px] right-[14px] cursor-pointer">
                                <span class="text-[#f4f0e8] text-xs">♡</span>
                            </div>
                        </div>
                        <div class="flex flex-col gap-[9px] items-start pt-[22px] w-full">
                            <span class="font-['DM_Sans'] text-[#b8b0a5] text-[11px] tracking-[1px]" style="font-variation-settings: 'opsz' 14">WC-B-01 / Mixed Hardwood</span>
                            <h3 class="font-['Oswald'] font-medium text-[#f4f0e8] text-[25px] uppercase">Wood Components &middot; Custom</h3>
                            <p class="font-['DM_Sans'] text-[#b8b0a5] text-[13px]" style="font-variation-settings: 'opsz' 14">Sesuai spesifikasi gambar kerja &middot; Milling</p>
                            <p class="font-['DM_Sans'] text-[#b8b0a5] text-[13px]" style="font-variation-settings: 'opsz' 14">Minimum order &middot; 5 m³</p>
                            <p class="font-['DM_Sans'] font-medium text-[#f4f0e8] text-[17px]" style="font-variation-settings: 'opsz' 14">Sesuai penawaran / RFQ</p>
                            <div class="flex gap-[22px] items-center pt-[9px] w-full">
                                <a href="#" class="flex gap-[10px] items-center text-[#a18e72] font-['Oswald'] text-[13px] uppercase hover:text-[#f4f0e8]">
                                    <span>Diskusikan RFQ</span>
                                    <span>→</span>
                                </a>
                                <a href="#" class="font-['DM_Sans'] text-[#b8b0a5] text-[11px] underline hover:text-[#f4f0e8]" style="font-variation-settings: 'opsz' 14">Kirim Gambar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- All Products Button -->
            <div class="flex justify-center w-full pt-4">
                <a href="{{ route('product') }}" class="border border-[#51483e] flex gap-[14px] h-[54px] items-center justify-center px-[32px] text-[#f4f0e8] font-['Oswald'] font-medium text-[14px] tracking-[0.5px] uppercase hover:border-[#a18e72] transition-colors">
                    <span>Lihat Semua Produk</span>
                    <span>→</span>
                </a>
            </div>
        </div>

        <!-- Custom requirement banner -->
        <div class="bg-[#342e28] flex flex-col lg:flex-row gap-[40px] items-center justify-between px-[120px] py-[64px] relative w-full border-t border-b border-[#51483e]">
            <div class="flex flex-col gap-[16px] max-w-[600px]">
                <p class="font-['Oswald'] font-medium text-[#b8b0a5] text-[12px] tracking-[1.8px] uppercase">
                    Kebutuhan khusus? Mulai dari spesifikasi Anda.
                </p>
                <h3 class="font-['Oswald'] font-medium text-[#f4f0e8] text-[42px] uppercase leading-[1.15]">
                    Dari serat alami, hingga siap pakai.
                </h3>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-[20px] w-full lg:w-auto">
                <div class="relative h-[200px] w-[180px] overflow-hidden rounded-[4px] group">
                    <img alt="Solid wood" class="absolute inset-0 object-cover w-full h-full group-hover:scale-105 transition-transform" src="{{ asset('images/foto_material_kayu_solid.png') }}" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                    <div class="absolute bottom-[16px] left-[16px] right-[16px]">
                        <p class="font-['Oswald'] text-white text-[16px]">SOLID WOOD</p>
                        <p class="font-['DM_Sans'] text-[#b8b0a5] text-[11px]">Jati, Mahoni, Sungkai</p>
                    </div>
                </div>
                <div class="relative h-[200px] w-[180px] overflow-hidden rounded-[4px] group">
                    <img alt="Kiln dried" class="absolute inset-0 object-cover w-full h-full group-hover:scale-105 transition-transform" src="{{ asset('images/foto_material_mahoni.png') }}" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                    <div class="absolute bottom-[16px] left-[16px] right-[16px]">
                        <p class="font-['Oswald'] text-white text-[16px]">KILN DRIED WOOD</p>
                        <p class="font-['DM_Sans'] text-[#b8b0a5] text-[11px]">Kadar air stabil</p>
                    </div>
                </div>
                <div class="relative h-[200px] w-[180px] overflow-hidden rounded-[4px] group">
                    <img alt="Sawn timber" class="absolute inset-0 object-cover w-full h-full group-hover:scale-105 transition-transform" src="{{ asset('images/foto_material_sungkai.png') }}" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                    <div class="absolute bottom-[16px] left-[16px] right-[16px]">
                        <p class="font-['Oswald'] text-white text-[16px]">SAWN TIMBER</p>
                        <p class="font-['DM_Sans'] text-[#b8b0a5] text-[11px]">Potongan presisi</p>
                    </div>
                </div>
                <div class="relative h-[200px] w-[180px] overflow-hidden rounded-[4px] group">
                    <img alt="Wood components" class="absolute inset-0 object-cover w-full h-full group-hover:scale-105 transition-transform" src="{{ asset('images/foto_material_custom.png') }}" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                    <div class="absolute bottom-[16px] left-[16px] right-[16px]">
                        <p class="font-['Oswald'] text-white text-[16px]">COMPONENTS</p>
                        <p class="font-['DM_Sans'] text-[#b8b0a5] text-[11px]">Furnitur & komersial</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logistics section -->
        <div class="flex flex-col lg:flex-row gap-[80px] items-center px-[120px] py-[96px] w-full">
            <div class="w-full lg:w-[600px] h-[450px] relative overflow-hidden rounded-[6px]">
                <img alt="Warehouse" class="absolute inset-0 object-cover w-full h-full" src="{{ asset('images/foto_material_warehouse.png') }}" />
            </div>
            <div class="flex flex-col flex-1 gap-[24px] items-start">
                <p class="font-['Oswald'] font-medium text-[#b8b0a5] text-[12px] tracking-[1.8px] uppercase">
                    05 / Gudang & distribusi Dexter
                </p>
                <h2 class="font-['Oswald'] font-medium text-[#f4f0e8] text-[48px] uppercase leading-[1.12]">
                    Alur pengiriman,<br>lebih jelas.
                </h2>
                <p class="font-['DM_Sans'] font-normal text-[#b8b0a5] text-[14px] leading-[1.45] w-full" style="font-variation-settings: 'opsz' 14">
                    Persiapan material dan distribusi dalam alur yang terlihat. Mulai dari verifikasi stok fisik, picking, packing, hingga kesiapan muatan.
                </p>
                <div class="grid grid-cols-5 gap-[12px] w-full pt-[12px] border-t border-[#51483e]">
                    <div class="flex flex-col gap-[6px]">
                        <span class="font-['Oswald'] text-[#a18e72] text-[18px]">01</span>
                        <h4 class="font-['DM_Sans'] text-[#f4f0e8] text-[12px] font-semibold" style="font-variation-settings: 'opsz' 14">Stok / Verifikasi</h4>
                    </div>
                    <div class="flex flex-col gap-[6px]">
                        <span class="font-['Oswald'] text-[#a18e72] text-[18px]">02</span>
                        <h4 class="font-['DM_Sans'] text-[#f4f0e8] text-[12px] font-semibold" style="font-variation-settings: 'opsz' 14">Picking</h4>
                    </div>
                    <div class="flex flex-col gap-[6px]">
                        <span class="font-['Oswald'] text-[#a18e72] text-[18px]">03</span>
                        <h4 class="font-['DM_Sans'] text-[#a18e72] text-[12px] font-semibold" style="font-variation-settings: 'opsz' 14">Packing</h4>
                    </div>
                    <div class="flex flex-col gap-[6px]">
                        <span class="font-['Oswald'] text-[#a18e72] text-[18px]">04</span>
                        <h4 class="font-['DM_Sans'] text-[#f4f0e8] text-[12px] font-semibold" style="font-variation-settings: 'opsz' 14">Loading</h4>
                    </div>
                    <div class="flex flex-col gap-[6px]">
                        <span class="font-['Oswald'] text-[#a18e72] text-[18px]">05</span>
                        <h4 class="font-['DM_Sans'] text-[#f4f0e8] text-[12px] font-semibold" style="font-variation-settings: 'opsz' 14">Delivery</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="bg-[#1c1815] flex flex-col gap-[28px] items-start px-[120px] py-[60px] w-full border-t border-[#3b332c]">
            <div class="flex flex-col lg:flex-row gap-[60px] items-start justify-between w-full">
                <div class="flex flex-col gap-[20px] items-start max-w-[420px]">
                    <div class="flex gap-[12px] items-center">
                        <div class="w-[37px] h-[45px]">
                            <img alt="Trees footer" class="w-full h-full" src="{{ asset('images/trees.svg') }}" />
                        </div>
                        <div class="flex flex-col leading-none">
                            <span class="font-['Oswald'] font-semibold text-[26px] text-[#f4f0e8] tracking-[0.5px]">B2B WOOD</span>
                            <span class="font-['DM_Sans'] text-[#b8b0a5] text-[8px] tracking-[2.3px] mt-1" style="font-variation-settings: 'opsz' 14">TIMBER MARKETPLACE</span>
                        </div>
                    </div>
                    <p class="font-['DM_Sans'] text-[#b8b0a5] text-[14px] leading-[1.45]" style="font-variation-settings: 'opsz' 14">
                        Bahan baku yang tepat. Rantai pasok yang tertata. Marketplace kayu untuk kebutuhan industri Indonesia.
                    </p>
                </div>
                <div class="flex flex-col gap-[13px] items-start text-[14px]">
                    <span class="font-['Oswald'] font-medium text-white text-[16px] tracking-[0.5px]">Marketplace</span>
                    <a href="{{ route('product') }}" class="font-['DM_Sans'] text-[#b8b0a5] hover:text-white" style="font-variation-settings: 'opsz' 14">Katalog produk</a>
                    <a href="#" class="font-['DM_Sans'] text-[#b8b0a5] hover:text-white" style="font-variation-settings: 'opsz' 14">Kayu solid</a>
                    <a href="#" class="font-['DM_Sans'] text-[#b8b0a5] hover:text-white" style="font-variation-settings: 'opsz' 14">Produk olahan</a>
                    <a href="#" class="font-['DM_Sans'] text-[#b8b0a5] hover:text-white" style="font-variation-settings: 'opsz' 14">Permintaan penawaran</a>
                </div>
                <div class="flex flex-col gap-[13px] items-start text-[14px]">
                    <span class="font-['Oswald'] font-medium text-white text-[16px] tracking-[0.5px]">Bantuan bisnis</span>
                    <a href="#" class="font-['DM_Sans'] text-[#b8b0a5] hover:text-white" style="font-variation-settings: 'opsz' 14">Panduan pembelian</a>
                    <a href="#" class="font-['DM_Sans'] text-[#b8b0a5] hover:text-white" style="font-variation-settings: 'opsz' 14">Dokumen & legalitas</a>
                    <a href="#" class="font-['DM_Sans'] text-[#b8b0a5] hover:text-white" style="font-variation-settings: 'opsz' 14">Logistik Dexter</a>
                    <a href="#" class="font-['DM_Sans'] text-[#b8b0a5] hover:text-white" style="font-variation-settings: 'opsz' 14">Hubungi tim sales</a>
                </div>
                <div class="flex flex-col gap-[13px] items-start text-[14px]">
                    <span class="font-['Oswald'] font-medium text-white text-[16px] tracking-[0.5px]">Kontak</span>
                    <span class="font-['DM_Sans'] text-[#b8b0a5]" style="font-variation-settings: 'opsz' 14">sales@b2bwood.example</span>
                    <span class="font-['DM_Sans'] text-[#b8b0a5]" style="font-variation-settings: 'opsz' 14">Senin–Jumat, 08.00–17.00</span>
                    <span class="font-['DM_Sans'] text-[#b8b0a5]" style="font-variation-settings: 'opsz' 14">Semarang, Jawa Tengah</span>
                    <span class="font-['DM_Sans'] text-[#b8b0a5]" style="font-variation-settings: 'opsz' 14">Indonesia</span>
                </div>
            </div>
            <div class="border-t border-[#3b332c] flex flex-col sm:flex-row items-center justify-between pt-[20px] text-[#b8b0a5] text-[12px] w-full gap-4">
                <p class="font-['DM_Sans']" style="font-variation-settings: 'opsz' 14">
                    &copy; 2026 B2B WOOD &middot; Tim B2B Marketplace. Seluruh transaksi dan data adalah contoh.
                </p>
                <div class="flex gap-[24px]">
                    <a href="#" class="hover:text-white">Privasi</a>
                    <a href="#" class="hover:text-white">Syarat & ketentuan</a>
                </div>
            </div>
        </div>

    </div>
</body>
</html>