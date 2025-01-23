@extends('admin.components.form')
@section('form_action', route('products.store'))
@section('form_type', 'POST')
@section('fields_content')

    <div class="page-body">

        <!-- New Product Add Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="row">
                        <div class="col-sm-8 m-auto">

                            @include('admin.components.designIssue')

                            <div class="card card-custom mb-2">
                                <div class="card-header card-header-tabs-line">
                                    @include('admin.components.breadcrumb', ['module' => 'products', 'action' => 'create'])
                                </div>
                                <div class="card-toolbar px-3">
                                    <ul class="nav nav-tabs nav-bold nav-tabs-line">
                                        @foreach (config('translatable.locales') as $key => $locale)
                                            <li class="nav-item">
                                                <a class="nav-link  @if ($key == 0) active @endif" data-toggle="tab"
                                                    href="{{ '#' . $locale }}">@lang('general.' . $locale)</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        @foreach (config('translatable.locales') as $key => $locale)
                                            <div class="tab-pane fade show @if ($key == 0) active @endif"
                                                id="{{ $locale }}" role="tabpanel">
                                                <div class="form-group">
                                                    <label>{{__('general.title')}}- @lang('general.' . $locale)<span class="text-danger"> * </span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                                        </div>
                                                        <input type="text" name="{{ $locale . '[title]' }}"
                                                            placeholder="{{__('general.title')}}"
                                                            class="form-control @error('') invalid @enderror  pl-1 min-h-40px @error($locale . '.title') is-invalid @enderror"
                                                            value="{{ old($locale . '.title') }}">
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                {{-- // TODO(boula): organize inputs according to client needs easy --}}
                            </div>




                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Description</h5>
                                    </div>

                                    <form class="theme-form theme-form-2 mega-form">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row">
                                                    <label class="form-label-title col-sm-3 mb-0">Product
                                                        Description</label>
                                                    <div class="col-sm-9">
                                                        <div id="editor"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Product Images</h5>
                                    </div>

                                    <form class="theme-form theme-form-2 mega-form">
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Images</label>
                                            <div class="col-sm-9">
                                                <input class="form-control form-choose" type="file" id="formFile"
                                                    multiple>
                                            </div>
                                        </div>

                                        <div class="row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Thumbnail
                                                Image</label>
                                            <div class="col-sm-9">
                                                <input class="form-control form-choose" type="file"
                                                    id="formFileMultiple1" multiple>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Product variations</h5>
                                    </div>

                                    <form class="theme-form theme-form-2 mega-form">
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Product
                                                Name</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" placeholder="Product Name">
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Option
                                                Name</label>
                                            <div class="col-sm-9">
                                                <select class="js-example-basic-single w-100" name="state">
                                                    <option>Color</option>
                                                    <option>Size</option>
                                                    <option>Material</option>
                                                    <option>Style</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Option
                                                Value</label>
                                            <div class="col-sm-9">
                                                <div class="bs-example">
                                                    <input type="text" class="form-control"
                                                        placeholder="Type tag & hit enter" id="#inputTag"
                                                        data-role="tagsinput">
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <a href="#" class="add-option"><i class="ri-add-line me-2"></i> Add Another
                                        Option</a>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Shipping</h5>
                                    </div>

                                    <form class="theme-form theme-form-2 mega-form">
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Weight
                                                (kg)</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="number" placeholder="Weight">
                                            </div>
                                        </div>

                                        <div class="row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Dimensions
                                                (cm)</label>
                                            <div class="col-sm-9">
                                                <select class="js-example-basic-single w-100" name="state">
                                                    <option>Length</option>
                                                    <option>Width</option>
                                                    <option>Height</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Product Price</h5>
                                    </div>

                                    <form class="theme-form theme-form-2 mega-form">
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 form-label-title">price</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="number" placeholder="0">
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 form-label-title">Compare at
                                                price</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="number" placeholder="0">
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 form-label-title">Cost per item</label>
                                            <div class="col-sm-5">
                                                <input class="form-control" type="number" placeholder="0">
                                            </div>
                                            <div class="col-sm-2">
                                                <label>Margin:</label>
                                                <span>25%</span>
                                            </div>
                                            <div class="col-sm-2">
                                                <label>Profit:</label>
                                                <span>$5</span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Product Inventory</h5>
                                    </div>

                                    <form class="theme-form theme-form-2 mega-form">
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">SKU</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Stock
                                                Status</label>
                                            <div class="col-sm-9">
                                                <select class="js-example-basic-single w-100" name="state">
                                                    <option>In Stock</option>
                                                    <option>Out Of Stock</option>
                                                    <option>On Backorder</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                    <table class="table variation-table table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col">Variant</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">SKU</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Red</td>
                                                <td>
                                                    <input class="form-control" type="number" placeholder="0">
                                                </td>
                                                <td>
                                                    <input class="form-control" type="number" placeholder="0">
                                                </td>
                                                <td>
                                                    <input class="form-control" type="number" placeholder="0">
                                                </td>
                                                <td>
                                                    <ul class="order-option">
                                                        <li><a href="javascript:void(0)" data-toggle="modal"
                                                                data-target="#deleteModal"><i
                                                                    class="ri-delete-bin-line"></i></a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Blue</td>
                                                <td>
                                                    <input class="form-control" type="number" placeholder="0">
                                                </td>
                                                <td>
                                                    <input class="form-control" type="number" placeholder="0">
                                                </td>
                                                <td>
                                                    <input class="form-control" type="number" placeholder="0">
                                                </td>
                                                <td>
                                                    <ul class="order-option">
                                                        <li><a href="javascript:void(0)" data-toggle="modal"
                                                                data-target="#deleteModal"><i
                                                                    class="ri-delete-bin-line"></i></a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Link Products</h5>
                                    </div>

                                    <form class="theme-form theme-form-2 mega-form">
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Upsells</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="search">
                                            </div>
                                        </div>

                                        <div class="row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Cross-Sells</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="search">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Search engine listing</h5>
                                    </div>

                                    <div class="seo-view">
                                        <span class="link">https://fastkart.com</span>
                                        <h5>Buy fresh vegetables & Fruits online at best price</h5>
                                        <p>Online Vegetable Store - Buy fresh vegetables & Fruits online at best
                                            prices. Order online and get free delivery.</p>
                                    </div>

                                    <form class="theme-form theme-form-2 mega-form">
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Page title</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="search" placeholder="Fresh Fruits">
                                            </div>
                                        </div>

                                        <div class="mb-4 row">
                                            <label class="form-label-title col-sm-3 mb-0">Meta
                                                description</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label class="form-label-title col-sm-3 mb-0">URL handle</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="search"
                                                    placeholder="https://fastkart.com/fresh-veggies">
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="card-submit-button">
                                    <button class="btn btn-animation ms-auto" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- New Product Add End -->
    </div>

@endsection


