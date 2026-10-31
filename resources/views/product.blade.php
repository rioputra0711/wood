<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Produk - MozaikNusantara B2B</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#f6f4ed] text-[#1c241c] font-sans antialiased">
    <div class="min-h-screen flex flex-col">
        <!-- Navigasi marketplace -->
        <header class="bg-[#f6f4ed] border-b border-[#dde1d9] px-6 lg:px-14 h-24 flex items-center justify-between sticky top-0 z-50">
            <div class="flex items-center gap-10">
                <a href="/" class="flex items-center gap-3">
                    <img src="{{ asset('images/layers_3.svg') }}" alt="MozaikNusantara" class="w-8 h-8">
                    <div class="flex flex-col">
                        <span class="text-xl font-bold tracking-tight">MozaikNusantara</span>
                        <span class="text-[10px] tracking-widest uppercase text-gray-500">Material untuk Industri</span>
                    </div>
                </a>
                <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-700">
                    <a href="/" class="hover:text-black">Beranda</a>
                    <a href="/product" class="text-black font-semibold">Produk</a>
                    <a href="#" class="hover:text-black">Kategori</a>
                    <a href="#" class="hover:text-black">Tentang</a>
                    <a href="#" class="hover:text-black">Logistik</a>
                </nav>
            </div>
            <div class="flex items-center gap-6">
                <div class="hidden lg:flex items-center bg-white border border-[#dde1d9] rounded-lg px-4 py-2 w-72">
                    <img src="{{ asset('images/search_small.svg') }}" alt="Search" class="w-4 h-4 mr-2 opacity-60">
                    <input type="text" placeholder="Cari kayu, grade, SKU..." class="text-xs bg-transparent focus:outline-none w-full">
                </div>
                <a href="#" class="text-sm font-medium hover:text-black">Masuk</a>
                <a href="#" class="relative p-2 bg-white border border-[#dde1d9] rounded-lg hover:bg-gray-50">
                    <img src="{{ asset('images/shopping_cart.svg') }}" alt="Cart" class="w-5 h-5">
                    <span class="absolute -top-1 -right-1 bg-emerald-700 text-white text-[10px] rounded-full w-4 h-4 flex items-center justify-center">1</span>
                </a>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-grow px-6 lg:px-14 py-8">
            <!-- Breadcrumb -->
            <div class="text-xs text-gray-500 mb-6">
                <a href="/" class="hover:underline">Beranda</a> / <span class="text-gray-900">Produk</span>
            </div>

            <!-- Page Title Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-8 gap-4">
                <div>
                    <span class="text-xs font-bold tracking-widest text-emerald-800 uppercase block mb-1">Katalog Bahan Baku</span>
                    <h1 class="text-3xl lg:text-4xl font-bold tracking-tight text-[#1c241c]">Material untuk setiap kebutuhan produksi.</h1>
                    <p class="text-sm text-gray-600 mt-1">Bandingkan spesifikasi, cek stok, dan rencanakan pembelian Anda dalam m³.</p>
                </div>
                <a href="#" class="inline-flex items-center gap-2 bg-white border border-[#dde1d9] text-sm font-medium px-4 py-2.5 rounded-lg hover:bg-gray-50 self-start md:self-auto">
                    Kebutuhan khusus? Kirim RFQ
                    <img src="{{ asset('images/arrow_up_right.svg') }}" alt="Arrow" class="w-4 h-4">
                </a>
            </div>

            <!-- Search bar top -->
            <form action="{{ route('product') }}" method="GET" class="flex gap-3 mb-10">
                <div class="flex-grow flex items-center bg-white border border-[#dde1d9] rounded-lg px-4 py-3 shadow-sm">
                    <img src="{{ asset('images/search.svg') }}" alt="Search" class="w-5 h-5 mr-3 opacity-60">
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari jenis kayu, produk, SKU atau dimensi..." class="text-sm bg-transparent focus:outline-none w-full">
                </div>
                <button type="submit" class="bg-[#1c241c] text-white text-sm font-medium px-6 py-3 rounded-lg hover:bg-emerald-900 transition">
                    Cari material
                </button>
            </form>

            <!-- Layout Grid: Sidebar + Products -->
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <!-- Sidebar Filter -->
                <aside class="lg:col-span-1 bg-white border border-[#dde1d9] rounded-xl p-6 h-fit">
                    <form action="{{ route('product') }}" method="GET">
                        <div class="flex items-center justify-between pb-4 border-b border-[#dde1d9] mb-6">
                            <h3 class="font-bold text-sm">Filter material</h3>
                            <a href="{{ route('product') }}" class="text-xs text-gray-500 hover:text-red-600">Reset</a>
                        </div>

                        <!-- Jenis kayu / spesies -->
                        <div class="mb-6">
                            <h4 class="text-xs font-semibold uppercase tracking-wider text-gray-600 mb-3">Jenis kayu / spesies</h4>
                            <div class="space-y-2 text-sm">
                                @foreach(['Teak / Jati', 'Mahogany / Mahoni', 'Sungkai', 'Rubber Wood'] as $sp)
                                <label class="flex items-center gap-2.5 cursor-pointer">
                                    <input type="checkbox" name="species[]" value="{{ $sp }}" {{ in_array($sp, request('species', [])) ? 'checked' : '' }} class="rounded border-gray-300 text-emerald-800 focus:ring-emerald-700">
                                    <span class="text-gray-700">{{ $sp === 'Teak / Jati' ? 'Teak / Jati' : ($sp === 'Mahogany / Mahoni' ? 'Mahogany / Mahoni' : $sp) }}</span>
                                </label>
                                @endforeach
                            </div>
                        </div>

                        <!-- Grade -->
                        <div class="mb-6">
                            <h4 class="text-xs font-semibold uppercase tracking-wider text-gray-600 mb-3">Grade</h4>
                            <div class="space-y-2 text-sm">
                                @foreach(['Grade A', 'Grade B', 'FAS'] as $gr)
                                <label class="flex items-center gap-2.5 cursor-pointer">
                                    <input type="checkbox" name="grade[]" value="{{ $gr }}" {{ in_array($gr, request('grade', [])) ? 'checked' : '' }} class="rounded border-gray-300 text-emerald-800 focus:ring-emerald-700">
                                    <span class="text-gray-700">{{ $gr }}</span>
                                </label>
                                @endforeach
                            </div>
                        </div>

                        <button type="submit" class="w-full bg-[#1c241c] text-white text-sm font-medium py-2.5 rounded-lg hover:bg-emerald-900 transition">
                            Terapkan filter
                        </button>
                    </form>
                </aside>

                <!-- Products Section -->
                <div class="lg:col-span-3">
                    <!-- Status / Sorting Bar -->
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between bg-white border border-[#dde1d9] rounded-xl p-4 mb-6 gap-4">
                        <div class="flex items-center gap-4 text-xs font-medium text-gray-600">
                            <span class="text-black font-semibold">Semua material</span>
                            <span class="text-gray-300">|</span>
                            <span>Harga sebelum pajak</span>
                            <span class="text-gray-300">|</span>
                            <span>Data contoh</span>
                        </div>
                        <div class="flex items-center gap-2 text-xs text-gray-700">
                            <span>Menampilkan 1-{{ $products->count() }} dari {{ $products->total() }} produk</span>
                        </div>
                    </div>

                    <!-- Product Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                        @foreach($products as $product)
                        <div class="bg-white border border-[#dde1d9] rounded-xl overflow-hidden hover:shadow-md transition flex flex-col justify-between">
                            <div>
                                <div class="relative h-48 bg-gray-100 overflow-hidden">
                                    <img src="{{ asset($product->image_path ?? 'images/foto_material.png') }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                                    <div class="absolute top-3 left-3 bg-black/60 text-white text-[10px] font-mono px-2 py-1 rounded">
                                        {{ $product->code }}
                                    </div>
                                    <div class="absolute top-3 right-3 bg-white text-emerald-800 text-[10px] font-bold px-2 py-1 rounded shadow-sm">
                                        {{ $product->grade }}
                                    </div>
                                </div>
                                <div class="p-5">
                                    <h3 class="font-bold text-base text-[#1c241c] mb-1">{{ $product->name }}</h3>
                                    <p class="text-xs text-gray-500 mb-4">{{ $product->thickness }} × {{ $product->width }} × {{ number_format($product->length, 2, ',', '.') }} mm · {{ $product->surface_type }}</p>

                                    <div class="flex items-center justify-between text-xs py-2 border-t border-b border-gray-100 mb-4">
                                        <span class="text-emerald-700 font-medium">Stok tersedia</span>
                                        <span class="font-bold text-gray-900">{{ number_format($product->stock, 1, ',', '.') }} m³</span>
                                    </div>

                                    <div class="mb-4">
                                        <div class="text-lg font-bold text-[#1c241c]">Rp{{ number_format($product->price, 0, ',', '.') }}<span class="text-xs font-normal text-gray-500">/m³</span></div>
                                        <div class="text-[10px] text-gray-400">Belum termasuk pajak & pengiriman</div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-5 pb-5">
                                <a href="{{ route('product.detail', $product->code) }}" class="w-full inline-flex items-center justify-center gap-2 border border-[#dde1d9] text-xs font-semibold py-2.5 rounded-lg hover:bg-gray-50 transition">
                                    Lihat spesifikasi
                                    <img src="{{ asset('images/arrow_up_right.svg') }}" alt="Arrow" class="w-3.5 h-3.5">
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Info Note -->
                    <div class="flex items-start gap-3 bg-[#f0f3ee] border border-[#dde1d9] rounded-xl p-4 mb-8 text-xs text-gray-700">
                        <img src="{{ asset('images/info.svg') }}" alt="Info" class="w-4 h-4 shrink-0 mt-0.5">
                        <p>Stok merupakan contoh ketersediaan per batch. Volume teralokasi baru dikunci setelah pesanan dan pembayaran diverifikasi.</p>
                    </div>

                    <!-- Pagination -->
                    <div class="flex items-center justify-between bg-white border border-[#dde1d9] rounded-xl p-4">
                        <span class="text-xs text-gray-500">{{ $products->count() }} dari {{ $products->total() }} material</span>
                        <div class="flex items-center gap-2">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom RFQ Banner -->
            <div class="mt-12 bg-white border border-[#dde1d9] rounded-2xl p-8 flex flex-col md:flex-row items-center justify-between gap-6">
                <div>
                    <h3 class="font-bold text-lg text-[#1c241c] mb-1">Tidak menemukan dimensi yang tepat?</h3>
                    <p class="text-xs text-gray-600">Lampirkan spesifikasi dan kebutuhan volume melalui RFQ.</p>
                </div>
                <a href="#" class="bg-[#1c241c] text-white text-sm font-medium px-6 py-3 rounded-lg hover:bg-emerald-900 transition shrink-0">
                    Kirim RFQ
                </a>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-[#151b15] text-gray-400 px-6 lg:px-14 py-12 mt-auto text-xs">
            <div class="flex flex-col md:flex-row items-center justify-between border-b border-gray-800 pb-8 gap-4">
                <div class="flex items-center gap-3 text-white">
                    <img src="{{ asset('images/layers_3.svg') }}" alt="MozaikNusantara" class="w-6 h-6 invert">
                    <span class="font-bold text-sm">MozaikNusantara</span>
                </div>
                <div class="flex gap-6 text-gray-300">
                    <a href="#" class="hover:text-white">Kebijakan Privasi</a>
                    <a href="#" class="hover:text-white">Syarat & Ketentuan</a>
                    <a href="#" class="hover:text-white">SVLK & Sertifikasi</a>
                </div>
            </div>
            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-gray-500">
                <p>© 2026 MozaikNusantara. Konsep platform B2B. Seluruh transaksi dan data adalah contoh.</p>
                <p>Privasi · Syarat & ketentuan</p>
            </div>
        </footer>
    </div>
</body>
</html>
