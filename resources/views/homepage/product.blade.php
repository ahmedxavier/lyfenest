@extends('homepage.index')
@section('header')
    <title>Lyfnest</title>

@endsection
@section('slide')
  <!-- @include('homepage.layout.slider') -->
@endsection
@section('contents')
 <div class="products">
    <div class="container">
      <div class="row">
        <div class="col">
          
          <div class="product_grid">

            <!-- Product -->
            @foreach($products as $product)
            <div class="product">
              <div class="product_image"> 
                <a href="{{ url('product/detail/'.$product->slug) }}"><img src="{{ url($product->photo) }}" alt="">
                </div>
              <div class="product_extra product_new"><a href="categories.html">New</a></div>
              <div class="product_content">
                <div class="product_title">
                  <a href="product.html">{{ $product->name }}</a>
                </div>
                <div class="product_price">
                    Rp. {{ number_format($product->price) }}
                </div>
              </div>
            </div>
            @endforeach
            

          </div>
            
        </div>
      </div>
    </div>
  </div>

@endsection

@section('footer')

@endsection
@show