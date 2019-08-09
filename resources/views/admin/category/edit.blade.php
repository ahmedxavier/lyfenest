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
      <div class="col-md-11">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Input Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route('category.update',$category->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT')}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control"  placeholder="Masukan Category" name="name" value="{{ $category->name }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slug</label>
                    <input type="text" class="form-control"  placeholder="Masukan Slug" name="slug" value="{{ $category->slug }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Icon</label>
                    <input type="text" class="form-control"  placeholder="Masukan Icon Font Awesome" name="icon" value="{{ $category->icon }}">
                  </div>
                  <div class="form-group">
                   @if($category->parent_id ==null)
                        <input type="hidden" name="parent_id" value="">
                      @else
                       <label for="exampleInputPassword1">Parent Caegory</label>
                       <select class="form-control" name="parent_id">
                          @foreach($categorys as $cas)
                          <option value="{{ $cas->id }}"
                              @if($cas->id == $category->parent_id)
                              selected="selected"
                              @endif
                               >{{ $cas->name }}</option>
                          @endforeach
                         </select>
                      @endif
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
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