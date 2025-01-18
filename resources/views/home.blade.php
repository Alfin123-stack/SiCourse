
@extends('template.app')

@section('content')


    <!-- awal main -->
    <main>
      <!-- section awal -->
      <section class="container-fluid" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('images/mentor.webp') }}') no-repeat center center/cover; height: 100vh;">
  <div class="d-flex justify-content-center align-items-center h-100 text-center text-white">
    <div>
      <h2 class="fs-15 font-weight-bolder">Bangun Karirmu Sebagai Developer Profesional</h2>
      <p class="mt-3 fw-light">Mulai belajar terarah dengan learning path</p>
      <a class="btn btn-primary px-4 py-2 mt-3" href="{{ route('kursus.kursus') }}">Belajar Sekarang</a>
    </div>
  </div>
</section>

       <!-- akhir section awal -->

               <!-- section Description -->
               <section class="container" id="tentang">
           <div class="row">
          <div class="col-6 p-5">
            <img src="https://sb-ui-kit-pro-angular.startbootstrap.com/assets/img/illustrations/programming.svg" alt="hero" class="img-fluid">
          </div>
          <div class="col-6">
            <div class="d-flex justify-content-center flex-column h-100">
              <h2 class="fw-normal">Tentang Kami</h1>
              <p class="mt-3 fw-light fs-6"><strong class=' font-weight-bolder'>SiCourse</strong> adalah platform kursus online yang dirancang untuk membantu Anda menguasai keterampilan pengembangan web menggunakan teknologi terkini. Kami menawarkan berbagai kursus yang mengajarkan Anda bagaimana membangun website dan aplikasi web modern dengan pendekatan berbasis proyek, memungkinkan Anda untuk langsung mengimplementasikan pengetahuan yang diperoleh. Dengan kursus yang dirancang oleh profesional industri dan materi yang selalu diperbarui, Anda akan mempelajari konsep-konsep terbaru dalam pengembangan web, dari desain antarmuka hingga pengelolaan backend.</p>
              <div>
              <a class='btn btn-outline-primary' href="{{ route('kursus.kursus') }}">Lihat Kursus yang tersedia <i class="bi bi-arrow-right"></i>
              </a>
              </div>
            </div>
          </div>
        </div>
      </section>
         <!-- akhir section Description -->

       <!-- awal mentor -->
       <div class="container-fluid p-5 bg-primary text-white" id="mentor">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <h2>MENTOR KAMI YANG HEBAT</h2>
            <p>Mentor-mentor kami adalah para profesional dan ahli di bidangnya, <br> siap membimbing Anda dalam setiap langkah pembelajaran.</p>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-4 team-member">
            <img src="https://startbootstrap.github.io/startbootstrap-agency/assets/img/team/3.jpg" alt="Parveen Anand">
            <h4>Parveen Anand</h4>
            <p>Programmer Utama</p>
        </div>
        <div class="col-md-4 team-member">
            <img src="https://startbootstrap.github.io/startbootstrap-agency/assets/img/team/2.jpg" alt="Diana Petersen">
            <h4>Diana Petersen</h4>
            <p>Arsitek Sistem</p>
        </div>
        <div class="col-md-4 team-member">
            <img src="https://startbootstrap.github.io/startbootstrap-agency/assets/img/team/1.jpg" alt="Larry Parker">
            <h4>Larry Parker</h4>
            <p>Pengembang Aplikasi</p>
        </div>
    </div>
</div>




      <!-- section learningpath -->
       <section class="container mb-5 text-center" id="learning-path">
          <h1>Learning Path</h1>
          <p class="mt-5">Learning path akan membantu Anda dalam belajar di Academy <br> dengan kurikulum yang dibangun bersama pelaku industri ternama.</p>
          <div class="row d-flex justify-content-center align-content-center mt-5 px-5">
            <div class="col-3">
              <img src="https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/academy-googleatp-3.png" alt=""  class="img-fluid">
            </div>
            <div class="col-3">
              <img src="https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/google-cloud-partner.png" alt=""  class="img-fluid">
            </div>
            <div class="col-3">
              <img src="https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/google-for-education-partner.jpg" alt=""  class="img-fluid">
            </div>
          </div>

          <div class="row d-flex justify-content-center align-content-center mt-5 gap-5 px-5">
            <div class="col border border-black">
              <img src="https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/homepage-partner-microsoft.png" alt=""  class="img-fluid">
            </div>
            <div class="col border border-black">
              <img src="https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/homepage-partner-google.png" alt=""  class="img-fluid">
            </div>
            <div class="col border border-black">
              <img src="https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/homepage-partner-aws.png" alt=""  class="img-fluid">
            </div>
            <div class="col border border-black">
              <img src="https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/homepage-partner-ibm.png" alt=""  class="img-fluid">
            </div>
            <div class="col border border-black">
              <img src="https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/homepage-partner-line.png" alt=""  class="img-fluid">
            </div>
          </div>

       </section>
       <!-- akhir section learningpath -->



    </main>
    <!-- akhir main -->

@endsection
  