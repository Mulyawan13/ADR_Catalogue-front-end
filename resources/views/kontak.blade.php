<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - ADR Catalogue</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .contact-gradient {
            background: linear-gradient(135deg, #bfdbfe 0%, #93c5fd 25%, #60a5fa 50%, #3b82f6 75%, #2563eb 100%);
        }
        .contact-card {
            transition: all 0.3s ease;
        }
        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(59, 130, 246, 0.15);
        }
        .map-container {
            background: linear-gradient(135deg, #e0f2fe 0%, #bae6fd 50%, #7dd3fc 100%);
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
    <section class="contact-gradient text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Hubungi Kami</h1>
                <p class="text-xl opacity-90 max-w-2xl mx-auto">
                    Kami siap membantu menjawab pertanyaan dan menangani keluhan Anda
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Info & Form -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Information -->
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-8">Informasi Kontak</h2>
                    
                    <div class="space-y-6">
                        <!-- Address -->
                        <div class="contact-card bg-white rounded-xl shadow-lg p-6">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-map-marker-alt text-blue-600 text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Alamat</h3>
                                    <p class="text-gray-600">Jl. Contoh No. 123</p>
                                    <p class="text-gray-600">Jakarta Selatan, DKI Jakarta</p>
                                    <p class="text-gray-600">Indonesia 12345</p>
                                </div>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="contact-card bg-white rounded-xl shadow-lg p-6">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-phone text-green-600 text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Telepon</h3>
                                    <p class="text-gray-600 mb-1">+62 21 1234 5678</p>
                                    <p class="text-gray-600">+62 812 3456 7890 (WhatsApp)</p>
                                    <p class="text-sm text-gray-500">Senin - Sabtu, 08:00 - 20:00 WIB</p>
                                </div>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="contact-card bg-white rounded-xl shadow-lg p-6">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-envelope text-purple-600 text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Email</h3>
                                    <p class="text-gray-600 mb-1">info@adrcatalogue.com</p>
                                    <p class="text-gray-600">support@adrcatalogue.com</p>
                                    <p class="text-sm text-gray-500">Respons dalam 24 jam</p>
                                </div>
                            </div>
                        </div>

                        <!-- Social Media -->
                        <div class="contact-card bg-white rounded-xl shadow-lg p-6">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-share-alt text-orange-600 text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Media Sosial</h3>
                                    <div class="flex space-x-3">
                                        <a href="#" class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white hover:bg-blue-700 transition-colors">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#" class="w-10 h-10 bg-pink-600 rounded-full flex items-center justify-center text-white hover:bg-pink-700 transition-colors">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                        <a href="#" class="w-10 h-10 bg-sky-500 rounded-full flex items-center justify-center text-white hover:bg-sky-600 transition-colors">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#" class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center text-white hover:bg-red-700 transition-colors">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-8">Kirim Pesan</h2>
                    
                    <form onsubmit="submitContact(event)" class="bg-white rounded-xl shadow-lg p-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap *</label>
                                <input type="text" 
                                       required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                       placeholder="John Doe">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
                                <input type="email" 
                                       required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                       placeholder="email@example.com">
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Subjek *</label>
                            <select required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="">Pilih subjek</option>
                                <option value="general">Pertanyaan Umum</option>
                                <option value="order">Tentang Pesanan</option>
                                <option value="return">Pengembalian Produk</option>
                                <option value="payment">Masalah Pembayaran</option>
                                <option value="technical">Bantuan Teknis</option>
                                <option value="partnership">Kerjasama</option>
                                <option value="complaint">Keluhan</option>
                                <option value="suggestion">Saran</option>
                            </select>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Pesan *</label>
                            <textarea required
                                      rows="5"
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                      placeholder="Tuliskan pesan Anda..."></textarea>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nomor Pesanan (Opsional)</label>
                            <input type="text" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                   placeholder="ORD-123456">
                        </div>

                        <div class="mb-6">
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2">
                                <span class="text-sm text-gray-700">Saya ingin menerima newsletter dan promo terbaru</span>
                            </label>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-medium transition-colors">
                                <i class="fas fa-paper-plane mr-2"></i>Kirim Pesan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Temukan Lokasi Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Kunjungi kantor kami untuk pengalaman belanja yang lebih baik
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="map-container rounded-xl p-8 text-center">
                    <i class="fas fa-map-marked-alt text-6xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Kantor Pusat</h3>
                    <p class="text-gray-600 mb-4">Jakarta Selatan</p>
                    <button onclick="openMap('jakarta')" class="bg-white text-blue-600 px-6 py-2 rounded-lg font-medium hover:bg-gray-100 transition-colors">
                        <i class="fas fa-directions mr-2"></i>Dapatkan Arah
                    </button>
                </div>
                
                <div class="map-container rounded-xl p-8 text-center">
                    <i class="fas fa-store text-6xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Toko Fisik</h3>
                    <p class="text-gray-600 mb-4">5 Lokasi di Jakarta</p>
                    <button onclick="showStoreLocations()" class="bg-white text-blue-600 px-6 py-2 rounded-lg font-medium hover:bg-gray-100 transition-colors">
                        <i class="fas fa-list mr-2"></i>Lihat Semua Lokasi
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-blue-50 rounded-xl p-8">
                <div class="text-center mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Pertanyaan Umum</h2>
                    <p class="text-gray-600">Cari jawaban cepat untuk pertanyaan yang sering diajukan</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white rounded-lg p-4">
                        <h3 class="font-semibold text-gray-900 mb-2">Berapa jam operasional?</h3>
                        <p class="text-gray-600 text-sm">Senin - Sabtu: 08:00 - 20:00 WIB</p>
                    </div>
                    <div class="bg-white rounded-lg p-4">
                        <h3 class="font-semibold text-gray-900 mb-2">Apakah ada biaya konsultasi?</h3>
                        <p class="text-gray-600 text-sm">Tidak, konsultasi produk gratis</p>
                    </div>
                    <div class="bg-white rounded-lg p-4">
                        <h3 class="font-semibold text-gray-900 mb-2">Bagaimana cara tracking pesanan?</h3>
                        <p class="text-gray-600 text-sm">Gunakan nomor resi yang dikirim via email</p>
                    </div>
                    <div class="bg-white rounded-lg p-4">
                        <h3 class="font-semibold text-gray-900 mb-2">Apakah ada garansi produk?</h3>
                        <p class="text-gray-600 text-sm">Ya, garansi resmi dari produsen</p>
                    </div>
                </div>
                
                <div class="text-center mt-6">
                    <a href="{{ route('faq') }}" class="text-blue-600 hover:text-blue-800 font-medium">
                        Lihat semua FAQ <i class="fas fa-arrow-right ml-1"></i>
                    </a>
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
        
        function submitContact(event) {
            event.preventDefault();
            
            // Get form data
            const formData = new FormData(event.target);
            
            // Show success message (simulation)
            alert('Pesan Anda telah terkirim! Kami akan menghubungi Anda dalam 1x24 jam.');
            
            // Reset form
            event.target.reset();
            
            // In real app, this would send data to server
            console.log('Contact form submitted');
        }
        
        function openMap(location) {
            // In real app, this would open Google Maps or similar
            alert('Map akan segera tersedia. Silakan gunakan aplikasi maps untuk menemukan lokasi kami.');
        }
        
        function showStoreLocations() {
            // In real app, this would show store locations
            alert('Halaman lokasi toko akan segera tersedia.');
        }
    </script>
</body>
</html>