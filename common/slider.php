<!-- Slider -->
<div
  id="slider"
  class="carousel slide"
  data-bs-interval="5000"
  data-bs-ride="carousel"
>
  <div class="carousel-indicators">
    <button
      type="button"
      data-bs-target="#carouselExampleCaptions"
      data-bs-slide-to="0"
      class="active"
      aria-current="true"
      aria-label="Slide 1"
    ></button>
    <button
      type="button"
      data-bs-target="#carouselExampleCaptions"
      data-bs-slide-to="1"
      aria-label="Slide 2"
    ></button>
    <button
      type="button"
      data-bs-target="#carouselExampleCaptions"
      data-bs-slide-to="2"
      aria-label="Slide 3"
    ></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/zdj1.jpg" class="d-block w-100" alt="..." height="650" />
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/zdj2.jpg" class="d-block w-100" alt="..." height="650" />
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/zdj3.jpg" class="d-block w-100" alt="..." height="650" />
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
  </div>

  <!-- Slider button left/right -->
  <button
    class="carousel-control-prev"
    type="button"
    data-bs-target="#slider"
    data-bs-slide="prev"
  >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>

  <button
    class="carousel-control-next"
    type="button"
    data-bs-target="#slider"
    data-bs-slide="next"
  >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
