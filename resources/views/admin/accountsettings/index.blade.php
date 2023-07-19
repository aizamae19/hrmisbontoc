
@extends('layouts.default')

@section('content')

            <div class="message"></div>
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor"><i class="fa fa-cogs"></i> Account Settings</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active"> Account Settings</li>
                    </ol>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white"> Account Settings  </h4>
                            </div>
                            <div class="card-body">
                                <div class="table_body">
                                    <form action="Add_Settings" id="fileUploadForm"  method="post" enctype="multipart/form-data" accept-charset="utf-8">
                                        <div class="form-group clearfix">
                                            <label for="" class="col-md-3">Upload site logo</label>
                                            <div class="col-md-9">
                                                <div class="file_prev inb">
                                                    <img src="http://localhost/HRSystem-CI/assets/images/hrtag.png" height="100" width="167">
                                                    </div>
                                                <label for="img_url" class="custom-file-upload"><i class="fa fa-camera" aria-hidden="true"></i> Upload Logo</label>
                                                <input type="file" value="" class="" id="img_url" name="img_url" aria-describedby="fileHelp">
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label for="title" class="col-md-3">Site Title</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="title" value="H R System (CI)" id="title" placeholder="Title..." required minlength="7" maxlength="120">
                                            </div>
                                        </div>                                    
                                        <div class="form-group clearfix">
                                            <label for="description" class="col-md-3">Description</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" id="description" value="Just a demo description and nothing else!" name="description" rows="6" required minlength="20" maxlength="512">Just a demo description and nothing else!</textarea>
                                            </div>                                        
                                        </div>                                                                
                                        <div class="form-group clearfix">
                                            <label for="copyright" class="col-md-3">Copyright</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="copyright" value="GenIT" id="copyright" placeholder="copyright...">
                                            </div>
                                        </div>                                
                                        <div class="form-group clearfix">
                                            <label for="contact" class="col-md-3">Contact</label>
                                            <div class="col-md-9">
                                                <input type="number" class="form-control" name="contact" value="0001110000" id="contact" placeholder="contact...">
                                            </div>
                                        </div>                                    
                                        <div class="form-group clearfix">
                                            <label for="currency" class="col-md-3">Currency</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="currency" value="USD" id="currency" placeholder="currency...">
                                            </div>
                                        </div>                                    
                                        <div class="form-group clearfix">
                                            <label for="currency" class="col-md-3">Symbol</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="symbol" value="$" id="symbol" placeholder="symbol...">
                                            </div>
                                        </div>                                    
                                        <div class="form-group clearfix">
                                            <label for="email" class="col-md-3">System Email</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="email" id="email" value="contact@hrms.abc" placeholder="email...">
                                            </div>
                                        </div>                                    
                                        <div class="form-group clearfix">
                                            <label for="address" class="col-md-3">Address</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="address" id="address" value="102 Blue St" placeholder="address...">
                                            </div>
                                        </div>                                    
                                        <div class="form-group clearfix">
                                            <label for="address" class="col-md-3">Address 2</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="address2" id="address2" value="1102 Blecker St" placeholder="address more...">
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <div class="col-md-9 col-md-offset-3">
                                                <input type="hidden" name="id" value="1"/>
                                                <button type="submit" name="submit" id="btnSubmit" class="btn btn-success">Submit</button>
                                                <span class="flashmessage"></span>
                                            </div>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

@endsection