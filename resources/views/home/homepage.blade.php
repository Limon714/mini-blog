<!DOCTYPE html>
<html lang="en">
   <head>
    @include('home.homecss')
      </head>
   <body>
    @include('home.header')
      <!-- post section start -->
      <div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital">Services </h1>
            <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
            <div class="services_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div><img src="images/img-1.png" class="services_img"></div>
                     <div class="btn_main"><a href="#">Rafting</a></div>
                  </div>
                  <div class="col-md-4">
                     <div><img src="images/img-2.png" class="services_img"></div>
                     <div class="btn_main active"><a href="#">Hiking</a></div>
                  </div>
                  <div class="col-md-4">
                     <div><img src="images/img-3.png" class="services_img"></div>
                     <div class="btn_main"><a href="#">Camping</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- post section end -->
      @include('home.footer')
      
      @include('home.js')
      </body>
</html>