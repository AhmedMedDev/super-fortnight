<x-admin-master>

    @section('content')
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Products</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="index.html">Products</a>
                                </li>
                                <li class="breadcrumb-item active">Create
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">


                <section class="formatter" id="formatter">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Create</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form method="POST" action="#" enctype="multipart/form-data">
                                            @csrf
                                            <div class="center-block" >

                                                <div class="form-group col-6 center-block">
                                                    <label for="name">Name </label>
                                                    <input type="text" name="name" class="form-control   @error('name') is-invalid @enderror" id="name" placeholder="Enter name"  required>
                                                    @error('name')
                                                    <div class="invalid-feedback">{{$message}}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group  col-6 center-block">
                                                    <label for="price">Price</label>
                                                    <input type="text" name="price" class="form-control  @error('price') is-invalid @enderror" id="price" placeholder="Enter price" required>
                                                    @error('price')
                                                    <div class="invalid-feedback">{{$message}}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group  col-6 center-block">
                                                    <label for="car type" >{{ __('Product category') }}</label>

                                                    <div>
                                                        <select class="selectpicker form-control" data-show-subtext="false" data-live-search="true" data-parsley-required="true"   id="car_type_id" name="car_type_id" required>
                                                            <option disabled selected > Select category</option>

                                                            <option value="1">category1</option>
                                                            <option value="1">category2</option>
                                                            <option value="1">category3</option>

                                                        </select>
                                                        @error('car_type_id')
                                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>



                                            <button  type="submit"  id="submit"  class="btn-warning center-block">Add</button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>            </div>
        </div>
    @endsection
</x-admin-master>
