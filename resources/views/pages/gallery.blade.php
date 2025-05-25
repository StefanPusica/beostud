<x-layout>
<!-- Gallery section start -->
<section id="gallerySection">
    <div class="container">
      <x-heading pageName="Galerija"></x-heading>
      <div class="row g-3">
        <!-- Gallery Images -->
        <div class="col-6 col-md-4 col-lg-3">
          <img
            src="/images/gallery/gallery1.jpg"
            class="img-fluid gallery-img"
            data-bs-target="#galleryModal"
            data-bs-slide-to="0"
            data-bs-toggle="modal"
          />
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <img
            src="/images/gallery/gallery2.jpg"
            class="img-fluid gallery-img"
            data-bs-target="#galleryModal"
            data-bs-slide-to="1"
            data-bs-toggle="modal"
          />
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <img
            src="/images/gallery/gallery3.jpg"
            class="img-fluid gallery-img"
            data-bs-target="#galleryModal"
            data-bs-slide-to="2"
            data-bs-toggle="modal"
          />
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <img
            src="/images/gallery/gallery4.jpg"
            class="img-fluid gallery-img"
            data-bs-target="#galleryModal"
            data-bs-slide-to="3"
            data-bs-toggle="modal"
          />
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <img
            src="/images/gallery/gallery1.jpg"
            class="img-fluid gallery-img"
            data-bs-target="#galleryModal"
            data-bs-slide-to="0"
            data-bs-toggle="modal"
          />
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <img
            src="/images/gallery/gallery2.jpg"
            class="img-fluid gallery-img"
            data-bs-target="#galleryModal"
            data-bs-slide-to="1"
            data-bs-toggle="modal"
          />
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <img
            src="/images/gallery/gallery3.jpg"
            class="img-fluid gallery-img"
            data-bs-target="#galleryModal"
            data-bs-slide-to="2"
            data-bs-toggle="modal"
          />
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <img
            src="/images/gallery/gallery4.jpg"
            class="img-fluid gallery-img"
            data-bs-target="#galleryModal"
            data-bs-slide-to="3"
            data-bs-toggle="modal"
          />
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <img
            src="/images/gallery/gallery1.jpg"
            class="img-fluid gallery-img"
            data-bs-target="#galleryModal"
            data-bs-slide-to="0"
            data-bs-toggle="modal"
          />
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <img
            src="/images/gallery/gallery2.jpg"
            class="img-fluid gallery-img"
            data-bs-target="#galleryModal"
            data-bs-slide-to="1"
            data-bs-toggle="modal"
          />
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <img
            src="/images/gallery/gallery3.jpg"
            class="img-fluid gallery-img"
            data-bs-target="#galleryModal"
            data-bs-slide-to="2"
            data-bs-toggle="modal"
          />
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <img
            src="/images/gallery/gallery4.jpg"
            class="img-fluid gallery-img"
            data-bs-target="#galleryModal"
            data-bs-slide-to="3"
            data-bs-toggle="modal"
          />
        </div>
      </div>

      <!-- Modal sa Carousel za fullscreen prikaz -->
      <div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
          <div class="modal-content bg-dark">
            <div class="modal-header border-0">
              <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
              <div id="carouselGallery" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <!-- Slike u karuselu -->
                  <div class="carousel-item active">
                    <img src="/images/gallery/gallery1.jpg" class="d-block w-100" alt="Slika 1" />
                  </div>
                  <div class="carousel-item">
                    <img src="/images/gallery/gallery2.jpg" class="d-block w-100" alt="Slika 2" />
                  </div>
                  <div class="carousel-item">
                    <img src="/images/gallery/gallery3.jpg" class="d-block w-100" alt="Slika 3" />
                  </div>
                  <div class="carousel-item">
                    <img src="/images/gallery/gallery4.jpg" class="d-block w-100" alt="Slika 4" />
                  </div>
                </div>
                <!-- Navigacija -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselGallery" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselGallery" data-bs-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<!-- Gallery section end -->    
</x-layout>