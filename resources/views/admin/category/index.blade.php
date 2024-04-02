@extends('layouts.default')

@section('content')
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                        <h1 class="m-0"><img src="{{asset('assets/img/category.png')}}" width="40"> Category</h1>
                  </div>
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Category</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
         <section class="content">
            <div class="container-fluid">
               <div class="card card-info">
                  <form>
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="card-header">
                                 <span class="fa fa-file"> Category Information</span>
                              </div>
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label>Category Name</label>
                                       <input type="text" class="form-control" placeholder="Category Name">
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label>Description</label>
                                      <textarea class="form-control" placeholder="Description"></textarea>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <button type="submit" class="btn btn-primary">Save</button>
                              </div>
                  </form>
               </div>

               <div class="col-md-8" style="border-left: 1px solid #ddd;">
                  <table id="example1" class="table table-bordered table-hover">
                     <thead>
                        <tr>
                           <th>Category Name</th>
                           <th>Description</th>
                           <th class="text-center">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>CATEGORY-1</td>
                           <td>Description</td>
                           <td class="text-center">
                                 <a class="btn btn-sm btn-success" href="#" data-toggle="modal" data-target="#edit"><i
                                       class="fa fa-edit"></i> update</a>
                                 <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#delete"><i
                                       class="fa fa-trash-alt"></i> delete</a>
                              </td>
                        </tr>
                        <tr>
                           <td>CATEGORY-2</td>
                           <td>Description</td>
                           <td class="text-center">
                                 <a class="btn btn-sm btn-success" href="#" data-toggle="modal" data-target="#edit"><i
                                       class="fa fa-edit"></i> update</a>
                                 <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#delete"><i
                                       class="fa fa-trash-alt"></i> delete</a>
                              </td>
                        </tr>
                        <tr>
                           <td>CATEGORY-3</td>
                           <td>Description</td>
                           <td class="text-center">
                                 <a class="btn btn-sm btn-success" href="#" data-toggle="modal" data-target="#edit"><i
                                       class="fa fa-edit"></i> update</a>
                                 <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#delete"><i
                                       class="fa fa-trash-alt"></i> delete</a>
                              </td>
                        </tr>
                        </tbody>
                  </table>
               </div>
            </div>
      </div>

   </div>
   </div>
   </div>
   </section>
@endsection