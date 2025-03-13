<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Tk Pertiwi Grojogan</title>
</head>
<body class="bg-gray-100 pt-16">

    <nav class="bg-white drop-shadow-md fixed top-0 left-0 w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                
                <!-- Logo -->
                <div class="flex items-center">
                    <img class="h-8 w-auto" src="/img/logo tutwuri.png" alt="Logo">
                    <span class="ml-4 text-lg font-bold text-[#229799]">TK Pertiwi Grojogan</span>
                </div>

                <!-- Menu (Hidden on Mobile) -->
                <div class="hidden md:flex space-x-8">
                    <a href="#hero" class="text-gray-900 font-medium relative group">
                        Beranda
                        <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-[#229799] transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#sekilas" class="text-gray-500 hover:text-gray-900 font-medium relative group">
                        Sekilas
                        <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-[#229799] transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 font-medium relative group">
                        Visi-Misi
                        <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-[#229799] transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 font-medium relative group">
                        Artikel
                        <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-[#229799] transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 font-medium relative group">
                        Guru & Staff
                        <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-[#229799] transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 font-medium relative group">
                        Pendaftaran
                        <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-[#229799] transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </div>

                <!-- Tombol Masuk (Hidden on Mobile) -->
                <button class="hidden md:block px-4 py-2 bg-[#229799] text-white font-semibold rounded-md hover:bg-[#1b7a72] transition">
                    Masuk
                </button>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="menu-toggle" class="text-gray-500 focus:outline-none">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-16 6h16" />
                        </svg>
                    </button>
                </div>

            </div>

            <!-- Mobile Menu (Hidden by default) -->
            <div id="mobile-menu" class="hidden md:hidden">
                <div class="space-y-2 pb-3">
                    <a href="#" class="block text-gray-900 font-medium px-4 py-2">Beranda</a>
                    <a href="#" class="block text-gray-500 hover:text-gray-900 font-medium px-4 py-2">Sekilas</a>
                    <a href="#" class="block text-gray-500 hover:text-gray-900 font-medium px-4 py-2">Visi-Misi</a>
                    <a href="#" class="block text-gray-500 hover:text-gray-900 font-medium px-4 py-2">Artikel</a>
                    <a href="#" class="block text-gray-500 hover:text-gray-900 font-medium px-4 py-2">Guru & Staff</a>

                    <!-- Tombol Masuk di Mobile -->
                    <div class="px-4 py-2">
                        <button class="w-full px-4 py-2 bg-[#229799] text-white font-semibold rounded-md hover:bg-[#1b7a72] transition">
                            Masuk
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
<section id="hero" class="hero-section bg-white p-6">
    <div class="container mx-auto">
        <!-- Grid untuk Desktop, Flex untuk Mobile -->
        <div class="flex flex-col-reverse items-center text-center lg:grid lg:grid-cols-12 lg:text-left">
            
            <!-- Bagian Teks (di atas pada mobile, kanan pada desktop) -->
            <div class="w-full lg:col-span-8 items-center justify-center lg:justify-start p-4 lg:order-2">
                <h1 class="font-bold text-[45px] sm:text-[40px] md:text-[35px] leading-tight">
                    Selamat Datang Di 
                    <span class="text-[#229799]">Website Resmi</span> TK Pertiwi 
                    Grojogan Kecamatan Brebek Kabupaten Nganjuk
                </h1>
               <p class="text-gray-600 mt-2 text-lg">
           Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti velit dolorum ea blanditiis hic alias 
           minus fugiat iusto, in cum voluptates! Modi quo repudiandae, reiciendis perspiciatis repellendus rem quod dolores.
        </p>
        <button class="mt-4 bg-[#229799] text-white px-6 py-2 rounded-lg shadow-md hover:bg-[#1b7a7b] transition">
            Unduh Sekarang
        </button>
            </div>

            <!-- Bagian Gambar (di bawah pada mobile, kiri pada desktop) -->
            <div class="w-full lg:col-span-4 flex items-center justify-center lg:order-1">
                <img src="img/hero.png" alt="guru" class="w-3/4 md:w-1/2 lg:w-full">
            </div>
        </div>
    </div>
</section>

<!-- sekilas-->
 <section id="sekilas" class="sekilas min-h-screen bg-[#229799]">
    <div class="container mx-auto pt-8 px-4">
        <h1 class="font-bold text-[35px] text-white flex items-center justify-center text-center">PENGENALAN</h1>
        <p class="font-regular text-[20px] text-center text-white flex justify-center px-6 md:px-20">
            TK Pertiwi Grojogan adalah suatu sarana pembelajaran awal anak, yang dimana anak-anak dapat mengembangkan 
            kemampuan di berbagai bidang dan membantu karakter anak yang berakhlak dan berbudi luhur.
        </p>

        <h1 class="font-bold text-[35px] text-white flex items-center justify-center text-center mt-10">TUJUAN</h1>
        <p class="font-regular text-[20px] text-center text-white flex justify-center px-6 md:px-10">
            Pembelajaran di TK Pertiwi Grojogan memiliki beberapa tujuan  
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-2 p-4 md:p-8">
            <div class="bg-white p-5 rounded-lg shadow-lg text-center">
                <img src="/img/t-1.png" alt="" class="w-full h-40 object-cover rounded-md border-b-2 border-[#229799]">
                <p class="mt-3 text-black font-medium">Terbentuknya peserta didik yang berakhlak mulia dan berbudi pekerti yang luhur</p>
            </div>
            <div class="bg-white p-5 rounded-lg shadow-lg text-center">
                <img src="/img/t-2.png" alt="" class="w-full h-40 object-cover rounded-md border-b-2 border-[#229799]">
                <p class="mt-3 text-black font-medium">Terwujudnya siswa yang cerdas berkualitas dan berkembang sesuai usianya</p>
            </div>
            <div class="bg-white p-5 rounded-lg shadow-lg text-center">
                <img src="/img/t-3.png" alt="" class="w-full h-40 object-cover rounded-md border-b-2 border-[#229799]">
                <p class="mt-3 text-black font-medium">Menjadikan anak lebih bisa mengenali bakat diri sendiri serta berdaya saing dengan sportif</p>
            </div>
            <div class="bg-white p-5 rounded-lg shadow-lg text-center">
                <img src="" alt="" class="w-full h-40 object-cover rounded-md border-b-2 border-[#229799]">
                <p class="mt-3 text-black font-medium">Menjadikan anak lebih mandiri dan tidak tergantung pada orang lain</p>
            </div>
        </div>
    </div>
</section>
<!-- visi -misi  -->
<section class="bg-white min-h-screen py-8 px-4">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-[#229799] font-bold text-3xl mb-4">VISI & MISI</h2>

       <p class="font-regular text-[20px] text-black mb-8 w-full max-w-8xl">
    Dalam upaya mendukung tumbuh kembang anak secara optimal, TK Pertiwi memiliki visi dan misi yang dirancang 
    untuk menciptakan lingkungan belajar yang aman, kreatif, dan inspiratif. Berikut adalah visi dan misi kami sebagai 
    landasan utama dalam memberikan pendidikan terbaik bagi anak-anak.
</p>

        <!-- Visi -->
        <div class="bg-white p-5 rounded-lg shadow-lg shadow-[#229799] mb-10">
            <h3 class="font-bold text-[30px] text-[#229799] text-left mb-3">Visi:</h3>
            <p class="text-[20px] text-black text-left">
                Terwujudnya Siswa Yang Berakhlak Mulia, Cerdas, Kreatif Dan Mandiri
            </p>
        </div>

        <!-- Misi -->
        <div class="bg-white p-5 rounded-lg shadow-lg shadow-[#229799]">
            <h3 class="font-bold text-[25px] text-[#229799] text-left mb-3">Misi</h3>
            <ul class="text-black text-left text-[20px] list-decimal pl-6 space-y-2">
                <li>Mewujudkan Pendidikan Agama dan Budi Pekerti Secara Terprogram</li>
                <li>Meningkatkan Kecerdasan Anak Melalui Kegiatan Belajar Seraya Bermain</li>
                <li>Memberikan Pengetahuan Yang Berwawasan Untuk Menumbuhkan Bakat Keterampilan Yang Beragam</li>
                <li>Menanamkan Kedisiplinan Kejujuran Dan Tanggung Jawab Melalui Berbagai Macam Kegiatan Main</li>
            </ul>
        </div>
    </div>
</section>

<!-- artikel -->
 <section class="sekilas min-h-screen">
    <div class="max-w-7xl mx-auto text-center pt-8 px-4">
        <h2 class="text-[#229799] font-bold text-3xl mb-4">ARTIKEL</h2>
        <p class="font-regular text-[20px] text-black mb-8 w-full max-w-8xl">
    Temukan hal menarik seputar TK Pertiwi Grojogan mulai dari pembelajaran yang efektif hingga kegiatan kreatif untuk anak anak. 
    Mari bersama-sama menciptakan fondasi pendidikan yang kuat dan menyenangkan bagi anak-anak kita!
</p>
    </div>
        
 </section>


 <!-- tentang kami -->
  
 <section class="tentang-kami bg-[#229799]">
     <div class="max-w-7xl mx-auto text-center pt-8 px-4">
         <h2 class="text-white font-bold text-3xl mb-4">TENTANG KAMI</h2>
         <div class="flex flex-col items-center mt-6 bg-white p-4 rounded-lg shadow-md w-full max-w-7xl mx-auto">
    <!-- Judul Alamat -->
    <h3 class="text-xl font-semibold text-gray-900 mb-2">Alamat TK Pertiwi Grojogan</h3>

    <!-- Alamat Sekolah -->
    <p class="text-gray-600 text-center mb-4">
        Desa Grojogan, Kec. Berbek, Kabupaten Nganjuk, Jawa Timur
    </p>

    <!-- Google Maps -->
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.590863909551!2d111.86268027484242!3d-7.6194175923959495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e784bf5e349dfa9%3A0x311f48f59fab4e95!2sTK%20Pertiwi%20Grojogan!5e0!3m2!1sid!2sid!4v1741846215764!5m2!1sid!2sid" 
        width="1000" 
        height="350" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade"
        class="rounded-md shadow-md">
    </iframe>
</div>

     </div>
       
 </section>



<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                const offset = 80; // Sesuaikan dengan tinggi navbar
                const elementPosition = targetElement.getBoundingClientRect().top + window.scrollY;
                const offsetPosition = elementPosition - offset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: "smooth"
                });
            }
        });
    });
</script>




    <script>
        // Toggle mobile menu
        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>

</body>
</html>