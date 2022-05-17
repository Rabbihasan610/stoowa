@extends('layouts.backend_master')

@section('title')
  Category
@endsection



@section('backend')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Banner Form </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="dropdown-item" href="#">Settings 1</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br>
                            <form method="POST" action="{{ route('category.store')}}" enctype="multipart/form-data" id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                                @csrf
    
                                <div class="item form-group">
                                    <label class="col-form-label col-md-5 col-sm-3 label-align" for="first-name">Category Name<span class="required">*</span>
                                    </label>
                                    <div class="col-md-7 col-sm-6 ">
                                        <input type="text" id="first-name" name="category_name" required="required" class="form-control ">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-5 col-sm-3 label-align" for="first-name">Parent Category Name<span class="required">*</span>
                                    </label>
                                    <div class="col-md-7 col-sm-6 ">
                                       <select name="par_cat_id" id="" class="form-control">
                                           <option value="" selected>----Select Parent Category----</option>

                                           @foreach ($par_cat as $parCat)
                                             <option value="{{ $parCat->id }}">{{ $parCat->parent_category_name }}</option>
                                           @endforeach
                                          
                                       </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-5 col-sm-3 label-align" for="first-name">Description<span class="required">*</span>
                                    </label>
                                    <div class="col-md-7 col-sm-6 ">
                                        <textarea id="first-name" name="description" required="required" class="form-control "></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-5 col-sm-3 label-align" for="first-name">Category Image<span class="required">*</span>
                                    </label>
                                    <div class="col-md-7 col-sm-6 ">
                                        <input type="file" id="first-name" name="cat_img" required="required" class="form-control ">
                                    </div>
                                </div>
                               
                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="col-md-6 col-sm-6 offset-md-3">
                                        <button class="btn btn-primary" type="reset">Reset</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
    
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">

                    <div class="x_panel">
                        <div class="x_title">
                          <h2>Manage Banner</h2>
                          <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="#">Settings 1</a>
                                  <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                          </ul>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
        
                          <table class="table">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Category Name</th>
                                <th>Parent Category</th>
                                <th>Slug</th>
                                <th>Status</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
        
        
                              @forelse ($datas as $data)
        
                              <tr>
                                  <td>{{ $loop->index +1 }}</td>
                                  <td><img width="50" src="{{ asset('storage/category/'.$data->cat_img) }}" alt="{{ $data->category_name }}"></td>
                                  <td>{{ $data->category_name }}</td>
                                  <td>{{ $data->par_cat_id}}</td>
                                  <td>{{ $data->slug }}</td>
                                  <td>{{ $data->status == 1 ? 'Active' : 'Deactive'  }}</td>
                                  <td>
        
                                      <a href="{{ route('category.status',$data->id) }}" class="btn btn-{{ $data->status == 1 ? 'warning' : 'primary' }} btn-sm">{{ $data->status == 1 ? 'Deactive' : 'Active' }}</a>
                                      <a href="{{ route('category.edit', $data->id) }}" class="btn btn-info btn-sm">Edit</a>

                                      <form action="{{ route('category.destroy', $data->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="parmanent-delete btn btn-danger btn-sm">Delete</button>
                                      </form>
                                     
                                  </td>
                              </tr>
                                  
                              @empty

                               <tr>
                                    <td class="text-center text-danger" colspan="10">No data Yet</td>
                               </tr>
                                  
                              @endforelse
                            </tbody>
                          </table>
        
                        </div>
                      </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">

                    <div class="x_panel">
                        <div class="x_title">
                          <h2>Deleted Banner</h2>
                          <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="#">Settings 1</a>
                                  <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                          </ul>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
        
                          <table class="table">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Category Name</th>
                                <th>Parent Category</th>
                                <th>Status</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
        
        
                              @forelse ($datas as $data)
        
                              <tr>
                                  <td>{{ $loop->index +1 }}</td>
                                  <td>{{ $data->category_name }}</td>
                                  <td>
                                    @foreach ($data->CategoryToparCat as  $parCat) 
                                        <span class="badge badge-primary">{{ $parCat->parent_category_name }}</span>
                                           
                                    @endforeach  
                                  </td>
                                  <td>{{ $data->status == 1 ? 'Active' : 'Deactive'  }}</td>
                                  <td>
        
                                    
                                      <a href="" class="btn btn-info btn-sm">Restore</a>
                                      <a href="" class="btn btn-danger btn-sm">Parmanent Delete</a>

                                      
                                     
                                  </td>
                              </tr>
                                  
                              @empty

                               <tr>
                                    <td class="text-center text-danger" colspan="10">No data Yet</td>
                               </tr>
                                  
                              @endforelse
                            </tbody>
                          </table>
        
                        </div>
                      </div>
                </div>
            </div>


        </div>
    </section>








    @if(Session('success'))


            
        <div class="toast toastShow" style="position: absolute; top: 0; right: 0;">
            <div class="toast-header">
              <strong class="mr-auto">{{ config('app.name') }}</strong>
              <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="toast-body">
              <p>{{ Session('success') }}</p>
            </div>
          </div>


    @endif
      


@endsection




@section('backend_js')


        <script>
            $('.toastShow').toast('show');
        </script>

@endsection