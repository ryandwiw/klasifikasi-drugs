<footer id="footer" class="footer">

    @if(\Route::current()->getName() === 'home' || \Route::current()->getName() === 'drugs.index' || \Route::current()->getName() === 'tim' || \Route::current()->getName() === 'feature' || \Route::current()->getName() === 'about')
    <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6">
                    <h4>Coba Sekarang</h4>
                    <p>Untuk mendapatkan informasi tentang klasifikasi obat dengan metode Naive Bayes di situs web kami!</p>
                    <a href="{{ route('predict_form') }}" class="read-more"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    @endif


    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">Klasifikasi Drugs</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Malang, Mei 2024</p>

          </div>
        </div>

        <div class="col-lg-4 col-md-3 footer-links">
          <h4>Link</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="{{route('home')}}">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{route('about')}}">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{route('feature')}}">Feature</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{route('tim')}}">Team</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-3 footer-links">
          <h4>Layanan Kami</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="{{route('predict_form')}}">Cek Klasifikasi</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{route('drugs.index')}}">Upload CSV</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{route('drugs.index')}}">Buat Model</a></li>
          </ul>
        </div>


      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Klasifikasi Drugs</strong> <span>All Rights Reserved</span></p>
    </div>

  </footer>


{{-- <footer class="bg-primary text-white text-center text-lg-start">
    <!-- Grid container -->
    <div class="container p-4">
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">About Us </h5>

                <p>
                    Kami adalah tim pengembang yang membuat aplikasi untuk melakukan prediksi jenis obat berdasarkan
                    beberapa atribut menggunakan metode Machine Learning Naive Bayes.
                </p>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Links</h5>

                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="{{route('about')}}" class="text-white" style="text-decoration: none;">About</a>
                    </li>
                    <li>
                        <a href="{{route('feature')}}" class="text-white" style="text-decoration: none;">Feature</a>
                    </li>
                    <li>
                        <a href="{{route('predict_form')}}" class="text-white" style="text-decoration: none;">Prediksi</a>
                    </li>

                </ul>
            </div>
            <!--Grid column-->


            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2024 Copyright Machine Learning
    </div>
    <!-- Copyright -->
</footer> --}}
