<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promo - ADR Catalogue</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .promo-gradient {
            background: linear-gradient(135deg, #bfdbfe 0%, #93c5fd 25%, #60a5fa 50%, #3b82f6 75%, #2563eb 100%);
        }
        .light-blue-gradient {
            background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 25%, #93c5fd 50%, #60a5fa 75%, #3b82f6 100%);
        }
        .promo-card {
            transition: all 0.3s ease;
        }
        .promo-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        .slide-in {
            animation: slideIn 0.5s ease-out;
        }
        @keyframes slideIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fade-in {
            animation: fadeIn 0.8s ease-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .countdown-badge {
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
    </style>
</head>

<body class="bg-gradient-to-br from-blue-50 via-blue-100 to-blue-200">
    <!-- Navbar -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo and Brand -->
                <div class="flex items-center space-x-4">
                    <div class="flex-shrink-0 flex items-center">
                        <img class="h-10 w-auto" src="{{ asset('images/asset/logo.png') }}" alt="ADR Catalogue">
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="{{ route('home') }}" class="text-gray-700 hover:text-indigo-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">
                                <i class="fas fa-home mr-1"></i> Beranda
                            </a>
                            <a href="{{ route('promo') }}" class="text-indigo-600 hover:text-indigo-800 px-3 py-2 rounded-md text-sm font-medium transition-colors">
                                <i class="fas fa-tags mr-1"></i> Promo
                            </a>
                            <a href="{{ route('kategori') }}" class="text-gray-700 hover:text-indigo-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">
                                <i class="fas fa-th-large mr-1"></i> Kategori
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right side buttons -->
                <div class="flex items-center space-x-4">
                    <a href="{{ route('rekomendasi') }}" class="text-gray-700 hover:text-indigo-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">
                        <i class="fas fa-star mr-1"></i> Rekomendasi
                    </a>
                    <a href="{{ route('profile') }}" class="text-gray-700 hover:text-indigo-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">
                        <i class="fas fa-building mr-1"></i> Profil
                    </a>
                    <a href="{{ route('login') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors">
                        <i class="fas fa-user mr-1"></i> Masuk/Daftar
                    </a>
                    
                    <!-- Mobile menu button -->
                    <div class="md:hidden">
                        <button onclick="toggleMobileMenu()" class="text-gray-700 hover:text-indigo-600 p-2">
                            <i class="fas fa-bars text-xl"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Mobile menu -->
        <div id="mobileMenu" class="hidden md:hidden bg-white border-t border-gray-200">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-indigo-600 block px-3 py-2 rounded-md text-base font-medium">Beranda</a>
                <a href="{{ route('profile') }}" class="text-gray-700 hover:text-indigo-600 block px-3 py-2 rounded-md text-base font-medium">
                    <i class="fas fa-building mr-1"></i> Profil
                </a>
                <a href="{{ route('login') }}" class="text-gray-700 hover:text-indigo-600 block px-3 py-2 rounded-md text-base font-medium">
                    <i class="fas fa-user mr-1"></i> Masuk
                </a>
            </div>
        </div>
    </nav>

    <!-- Header Section -->
    <section class="promo-gradient text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center slide-in">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Promo Spesial</h1>
                <p class="text-xl opacity-90 max-w-2xl mx-auto">
                    Dapatkan penawaran terbaik dan diskon menarik untuk produk pilihan
                </p>
            </div>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="py-8 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row gap-4 items-center justify-between">
                <div class="flex flex-wrap gap-2">
                    <button onclick="filterPromos('all')" class="filter-btn px-4 py-2 bg-indigo-600 text-white rounded-lg transition-colors">
                        Semua Promo
                    </button>
                    <button onclick="filterPromos('flash')" class="filter-btn px-4 py-2 bg-gray-200 text-gray-700 hover:bg-gray-300 rounded-lg transition-colors">
                        <i class="fas fa-bolt mr-1"></i> Flash Sale
                    </button>
                    <button onclick="filterPromos('discount')" class="filter-btn px-4 py-2 bg-gray-200 text-gray-700 hover:bg-gray-300 rounded-lg transition-colors">
                        <i class="fas fa-percentage mr-1"></i> Diskon
                    </button>
                    <button onclick="filterPromos('bundle')" class="filter-btn px-4 py-2 bg-gray-200 text-gray-700 hover:bg-gray-300 rounded-lg transition-colors">
                        <i class="fas fa-box mr-1"></i> Bundle
                    </button>
                    <button onclick="filterPromos('free')" class="filter-btn px-4 py-2 bg-gray-200 text-gray-700 hover:bg-gray-300 rounded-lg transition-colors">
                        <i class="fas fa-gift mr-1"></i> Gratis Ongkir
                    </button>
                </div>
                
                <div class="relative">
                    <select class="appearance-none bg-gray-100 border border-gray-300 text-gray-700 py-2 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-indigo-500">
                        <option>Urutkan: Terbaru</option>
                        <option>Urutkan: Populer</option>
                        <option>Urutkan: Diskon Terbesar</option>
                        <option>Urutkan: Akan Berakhir</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Promo -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-2">Promo Unggulan</h2>
                <p class="text-gray-600">Jangan lewatkan penawaran terbaik minggu ini</p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
                <!-- Big Promo Card -->
                <div class="promo-card bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl overflow-hidden text-white slide-in" style="animation-delay: 0.1s">
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-6">
                            <div>
                                <span class="bg-white/20 backdrop-blur-sm px-3 py-1 rounded-full text-sm font-medium mb-3 inline-block">
                                    <i class="fas fa-fire mr-1"></i> Flash Sale
                                </span>
                                <h3 class="text-3xl font-bold mb-2">Mega Sale</h3>
                                <p class="text-white/90 text-lg">Diskon hingga 70% untuk semua produk elektronik</p>
                            </div>
                            <div class="countdown-badge bg-red-500 text-white px-3 py-2 rounded-lg text-center">
                                <p class="text-xs">Berakhir dalam</p>
                                <p class="font-bold">23:45:30</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                <div>
                                    <p class="text-white/80 text-sm">Harga Mulai</p>
                                    <p class="text-2xl font-bold">Rp 99.000</p>
                                </div>
                                <div class="text-white/60 line-through">Rp 330.000</div>
                            </div>
                            <button class="bg-white text-purple-600 px-6 py-3 rounded-lg font-medium hover:bg-gray-100 transition-colors">
                                <i class="fas fa-shopping-cart mr-2"></i> Beli Sekarang
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Multiple Small Promos -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="promo-card bg-gradient-to-br from-blue-400 to-blue-600 rounded-xl p-6 text-white slide-in" style="animation-delay: 0.2s">
                        <span class="bg-white/20 backdrop-blur-sm px-2 py-1 rounded-full text-xs font-medium mb-3 inline-block">
                            <i class="fas fa-percentage mr-1"></i> Diskon
                        </span>
                        <h3 class="text-xl font-bold mb-2">Fashion Week</h3>
                        <p class="text-white/90 text-sm mb-4">Diskon 50% semua produk fashion</p>
                        <div class="flex items-center justify-between">
                            <p class="text-lg font-bold">Rp 125.000</p>
                            <button class="bg-white/20 backdrop-blur-sm px-3 py-1 rounded-lg text-sm hover:bg-white/30 transition-colors">
                                Lihat
                            </button>
                        </div>
                    </div>

                    <div class="promo-card bg-gradient-to-br from-sky-400 to-sky-600 rounded-xl p-6 text-white slide-in" style="animation-delay: 0.3s">
                        <span class="bg-white/20 backdrop-blur-sm px-2 py-1 rounded-full text-xs font-medium mb-3 inline-block">
                            <i class="fas fa-box mr-1"></i> Bundle
                        </span>
                        <h3 class="text-xl font-bold mb-2">Paket Hemat</h3>
                        <p class="text-white/90 text-sm mb-4">Beli 2 gratis 1 untuk produk pilihan</p>
                        <div class="flex items-center justify-between">
                            <p class="text-lg font-bold">Mulai Rp 75.000</p>
                            <button class="bg-white/20 backdrop-blur-sm px-3 py-1 rounded-lg text-sm hover:bg-white/30 transition-colors">
                                Lihat
                            </button>
                        </div>
                    </div>

                    <div class="promo-card bg-gradient-to-br from-indigo-400 to-indigo-600 rounded-xl p-6 text-white slide-in" style="animation-delay: 0.4s">
                        <span class="bg-white/20 backdrop-blur-sm px-2 py-1 rounded-full text-xs font-medium mb-3 inline-block">
                            <i class="fas fa-gift mr-1"></i> Gratis Ongkir
                        </span>
                        <h3 class="text-xl font-bold mb-2">Ongkir Gratis</h3>
                        <p class="text-white/90 text-sm mb-4">Gratis ongkir minimal pembelian Rp 100.000</p>
                        <div class="flex items-center justify-between">
                            <p class="text-lg font-bold">Hemat Rp 15.000</p>
                            <button class="bg-white/20 backdrop-blur-sm px-3 py-1 rounded-lg text-sm hover:bg-white/30 transition-colors">
                                Lihat
                            </button>
                        </div>
                    </div>

                    <div class="promo-card bg-gradient-to-br from-cyan-400 to-cyan-600 rounded-xl p-6 text-white slide-in" style="animation-delay: 0.5s">
                        <span class="bg-white/20 backdrop-blur-sm px-2 py-1 rounded-full text-xs font-medium mb-3 inline-block">
                            <i class="fas fa-crown mr-1"></i> VIP
                        </span>
                        <h3 class="text-xl font-bold mb-2">Member Exclusive</h3>
                        <p class="text-white/90 text-sm mb-4">Diskon khusus member VIP</p>
                        <div class="flex items-center justify-between">
                            <p class="text-lg font-bold">Hingga 25%</p>
                            <button class="bg-white/20 backdrop-blur-sm px-3 py-1 rounded-lg text-sm hover:bg-white/30 transition-colors">
                                Lihat
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- All Promos Grid -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-2">Semua Promo</h2>
                <p class="text-gray-600">Temukan penawaran terbaik untuk Anda</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Promo Card 1 -->
                <div class="promo-card bg-white rounded-xl shadow-lg overflow-hidden slide-in" style="animation-delay: 0.1s">
                    <div class="relative">
                        <div class="bg-gradient-to-r from-blue-300 to-blue-500 h-48 flex items-center justify-center">
                            <div class="text-center text-white">
                                <i class="fas fa-laptop text-4xl mb-2"></i>
                                <h3 class="text-xl font-bold">Elektronik Sale</h3>
                            </div>
                        </div>
                        <span class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                            -50%
                        </span>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">Diskon besar untuk semua produk elektronik pilihan</p>
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <p class="text-2xl font-bold text-indigo-600">Rp 500.000</p>
                                <p class="text-sm text-gray-500 line-through">Rp 1.000.000</p>
                            </div>
                            <div class="text-sm text-gray-500">
                                <i class="fas fa-clock mr-1"></i>
                                2 hari lagi
                            </div>
                        </div>
                        <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-2 rounded-lg transition-colors">
                            <i class="fas fa-shopping-cart mr-2"></i> Beli Sekarang
                        </button>
                    </div>
                </div>

                <!-- Promo Card 2 -->
                <div class="promo-card bg-white rounded-xl shadow-lg overflow-hidden slide-in" style="animation-delay: 0.2s">
                    <div class="relative">
                        <div class="bg-gradient-to-r from-blue-200 to-blue-400 h-48 flex items-center justify-center">
                            <div class="text-center text-white">
                                <i class="fas fa-tshirt text-4xl mb-2"></i>
                                <h3 class="text-xl font-bold">Fashion Deal</h3>
                            </div>
                        </div>
                        <span class="absolute top-4 right-4 bg-orange-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                            -30%
                        </span>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">Koleksi fashion terbaru dengan harga spesial</p>
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <p class="text-2xl font-bold text-indigo-600">Rp 210.000</p>
                                <p class="text-sm text-gray-500 line-through">Rp 300.000</p>
                            </div>
                            <div class="text-sm text-gray-500">
                                <i class="fas fa-clock mr-1"></i>
                                5 hari lagi
                            </div>
                        </div>
                        <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-2 rounded-lg transition-colors">
                            <i class="fas fa-shopping-cart mr-2"></i> Beli Sekarang
                        </button>
                    </div>
                </div>

                <!-- Promo Card 3 -->
                <div class="promo-card bg-white rounded-xl shadow-lg overflow-hidden slide-in" style="animation-delay: 0.3s">
                    <div class="relative">
                        <div class="bg-gradient-to-r from-sky-200 to-sky-400 h-48 flex items-center justify-center">
                            <div class="text-center text-white">
                                <i class="fas fa-utensils text-4xl mb-2"></i>
                                <h3 class="text-xl font-bold">Makanan Fest</h3>
                            </div>
                        </div>
                        <span class="absolute top-4 right-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                            Buy 2 Get 1
                        </span>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">Beli 2 gratis 1 untuk makanan pilihan</p>
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <p class="text-2xl font-bold text-indigo-600">Rp 75.000</p>
                                <p class="text-sm text-green-600">Hemat 50%</p>
                            </div>
                            <div class="text-sm text-gray-500">
                                <i class="fas fa-clock mr-1"></i>
                                1 minggu lagi
                            </div>
                        </div>
                        <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-2 rounded-lg transition-colors">
                            <i class="fas fa-shopping-cart mr-2"></i> Beli Sekarang
                        </button>
                    </div>
                </div>

                <!-- Promo Card 4 -->
                <div class="promo-card bg-white rounded-xl shadow-lg overflow-hidden slide-in" style="animation-delay: 0.4s">
                    <div class="relative">
                        <div class="bg-gradient-to-r from-indigo-200 to-indigo-400 h-48 flex items-center justify-center">
                            <div class="text-center text-white">
                                <i class="fas fa-spa text-4xl mb-2"></i>
                                <h3 class="text-xl font-bold">Beauty Special</h3>
                            </div>
                        </div>
                        <span class="absolute top-4 right-4 bg-purple-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                            -40%
                        </span>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">Produk kecantikan dengan diskon spesial</p>
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <p class="text-2xl font-bold text-indigo-600">Rp 90.000</p>
                                <p class="text-sm text-gray-500 line-through">Rp 150.000</p>
                            </div>
                            <div class="text-sm text-gray-500">
                                <i class="fas fa-clock mr-1"></i>
                                3 hari lagi
                            </div>
                        </div>
                        <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-2 rounded-lg transition-colors">
                            <i class="fas fa-shopping-cart mr-2"></i> Beli Sekarang
                        </button>
                    </div>
                </div>

                <!-- Promo Card 5 -->
                <div class="promo-card bg-white rounded-xl shadow-lg overflow-hidden slide-in" style="animation-delay: 0.5s">
                    <div class="relative">
                        <div class="bg-gradient-to-r from-cyan-200 to-cyan-400 h-48 flex items-center justify-center">
                            <div class="text-center text-white">
                                <i class="fas fa-couch text-4xl mb-2"></i>
                                <h3 class="text-xl font-bold">Home Living</h3>
                            </div>
                        </div>
                        <span class="absolute top-4 right-4 bg-blue-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                            Gratis Ongkir
                        </span>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">Perabotan rumah dengan gratis ongkir</p>
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <p class="text-2xl font-bold text-indigo-600">Rp 250.000</p>
                                <p class="text-sm text-blue-600">Hemat Rp 15.000</p>
                            </div>
                            <div class="text-sm text-gray-500">
                                <i class="fas fa-clock mr-1"></i>
                                4 hari lagi
                            </div>
                        </div>
                        <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-2 rounded-lg transition-colors">
                            <i class="fas fa-shopping-cart mr-2"></i> Beli Sekarang
                        </button>
                    </div>
                </div>

                <!-- Promo Card 6 -->
                <div class="promo-card bg-white rounded-xl shadow-lg overflow-hidden slide-in" style="animation-delay: 0.6s">
                    <div class="relative">
                        <div class="bg-gradient-to-r from-blue-100 to-blue-300 h-48 flex items-center justify-center">
                            <div class="text-center text-white">
                                <i class="fas fa-gamepad text-4xl mb-2"></i>
                                <h3 class="text-xl font-bold">Gaming Zone</h3>
                            </div>
                        </div>
                        <span class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                            -60%
                        </span>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">Aksesoris gaming dengan diskon besar</p>
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <p class="text-2xl font-bold text-indigo-600">Rp 120.000</p>
                                <p class="text-sm text-gray-500 line-through">Rp 300.000</p>
                            </div>
                            <div class="text-sm text-gray-500">
                                <i class="fas fa-clock mr-1"></i>
                                6 hari lagi
                            </div>
                        </div>
                        <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-2 rounded-lg transition-colors">
                            <i class="fas fa-shopping-cart mr-2"></i> Beli Sekarang
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-blue-400 to-blue-600 rounded-2xl p-8 text-center text-white">
                <h2 class="text-3xl font-bold mb-4">Jangan Lewatkan Promo!</h2>
                <p class="text-lg mb-6 opacity-90">Dapatkan informasi promo terbaru langsung di inbox Anda</p>
                <div class="max-w-md mx-auto flex gap-2">
                    <input type="email" 
                           placeholder="Masukkan email Anda" 
                           class="flex-1 px-4 py-3 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-white">
                    <button class="bg-white text-indigo-600 px-6 py-3 rounded-lg font-medium hover:bg-gray-100 transition-colors">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gradient-to-br from-blue-800 via-blue-900 to-indigo-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <img class="h-8 w-auto mr-2" src="{{ asset('images/asset/logo.png') }}" alt="ADR Catalogue">
                        <span class="text-xl font-bold">ADR Catalogue</span>
                    </div>
                    <p class="text-gray-400">Temukan produk terbaik dengan harga terjangkau</p>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Menu</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="text-blue-200 hover:text-white transition-colors">Beranda</a></li>
                        <li><a href="{{ route('promo') }}" class="text-blue-200 hover:text-white transition-colors">Promo</a></li>
                        <li><a href="{{ route('kategori') }}" class="text-blue-200 hover:text-white transition-colors">Kategori</a></li>
                        <li><a href="{{ route('rekomendasi') }}" class="text-blue-200 hover:text-white transition-colors">Rekomendasi</a></li>
                        <li><a href="{{ route('profile') }}" class="text-blue-200 hover:text-white transition-colors">Profil</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Bantuan</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('faq') }}" class="text-blue-200 hover:text-white transition-colors">FAQ</a></li>
                        <li><a href="{{ route('pengiriman') }}" class="text-blue-200 hover:text-white transition-colors">Pengiriman</a></li>
                        <li><a href="{{ route('pengembalian') }}" class="text-blue-200 hover:text-white transition-colors">Pengembalian</a></li>
                        <li><a href="{{ route('kontak') }}" class="text-blue-200 hover:text-white transition-colors">Kontak</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Ikuti Kami</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-blue-200 hover:text-white transition-colors">
                            <i class="fab fa-facebook-f text-xl"></i>
                        </a>
                        <a href="#" class="text-blue-200 hover:text-white transition-colors">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-blue-200 hover:text-white transition-colors">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-blue-200 hover:text-white transition-colors">
                            <i class="fab fa-youtube text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-blue-700 mt-8 pt-8 text-center text-blue-200">
                <p>&copy; 2024 ADR Catalogue. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        }
        
        function filterPromos(type) {
            const buttons = document.querySelectorAll('.filter-btn');
            buttons.forEach(btn => {
                btn.classList.remove('bg-indigo-600', 'text-white');
                btn.classList.add('bg-gray-200', 'text-gray-700');
            });
            
            event.target.classList.remove('bg-gray-200', 'text-gray-700');
            event.target.classList.add('bg-indigo-600', 'text-white');
            
            // Here you would typically filter promos based on type
            console.log('Filtering promos by:', type);
        }
        
        // Countdown timer simulation
        function updateCountdown() {
            const countdownElements = document.querySelectorAll('.countdown-badge p.font-bold');
            countdownElements.forEach(element => {
                // Simulate countdown (in real app, this would calculate actual remaining time)
                const time = element.textContent;
                const parts = time.split(':');
                let hours = parseInt(parts[0]);
                let minutes = parseInt(parts[1]);
                let seconds = parseInt(parts[2]);
                
                seconds--;
                if (seconds < 0) {
                    seconds = 59;
                    minutes--;
                    if (minutes < 0) {
                        minutes = 59;
                        hours--;
                        if (hours < 0) {
                            hours = 23;
                        }
                    }
                }
                
                element.textContent = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
            });
        }
        
        // Update countdown every second
        setInterval(updateCountdown, 1000);
    </script>
</body>
</html>