@extends('layouts.admin.app')

@section('users')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Posts</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">DataTables</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
                <button  type="button" class="btn btn-primary container">create post</button>
            </a>
            </div>
 <!-- /.card-header -->
 <div class="card-body">
    <table id="example2" class="table table-bordered table-hover">
      <thead>
      <tr>
        <th>post title</th>
        <th>show</th>
        <th>edit</th>
        <th>delete</th>
        
        
      </tr>
      </thead>
      <tbody>
      @foreach ($posts as $post)
      <tr>
        <td>{{$post->title}}</td>
        <td> 
            <button type="button" class="btn btn-primary">show</button>

          </a>
        </td>
        <td>
        <a href="{{ route('edit-post-view' , ['id' => $post->id]) }}">

            <button type="button" class="btn btn-success">edit</button>
        </td>
        <td>

            <button type="button" class="btn btn-danger">delete</button>

          </a>
        </td>
        
       
      </tr>
      @endforeach
      
      </tfoot>
    </table>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->

</div>
<!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>

@endsection