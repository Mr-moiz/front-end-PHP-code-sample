@extends('header&footer')

@section('content')


    <!-- featured 
    ================================================== -->
    <section class="s-featured">
        <div class="row">
            <div class="col-full">

                <div class="featured-slider featured" data-aos="zoom-in">
         
                    <div class="featured__slide">
                        <div class="entry">
                            <div class="entry__background" style="background-image:url('images/slide/Cotton-Ready-to-Pick-DFP-RSmith-1540x770.jpg');"></div>
                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">القطن</a></span>
                                <h1><a href="#0" title=""> منتجات أساسيه # </a></h1>
                            </div> 
                        </div> 
                    </div> 


                    <div class="featured__slide">
                        <div class="entry">
                            <div class="entry__background" style="background-image:url('images/slide/tomatoes-1280859_1280.jpg');"></div>
                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">الطماطم</a></span>
                                <h1><a href="#0" title=""> منتجات البستانيه #</a></h1>

  </div>  
                        </div>
                    </div> 


                    <div class="featured__slide">

                        <div class="entry">

                            <div class="entry__background" style="background-image:url('images/slide/cobs-1934194_1920.jpg');"></div>

                            <div class="entry__content">
                          *      <span class="entry__category"><a href="#0"> زره شاميه</a></span>

                                <h1><a href="#0" title="">منتجات زراعيه #</a></h1>
                           </div> <!-- end entry__content -->

                        </div> <!-- end entry -->

                    </div> <!-- end featured__slide -->

                    <div class="featured__slide">
                        <div class="entry">
                            <div class="entry__background" style="background-image:url('images/slide/pexels-photo-880447.jpeg');"></div>
                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">بطيخ</a></span>
                                <h1><a href="#0" title=""> منتجات بستانيه #</a></h1>

  </div>  
                        </div>
                    </div> 
                    
                </div> <!-- end featured -->

            </div> <!-- end col-full -->
        </div>


    </section> <!-- end s-featured -->





    <!-- s-content
    ================================================== -->
    <section class="s-content" style="direction: rtl;">
    <div class="row narrow">
    <div class="col-full s-content__header">
        <h1 class="display-1 display-1--with-line-sep"> البورصه </h1>

        <div class="row">
    <div class="col-full s-content__main">
    <div class="table-responsive">


<table>

        <thead>
        <tr>
        <th  style="text-align: center">التاريخ </th>
        <th  style="text-align: center"> نوع المحصول </th>
            <th  style="text-align: center">الوحده  </th>
            <th  style="text-align: center"> السعر  </th>
         
        
        </tr>
        </thead>

        <tbody>
           @foreach($report as $d)
        <tr>
        <td style="text-align: center">{{$d->day}} / {{$d->date}}</td>
        <td style="text-align: center">{{$d->name}}</td>
            <td style="text-align: center">{{$d->unit}}</td>
            <td style="text-align: center">{{$d->close_price}}</td>
      
        </tr>
@endforeach
      
 </tbody>

</table>

</div>
</div>
</div>

</div>


        <p>بعض من المحاصيل الأساسية : </p>
            <div class="entries">

                
                <article class="col-block">
                    
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                                <img src="images/products/2.JPG" 
                                     srcset="images/products/2.jpg 1x, images/products/2.jpg 2x" alt="">
                        </div>
        
                        <div class="item-entry__text">
                          
    
                            <h1 class="item-entry__title"><a href="#">السمسم </a></h1>
                            
                        </div>
                    </div> 
                    
                
                </article> 
                
                
                <article class="col-block">
                    
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                                <img src="images/products/1.JPG" 
                                     srcset="images/products/1.jpg 1x, images/products/1.jpg 2x" alt="">
                            
                        </div>
        
                        <div class="item-entry__text">    
                          
    
                            <h1 class="item-entry__title"><a href="#">الذرة    </a></h1>
                                
                        </div>
                    </div> 
                    
                
                </article> 
                
                <article class="col-block">
                    
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                                <img src="images/products/slide-millet01-1.jpg" 
                                     srcset="images/products/slide-millet01-1.jpg 1x, images/products/slide-millet01-1.jpg 2x" alt="">
                            
                        </div>
        
                        <div class="item-entry__text">
                 
                            <h1 class="item-entry__title"><a href="#">الدخن</a></h1>
                        </div>
                    </div>
                    
                
                </article>
                
    

                <p>بعض المنتجات البستانية :  </p>
            
            <div class="entries">

                
                <article class="col-block">
                    
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                                <img src="images/products/bananaonwhitecreditShutterstockcom.jpg" 
                                     srcset="images/products/bananaonwhitecreditShutterstockcom.jpg 1x, images/products/bananaonwhitecreditShutterstockcom.jpg 2x" alt="">
                        </div>
        
                        <div class="item-entry__text">
                          
    
                            <h1 class="item-entry__title"><a href="#">الموز </a></h1>
                            
                        </div>
                    </div> 
                    
                
                </article> 
                
                
                <article class="col-block">
                    
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                                <img src="images/products/MANGOS.jpg" 
                                     srcset="images/products/MANGOS.jpg 1x, images/products/MANGOS.jpg 2x" alt="">
                        </div>
        
                        <div class="item-entry__text">    
                          
    
                            <h1 class="item-entry__title"><a href="#">مانجو   </a></h1>
                                
                        </div>
                    </div> 
                    
                
                </article> 
                
                <article class="col-block">
                    
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                                <img src="images/products/tomatoes.jpg" 
                                     srcset="images/products/tomatoes.jpg 1x, images/products/tomatoes.jpg 2x" alt="">
                        </div>
        
                        <div class="item-entry__text">
                 
                            <h1 class="item-entry__title"><a href="#"> طماطم</a></h1>
                        </div>
                    </div>
                    
                
                </article>
                
            </div>
            
        
        <p>بعض من المنتجات الزراعية : </p>
            
            <div class="entries">

                
                <article class="col-block">
                    
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                                <img src="images/products/c.jpg" 
                                     srcset="images/products/c.jpg 1x, images/products/c.jpg 2x" alt="">
                        </div>
        
                        <div class="item-entry__text">
                          
    
                            <h1 class="item-entry__title"><a href="#">اللوبيا بيضاء </a></h1>
                            
                        </div>
                    </div> 
                    
                
                </article> 
                
                
                <article class="col-block">
                    
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                                <img src="images/products/9939811322c2875e0f3b182400ebdfd3106c4e4ad.jpg" 
                                     srcset="images/products/9939811322c2875e0f3b182400ebdfd3106c4e4ad.jpg 1x, images/products/9939811322c2875e0f3b182400ebdfd3106c4e4ad.jpg 2x" alt="">
                        </div>
        
                        <div class="item-entry__text">    
                          
    
                            <h1 class="item-entry__title"><a href="#">القطن   </a></h1>
                                
                        </div>
                    </div> 
                    
                
                </article> 
                
                <article class="col-block">
                    
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                                <img src="images/products/356aeaf33869e1445bcaebd516f495bc.jpg" 
                                     srcset="images/products/356aeaf33869e1445bcaebd516f495bc.jpg 1x, images/products/356aeaf33869e1445bcaebd516f495bc.jpg 2x" alt="">
                        </div>
        
                        <div class="item-entry__text">
                 
                            <h1 class="item-entry__title"><a href="#">الفول السوداني</a></h1>
                        </div>
                    </div>
                    
                
                </article>
                
        
        <p>بعض المنتجات الغابية : </p>
            <div class="entries">

                
                <article class="col-block">
                    
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                                <img src="images/products/q.jpg" 
                                     srcset="images/products/q.jpg 1x, images/products/q.jpg 2x" alt="">
                        </div>
        
                        <div class="item-entry__text">
                          
    
                            <h1 class="item-entry__title"><a href="#">الفحم </a></h1>
                            
                        </div>
                    </div> 
                    
                
                </article> 
                
                
                <article class="col-block">
                    
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                                <img src="images/products/g_arabiquejpg.jpg" 
                                     srcset="images/products/g_arabiquejpg.jpg 1x, images/products/g_arabiquejpg.jpg 2x" alt="">
                        </div>
        
                        <div class="item-entry__text">    
                          
    
                            <h1 class="item-entry__title"><a href="#">صمغ الهشاب   </a></h1>
                                
                        </div>
                    </div> 
                    
                
                </article> 
                
                <article class="col-block">
                    
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                                <img src="images/products/baobab-fruit-feature-881x529.jpg" 
                                     srcset="images/products/baobab-fruit-feature-881x529.jpg 1x, images/products/baobab-fruit-feature-881x529.jpg 2x" alt="">
                        </div>
        
                        <div class="item-entry__text">
                 
                            <h1 class="item-entry__title"><a href="#">قنقوليس</a></h1>
                        </div>
                    </div>
                    
                
                </article>
            
             <!-- end entries -->

        </div>
        
         <!-- end entries-wrap -->

         
            </div>

        </div>

    </section>
    
     <!-- end s-content -->

    @endsection
    