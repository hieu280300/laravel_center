@extends('frontend.layouts.main')
@section('content')
    <main>
        <div class="container">
            <div class="title" style="padding-top: 150px;">
                <hr style="width:45%; background-color: black;"> <h1>CONTACT</h1> <hr style="width:45%; background-color: black;">
            </div>
            <div class="main-content">
                <div class="main-content-title">
                    <p>For all order support, please include your order <br> number and date that your order was placed</p>
                </div>
                <div class="main-content-item">
                    <div class="row">
                        <div class="col-lg-4 col-sm-12 col-md-6"></div>
                        <div class="col-lg-4 col-sm-12 col-md-6">
                            <form>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput" style="color:#626362;">Enter Your First Name</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput" style="color:#626362;">Enter Your Last Name</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Last Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" style="color:#626362;">Enter Your Email</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleInputPhone1" style="color:#626362;">Enter Your Phone</label>
                                            <input type="phone" class="form-control" id="exampleInputPhone1" aria-describedby="phoneHelp" placeholder="Phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1" style="color:#626362;">Enter Your Message</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Type your message here..."></textarea>
                                  </div>
                            </form>
                            <div class="main-submit">
                                <a href="#">Submit</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 col-md-6"></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection
  