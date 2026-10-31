<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }} - MozaikNusantara B2B</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#f6f4ed] text-[#1c241c] font-sans antialiased">
    <div class="min-h-screen flex flex-col">
        <!-- Navigasi marketplace -->
        <header class="bg-[#f6f4ed] border-b border-[#dde1d9] px-6 lg:px-14 h-24 flex items-center justify-between sticky top-0 z-55">
            <div class="flex items-center gap-10">
                <a href="/" class="flex items-center gap-3">
                    <img src="{{ asset('images/layers_3.svg') }}" alt="MozaikNusantara" class="w-8 h-8">
                    <div class="flex flex-col">
                        <span class="text-xl font-bold tracking-tight text-[#173f35]">MozaikNusantara</span>
                        <span class="text-[10px] tracking-widest uppercase text-gray-500">Material untuk Industri</span>
                    </div>
                </a>
                <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-700">
                    <a href="/" class="hover:text-black">Beranda</a>
                    <a href="{{ route('product') }}" class="text-black font-semibold">Produk</a>
                    <a href="#" class="hover:text-black">Kategori</a>
                    <a href="#" class="hover:text-black">Tentang</a>
                    <a href="#" class="hover:text-black">Logistik</a>
                </nav>
            </div>
            <div class="flex items-center gap-6">
                <div class="hidden lg:flex items-center bg-white border border-[#dde1d9] rounded-lg px-4 py-2 w-72">
                    <img src="{{ asset('images/search.svg') }}" alt="Search" class="w-4 h-4 mr-2 text-gray-400">
                    <input type="text" placeholder="Cari kayu, grade, SKU..." class="w-full text-xs text-gray-700 bg-transparent focus:outline-none">
                </div>
                <div class="flex items-center gap-2">
                    <a href="#" class="text-sm font-semibold text-[#20352f] hover:text-black">Masuk</a>
                </div>
                <div class="flex items-center gap-2">
                    <div class="relative">
                        <img src="{{ asset('images/shopping_cart.svg') }}" alt="Cart" class="w-[18px] h-[18px]">
                    </div>
                    <span class="text-sm font-normal text-[#20352f]">1</span>
                </div>
            </div>
        </header>

        <!-- Detail material -->
        <main class="flex-grow px-6 lg:px-16 py-9 flex flex-col gap-8">
            <!-- Breadcrumb -->
            <div class="text-xs text-gray-500">
                <a href="/" class="hover:underline">Beranda</a> / <a href="{{ route('product') }}" class="hover:underline">Produk</a> / <span class="text-gray-700">{{ $product->category->name ?? 'Kayu solid' }}</span> / <span class="text-gray-900 font-medium">{{ $product->name }}</span>
            </div>

            <!-- Galeri dan pembelian -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                <!-- Kolom Kiri: Galeri & Spesifikasi Teknis -->
                <div class="lg:col-span-7 flex flex-col gap-4">
                    <!-- Foto Utama -->
                    <div class="h-[480px] rounded-lg overflow-hidden border border-[#dde1d9] bg-white relative">
                        <img src="{{ asset($product->image_path ?: 'images/foto_material_detail.png') }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                    </div>

                    <!-- Foto Tambahan -->
                    <div class="grid grid-cols-3 gap-3">
                        <div class="h-[122px] rounded-lg overflow-hidden border border-[#dde1d9]">
                            <img src="{{ asset('images/foto_material_detail_1.png') }}" alt="Detail 1" class="w-full h-full object-cover">
                        </div>
                        <div class="h-[122px] rounded-lg overflow-hidden border border-[#dde1d9]">
                            <img src="{{ asset('images/foto_material_detail_2.png') }}" alt="Detail 2" class="w-full h-full object-cover">
                        </div>
                        <div class="h-[122px] rounded-lg overflow-hidden border border-[#dde1d9]">
                            <img src="{{ asset('images/foto_material_detail_3.png') }}" alt="Detail 3" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <p class="text-[11px] text-gray-500">Foto ilustrasi material. Serat dan warna dapat berbeda antarbatang dan batch.</p>

                    <!-- Panel Informasi: Spesifikasi teknis -->
                    <div class="bg-white border border-[#dde1d9] rounded-[10px] p-6 flex flex-col gap-[18px] mt-4">
                        <h3 class="font-semibold text-[17px] text-[#20352f]">Spesifikasi teknis</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4 text-[13px]">
                            <div class="flex flex-col gap-4">
                                <div class="flex items-center justify-between pb-2 border-b border-gray-100">
                                    <span class="text-gray-500">Nama ilmiah</span>
                                    <span class="font-medium text-[#20352f]">{{ $product->species }}</span>
                                </div>
                                <div class="flex items-center justify-between pb-2 border-b border-gray-100">
                                    <span class="text-gray-500">Asal</span>
                                    <span class="font-medium text-[#20352f]">{{ $product->origin }}</span>
                                </div>
                                <div class="flex items-center justify-between pb-2 border-b border-gray-100">
                                    <span class="text-gray-500">Grade</span>
                                    <span class="font-medium text-[#20352f]">{{ $product->grade }}</span>
                                </div>
                                <div class="flex items-center justify-between pb-2 border-b border-gray-100">
                                    <span class="text-gray-500">Moisture content</span>
                                    <span class="font-medium text-[#20352f]">{{ $product->moisture_content }}</span>
                                </div>
                            </div>
                            <div class="flex flex-col gap-4">
                                <div class="flex items-center justify-between pb-2 border-b border-gray-100">
                                    <span class="text-gray-500">Ketebalan</span>
                                    <span class="font-medium text-[#20352f]">{{ $product->thickness }} mm</span>
                                </div>
                                <div class="flex items-center justify-between pb-2 border-b border-gray-100">
                                    <span class="text-gray-500">Lebar</span>
                                    <span class="font-medium text-[#20352f]">{{ $product->width }} mm</span>
                                </div>
                                <div class="flex items-center justify-between pb-2 border-b border-gray-100">
                                    <span class="text-gray-500">Panjang</span>
                                    <span class="font-medium text-[#20352f]">{{ number_format($product->length, 0, ',', '.') }} mm / {{ number_format($product->length / 1000, 1, ',', '.') }} m</span>
                                </div>
                                <div class="flex items-center justify-between pb-2 border-b border-gray-100">
                                    <span class="text-gray-500">Proses</span>
                                    <span class="font-medium text-[#20352f]">Kiln dried · {{ $product->surface_type }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-[#dde1d9] h-px w-full my-1"></div>
                        <p class="text-[12px] text-gray-500">Grade {{ $product->grade }} contoh: serat dominan lurus, variasi warna alami, cacat visual terbatas. Toleransi dimensi ±1 mm; konfirmasi lembar mutu batch sebelum pemesanan.</p>
                    </div>
                </div>

                <!-- Kolom Kanan: Konfigurasi Pembelian -->
                <div class="lg:col-span-5 flex flex-col gap-6">
                    <div class="flex items-center gap-3">
                        <span class="font-bold text-[11px] text-[#946543] uppercase tracking-wider">{{ $product->code }} / {{ $product->category->name ?? 'Kayu solid' }}</span>
                        <span class="bg-[#edf1e9] text-[#173f35] font-semibold text-[11px] px-2.5 py-1 rounded">Stok tersedia</span>
                    </div>

                    <div class="flex flex-col gap-2.5">
                        <h1 class="text-5xl font-normal text-[#20352f] font-serif">{{ $product->name }}</h1>
                        <p class="text-2xl text-gray-500 font-serif italic">{{ $product->species }}</p>
                        <p class="text-sm text-gray-600 mt-1">{{ $product->description }}</p>
                    </div>

                    <div class="flex items-center gap-2">
                        <span class="bg-[#edf1e9] text-[#173f35] font-semibold text-[11px] px-2.5 py-1 rounded">Grade {{ $product->grade }}</span>
                        <span class="bg-[#f6f4ed] border border-[#dde1d9] text-gray-700 font-semibold text-[11px] px-2.5 py-1 rounded">{{ $product->surface_type }}</span>
                        <span class="bg-[#f6f4ed] border border-[#dde1d9] text-gray-700 font-semibold text-[11px] px-2.5 py-1 rounded">MC {{ $product->moisture_content }}</span>
                    </div>

                    <!-- Harga material -->
                    <div class="border-t border-b border-[#dde1d9] py-5 flex flex-col gap-2">
                        <div class="flex items-baseline gap-2">
                            <span class="font-semibold text-3xl text-[#20352f]">Rp{{ number_format($product->price, 0, ',', '.') }}</span>
                            <span class="text-gray-500 text-[13px]">/{{ $product->unit }}</span>
                        </div>
                        <p class="text-xs text-gray-500">Harga sebelum pajak & ongkir · MOQ {{ number_format($product->moq, 1, ',', '.') }} {{ $product->unit }}</p>
                        <div class="flex items-center justify-between text-[13px] text-gray-700 pt-1">
                            <span class="text-gray-500">Stok dapat dipesan</span>
                            <span class="font-medium text-[#20352f]">{{ number_format($product->stock, 1, ',', '.') }} {{ $product->unit }} · {{ $product->supplier->name ?? 'Dexter Semarang' }}</span>
                        </div>
                    </div>

                    <!-- Ukuran dan volume -->
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex flex-col gap-2">
                            <label class="text-xs font-semibold text-[#20352f]">Ukuran pilihan</label>
                            <div class="bg-white border border-[#dde1d9] rounded-lg p-3 text-[13px] text-[#20352f] flex items-center justify-between">
                                <span>{{ $product->thickness }} × {{ $product->width }} × {{ number_format($product->length, 0, ',', '.') }} mm</span>
                                <span class="text-gray-400">▾</span>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-xs font-semibold text-[#20352f]">Volume pesanan ({{ $product->unit }})</label>
                            <div class="bg-white border border-[#dde1d9] rounded-lg p-3 text-[13px] text-[#20352f] flex items-center justify-between">
                                <span class="text-gray-400">−</span>
                                <span class="font-medium">5,0</span>
                                <span class="text-gray-400">+</span>
                            </div>
                        </div>
                    </div>

                    <!-- Permukaan / proses -->
                    <div class="flex flex-col gap-2">
                        <label class="text-xs font-semibold text-[#20352f]">Permukaan / proses</label>
                        <div class="bg-white border border-[#dde1d9] rounded-lg p-3 text-[13px] text-[#20352f]">
                            ● {{ $product->surface_type }} (tersedia) &nbsp;&nbsp;&nbsp; ○ Rough Sawn (via RFQ)
                        </div>
                    </div>

                    <!-- Perhitungan pembelian -->
                    <div class="bg-[#e9ede4] p-5 rounded-lg flex flex-col gap-3">
                        <div class="flex items-center justify-between">
                            <span class="text-[13px] text-gray-600">5,0 {{ $product->unit }} × Rp{{ number_format($product->price, 0, ',', '.') }}</span>
                            <span class="font-bold text-[17px] text-[#20352f]">Rp{{ number_format($product->price * 5, 0, ',', '.') }}</span>
                        </div>
                        <p class="text-[11px] text-gray-500">Volume akhir berdasarkan pengukuran muat. Subtotal belum termasuk pajak dan pengiriman.</p>
                    </div>

                    <!-- Aksi pembelian -->
                    <div class="flex gap-3">
                        <a href="#" class="flex-1 bg-[#173f35] hover:bg-emerald-900 text-white font-semibold text-[13px] h-11 rounded-lg flex items-center justify-center gap-2 transition">
                            <span>Tambah ke keranjang</span>
                            <img src="{{ asset('images/shopping_cart_white.svg') }}" alt="Cart" class="w-4 h-4">
                        </a>
                        <a href="#" class="flex-1 bg-[#173f35] hover:bg-emerald-900 text-white font-semibold text-[13px] h-11 rounded-lg flex items-center justify-center transition">
                            <span>Beli sekarang</span>
                        </a>
                    </div>

                    <a href="#" class="border border-[#dde1d9] hover:bg-gray-50 text-[#173f35] font-semibold text-[13px] h-11 rounded-lg flex items-center justify-center gap-2 transition">
                        <span>Request Quotation / volume besar</span>
                        <img src="{{ asset('images/arrow_up_right.svg') }}" alt="Arrow" class="w-4 h-4">
                    </a>

                    <div class="bg-[#edf1e9] p-3.5 rounded-lg flex gap-3 items-start">
                        <img src="{{ asset('images/info.svg') }}" alt="Info" class="w-4 h-4 mt-0.5 text-[#173f35]">
                        <p class="text-[12px] text-[#173f35]">Butuh dimensi atau volume khusus? Kirim spesifikasi melalui RFQ. Penawaran memerlukan konfirmasi tim sales.</p>
                    </div>

                    <!-- Panel informasi: Estimasi pengiriman -->
                    <div class="bg-white border border-[#dde1d9] rounded-[10px] p-6 flex flex-col gap-4 text-[13px]">
                        <h4 class="font-semibold text-[17px] text-[#20352f]">Estimasi pengiriman</h4>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-500">Asal gudang</span>
                            <span class="font-medium text-[#20352f]">{{ $product->supplier->name ?? 'Dexter' }} · Semarang</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-500">Tujuan contoh</span>
                            <span class="font-medium text-[#20352f]">Jepara, Jawa Tengah</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-500">Estimasi ongkir 5,0 {{ $product->unit }}</span>
                            <span class="font-medium text-[#20352f]">Rp2.500.000</span>
                        </div>
                        <p class="text-[12px] text-gray-500 pt-1">Truk CDD · estimasi 1–2 hari setelah loading. Jadwal dan ongkir dikonfirmasi saat checkout.</p>
                    </div>
                </div>
            </div>

            <!-- Legalitas dan dokumen -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-7 mt-4">
                <div class="bg-white border border-[#dde1d9] rounded-[10px] p-6 flex flex-col gap-4">
                    <h3 class="font-semibold text-[17px] text-[#20352f]">Legal Wood & Traceability</h3>
                    <div class="flex items-center gap-2">
                        <span class="bg-[#edf1e9] text-[#173f35] font-semibold text-[11px] px-2.5 py-1 rounded">Informasi produk contoh</span>
                        <span class="bg-[#f6f4ed] border border-[#dde1d9] text-gray-700 font-semibold text-[11px] px-2.5 py-1 rounded">Batch JT-2609-A</span>
                    </div>
                    <p class="text-[14px] text-gray-600">Asal tercatat: {{ $product->origin }}. Alur batch: pemasok → kiln drying → gudang {{ $product->supplier->name ?? 'Dexter Semarang' }}. Identitas pemasok dan dokumen pengangkutan ditinjau per transaksi.</p>
                    <p class="text-[12px] text-gray-500">Label ini bukan sertifikasi MozaikNusantara. Contoh dokumen tidak boleh digunakan sebagai bukti legalitas yang berlaku.</p>
                </div>

                <div class="bg-white border border-[#dde1d9] rounded-[10px] p-6 flex flex-col gap-4">
                    <h3 class="font-semibold text-[17px] text-[#20352f]">Dokumen pendukung</h3>
                    <div class="border border-[#dde1d9] rounded-lg p-3.5 flex items-center justify-between hover:bg-gray-50 transition cursor-pointer">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('images/file_text.svg') }}" alt="PDF" class="w-5 h-5 text-gray-500">
                            <div>
                                <div class="font-semibold text-xs text-[#20352f]">Lembar mutu · {{ $product->code }}</div>
                                <div class="text-[11px] text-gray-500">PDF · contoh hasil inspeksi batch</div>
                            </div>
                        </div>
                        <img src="{{ asset('images/download.svg') }}" alt="Download" class="w-4 h-4 text-gray-500">
                    </div>
                    <div class="border border-[#dde1d9] rounded-lg p-3.5 flex items-center justify-between hover:bg-gray-50 transition cursor-pointer">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('images/file_text.svg') }}" alt="PDF" class="w-5 h-5 text-gray-500">
                            <div>
                                <div class="font-semibold text-xs text-[#20352f]">Dokumen asal & legalitas kayu</div>
                                <div class="text-[11px] text-gray-500">PDF · sampel, validitas perlu diverifikasi</div>
                            </div>
                        </div>
                        <img src="{{ asset('images/download.svg') }}" alt="Download" class="w-4 h-4 text-gray-500">
                    </div>
                    <div class="border border-[#dde1d9] rounded-lg p-3.5 flex items-center justify-between hover:bg-gray-50 transition cursor-pointer">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('images/file_text.svg') }}" alt="PDF" class="w-5 h-5 text-gray-500">
                            <div>
                                <div class="font-semibold text-xs text-[#20352f]">Panduan penanganan material</div>
                                <div class="text-[11px] text-gray-500">PDF · penyimpanan & aklimatisasi</div>
                            </div>
                        </div>
                        <img src="{{ asset('images/download.svg') }}" alt="Download" class="w-4 h-4 text-gray-500">
                    </div>
                </div>
            </div>

            <!-- Produk terkait -->
            <div class="flex flex-col gap-6 mt-10">
                <div class="flex items-center justify-between">
                    <h2 class="text-4xl font-serif text-[#20352f]">Material lain untuk produksi Anda.</h2>
                    <a href="{{ route('product') }}" class="text-xs font-semibold text-[#20352f] hover:underline flex items-center gap-1">
                        Kembali ke katalog →
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach(\App\Models\Product::where('id', '!=', $product->id)->take(3)->get() as $related)
                    <div class="bg-white border border-[#dde1d9] rounded-lg overflow-hidden flex flex-col justify-between">
                        <div>
                            <div class="h-[190px] overflow-hidden relative">
                                <img src="{{ asset($related->image_path ?: 'images/foto_material_4.png') }}" alt="{{ $related->name }}" class="w-full h-full object-cover">
                            </div>
                            <div class="p-4 flex flex-col gap-3">
                                <div class="flex items-center justify-between">
                                    <span class="text-[10px] text-gray-500">{{ $related->code }}</span>
                                    <span class="bg-[#edf1e9] text-[#173f35] font-semibold text-[11px] px-2 py-0.5 rounded">Grade {{ $related->grade }}</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-base text-[#20352f]">{{ $related->name }}</h4>
                                    <p class="text-xs text-gray-500 mt-0.5">{{ $related->thickness }} × {{ $related->width }} × {{ number_format($related->length, 0, ',', '.') }} mm · {{ $related->surface_type }}</p>
                                </div>
                                <div class="bg-[#dde1d9] h-px w-full"></div>
                                <div class="flex items-center justify-between text-xs text-gray-600">
                                    <span>Stok tersedia</span>
                                    <span class="font-medium text-[#20352f]">{{ number_format($related->stock, 1, ',', '.') }} {{ $related->unit }}</span>
                                </div>
                                <div>
                                    <div class="text-lg font-bold text-[#20352f]">Rp{{ number_format($related->price, 0, ',', '.') }}<span class="text-xs font-normal text-gray-500"> /{{ $related->unit }}</span></div>
                                    <div class="text-[10px] text-gray-400">Belum termasuk pajak & pengiriman</div>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 pt-0">
                            <a href="{{ route('product.detail', $related->code) }}" class="w-full border border-[#dde1d9] hover:bg-gray-50 text-[#173f35] font-semibold text-xs py-2.5 rounded-lg flex items-center justify-center gap-2 transition">
                                <span>Lihat spesifikasi</span>
                                <img src="{{ asset('images/arrow_up_right.svg') }}" alt="Arrow" class="w-3.5 h-3.5">
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-[#173f35] text-white px-6 lg:px-16 py-8 flex flex-col md:flex-row items-center justify-between gap-4 text-xs mt-16">
            <div>© 2026 MozaikNusantara · Konsep platform B2B. Seluruh transaksi dan data adalah contoh.</div>
            <div class="flex items-center gap-6">
                <a href="#" class="hover:underline">Privasi</a>
                <a href="#" class="hover:underline">Syarat & Ketentuan</a>
            </div>
        </footer>
    </div>
</body>
</html>