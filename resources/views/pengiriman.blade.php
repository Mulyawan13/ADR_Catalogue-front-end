<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengiriman - ADR Catalogue</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .shipping-gradient {
            background: linear-gradient(135deg, #bfdbfe 0%, #93c5fd 25%, #60a5fa 50%, #3b82f6 75%, #2563eb 100%);
        }
        .tracking-step {
            transition: all 0.3s ease;
        }
        .tracking-step:hover {
            transform: scale(1.05);
        }
        .service-card {
            transition: all 0.3s ease;
        }
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(59, 130, 246, 0.15);
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
    <section class="shipping-gradient text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Informasi Pengiriman</h1>
                <p class="text-xl opacity-90 max-w-2xl mx-auto">
                    Kebijakan dan proses pengiriman yang aman dan terpercaya
                </p>
            </div>
        </div>
    </section>

    <!-- Tracking Section -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Lacak Pesanan Anda</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Masukkan nomor resi untuk melacak status pengiriman pesanan Anda
                </p>
            </div>
            
            <div class="max-w-2xl mx-auto mb-12">
                <div class="flex gap-4">
                    <input type="text" 
                           id="trackingNumber"
                           placeholder="Masukkan nomor resi..." 
                           class="flex-1 px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <button onclick="trackOrder()" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg font-medium transition-colors">
                        <i class="fas fa-search mr-2"></i>Lacak
                    </button>
                </div>
            </div>

            <!-- Tracking Result -->
            <div id="trackingResult" class="hidden">
                <div class="bg-blue-50 border border-blue-200 rounded-xl p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Status Pengiriman</h3>
                    <div class="space-y-4">
                        <div class="tracking-step flex items-start space-x-4">
                            <div class="flex-shrink-0 w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-check text-white text-sm"></i>
                            </div>
                            <div>
                                <p class="font-medium text-gray-900">Pesanan Dikonfirmasi</p>
                                <p class="text-sm text-gray-600">28 Nov 2024, 14:30 WIB</p>
                            </div>
                        </div>
                        
                        <div class="tracking-step flex items-start space-x-4">
                            <div class="flex-shrink-0 w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-check text-white text-sm"></i>
                            </div>
                            <div>
                                <p class="font-medium text-gray-900">Sedang Diproses</p>
                                <p class="text-sm text-gray-600">28 Nov 2024, 16:45 WIB</p>
                            </div>
                        </div>
                        
                        <div class="tracking-step flex items-start space-x-4">
                            <div class="flex-shrink-0 w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-truck text-white text-sm"></i>
                            </div>
                            <div>
                                <p class="font-medium text-gray-900">Dalam Pengiriman</p>
                                <p class="text-sm text-gray-600">29 Nov 2024, 09:00 WIB</p>
                            </div>
                        </div>
                        
                        <div class="tracking-step flex items-start space-x-4">
                            <div class="flex-shrink-0 w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center">
                                <i class="fas fa-home text-white text-sm"></i>
                            </div>
                            <div>
                                <p class="font-medium text-gray-400">Terkirim</p>
                                <p class="text-sm text-gray-400">Estimasi: 30 Nov 2024</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shipping Options -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Opsi Pengiriman</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Pilih metode pengiriman yang sesuai dengan kebutuhan Anda
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Regular Shipping -->
                <div class="service-card bg-white rounded-xl shadow-lg p-6">
                    <div class="text-center mb-4">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-100 rounded-full mb-4">
                            <i class="fas fa-truck text-2xl text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Reguler</h3>
                        <p class="text-gray-600 mb-4">Pengiriman standar dengan biaya terjangkau</p>
                    </div>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            2-7 hari kerja
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            Tracking tersedia
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            Asuransi sampai Rp 1.000.000
                        </li>
                    </ul>
                    <div class="text-center">
                        <p class="text-2xl font-bold text-blue-600">Rp 15.000</p>
                        <p class="text-sm text-gray-500">Berat maksimal 5kg</p>
                    </div>
                </div>

                <!-- Express Shipping -->
                <div class="service-card bg-white rounded-xl shadow-lg p-6 border-2 border-blue-500">
                    <div class="text-center mb-4">
                        <div class="relative">
                            <div class="inline-flex items-center justify-center w-16 h-16 bg-green-100 rounded-full mb-4">
                                <i class="fas fa-rocket text-2xl text-green-600"></i>
                            </div>
                            <span class="absolute -top-2 -right-2 bg-red-500 text-white px-2 py-1 rounded-full text-xs font-medium">POPULER</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Express</h3>
                        <p class="text-gray-600 mb-4">Pengiriman cepat untuk kebutuhan mendesak</p>
                    </div>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            1-3 hari kerja
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            Tracking real-time
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            Asuransi penuh
                        </li>
                    </ul>
                    <div class="text-center">
                        <p class="text-2xl font-bold text-green-600">Rp 35.000</p>
                        <p class="text-sm text-gray-500">Berat maksimal 10kg</p>
                    </div>
                </div>

                <!-- Same Day Shipping -->
                <div class="service-card bg-white rounded-xl shadow-lg p-6">
                    <div class="text-center mb-4">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-purple-100 rounded-full mb-4">
                            <i class="fas fa-bolt text-2xl text-purple-600"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Same Day</h3>
                        <p class="text-gray-600 mb-4">Pengiriman di hari yang sama</p>
                    </div>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            Same day delivery
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            Prioritas tinggi
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            Asuransi premium
                        </li>
                    </ul>
                    <div class="text-center">
                        <p class="text-2xl font-bold text-purple-600">Rp 50.000</p>
                        <p class="text-sm text-gray-500">Berat maksimal 3kg</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shipping Areas -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Area Pengiriman</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Kami melayani pengiriman ke seluruh Indonesia
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-gray-50 rounded-lg p-4">
                    <h3 class="font-semibold text-gray-900 mb-3">Jawa</h3>
                    <ul class="space-y-1 text-sm text-gray-600">
                        <li>DKI Jakarta: 1-3 hari</li>
                        <li>Jawa Barat: 2-4 hari</li>
                        <li>Jawa Tengah: 2-4 hari</li>
                        <li>Jawa Timur: 3-5 hari</li>
                        <li>Yogyakarta: 2-3 hari</li>
                    </ul>
                </div>
                
                <div class="bg-gray-50 rounded-lg p-4">
                    <h3 class="font-semibold text-gray-900 mb-3">Sumatera</h3>
                    <ul class="space-y-1 text-sm text-gray-600">
                        <li>Sumatera Utara: 3-5 hari</li>
                        <li>Sumatera Barat: 3-5 hari</li>
                        <li>Sumatera Selatan: 4-6 hari</li>
                        <li>Riau: 3-5 hari</li>
                        <li>Kepulauan Riau: 5-7 hari</li>
                    </ul>
                </div>
                
                <div class="bg-gray-50 rounded-lg p-4">
                    <h3 class="font-semibold text-gray-900 mb-3">Kalimantan & Sulawesi</h3>
                    <ul class="space-y-1 text-sm text-gray-600">
                        <li>Kalimantan Timur: 4-6 hari</li>
                        <li>Kalimantan Selatan: 4-6 hari</li>
                        <li>Sulawesi Selatan: 4-6 hari</li>
                        <li>Sulawesi Utara: 5-7 hari</li>
                        <li>Gorontalo: 5-7 hari</li>
                    </ul>
                </div>
                
                <div class="bg-gray-50 rounded-lg p-4">
                    <h3 class="font-semibold text-gray-900 mb-3">Bali, NTT & Papua</h3>
                    <ul class="space-y-1 text-sm text-gray-600">
                        <li>Bali: 3-5 hari</li>
                        <li>Nusa Tenggara: 4-6 hari</li>
                        <li>Maluku: 5-7 hari</li>
                        <li>Papua: 5-7 hari</li>
                        <li>Papua Barat: 6-8 hari</li>
                    </ul>
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
                    <p class="text-blue-200">Temukan produk terbaik dengan harga terjangkau</p>
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
        
        function trackOrder() {
            const trackingNumber = document.getElementById('trackingNumber').value;
            const trackingResult = document.getElementById('trackingResult');
            
            if (trackingNumber.trim() === '') {
                alert('Silakan masukkan nomor resi');
                return;
            }
            
            // Show tracking result (simulation)
            trackingResult.classList.remove('hidden');
            
            // Scroll to tracking result
            trackingResult.scrollIntoView({ behavior: 'smooth' });
            
            // In real app, this would make an API call to tracking service
            console.log('Tracking order:', trackingNumber);
        }
        
        // Allow Enter key to trigger tracking
        document.getElementById('trackingNumber').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                trackOrder();
            }
        });
    </script>
</body>
</html>