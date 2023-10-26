<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start  container-xxl ">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content" data-select2-id="select2-data-kt_content">
        <!--begin::Products-->
        <div class="card card-flush" data-select2-id="select2-data-125-bg6t">
            <!--begin::Card header-->
            {{-- <div class="card-header align-items-center py-5 gap-2 gap-md-5" data-select2-id="select2-data-124-ak03">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4"><span class="path1"></span><span
                                class="path2"></span></i> <input type="text" data-kt-ecommerce-product-filter="search"
                            class="form-control form-control-solid w-250px ps-12" placeholder="Search Product">
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Card title-->

                <!--begin::Card toolbar-->
                <div class="card-toolbar flex-row-fluid justify-content-end gap-5"
                    data-select2-id="select2-data-123-i36y">
                    <div class="w-100 mw-150px" data-select2-id="select2-data-122-cc5m">
                        <!--begin::Select2-->
                        <select class="form-select form-select-solid select2-hidden-accessible" data-control="select2"
                            data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-product-filter="status"
                            data-select2-id="select2-data-10-hnsa" tabindex="-1" aria-hidden="true"
                            data-kt-initialized="1">
                            <option data-select2-id="select2-data-12-fam4"></option>
                            <option value="all" data-select2-id="select2-data-127-eiqy">All</option>
                            <option value="published" data-select2-id="select2-data-128-z31o">Published</option>
                            <option value="scheduled" data-select2-id="select2-data-129-8y86">Scheduled</option>
                            <option value="inactive" data-select2-id="select2-data-130-t4r4">Inactive</option>
                        </select><span
                            class="select2 select2-container select2-container--bootstrap5 select2-container--below"
                            dir="ltr" data-select2-id="select2-data-11-2336" style="width: 100%;"><span
                                class="selection"><span
                                    class="select2-selection select2-selection--single form-select form-select-solid"
                                    role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-disabled="false" aria-labelledby="select2-p773-container"
                                    aria-controls="select2-p773-container"><span class="select2-selection__rendered"
                                        id="select2-p773-container" role="textbox" aria-readonly="true"
                                        title="Status"><span
                                            class="select2-selection__placeholder">Status</span></span><span
                                        class="select2-selection__arrow" role="presentation"><b
                                            role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                aria-hidden="true"></span></span>
                        <!--end::Select2-->
                    </div>

                    <!--begin::Add product-->
                    <a href="add-product.html" class="btn btn-primary">
                        Add Product
                    </a>
                    <!--end::Add product-->
                </div>
                <!--end::Card toolbar-->
            </div> --}}
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body pt-0">

                <!--begin::Table-->
                <div id="kt_ecommerce_products_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="table-responsive">
                        {{-- <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                      id="kt_datatable_example_1">
                      <thead>
                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                            <th class="min-w-200px sorting">a</th>
                            <th class="min-w-200px sorting">a</th>
                            <th class="min-w-200px sorting">a</th>
                            <th class="min-w-200px sorting">a</th>
                            <th class="min-w-200px sorting">a</th>
                        </tr>
                      </thead>
                   
                      </table> --}}
                        <!--begin::Wrapper-->
                        {{-- <div class="d-flex flex-stack mb-5">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6"><span
                                        class="path1"></span><span class="path2"></span></i>
                                <input type="text" data-kt-docs-table-filter="search"
                                    class="form-control form-control-solid w-250px ps-15"
                                    placeholder="Search Customers" />
                            </div>
                            <!--end::Search-->

                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
                                <!--begin::Filter-->
                                <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="tooltip"
                                    title="Coming Soon">
                                    <i class="ki-duotone ki-filter fs-2"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    Filter
                                </button>
                                <!--end::Filter-->

                                <!--begin::Add customer-->
                                <button type="button" class="btn btn-primary" data-bs-toggle="tooltip"
                                    title="Coming Soon">
                                    <i class="ki-duotone ki-plus fs-2"></i>
                                    Add Customer
                                </button>
                                <!--end::Add customer-->
                            </div>
                            <!--end::Toolbar-->

                            <!--begin::Group actions-->
                            <div class="d-flex justify-content-end align-items-center d-none"
                                data-kt-docs-table-toolbar="selected">
                                <div class="fw-bold me-5">
                                    <span class="me-2" data-kt-docs-table-select="selected_count"></span> Selected
                                </div>

                                <button type="button" class="btn btn-danger" data-bs-toggle="tooltip"
                                    title="Coming Soon">
                                    Selection Action
                                </button>
                            </div>
                            <!--end::Group actions-->
                        </div> --}}
                        <!--end::Wrapper-->

                        <!--begin::Datatable-->
                        <table id="kt_datatable_example_1" class="table align-middle table-row-dashed fs-6 gy-5">
                            <thead>
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="w-10px pe-2">
                                        No
                                     </th>
                                    <th>Customer Name</th>
                                    <th>Email</th>
                                    <th>Alert</th>
                                    <th class="min-w-100px">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 fw-semibold">
                            </tbody>

                            <div id="kt_datatable_example_1_processing" class="dataTables_processing"
                                style="display: none;"><span
                                    class="spinner-border w-15px h-15px text-muted align-middle me-2"></span> <span
                                    class="text-gray-600">Loading...</span>
                                <div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                        </table>
                        <!--end::Datatable-->
                    </div>

                </div>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Products-->
    </div>
    <!--end::Post-->
</div>
