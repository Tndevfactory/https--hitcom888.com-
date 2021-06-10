
 <!-- Demo styles -->
 <style>
  html,
  body {
    position: relative;
    height: 100%;
  }

  body {
    background: #eee;
    font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
    font-size: 14px;
    color: #000;
    margin: 0;
    padding: 0;
  }

  .swiper-container {
    width: 100%;
    height: 100%;
  }

  .swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;

    /* Center slide text vertically */
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
  }

  .swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
</style>


<!-- Slider main container -->
<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide"><img
        src="https://picsum.photos/1600/400"
        class="d-block w-100"
        alt="..."
    /></div>
      <div class="swiper-slide"><img
        src="https://picsum.photos/1600/402"
        class="d-block w-100"
        alt="..."
    /></div>
      <div class="swiper-slide"><img
        src="https://picsum.photos/1600/401"
        class="d-block w-100"
        alt="..."
    /></div>
      ...
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
  
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  
    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
  </div>

  @push('scripts')

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.8/swiper-bundle.css" integrity="sha512-Yh4EqHPEJlOr5IFQ6EXPAA3RhwHgRBesEJLWJaz+xj1Bix5peuxOk40IA3gp7LH0BHJvi0e5QNL1iqvvLjdA9w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.8/swiper-bundle.min.js" integrity="sha512-sAHYBRXSgMOV2axInO6rUzuKKM5SkItFLlLHQ8YjRD+FBwowtATOs4njP9oim3/MzyAGrB52SLDjpAOLcOT9TA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

const swiper_slider = new Swiper('.swiper-container', {

  speed: 400,
  spaceBetween: 100,
  autoplay: {
   delay: 5000,
 },
 
  loop: true,
  
  
});
</script>

@endpush