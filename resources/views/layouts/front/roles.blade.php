@extends('layouts.admin.app')

@section('roles')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Roles</h1>
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
                <a href="{{ url('add-role-view') }}">
                    <button  type="button" class="btn btn-primary container">add role</button>
                </a>
               
                
            </div>
 <!-- /.card-header -->
 <div class="card-body">
    <table id="example2" class="table table-bordered table-hover">
      <thead>
      <tr>
        <th>role name</th>
        
        <th>edit</th>
        <th>delete</th>
        
        
      </tr>
      </thead>
      <tbody>
      @foreach ($roles as $role)
      <tr>
        <td>{{$role->name}}</td>
        
        <td>
            <a href="{{ url('edit-role-view' , ['id' => $role->id]) }}">
                <button type="button" class="btn btn-success">edit</button>
            </a>
            
        </td>
        <td>
            <a href="{{ url('/') }}">
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