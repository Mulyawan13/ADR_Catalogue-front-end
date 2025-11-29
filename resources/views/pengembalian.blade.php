<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengembalian - ADR Catalogue</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .return-gradient {
            background: linear-gradient(135deg, #bfdbfe 0%, #93c5fd 25%, #60a5fa 50%, #3b82f6 75%, #2563eb 100%);
        }
        .step-card {
            transition: all 0.3s ease;
        }
        .step-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(59, 130, 246, 0.15);
        }
        .file-upload {
            transition: all 0.3s ease;
        }
        .file-upload:hover {
            border-color: #3b82f6;
            background-color: #f0f9ff;
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
    <section class="return-gradient text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Kebijakan Pengembalian</h1>
                <p class="text-xl opacity-90 max-w-2xl mx-auto">
                    Proses pengembalian produk yang mudah dan transparan
                </p>
            </div>
        </div>
    </section>

    <!-- Return Policy -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
                <!-- Eligibility -->
                <div class="step-card bg-white rounded-xl shadow-lg p-6">
                    <div class="text-center mb-4">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-green-100 rounded-full mb-4">
                            <i class="fas fa-check-circle text-2xl text-green-600"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Kelayakan</h3>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                            <span class="text-gray-600">Produk diterima dalam 7 hari sejak tanggal pembelian</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                            <span class="text-gray-600">Produk dalam kondisi asli, tidak rusak, dan lengkap</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                            <span class="text-gray-600">Label harga dan barcode masih terpasang dengan baik</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                            <span class="text-gray-600">Bukti pembelian asli (invoice, struk, atau email konfirmasi)</span>
                        </li>
                    </ul>
                </div>

                <!-- Process -->
                <div class="step-card bg-white rounded-xl shadow-lg p-6">
                    <div class="text-center mb-4">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-100 rounded-full mb-4">
                            <i class="fas fa-cogs text-2xl text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Proses</h3>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold mr-3">1</div>
                            <div>
                                <p class="font-medium text-gray-900">Ajukan Pengembalian</p>
                                <p class="text-sm text-gray-600">Hubungi CS melalui email atau live chat</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold mr-3">2</div>
                            <div>
                                <p class="font-medium text-gray-900">Verifikasi Produk</p>
                                <p class="text-sm text-gray-600">Tim kami akan memeriksa kondisi produk</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold mr-3">3</div>
                            <div>
                                <p class="font-medium text-gray-900">Proses Refund</p>
                                <p class="text-sm text-gray-600">Dana dikembalikan dalam 3-5 hari kerja</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Exclusions -->
                <div class="step-card bg-white rounded-xl shadow-lg p-6">
                    <div class="text-center mb-4">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-red-100 rounded-full mb-4">
                            <i class="fas fa-times-circle text-2xl text-red-600"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Pengecualian</h3>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-times text-red-500 mr-3 mt-1"></i>
                            <span class="text-gray-600">Produk yang sudah melewati batas waktu 7 hari</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-times text-red-500 mr-3 mt-1"></i>
                            <span class="text-gray-600">Produk rusak karena kesalahan pengguna</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-times text-red-500 mr-3 mt-1"></i>
                            <span class="text-gray-600">Produk intim, pakaian dalam, atau produk higienis</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-times text-red-500 mr-3 mt-1"></i>
                            <span class="text-gray-600">Produk digital (software, game, dll)</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Return Form -->
    <section class="py-12 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Formulir Pengembalian</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Isi formulir berikut untuk mengajukan pengembalian produk
                </p>
            </div>

            <form onsubmit="submitReturn(event)" class="max-w-2xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Nomor Pesanan *</label>
                        <input type="text" 
                               required
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                               placeholder="Masukkan nomor pesanan">
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
                    <label class="block text-sm font-medium text-gray-700 mb-2">Alasan Pengembalian *</label>
                    <select required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="">Pilih alasan</option>
                        <option value="wrong-product">Produk tidak sesuai</option>
                        <option value="defective">Produk cacat/rusak</option>
                        <option value="not-as-described">Tidak sesuai deskripsi</option>
                        <option value="change-mind">Berubah pikiran</option>
                        <option value="other">Lainnya</option>
                    </select>
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Detail Alasan *</label>
                    <textarea required
                              rows="4"
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                              placeholder="Jelaskan secara detail alasan pengembalian..."></textarea>
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Upload Buk Foto Produk *</label>
                    <div class="file-upload border-2 border-dashed border-gray-300 rounded-lg p-6 text-center cursor-pointer"
                         onclick="document.getElementById('fileInput').click()">
                        <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-4"></i>
                        <p class="text-gray-600 mb-2">Klik untuk upload atau drag and drop</p>
                        <p class="text-sm text-gray-500">Maksimal 5 file, format JPG/PNG, maksimal 10MB per file</p>
                        <input type="file" id="fileInput" multiple accept="image/*" class="hidden" onchange="handleFileSelect(event)">
                    </div>
                    <div id="fileList" class="mt-4 space-y-2"></div>
                </div>

                <div class="mb-6">
                    <label class="flex items-center">
                        <input type="checkbox" required class="mr-2">
                        <span class="text-sm text-gray-700">Saya menyetujui <a href="#" class="text-blue-600 hover:underline">kebijakan pengembalian</a> dan telah membaca syarat & ketentuan yang berlaku</span>
                    </label>
                </div>

                <div class="text-center">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-medium transition-colors">
                        <i class="fas fa-paper-plane mr-2"></i>Ajukan Pengembalian
                    </button>
                </div>
            </form>
        </div>
    </section>

    <!-- Contact Info -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-blue-50 rounded-xl p-8">
                <div class="text-center mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Butuh Bantuan?</h2>
                    <p class="text-gray-600">Tim customer service kami siap membantu proses pengembalian Anda</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="text-center">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-white rounded-full mb-4">
                            <i class="fas fa-envelope text-2xl text-blue-600"></i>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2">Email Support</h3>
                        <p class="text-gray-600 mb-2">support@adrcatalogue.com</p>
                        <p class="text-sm text-gray-500">Respons dalam 24 jam</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-white rounded-full mb-4">
                            <i class="fas fa-phone text-2xl text-green-600"></i>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2">Call Center</h3>
                        <p class="text-gray-600 mb-2">+62 21 1234 5678</p>
                        <p class="text-sm text-gray-500">Senin - Sabtu, 08:00 - 20:00</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-white rounded-full mb-4">
                            <i class="fas fa-comments text-2xl text-purple-600"></i>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2">Live Chat</h3>
                        <p class="text-gray-600 mb-2">Chat langsung dengan tim kami</p>
                        <p class="text-sm text-gray-500">Tersedia 24/7</p>
                    </div>
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
        
        function handleFileSelect(event) {
            const files = event.target.files;
            const fileList = document.getElementById('fileList');
            fileList.innerHTML = '';
            
            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                const fileItem = document.createElement('div');
                fileItem.className = 'flex items-center justify-between bg-gray-50 p-3 rounded-lg';
                fileItem.innerHTML = `
                    <div class="flex items-center">
                        <i class="fas fa-image text-blue-600 mr-3"></i>
                        <span class="text-sm text-gray-700">${file.name}</span>
                        <span class="text-xs text-gray-500 ml-2">(${(file.size / 1024 / 1024).toFixed(2)} MB)</span>
                    </div>
                    <button type="button" onclick="removeFile(this)" class="text-red-500 hover:text-red-700">
                        <i class="fas fa-times"></i>
                    </button>
                `;
                fileList.appendChild(fileItem);
            }
        }
        
        function removeFile(button) {
            button.parentElement.remove();
        }
        
        function submitReturn(event) {
            event.preventDefault();
            
            // Get form data
            const formData = new FormData(event.target);
            
            // Validate form
            const fileInput = document.getElementById('fileInput');
            if (fileInput.files.length === 0) {
                alert('Silakan upload minimal 1 foto produk');
                return;
            }
            
            // Show success message (simulation)
            alert('Pengajuan pengembalian berhasil! Kami akan menghubungi Anda dalam 1x24 jam untuk proses verifikasi.');
            
            // Reset form
            event.target.reset();
            document.getElementById('fileList').innerHTML = '';
            
            // In real app, this would send data to server
            console.log('Return form submitted');
        }
    </script>
</body>
</html>