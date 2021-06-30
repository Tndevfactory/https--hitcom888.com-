{{-- @include('components.gsap_carousel') --}}
@include('components.process')
<footer id='footerId' class="  p-3 mt-3">
    <div class="container">
        <div class="row ">
          <div class="col-sm-3 p-3 ">
            <a class="navbar-brand position-relative" href="{{route('welcome', App::getLocale())}}">
                <span class="brand_name_footer">
                    {{ config("app.name", "Laravel") }}
                </span>
                <span
                    ><i
                        class="brand_logo_footer fas fa-shopping-cart position-absolute"
                    ></i
                ></span>
            </a>
            <ul class="list-group ">
                <li class="list-group-item bg-transparent text-dark">
                  <i class="fas phone fa-phone-alt "></i> :
                  <span class=" ms-1"> +216 55 385 474</span>
                </li>
                <li class="list-group-item  bg-transparent ">
                  <i class="fas email fa-at"></i> :
                  <a href="mailto:support@hitcom888.com?subject= need information"
                  class="text-decoration-none text-dark ms-1"
                  > support@hitcom888.com
                  </a>
                </li>
                  
            </ul>
            <div class="d-flex gap-5 justify-content-start ms-3  my-1">
                <span>
                  <a href="" class="text-decoration-none">
                    <i class="fab facebook_icon  fa-facebook-square fa-2x"></i>
                  </a>
                </span>
                <span>
                  <a href="" class="text-decoration-none">
                    <i class="fab instagram_icon fa-instagram fa-2x"></i>
                  </a>
                 
                </span>
                <span>
                  <a href="" class="text-decoration-none">
                    <i class="fab youtube_icon fa-youtube-square fa-2x"></i>
                  </a>
                </span>
            </div>

          </div>


          <div class="col-sm-9 p-3">

            <div class="navbar-nav">
                <div class="lette_information">Lettre d'information</div>
                <form class="d-flex">
                    <div class="input-group">
                        <input
                            {{-- style="min-width: 28rem" --}}
                            type="text"
                            class="form-control"
                            placeholder="Entrer votre Email pour recevoir toutes les nouveautés"
                            aria-label="Recipient's username"
                           
                        />
                        <button
                            class="btn btn-outline-dark"
                            type="button"
                        
                        >
                        <i class="far fa-envelope"></i> S'abonner
                        </button>
                    </div>

                </form>
            </div>
            <div class="footer_list my-3 justify-content-around  d-none d-sm-flex">

                <ul class="list-group border border-0">
                    <li class="list-group-item border border-0 bg-transparent  fw-bold">INFORMATIONS</li>
                    <li class="list-group-item  border border-0 bg-transparent ">
                      <a href="#" class="text-decoration-none small text-muted " >FAQ </a>
                    </li>
                    <li class="list-group-item  border border-0 bg-transparent">
                      <a href="#" class="text-decoration-none text-muted small " >Guide d'Emballage </a>
                    </li>
                    <li class="list-group-item  bg-transparent ">
                      <a href="#" class="text-decoration-none text-muted small " > CONDITIONS GENERALES DE VENTE </a>
                     
                    </li>
                    <li class="list-group-item  bg-transparent ">
                      <a href="#" class="text-decoration-none text-muted small " >   Comment acheter sur Hitcom </a>
                    
                    </li>
                </ul>
                <ul class="list-group  border border-0">
                    <li class="list-group-item  bg-transparent  fw-bold">QUOI DE NEUF ? 
                   
                    </li>
                    <li class="list-group-item  bg-transparent ">
                    
                      <a href="#" class="text-decoration-none text-muted small " >  Meilleures ventes </a>
                    </li>
                    <li class="list-group-item  bg-transparent">
                      <a href="#" class="text-decoration-none text-muted small " >   Nouveaux Produits </a>
                     
                    </li>
                    <li class="list-group-item  bg-transparent">
                      <a href="#" class="text-decoration-none text-muted small " >  Promotions </a>
                      
                    </li>
                    
                </ul>
                <ul class="list-group  border border-0">
                    <li class="list-group-item  bg-transparent  fw-bold">BESOIN D'AIDES</li>
                    <li class="list-group-item bg-transparent ">
                      <a href="#" class="text-decoration-none text-muted small " > Mon compte </a> 
                    </li>
                    <li class="list-group-item bg-transparent ">
                      <a href="#" class="text-decoration-none text-muted small " >  Contactez-nous </a> 
                     
                    </li>
                    <li class="list-group-item bg-transparent ">
                      <a href="#" class="text-decoration-none text-muted small " > Plan du site </a> 
                     
                      
                    </li>
                    
                </ul>
            </div>


            <div class="accordion accordion_footer mt-3 d-block d-sm-none bg-transparent" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header bg-secondary text-dark" id="headingOne">
                    <button class="accordion-button  text-dark" type="button" 
                    data-bs-toggle="collapse" data-bs-target="#collapseOne" 
                    aria-expanded="false" aria-controls="collapseOne">
                      Chaussures
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse  bg-transparent"
                   aria-labelledby="headingOne" 
                   data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                     <ul class="list-group">
                          <li class="list-group-item">An item</li>
                          <li class="list-group-item">A second item</li>
                          <li class="list-group-item">A third item</li>
                          <li class="list-group-item">A fourth item</li>
                          <li class="list-group-item">And a fifth one</li>
                        </ul>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed"
                     type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseTwo" 
                      aria-expanded="false" 
                      aria-controls="collapseTwo">
                      Costumes
                    </button>
                  </h2>
                  <div id="collapseTwo" 
                  class="accordion-collapse collapse" 
                  aria-labelledby="headingTwo" 
                  data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                     <ul class="list-group">
                       <li class="list-group-item">An item</li>
                       <li class="list-group-item">A second item</li>
                       <li class="list-group-item">A third item</li>
                       <li class="list-group-item">A fourth item</li>
                       <li class="list-group-item">And a fifth one</li>
                     </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" 
                    type="button" data-bs-toggle="collapse" 
                    data-bs-target="#collapseThree" aria-expanded="false" 
                    aria-controls="collapseThree">
                      T-shirt
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" 
                  aria-labelledby="headingThree"
                   data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                     <ul class="list-group">
                       <li class="list-group-item  bg-transparent">An item</li>
                       <li class="list-group-item  bg-transparent">A second item</li>
                       <li class="list-group-item  bg-transparent">A third item</li>
                       <li class="list-group-item  bg-transparent">A fourth item</li>
                       <li class="list-group-item  bg-transparent">And a fifth one</li>
                     </ul>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          
        </div>
        <div class="text-center "> Copyright &copy; Hitcom </div>
      </div>
</footer>
