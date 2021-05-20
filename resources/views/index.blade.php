<!DOCTYPE html>
<html  >
<head>
  
 
  <title>Home</title>
  
  @include('/includes/links')
  <link rel="stylesheet" href="{{ asset('assets/indexpage/index.css')}}"> 
  
</head>
<body>
   

    <div>
        @include('/includes/header')
    </div>
    {{-- ///////////////////////////Slider Start//////////// --}}

{{-- <section class="slider1 cid-sxu8162i6V" id="slider1-2">
    
    <div class="carousel slide" id="sxumXjt6Vj" data-interval="5000">
        <ol class="carousel-indicators">
            <li data-slide-to="0" class="active" data-target="#sxumXjt6Vj"></li>
            <li data-slide-to="1" data-target="#sxumXjt6Vj"></li>
            <li data-slide-to="2" data-target="#sxumXjt6Vj"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item slider-image item active">
                <div class="item-wrapper">
                    <img class="d-block w-100" src="assets/images/background3.jpg">
                    
                    <div class="carousel-caption">
                        <h5 class="mbr-section-subtitle mbr-fonts-style display-5">
                            <strong>Full-Width Slider</strong>
                        </h5>
                        <p class="mbr-section-text mbr-fonts-style display-7">Click on the image to edit slides.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item slider-image item">
                <div class="item-wrapper">
                    <img class="d-block w-100" src="assets/images/background5.jpg">
                    
                    <div class="carousel-caption">
                        <h5 class="mbr-section-subtitle mbr-fonts-style display-5">
                            <strong>Full-Width Slider</strong>
                        </h5>
                        <p class="mbr-section-text mbr-fonts-style display-7">Click on the image to edit slides.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item slider-image item">
                <div class="item-wrapper">
                    <img class="d-block w-100" src="assets/images/background8.jpg">
                    
                    <div class="carousel-caption">
                        <h5 class="mbr-section-subtitle mbr-fonts-style display-5">
                            <strong>Full-Width Slider</strong>
                        </h5>
                        <p class="mbr-section-text mbr-fonts-style display-7">Click on the image to edit slides.</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#sxumXjt6Vj">
            <span class="mobi-mbri mobi-mbri-arrow-prev" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#sxumXjt6Vj">
            <span class="mobi-mbri mobi-mbri-arrow-next" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section> --}}
<div style="max-height: 100vh; background-image:url('https://images.unsplash.com/photo-1437419764061-2473afe69fc2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=890&q=80');background-repeat:no-repeat;background-size: cover;" class="text-center  pl-5">
    
<div class="book mt-3" style="margin-left:10em; ">
    <div id="pages" class="pages">
      <div class="page"><p class="text-info">
           <svg 
        id="eye-left"
        xmlns="http://www.w3.org/2000/svg"
        width="75" 
        height="100" 
        version="1.0">
        <path d="m 72.520861,60.915859 v 0 C 69.385207,53.011396 61.908243,46.570093 55.74346,42.387465 49.578631,38.204905 40.408101,36.818968 33.679899,37.051071 c -1.597953,0.05517 -2.931531,0.451253 -4.000736,1.188245 -0.738155,0.570053 -1.097854,1.127016 -1.079089,1.670881 0.02949,0.854739 0.93486,2.69053 2.716108,5.507379 0.805175,1.372521 1.234574,2.83577 1.288193,4.389751 0.131362,3.807345 -0.983571,6.879734 -3.344801,9.217182 -2.361227,2.337476 -5.686459,3.580206 -9.975699,3.728183 C 15.162859,62.894893 11.580282,61.559887 8.5361375,58.747669 5.4920363,55.935482 3.8975877,52.431474 3.7527937,48.235627 c -0.1769131,-5.1282 2.0835359,-9.776522 6.7813483,-13.944986 4.697855,-4.168379 11.041643,-6.390426 19.031387,-6.666142 8.662566,-0.298838 16.811229,2.201105 24.446015,7.499833 7.634738,5.298806 13.804506,13.895976 18.509317,25.791527 z" id="text2161" fill="#000" fill-opacity="1" stroke="none" stroke-width=".72233355px" stroke-linecap="butt" stroke-linejoin="miter" stroke-opacity="1"/>
     </svg>
     <svg 
       id="eye-right"
       xmlns="http://www.w3.org/2000/svg"
       width="75" 
       height="100" 
       version="1.0">
       <path d="m 72.520861,60.915859 v 0 C 69.385207,53.011396 61.908243,46.570093 55.74346,42.387465 49.578631,38.204905 40.408101,36.818968 33.679899,37.051071 c -1.597953,0.05517 -2.931531,0.451253 -4.000736,1.188245 -0.738155,0.570053 -1.097854,1.127016 -1.079089,1.670881 0.02949,0.854739 0.93486,2.69053 2.716108,5.507379 0.805175,1.372521 1.234574,2.83577 1.288193,4.389751 0.131362,3.807345 -0.983571,6.879734 -3.344801,9.217182 -2.361227,2.337476 -5.686459,3.580206 -9.975699,3.728183 C 15.162859,62.894893 11.580282,61.559887 8.5361375,58.747669 5.4920363,55.935482 3.8975877,52.431474 3.7527937,48.235627 c -0.1769131,-5.1282 2.0835359,-9.776522 6.7813483,-13.944986 4.697855,-4.168379 11.041643,-6.390426 19.031387,-6.666142 8.662566,-0.298838 16.811229,2.201105 24.446015,7.499833 7.634738,5.298806 13.804506,13.895976 18.509317,25.791527 z" id="text2161" fill="#000" fill-opacity="1" stroke="none" stroke-width=".72233355px" stroke-linecap="butt" stroke-linejoin="miter" stroke-opacity="1"/>
     </svg>Welcome To <br><br>EBOOK!   </p> <p><small style="font-size: 20px; position: relative;top:-2.5em" class="text-info">Click here for updates</small></p></div>
      <div class="page"><p class="text-primary">✨Best <br>Selling  <br>Book <br>of<br> Month<br> ✨</p></div>
      <div class="page"><img src="images/books/bestSelling/book1.jpg" style="width:98%;height:98%" ></div>
      <div class="page"> <div><img src="images/books/collection_collage.jpg" style="width:98%"></div> </div>
      <div class="page"><p class="text-info">New Collection <br> are <br>Here<br> 📚</p></div>
      <div class="page"><p class="text-primary" style="font-size:90px">That's  it<br> For <br>Today</p></div>
  
    </div>
  </div>
</div>

{{-- ///////////////////////////Slider Ends//////////// --}}

        {{-- ///////////Books/////// --}}
        <h2 class="text-danger text-center mt-5" id="books">ALL Books</h2>
        @include('books')


        {{-- /////Team//////// --}}
<section class="team1 cid-sxu8IrAIs4" id="team1-3">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2">
                    <strong>Our team</strong>
                </h3>
                
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card-wrap">
                    <div class="image-wrap">
                        <a href="mailto:hassan4444khan@gmail.com"><img src="assets/images/hassan.png" alt="hassan"></a>
                    </div>
                    <div class="content-wrap">
                        <h5 class="mbr-section-title card-title mbr-fonts-style align-center m-0 display-5">
                            M Hassan</h5>
                        <h6 class="mbr-role mbr-fonts-style align-center mb-3 display-4">
                            <strong>Programmer</strong>
                        </h6>
                        <p class="card-text mbr-fonts-style align-center display-7">
                            No special actions required, all sites you make with Mobirise are mobile-friendly.
                        </p>
                        <div class="social-row display-7">
                            <div class="soc-item">
                                <a href="" target="_blank">
                                    <span class="mbr-iconfont socicon socicon-facebook"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="" target="_blank">
                                    <span class="mbr-iconfont socicon socicon-twitter"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="" target="_blank">
                                    <span class="mbr-iconfont socicon socicon-instagram"></span>
                                </a>
                            </div>
                            
                            
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card-wrap">
                    <div class="image-wrap">
                        <img src="assets/images/mohsin.jpeg" alt="">
                    </div>
                    <div class="content-wrap">
                        <h5 class="mbr-section-title card-title mbr-fonts-style align-center m-0 display-5">
                            Mohsin Raza</h5>
                        <h6 class="mbr-role mbr-fonts-style align-center mb-3 display-4">
                            <strong>Designer</strong></h6>
                        <p class="card-text mbr-fonts-style align-center display-7">
                            Use Mobirise website building software to create multiple sites for your clients.
                        </p>
                        <div class="social-row display-7">
                            <div class="soc-item">
                                <a href="" target="_blank">
                                    <span class="mbr-iconfont socicon socicon-facebook"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="" target="_blank">
                                    <span class="mbr-iconfont socicon socicon-twitter"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="" target="_blank">
                                    <span class="mbr-iconfont socicon socicon-instagram"></span>
                                </a>
                            </div>
                            
                            
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card-wrap">
                    <div class="image-wrap">
                        <img src="assets/images/samad.jpeg" alt="">
                    </div>
                    <div class="content-wrap">
                        <h5 class="mbr-section-title card-title mbr-fonts-style align-center m-0 display-5">
                            Abdul Samad</h5>
                        <h6 class="mbr-role mbr-fonts-style align-center mb-3 display-4">
                            <strong>Game Develper</strong></h6>
                        <p class="card-text mbr-fonts-style align-center display-7">
                            Create multiple pages. Don't forget to set links to your pages after creating them.
                        </p>
                        <div class="social-row display-7">
                            <div class="soc-item">
                                <a href="" target="_blank">
                                    <span class="mbr-iconfont socicon socicon-facebook"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="" target="_blank">
                                    <span class="mbr-iconfont socicon socicon-twitter"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="" target="_blank">
                                    <span class="mbr-iconfont socicon socicon-instagram"></span>
                                </a>
                            </div>
                            
                            
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card-wrap">
                    <div class="image-wrap ">
                        <img src="assets/images/samad.jpeg" alt="">
                    </div>
                    <div class="content-wrap mt-4">
                        <h5 class="mbr-section-title card-title mbr-fonts-style mt-5 align-center m-0 display-5">
                            M Ali</h5>
                        <h6 class="mbr-role mbr-fonts-style align-center mb-3 display-4">
                            <strong>Programmer</strong>
                        </h6>
                        <p class="card-text mbr-fonts-style align-center display-7">
                            Each theme in the Mobirise site builder contains a set of unique blocks.
                        </p>
                        <div class="social-row display-7">
                            <div class="soc-item">
                                <a href="" target="_blank">
                                    <span class="mbr-iconfont socicon socicon-facebook"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="" target="_blank">
                                    <span class="mbr-iconfont socicon socicon-twitter"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="" target="_blank">
                                    <span class="mbr-iconfont socicon socicon-instagram"></span>
                                </a>
                            </div>
                            
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- /////////////////Latest News///////////// --}}

<section class="content3 cid-sxueRpscdj" id="content3-5">  
    <div class="container">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Latest News</strong></h4>
            <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5">Read the latest news about EBOOK</h5>
        </div>
        <div class="row mt-4">
            <div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/product5.jpg" alt="" title="">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-4"><em>May 10, 2025</em></h5>
                        <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>Easy and Simple</strong></h6>
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">Mobirise Page Maker is a free and simple
                            website builder - just drop site blocks to your page, add content and style it!</p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="" class="btn item-btn btn-primary-outline display-7" target="_blank">Read More &gt;</a></div>
                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/product4.jpg" alt="" title="">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-4"><em>Jan 09, 2025</em></h5>
                        <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>Automagically Mobile</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">Mobirise Site Creator offers a huge
                            collection of 3500+ site blocks, templates and themes with thousands flexible options. <br>
                        </p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="" class="btn item-btn btn-primary-outline display-7" target="_blank">Read More &gt;</a></div>
                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/product3.jpg" alt="" title="">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-4"><em>Jan 08, 2025</em></h5>
                        <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>Boost Your Ranking</strong></h6>
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">Mobirise Page Maker is a free and simple
                            website builder - just drop site blocks to your page, add content and style it!</p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="" class="btn item-btn btn-primary-outline display-7" target="_blank">Read More &gt;</a></div>
                </div>
            </div>

        </div>
    </div>
</section>
@include('/includes/footer')
@include('/includes/scripts')

<script>
      var pages = document.getElementsByClassName('page');
  for(var i = 0; i < pages.length; i++)
    {
      var page = pages[i];
      if (i % 2 === 0)
        {
          page.style.zIndex = (pages.length - i);
        }
    }

  document.addEventListener('DOMContentLoaded', function(){
    for(var i = 0; i < pages.length; i++)
      {
        //Or var page = pages[i];
        pages[i].pageNum = i + 1;
        pages[i].onclick=function()
          {
            if (this.pageNum % 2 === 0)
              {
                this.classList.remove('flipped');
                this.previousElementSibling.classList.remove('flipped');
              }
            else
              {
                this.classList.add('flipped');
                this.nextElementSibling.classList.add('flipped');
              }
           }
        }
  })
</script>
  
</body>
</html>