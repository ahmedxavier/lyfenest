@extends('admin.layout.master')
	@section('header')
		
	@endsection

	@section('body')
<section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none">Project Tugas Akhir E-Commerce</h3>
              <div class="col-12">
                <img src="{{ asset ('static/dist/img/ecom.svg') }}" class="product-image" alt="Product Image">
              </div>
              <div class="col-12 product-image-thumbs">
                <div class="product-image-thumb active"><img src="{{ asset ('static/dist/img/AdminLTELogo.png') }}" alt="Product Image"></div>
                
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">Project Tugas Akhir E-Commerce</h3>
              <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae condimentum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed posuere, purus at efficitur hendrerit, augue elit lacinia arcu, a eleifend sem elit et nunc. Sed rutrum vestibulum est, sit amet cursus dolor fermentum vel. Suspendisse mi nibh, congue et ante et, commodo mattis lacus. Duis varius finibus purus sed venenatis. Vivamus varius metus quam, id dapibus velit mattis eu. Praesent et semper risus. Vestibulum erat erat, condimentum at elit at, bibendum placerat orci. Nullam gravida velit mauris, in pellentesque urna pellentesque viverra. Nullam non pellentesque justo, et ultricies neque. Praesent vel metus rutrum, tempus erat a, rutrum ante. Quisque interdum efficitur nunc vitae consectetur. Suspendisse venenatis, tortor non convallis interdum, urna mi molestie eros, vel tempor justo lacus ac justo. Fusce id enim a erat fringilla sollicitudin ultrices vel metus. </p>

              <hr>
              <h4>Muhammad Aldhi Zulkifli (10516076)</h4>
              <h4>Emilkhanh Ahmed Xavier (10516047)</h4>

              <div class="bg-black py-2 px-3 mt-4">
                <h2 class="mb-0">
                  Stay positive work hard, make it happen.
                </h2>
                <h4></h4>
              </div>

            </div>
          </div>
          
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
	@endsection

	@section('footer')

	@endsection

@show