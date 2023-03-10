<?php

/*
require '../wp-load.php';

$product = wc_get_product( 3988 );
$p[name] = $product->get_name();
$p[image] = $product->get_image();
$p[price] = $product->get_price();
$p[short_desc] = $product->get_short_description();
$p[desc] = $product->get_description();

//print_r($product->get_image_id());
//print_r($product->get_image());
//print_r($product->get_gallery_image_ids());

$p[img_main] = wp_get_attachment_url($product->get_image_id());
foreach($product->get_gallery_image_ids() as $iid) {
  $p[imgs][] = wp_get_attachment_url($iid);
}
//print_r($p);
*/

include "header.php";
?>

    <section class="product-details">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 py-3 order-2 order-lg-1">
            <div class="owl-carousel owl-theme owl-dots-modern detail-full" data-slider-id="1">
              <div class="detail-full-item" style="background: center center url(<?=$p[img_main];?>) no-repeat; background-size: cover;">     </div>
              <div class="detail-full-item" style="background: center center url(<?=$p[imgs][0];?>) no-repeat; background-size: cover;">     </div>
              <div class="detail-full-item" style="background: center center url(<?=$p[imgs][1];?>) no-repeat; background-size: cover;">     </div>
              <div class="detail-full-item" style="background: center center url(https://d19m59y37dris4.cloudfront.net/sell/2-0-1/img/photo/kyle-loftus-594535-unsplash-detail-3.jpg) no-repeat; background-size: cover;">     </div>
              <div class="detail-full-item" style="background: center center url(https://d19m59y37dris4.cloudfront.net/sell/2-0-1/img/photo/kyle-loftus-594535-unsplash-detail-4.jpg) no-repeat; background-size: cover;">     </div>
            </div>
          </div>
          <div class="d-flex align-items-center col-lg-6 col-xl-5 ps-lg-5 mb-5 order-1 order-lg-2">
            <div>
              <ul class="breadcrumb justify-content-start">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="category.html">Tops and Jackets</a></li>
                <li class="breadcrumb-item active">Modern Jacket</li>
              </ul>
              <h1 class="mb-4"><?=$p[name];?></h1>
              <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between mb-4">
                <ul class="list-inline mb-2 mb-sm-0">
                  <li class="list-inline-item h4 fw-light mb-0"><?=$p[price];?> K??</li>
                  <!--<li class="list-inline-item text-muted fw-light"> 
                    <del>$90.00</del>
                  </li>-->
                </ul>
                <div class="d-flex align-items-center">
                  <ul class="list-inline me-2 mb-0">
                    <li class="list-inline-item me-0"><i class="fa fa-star text-primary"></i></li>
                    <li class="list-inline-item me-0"><i class="fa fa-star text-primary"></i></li>
                    <li class="list-inline-item me-0"><i class="fa fa-star text-primary"></i></li>
                    <li class="list-inline-item me-0"><i class="fa fa-star text-primary"></i></li>
                    <li class="list-inline-item me-0"><i class="fa fa-star text-gray-300"></i></li>
                  </ul><span class="text-muted text-uppercase text-sm">25 reviews</span>
                </div>
              </div>
              <p class="mb-4 text-muted"><?=$p[short_desc];?></p>
              <form action="#">
                <div class="row">
                  <div class="col-sm-6 col-lg-12 detail-option mb-3">
                    <h6 class="detail-option-heading">Size <span>(required)</span></h6>
                    <label class="btn btn-sm btn-outline-secondary detail-option-btn-label" for="size_0"> Small
                      <input class="input-invisible" type="radio" name="size" value="value_0" id="size_0" required>
                    </label>
                    <label class="btn btn-sm btn-outline-secondary detail-option-btn-label" for="size_1"> Medium
                      <input class="input-invisible" type="radio" name="size" value="value_1" id="size_1" required>
                    </label>
                    <label class="btn btn-sm btn-outline-secondary detail-option-btn-label" for="size_2"> Large
                      <input class="input-invisible" type="radio" name="size" value="value_2" id="size_2" required>
                    </label>
                  </div>
                  <div class="col-sm-6 col-lg-12 detail-option mb-3">
                    <h6 class="detail-option-heading">Type <span>(required)</span></h6>
                    <label class="btn btn-sm btn-outline-secondary detail-option-btn-label" for="material_0"> Hoodie
                      <input class="input-invisible" type="radio" name="material" value="value_0" id="material_0" required>
                    </label>
                    <label class="btn btn-sm btn-outline-secondary detail-option-btn-label" for="material_1"> College
                      <input class="input-invisible" type="radio" name="material" value="value_1" id="material_1" required>
                    </label>
                  </div>
                  <div class="col-12 detail-option mb-3">
                    <h6 class="detail-option-heading">Colour <span>(required)</span></h6>
                    <ul class="list-inline mb-0 colours-wrapper">
                      <li class="list-inline-item">
                        <label class="btn-colour" for="colour_Blue" style="background-color: #668cb9"> </label>
                        <input class="input-invisible" type="radio" name="colour" value="value_Blue" id="colour_Blue" required>
                      </li>
                      <li class="list-inline-item">
                        <label class="btn-colour" for="colour_White" style="background-color: #fff"> </label>
                        <input class="input-invisible" type="radio" name="colour" value="value_White" id="colour_White" required>
                      </li>
                      <li class="list-inline-item">
                        <label class="btn-colour" for="colour_Violet" style="background-color: #8b6ea4"> </label>
                        <input class="input-invisible" type="radio" name="colour" value="value_Violet" id="colour_Violet" required>
                      </li>
                      <li class="list-inline-item">
                        <label class="btn-colour" for="colour_Red" style="background-color: #dd6265"> </label>
                        <input class="input-invisible" type="radio" name="colour" value="value_Red" id="colour_Red" required>
                      </li>
                    </ul>
                  </div>
                  <div class="col-12 col-lg-6 detail-option mb-5">
                    <label class="detail-option-heading fw-bold">Items <span>(required)</span></label>
                    <input class="form-control detail-quantity" name="items" type="number" value="1">
                  </div>
                </div>
                <ul class="list-inline">
                  <li class="list-inline-item">
                    <button class="btn btn-dark btn-lg mb-1" type="submit"> <i class="fa fa-shopping-cart me-2"></i>Add to Cart</button>
                  </li>
                  <li class="list-inline-item"><a class="btn btn-outline-secondary mb-1" href="#"> <i class="far fa-heart me-2"></i>Add to wishlist</a></li>
                </ul>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="mt-5">
      <div class="container">
        <ul class="nav nav-tabs flex-column flex-sm-row" role="tablist">
          <li class="nav-item"><a class="nav-link detail-nav-link active" data-bs-toggle="tab" href="#description" role="tab">Description</a></li>
          <li class="nav-item"><a class="nav-link detail-nav-link" data-bs-toggle="tab" href="#additional-information" role="tab">Additional Information</a></li>
          <li class="nav-item"><a class="nav-link detail-nav-link" data-bs-toggle="tab" href="#reviews" role="tab">Reviews</a></li>
        </ul>
        <div class="tab-content py-4">
          <div class="tab-pane active px-3" id="description" role="tabpanel">
            <p class="text-muted"><?=$p[desc];?></p>
            
          </div>
          <div class="tab-pane" id="additional-information" role="tabpanel">
            <div class="row">
              <div class="col-lg-6">
                <table class="table text-sm">
                  <tbody>
                    <tr>
                      <th class="text-uppercase fw-normal border-0">Product #</th>
                      <td class="text-muted border-0">Lorem ipsum dolor sit amet</td>
                    </tr>
                    <tr>
                      <th class="text-uppercase fw-normal ">Available packaging</th>
                      <td class="text-muted ">LOLDuis aute irure dolor in reprehenderit</td>
                    </tr>
                    <tr>
                      <th class="text-uppercase fw-normal ">Weight</th>
                      <td class="text-muted ">dolor sit amet</td>
                    </tr>
                    <tr>
                      <th class="text-uppercase fw-normal ">Sunt in culpa qui</th>
                      <td class="text-muted ">Lorem ipsum dolor sit amet</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-lg-6">
                <table class="table text-sm">
                  <tbody>
                    <tr>
                      <th class="text-uppercase fw-normal border-0">Weight</th>
                      <td class="text-muted border-0">dolor sit amet                                </td>
                    </tr>
                    <tr>
                      <th class="text-uppercase fw-normal ">Sunt in culpa qui</th>
                      <td class="text-muted ">Lorem ipsum dolor sit amet                                </td>
                    </tr>
                    <tr>
                      <th class="text-uppercase fw-normal ">Product #</th>
                      <td class="text-muted ">Lorem ipsum dolor sit amet                                </td>
                    </tr>
                    <tr>
                      <th class="text-uppercase fw-normal ">Available packaging</th>
                      <td class="text-muted ">LOLDuis aute irure dolor in reprehenderit                                </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="reviews" role="tabpanel">
            <div class="row mb-5">
              <div class="col-lg-10 col-xl-9">
                <div class="review d-flex">
                  <div class="flex-shrink-0 text-center me-4 me-xl-5"><img class="review-image" src="https://d19m59y37dris4.cloudfront.net/sell/2-0-1/img/person-1.jpg" alt="Han Solo"><span class="text-uppercase text-muted">Dec 2018</span></div>
                  <div>
                    <h5 class="mt-2 mb-1">Han Solo</h5>
                    <div class="mb-2"><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i>
                    </div>
                    <p class="text-muted">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections     </p>
                  </div>
                </div>
                <div class="review d-flex">
                  <div class="flex-shrink-0 text-center me-4 me-xl-5"><img class="review-image" src="https://d19m59y37dris4.cloudfront.net/sell/2-0-1/img/person-2.jpg" alt="Luke Skywalker"><span class="text-uppercase text-muted">Dec 2018</span></div>
                  <div>
                    <h5 class="mt-2 mb-1">Luke Skywalker</h5>
                    <div class="mb-2"><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-gray-200"></i>
                    </div>
                    <p class="text-muted">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. &quot;What's happened to me?&quot; he thought. It wasn't a dream.     </p>
                  </div>
                </div>
                <div class="review d-flex">
                  <div class="flex-shrink-0 text-center me-4 me-xl-5"><img class="review-image" src="https://d19m59y37dris4.cloudfront.net/sell/2-0-1/img/person-3.jpg" alt="Princess Leia"><span class="text-uppercase text-muted">Dec 2018</span></div>
                  <div>
                    <h5 class="mt-2 mb-1">Princess Leia</h5>
                    <div class="mb-2"><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-gray-200"></i><i class="fa fa-xs fa-star text-gray-200"></i>
                    </div>
                    <p class="text-muted">His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table.     </p>
                  </div>
                </div>
                <div class="review d-flex">
                  <div class="flex-shrink-0 text-center me-4 me-xl-5"><img class="review-image" src="https://d19m59y37dris4.cloudfront.net/sell/2-0-1/img/person-4.jpg" alt="Jabba Hut"><span class="text-uppercase text-muted">Dec 2018</span></div>
                  <div>
                    <h5 class="mt-2 mb-1">Jabba Hut</h5>
                    <div class="mb-2"><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i>
                    </div>
                    <p class="text-muted">Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.     </p>
                  </div>
                </div>
                <div class="py-5 px-3">
                  <h5 class="text-uppercase mb-4">Leave a review</h5>
                  <form class="form" id="contact-form" method="post" action="contact.php">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="mb-4">
                          <label class="form-label" for="name">Your name *</label>
                          <input class="form-control" type="text" name="name" id="name" placeholder="Enter your name" required="required">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="mb-4">
                          <label class="form-label" for="rating">Your rating *</label>
                          <select class="custom-select focus-shadow-0" name="rating" id="rating">
                            <option value="5">&#9733;&#9733;&#9733;&#9733;&#9733; (5/5)</option>
                            <option value="4">&#9733;&#9733;&#9733;&#9733;&#9734; (4/5)</option>
                            <option value="3">&#9733;&#9733;&#9733;&#9734;&#9734; (3/5)</option>
                            <option value="2">&#9733;&#9733;&#9734;&#9734;&#9734; (2/5)</option>
                            <option value="1">&#9733;&#9734;&#9734;&#9734;&#9734; (1/5)</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="email">Your email *</label>
                      <input class="form-control" type="email" name="email" id="email" placeholder="Enter your  email" required="required">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="review">Review text *</label>
                      <textarea class="form-control" rows="4" name="review" id="review" placeholder="Enter your review" required="required"></textarea>
                    </div>
                    <button class="btn btn-outline-dark" type="submit">Post review</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="my-5">
      <div class="container">
        <header class="text-center">
          <h6 class="text-uppercase mb-5">You might also like</h6>
        </header>
        <div class="row">
          <!-- product-->
          <div class="col-lg-2 col-md-4 col-6">
            <div class="product">
              <div class="product-image">
                <div class="ribbon ribbon-info">Fresh</div><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/sell/2-0-1/img/product/serrah-galos-494312-unsplash.jpg" alt="product"/>
                <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="detail.html"></a>
                  <div class="product-hover-overlay-buttons"><a class="btn btn-dark btn-buy" href="detail.html"><i class="fa-search fa"></i><span class="btn-buy-label ms-2">View</span></a>
                  </div>
                </div>
              </div>
              <div class="py-2">
                <p class="text-muted text-sm mb-1">Jackets</p>
                <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="detail.html">White Tee</a></h3><span class="text-muted">$40.00</span>
              </div>
            </div>
          </div>
          <!-- /product-->
          <!-- product-->
          <div class="col-lg-2 col-md-4 col-6">
            <div class="product">
              <div class="product-image"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/sell/2-0-1/img/product/kyle-loftus-590881-unsplash.jpg" alt="product"/>
                <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="detail.html"></a>
                  <div class="product-hover-overlay-buttons"><a class="btn btn-dark btn-buy" href="detail.html"><i class="fa-search fa"></i><span class="btn-buy-label ms-2">View</span></a>
                  </div>
                </div>
              </div>
              <div class="py-2">
                <p class="text-muted text-sm mb-1">Denim</p>
                <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="detail.html">Black blouse</a></h3><span class="text-muted">$40.00</span>
              </div>
            </div>
          </div>
          <!-- /product-->
          <!-- product-->
          <div class="col-lg-2 col-md-4 col-6">
            <div class="product">
              <div class="product-image">
                <div class="ribbon ribbon-primary">Sale</div><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/sell/2-0-1/img/product/kyle-loftus-596319-unsplash.jpg" alt="product"/>
                <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="detail.html"></a>
                  <div class="product-hover-overlay-buttons"><a class="btn btn-dark btn-buy" href="detail.html"><i class="fa-search fa"></i><span class="btn-buy-label ms-2">View</span></a>
                  </div>
                </div>
              </div>
              <div class="py-2">
                <p class="text-muted text-sm mb-1">Accessories</p>
                <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="detail.html">College jacket</a></h3><span class="text-muted">$40.00</span>
              </div>
            </div>
          </div>
          <!-- /product-->
          <!-- product-->
          <div class="col-lg-2 col-md-4 col-6">
            <div class="product">
              <div class="product-image"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/sell/2-0-1/img/product/ethan-haddox-484912-unsplash.jpg" alt="product"/>
                <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="detail.html"></a>
                  <div class="product-hover-overlay-buttons"><a class="btn btn-dark btn-buy" href="detail.html"><i class="fa-search fa"></i><span class="btn-buy-label ms-2">View</span></a>
                  </div>
                </div>
              </div>
              <div class="py-2">
                <p class="text-muted text-sm mb-1">Denim</p>
                <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="detail.html">Carrot-fit jeans</a></h3><span class="text-muted">$40.00</span>
              </div>
            </div>
          </div>
          <!-- /product-->
          <!-- product-->
          <div class="col-lg-2 col-md-4 col-6">
            <div class="product">
              <div class="product-image"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/sell/2-0-1/img/product/serrah-galos-494231-unsplash.jpg" alt="product"/>
                <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="detail.html"></a>
                  <div class="product-hover-overlay-buttons"><a class="btn btn-dark btn-buy" href="detail.html"><i class="fa-search fa"></i><span class="btn-buy-label ms-2">View</span></a>
                  </div>
                </div>
              </div>
              <div class="py-2">
                <p class="text-muted text-sm mb-1">Jackets</p>
                <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="detail.html">Striped T-Shirt</a></h3><span class="text-muted">$40.00</span>
              </div>
            </div>
          </div>
          <!-- /product-->
          <!-- product-->
          <div class="col-lg-2 col-md-4 col-6">
            <div class="product">
              <div class="product-image"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/sell/2-0-1/img/product/averie-woodard-319832-unsplash.jpg" alt="product"/>
                <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="detail.html"></a>
                  <div class="product-hover-overlay-buttons"><a class="btn btn-dark btn-buy" href="detail.html"><i class="fa-search fa"></i><span class="btn-buy-label ms-2">View</span></a>
                  </div>
                </div>
              </div>
              <div class="py-2">
                <p class="text-muted text-sm mb-1">Shirts</p>
                <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="detail.html">Short top</a></h3><span class="text-muted">$40.00</span>
              </div>
            </div>
          </div>
          <!-- /product-->
        </div>
      </div>
    </section>
    <?php
    
    include "footer.php";