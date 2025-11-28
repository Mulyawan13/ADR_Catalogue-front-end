<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Perusahaan - ADR Catalogue</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .profile-gradient {
            background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 50%, #2563eb 100%);
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        .slide-in {
            animation: slideIn 0.5s ease-out;
        }
        @keyframes slideIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .timeline-item {
            transition: all 0.3s ease;
        }
        .timeline-item:hover {
            transform: scale(1.02);
        }
        .stat-card {
            transition: all 0.3s ease;
        }
        .stat-card:hover {
            transform: translateY(-2px) scale(1.02);
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
                            <a href="{{ route('promo') }}" class="text-gray-700 hover:text-indigo-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">
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
                    <a href="{{ route('profile') }}" class="text-indigo-600 hover:text-indigo-800 px-3 py-2 rounded-md text-sm font-medium transition-colors">
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
                <a href="{{ route('profile') }}" class="text-indigo-600 block px-3 py-2 rounded-md text-base font-medium">
                    <i class="fas fa-building mr-1"></i> Profil
                </a>
                <a href="{{ route('login') }}" class="text-gray-700 hover:text-indigo-600 block px-3 py-2 rounded-md text-base font-medium">
                    <i class="fas fa-user mr-1"></i> Masuk
                </a>
            </div>
        </div>
    </nav>

    <!-- Header Section -->
    <section class="profile-gradient text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center slide-in">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Profil Perusahaan</h1>
                <p class="text-xl opacity-90 max-w-2xl mx-auto">
                    Mengenal lebih dekat dengan ADR Catalogue
                </p>
            </div>
        </div>
    </section>

    <!-- Company Overview Section -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Company Info -->
                <div class="slide-in" style="animation-delay: 0.1s">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Tentang Kami</h2>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-building text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-1">ADR Catalogue</h3>
                                <p class="text-gray-600">Platform e-commerce terpercaya yang menyediakan berbagai produk berkualitas dengan harga terjangkau.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-bullseye text-green-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-1">Misi Kami</h3>
                                <p class="text-gray-600">Menjadi platform pilihan utama untuk kebutuhan belanja sehari-hari dengan memberikan pengalaman terbaik.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-eye text-purple-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-1">Visi Kami</h3>
                                <p class="text-gray-600">Menghubungkan pelanggan dengan produk terbaik melalui teknologi yang inovatif.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Company Image -->
                <div class="slide-in" style="animation-delay: 0.2s">
                    <div class="relative">
                        <div class="bg-gradient-to-br from-blue-100 to-blue-200 rounded-2xl p-8 text-center">
                            <div class="w-32 h-32 mx-auto bg-white rounded-full flex items-center justify-center shadow-lg mb-6">
                                <img src="{{ asset('images/asset/logo.png') }}" alt="ADR Catalogue" class="w-24 h-24 object-contain">
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">ADR Catalogue</h3>
                            <p class="text-gray-600 mb-4">Your Trusted Shopping Partner</p>
                            <div class="flex justify-center space-x-4">
                                <div class="text-center">
                                    <p class="text-3xl font-bold text-blue-600">1000+</p>
                                    <p class="text-sm text-gray-600">Produk</p>
                                </div>
                                <div class="text-center">
                                    <p class="text-3xl font-bold text-green-600">50K+</p>
                                    <p class="text-sm text-gray-600">Pelanggan</p>
                                </div>
                                <div class="text-center">
                                    <p class="text-3xl font-bold text-purple-600">4.8</p>
                                    <p class="text-sm text-gray-600">Rating</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Pencapaian Kami</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Angka-angka yang menunjukkan kepercayaan pelanggan kepada kami
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="stat-card bg-white rounded-xl shadow-lg p-6 text-center slide-in" style="animation-delay: 0.3s">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-100 rounded-full mb-4">
                        <i class="fas fa-box text-2xl text-blue-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">1,000+</h3>
                    <p class="text-gray-600">Produk Tersedia</p>
                </div>
                
                <div class="stat-card bg-white rounded-xl shadow-lg p-6 text-center slide-in" style="animation-delay: 0.4s">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-green-100 rounded-full mb-4">
                        <i class="fas fa-users text-2xl text-green-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">50,000+</h3>
                    <p class="text-gray-600">Pelanggan Puas</p>
                </div>
                
                <div class="stat-card bg-white rounded-xl shadow-lg p-6 text-center slide-in" style="animation-delay: 0.5s">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-purple-100 rounded-full mb-4">
                        <i class="fas fa-tags text-2xl text-purple-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">100+</h3>
                    <p class="text-gray-600">Promo Aktif</p>
                </div>
                
                <div class="stat-card bg-white rounded-xl shadow-lg p-6 text-center slide-in" style="animation-delay: 0.6s">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-yellow-100 rounded-full mb-4">
                        <i class="fas fa-star text-2xl text-yellow-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">4.8/5</h3>
                    <p class="text-gray-600">Rating Pelanggan</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Perjalanan Kami</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Milestone penting dalam sejarah ADR Catalogue
                </p>
            </div>
            
            <div class="relative">
                <!-- Timeline Line -->
                <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-blue-200"></div>
                
                <!-- Timeline Items -->
                <div class="space-y-12">
                    <div class="timeline-item relative flex items-center slide-in" style="animation-delay: 0.7s">
                        <div class="flex-shrink-0 w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center z-10">
                            <i class="fas fa-flag text-white"></i>
                        </div>
                        <div class="ml-8">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">2020 - Awal Perjalanan</h3>
                            <p class="text-gray-600">ADR Catalogue didirikan dengan visi menjadi platform e-commerce terpercaya.</p>
                        </div>
                    </div>
                    
                    <div class="timeline-item relative flex items-center slide-in" style="animation-delay: 0.8s">
                        <div class="flex-shrink-0 w-12 h-12 bg-green-500 rounded-full flex items-center justify-center z-10">
                            <i class="fas fa-rocket text-white"></i>
                        </div>
                        <div class="ml-8">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">2021 - Ekspansi Cepat</h3>
                            <p class="text-gray-600">Mencapai 10,000 pelanggan dan menambah 500+ produk baru.</p>
                        </div>
                    </div>
                    
                    <div class="timeline-item relative flex items-center slide-in" style="animation-delay: 0.9s">
                        <div class="flex-shrink-0 w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center z-10">
                            <i class="fas fa-award text-white"></i>
                        </div>
                        <div class="ml-8">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">2023 - Penghargaan</h3>
                            <p class="text-gray-600">Menerima penghargaan sebagai platform e-commerce terbaik di kategori.</p>
                        </div>
                    </div>
                    
                    <div class="timeline-item relative flex items-center slide-in" style="animation-delay: 1.0s">
                        <div class="flex-shrink-0 w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center z-10">
                            <i class="fas fa-star text-white"></i>
                        </div>
                        <div class="ml-8">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">2024 - Inovasi Berkelanjutan</h3>
                            <p class="text-gray-600">Meluncurkan fitur baru dan meningkatkan pengalaman pengguna.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Tim Kami</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Orang-orang hebat di balik kesuksesan ADR Catalogue
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="card-hover bg-white rounded-xl shadow-lg overflow-hidden text-center slide-in" style="animation-delay: 1.1s">
                    <div class="p-6">
                        <div class="w-24 h-24 mx-auto bg-gray-200 rounded-full mb-4 flex items-center justify-center">
                            <i class="fas fa-user text-gray-400 text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">John Doe</h3>
                        <p class="text-gray-600 mb-4">CEO & Founder</p>
                        <div class="flex justify-center space-x-3">
                            <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors">
                                <i class="fab fa-linkedin text-xl"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors">
                                <i class="fab fa-twitter text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="card-hover bg-white rounded-xl shadow-lg overflow-hidden text-center slide-in" style="animation-delay: 1.2s">
                    <div class="p-6">
                        <div class="w-24 h-24 mx-auto bg-gray-200 rounded-full mb-4 flex items-center justify-center">
                            <i class="fas fa-user text-gray-400 text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Jane Smith</h3>
                        <p class="text-gray-600 mb-4">CTO & Co-Founder</p>
                        <div class="flex justify-center space-x-3">
                            <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors">
                                <i class="fab fa-linkedin text-xl"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors">
                                <i class="fab fa-twitter text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="card-hover bg-white rounded-xl shadow-lg overflow-hidden text-center slide-in" style="animation-delay: 1.3s">
                    <div class="p-6">
                        <div class="w-24 h-24 mx-auto bg-gray-200 rounded-full mb-4 flex items-center justify-center">
                            <i class="fas fa-user text-gray-400 text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Bob Johnson</h3>
                        <p class="text-gray-600 mb-4">Head of Marketing</p>
                        <div class="flex justify-center space-x-3">
                            <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors">
                                <i class="fab fa-linkedin text-xl"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors">
                                <i class="fab fa-twitter text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="card-hover bg-white rounded-xl shadow-lg overflow-hidden text-center slide-in" style="animation-delay: 1.4s">
                    <div class="p-6">
                        <div class="w-24 h-24 mx-auto bg-gray-200 rounded-full mb-4 flex items-center justify-center">
                            <i class="fas fa-user text-gray-400 text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Alice Brown</h3>
                        <p class="text-gray-600 mb-4">Head of Operations</p>
                        <div class="flex justify-center space-x-3">
                            <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors">
                                <i class="fab fa-linkedin text-xl"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors">
                                <i class="fab fa-twitter text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Hubungi Kami</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Kami siap membantu Anda dengan pertanyaan dan kebutuhan
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center slide-in" style="animation-delay: 1.5s">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-100 rounded-full mb-4">
                        <i class="fas fa-map-marker-alt text-2xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Alamat</h3>
                    <p class="text-gray-600">Jl. Contoh No. 123<br>Jakarta, Indonesia 12345</p>
                </div>
                
                <div class="text-center slide-in" style="animation-delay: 1.6s">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-green-100 rounded-full mb-4">
                        <i class="fas fa-phone text-2xl text-green-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Telepon</h3>
                    <p class="text-gray-600">+62 21 1234 5678<br>+62 812 3456 7890</p>
                </div>
                
                <div class="text-center slide-in" style="animation-delay: 1.7s">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-purple-100 rounded-full mb-4">
                        <i class="fas fa-envelope text-2xl text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Email</h3>
                    <p class="text-gray-600">info@adrcatalogue.com<br>support@adrcatalogue.com</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
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
                        <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition-colors">Beranda</a></li>
                        <li><a href="{{ route('promo') }}" class="text-gray-400 hover:text-white transition-colors">Promo</a></li>
                        <li><a href="{{ route('kategori') }}" class="text-gray-400 hover:text-white transition-colors">Kategori</a></li>
                        <li><a href="{{ route('rekomendasi') }}" class="text-gray-400 hover:text-white transition-colors">Rekomendasi</a></li>
                        <li><a href="{{ route('profile') }}" class="text-gray-400 hover:text-white transition-colors">Profil</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Bantuan</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">FAQ</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Pengiriman</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Pengembalian</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Kontak</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Ikuti Kami</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-facebook-f text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-youtube text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 ADR Catalogue. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        }
    </script>
</body>
</html>