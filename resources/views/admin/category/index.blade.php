@extends('admin.layouts.app')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Category</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Category</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
            <div class="create-button text-right mb-2 ml-3">

            
            <a href="{{ route('category.create') }}" class="">
            <button class="btn btn-primary"> + Create</button>
          </a>
        </div>
      
    
                  
         <table  class="table table-bordered datatable" >
                <thead>
                <tr>
                    <th>#SL</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
               
                 
                
                 @foreach ($category as $key => $cat)
                 <tr class="even">
                    <td class="sorting_1 dtr-control">{{++$key  }}</td>
                    <td>{{ $cat->name }}</td>
                    <td>action</td>
                   
                  </tr>
                 @endforeach
            
            </tbody>
              
              </table>
           
            <!-- /.card-body -->
          
          <!-- /.card -->

        
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
@endsection