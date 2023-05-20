
@extends('layout')
@section('content')
<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images p-3">
                            <div class="text-center p-4"> <img id="main-image" src="{{asset($product->image)}}" width="250" /> </div>
                            <div class="thumbnail text-center"> <img onclick="change_image(this)" src="https://i.imgur.com/Rx7uKd0.jpg" width="70"> <img onclick="change_image(this)" src="https://i.imgur.com/Dhebu4F.jpg" width="70"> </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            
                            <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">Orianz</span>
                                <h5 class="text-uppercase">{{$product->name}}</h5>
                                <div class="price d-flex flex-row align-items-center"> <span class="act-price">${{$product->price}}</span>
                                    <div class="ml-2"> <small class="dis-price">$59</small> <span>40% OFF</span> </div>
                                </div>
                            </div>
                            <p class="about">{{$product->description}}</p>
                           
                             <button class="btn btn-danger text-uppercase mr-2 px-4">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5 mb-5">

            <div class="row height d-flex justify-content-center align-items-center">

              <div class="col-md-7">

                <div class="card">

                  <div class="p-3">

                    <h6>Comments</h6>
                    
                  </div>

                  <div class="mt-3 d-flex flex-row align-items-center p-3 form-color">

                    <img src="https://i.imgur.com/zQZSWrt.jpg" width="50" class="rounded-circle mr-2">
                    <form action="/detail/store" method="post">
                        @csrf
                        <input type="text" name="content" class="form-control" placeholder="Enter your comment...">
                        <input type="hidden" value="1" name="user_id">
                        <input type="hidden" value="{{$product->id}}" name="product_id">
                        <button type="submit" class="btn btn-primary">POST</button>
                    </form>
                  </div>

                @foreach($comments as $value)
                  <div class="mt-2">

                    <div class="d-flex flex-row p-3">

                      <img src="" width="40" height="40" class="rounded-circle mr-3">

                      <div class="w-100">

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex flex-row align-items-center">
                              <span class="mr-2">Brian selter</span>
                            </div>
                      </div>

                      <p class="text-justify comment-text mb-0">{{$value->content }}</p>
                      
                    </div>
                    

                  </div>
                @endforeach

                  
                  
                </div>
                
              </div>
              
            </div>
            </div>
            
          </div>
@endsection