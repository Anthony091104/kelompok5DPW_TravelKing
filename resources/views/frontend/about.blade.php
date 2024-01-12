@extends('frontend.layout')

@section('content')
<div class="container mt-5">
        <div class="card card-hero-primary">
            <img src="{{ asset('frontend/assets/images/g.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body text-white card-hero position-absolute text-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Tentang Kami</li>
                    </ol>
                </nav>
                <h1 class="card-title card-title-hero">Tentang Kami</h1>
                <p class="card-text">Sejarah awal berdirinya perusahaan kami.</p>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card p-3 border-0">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/fix.jpg') }}" alt="">
                    <h3 class="mt-3">Tentang Kami</h3>
                    <p class="text-justify">Selamat datang di TravelKing, perusahaan perjalanan yang telah mewarnai dunia liburan sejak didirikan pada 30 Desember 2023, dengan kantor pusat yang berlokasi di Purwokerto. Kami menghadirkan pengalaman liburan yang tak terlupakan bagi para pelanggan kami, memastikan setiap momen perjalanan menjadi istimewa dan penuh kenangan.</p>
                    <p class="text-justify">Tim kami yang berdedikasi dan berpengalaman, dipimpin oleh [Nama Pemimpin], berkomitmen untuk menyediakan layanan perjalanan yang berkualitas dan sesuai dengan kebutuhan Anda. Kami memahami bahwa liburan adalah waktu berharga yang dihabiskan bersama keluarga atau teman-teman, dan Travelling hadir untuk membuat setiap detiknya berkesan.</p>
                    <p class="text-justify">Anda dapat menghubungi kami melalui nomor telepon kami di 081396863537 atau mengunjungi website resmi kami di [URL Website] untuk melihat berbagai paket liburan yang kami tawarkan. Jika Anda memiliki pertanyaan lebih lanjut atau memerlukan bantuan, silakan kirimkan email ke traveling@gmail.com. Kami senang dapat menjadi bagian dari rencana liburan Anda yang sempurna.</p>
                    <p class="text-justify">Alamat kantor pusat kami di Purwokerto bukan hanya tempat bekerja, tetapi juga representasi dari semangat kami dalam menciptakan pengalaman liburan yang istimewa. Bersama Travelling, nikmati setiap momen liburan tanpa khawatir, karena kami telah merencanakan segalanya untuk Anda. Mari menjadikan liburan Anda sebagai cerita manis yang akan dikenang sepanjang waktu. Terima kasih telah memilih Travelling sebagai mitra liburan Anda!</p>
                </div>
            </div>
        </div>

    </div>
@endsection