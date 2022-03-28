@extends('layouts.nav')

@section('content')
<!--begin::Row-->
<div class="row g-5 g-xl-8">
<!--begin::Tables Widget 11-->
<div class="card mb-1 mb-xl-8" style="background-color: #242263;">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-3 mb-3" style="color: white;">Tampil Data Kulwaru</span>
        </h3>

        {{-- Start Form Search --}}
        {{-- <div class="d-flex align-items-center">
            <!--begin::Input group-->
            <div class="position-relative w-md-150px me-md-2">
                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                <span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
                <input type="text" class="form-control form-control-solid ps-10 h-md-35px" name="search" value="" placeholder="Search" />
            </div>
            <!--end::Input group-->
            <!--begin:Action-->
            <div class="d-flex align-items-center">
                <button type="submit" class="btn btn-primary me-5 ">Search</button>
            </div>
            <!--end:Action-->
        </div> --}}
        {{-- End Form Search --}}

        {{-- Start Form Search --}}
        <form action="{{ url('losarang') }}" method="GET">
        <div class="d-flex align-items-center">

            <!--begin::Input group-->
            <div class="position-relative w-md-155px me-md-2">
                <input type="date" class="form-control" name="">
                {{-- <input type="text" class="form-control form-control-solid ps-10 h-md-35px" name="search" value="" placeholder="Search" /> --}}
            </div>
            <div class="position-relative w-md-155px me-md-2">
                <input type="date" class="form-control" name="">
                {{-- <input type="text" class="form-control form-control-solid ps-10 h-md-35px" name="search" value="" placeholder="Search" /> --}}
            </div>
            <!--end::Input group-->
            <!--begin:Action-->
            <div class="d-flex align-items-center">
                <button type="submit" class="btn btn-primary me-2 ">Search</button>
            </div>

            <!--end:Action-->
        </div>
    </form>
        {{-- End Form Search --}}
    </div>
    </div>
    <!--end::Header-->
    <!--begin::Tables Widget 11-->

     <!--begin::Tables Widget 11-->
     <div class="card mb-5 mb-xl-8" >

        <!--begin::Body-->
        <div class="card-body py-3" >
            <!--begin::Wrapper-->
            <div class="d-flex flex-stack mb-5">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <span class="svg-icon svg-icon-2">...</span>
                    <input type="text" data-kt-docs-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Customers"/>
                </div>
                <!--end::Search-->

                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
                    <!--begin::Filter-->
                    <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="tooltip" title="Coming Soon">
                        <span class="svg-icon svg-icon-2">...</span>
                        Filter
                    </button>
                    <!--end::Filter-->

                    <!--begin::Add customer-->
                    <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" title="Coming Soon">
                        <span class="svg-icon svg-icon-2">...</span>
                        Add Customer
                    </button>
                    <!--end::Add customer-->
                </div>
                <!--end::Toolbar-->

                <!--begin::Group actions-->
                <div class="d-flex justify-content-end align-items-center d-none" data-kt-docs-table-toolbar="selected">
                    <div class="fw-bolder me-5">
                        <span class="me-2" data-kt-docs-table-select="selected_count"></span> Selected
                    </div>

                    <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" title="Coming Soon">
                        Selection Action
                    </button>
                </div>
                <!--end::Group actions-->
            </div>
            <!--end::Wrapper-->

            <!--begin::Datatable-->
            <table id="kt_datatable_example_1" class="table align-middle table-row-dashed fs-6 gy-5">
                <thead>
                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                    <th class="w-10px pe-2">
                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                            <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_datatable_example_1 .form-check-input" value="1"/>
                        </div>
                    </th>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Company</th>
                    <th>Payment Method</th>
                    <th>Created Date</th>
                    <th class="text-end min-w-100px">Actions</th>
                </tr>
                </thead>
                <tbody class="text-gray-600 fw-bold">
                </tbody>
            </table>
            <!--end::Datatable-->

        </div>
        <!--begin::Body-->
    </div>
    <!--end::Tables Widget 11-->

</div>
<!--end::Container-->
@endsection
