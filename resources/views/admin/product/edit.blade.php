@extends('admin.layout.master')
	@section('header')
    <link rel="stylesheet" href="{{ asset('static/plugins/datatables/dataTables.bootstrap4.css') }}">
	  <style type="text/css">
        .table_list {
            list-style: none;
            padding: 3px;
            margin-left: -30px;
        } 
    </style> 
  @endsection

	@section('body')
		<div class="row">
    <div class="col-md-12">
       <div class="card card-primary">
            <div class="card-header with-border">
              <h3 class="card-title">Add Product</h3>
            </div>
            <form role="form" action="{{ route('product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT')}}
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control"  
                      placeholder="Enter Product" 
                      name="name" 
                      value="{{ $product->name }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Slug</label>
                  <input type="text" class="form-control"  
                      placeholder="Enter Slug" 
                      name="slug"
                      value="{{ $product->slug }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                 <textarea   name="description" class="form-control">{{ $product->description }}</textarea>
                
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Stock</label>
                  <input type="number" class="form-control"  
                      placeholder="Enter your Stock" 
                      name="stock"
                      value="{{ $product->stock }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Price</label>
                  <input type="number" class="form-control"  
                      placeholder="Enter your Price" 
                      name="price"
                      value="{{ $product->price }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Category</label>
                  <select class="form-control" name="category_id">
                     @foreach($categorys as $category)
                        <option 
                        @if($product->category_id ==  $category->id)
                          selected="selected" 
                        @endif
                        value="{{ $category->id }}">{{ $category->name }}</option>
                        @foreach($category ->children as $sub)
                        <option 
                        @if ($product->category_id == $sub->id )
                          selected="selected" 
                        @endif
                        value="{{ $sub->id }}"> - {{ $sub->name }}</option>
                        @endforeach
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Photo</label>
                  <div class="row">
                  <div class="col-md-6">
                      <input type="file" class="form-control" name="file">
                  </div>
                    <div class="col-md-6">
                     <img src="{{ url($product->photo) }}" width="150px">
                     <input type="hidden" name="tmp_image" value="{{ $product->photo }}">
                  </div>
                </div>
              </div>
              </div>
              
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
    </div>
  </div>

      
	@endsection

	@section('footer')
      <script src="{{ asset('static/plugins/datatables/jquery.dataTables.js') }}"></script>
      <script src="{{ asset('static/plugins/datatables/dataTables.bootstrap4.js') }}"></script>

      <script>
    $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
	@endsection

@show