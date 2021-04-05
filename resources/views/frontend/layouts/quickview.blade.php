@extends('frontend.layouts.main')
@section('content')
    <main>
        <div class="container w-100" style="padding-top: 100px;">
            <div class="main-title">
                <a href="index.html">Home / Shop / I'm Product</a>
                <a href="#"> < Prev | Next ></a>
            </div>
            <div class="row" style="padding-top: 50px;">
                <div class="col-lg-6 col-sm-12">
                    <div class="product">
                        <img src="./assets/images/slide/5.jpg" alt="sp" style="width:100%;">
                        <p>I'm a product description. I'm a great place to add more details about your product such as sizing, material, care instructions and cleaning instructions.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="product-item">
                        <p>Lola Pants</p>
                        <p>SKU: 001</p>
                        <p>$85.00</p>
                        <label for="exampleInputEmail1" style="font-size: 13px; color:#575757;">Size</label>
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 345px; text-align: start; font-size: 16px; color:#575757;">
                              Select<i style="padding-left: 255px;"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width: 355px;">
                              <a class="dropdown-item" href="#">Small</a>
                              <a class="dropdown-item" href="#">Medium</a>
                              <a class="dropdown-item" href="#">Large</a>
                            </div>
                        </div>
                        <form>
                            <div class="form-group">
                              <label for="exampleFormControlInput1" style="font-size: 13px; color:#575757; padding-top: 5px;">Quantity</label>
                              <input type="number" class="form-control" id="quantity" min="1" max="100" placeholder="1" style="width: 75px;">
                        </div>
                        <div class="product-item-add">
                            <a href="#">Add to Cart</a>
                            <a href="#"><i class="far fa-heart" style="font-size: 20px;"></i></a>
                        </div>
                        <div class="product-item-buy">
                            <a href="#">Buy Now</a>
                        </div>
                    </div>
                    <div class="product-item-content" style="padding-top: 30px;">
                        <button type="button" class="btn btn-light" data-toggle="collapse" data-target="#demo" style="background-color:white; padding-top: 10px;">PRODUCT INFO <i style="padding-left: 190px;">-</i></button>
                        <hr style="width:65%; background-color:#ccc">
                        <div id="demo" class="collapse">
                            I'm a product detail. I'm a great place to add more information <br> about your product such as sizing, material, care and cleaning <br> instructions. This is also a great space to write what makes this <br> product special and how your customers can benefit from this item.
                        </div>
                        <button type="button" class="btn btn-light" data-toggle="collapse" data-target="#demo1" style="background-color:white; padding-top: 20px;">RETURN & REFUND POLICY<i style="padding-left: 98px;">-</i></button>
                        <hr style="width:65%; background-color:#ccc">
                        <div id="demo1" class="collapse">
                            I’m a Return and Refund policy. I’m a great place to let your <br> customers know what to do in case they are dissatisfied with their <br> purchase. Having a straightforward refund or exchange policy is a <br> great way to build trust and reassure your customers that they can <br> buy with confidence.
                        </div>
                        <button type="button" class="btn btn-light" data-toggle="collapse" data-target="#demo2" style="background-color:white;">SHIPPING INFO <i style="padding-left: 190px;">-</i></button>
                        <div id="demo2" class="collapse">
                            I'm a shipping policy. I'm a great place to add more information <br> about your shipping methods, packaging and cost. Providing <br> straightforward information about your shipping policy is a great <br> way to build trust and reassure your customers that they can buy <br> from you with confidence.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
 @endsection