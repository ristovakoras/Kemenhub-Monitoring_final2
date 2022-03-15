@extends('layouts.app_dashboard')


@section('content')

{{-- Row Start --}}
<div class="row mb-4">
    <div class="col-lg-12 d-flex justify-content-center">
        <h1>LOSARANG</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-1">

        <div class="card" style="width: 105px; background-color: #1b2735; height:">
            <div class="card-header">
                <h7 style="color: #6cf5ff;"><strong>START</strong></h7>
            </div>
        </div>
    </div>


    <div class="col-lg-2">
        <div class="container">
            <input type="text" style="width: 130px; height: 50px" id="picker" class="form-control">
        </div>
    </div>

    <div class="col-lg-2">
        <div class="card" style="width: 180px; background-color: #1b2735;">
            <div class="card-header" >
                <h7 style="color: #6cf5ff;"><strong>BERAT MINIMUM</strong></h7>
            </div>
        </div>
    </div>

    <div class="col-lg-2">
        <input type="text" class="border1" style="width: 125px; height: 50px; color: #6cf5ff;"  placeholder="   Diisi.....">
    </div>

</div>
{{-- End Row --}}

<div class="row mt-4">

    <div class="col-lg-1">
        <div class="card" style="width: 105px; background-color: #1b2735;">
            <div class="card-header">
                <h7 style="color: #6cf5ff;"><strong>STOP</strong></h7>
            </div>
        </div>
    </div>

    <div class="col-lg-2">
        <div class="container">
            <input type="text" style="width: 130px; height: 50px" id="picker2" class="form-control">
        </div>
    </div>

    <div class="col-lg-2">
        <div class="card" style="width: 180px; background-color: #1b2735;">
            <div class="card-header">
                <h7 style="color: #6cf5ff;"><strong>DIMENSI</strong></h7>
            </div>
        </div>
    </div>

    <div class="col-lg-2">
        <input type="text" class="border1" style="width: 125px; height: 50px; color: #6cf5ff;" placeholder="   Diisi.....">
    </div>

    <div class="col-lg-2">
        <div class="card" style="width: 180px; background-color: #1b2735;">
            <div class="card-header">
                <h7 style="color: #6cf5ff;"><strong>PELANGGARAN</strong></h7>
            </div>
        </div>
    </div>

    <div class="col-lg-2">
        <input type="text" class="border1" style="width: 115px; height: 50px; color: #6cf5ff;" placeholder="  Diisi.....">
    </div>

    <div class="col-lg-1">
        <button type="submit" style="width: 50px; height: 50px; background-color: #1b2735; color:#6cf5ff ;" class="btn btn-primary"><span class="fa fa-search"></span></button>
    </div>

</div>

<!-- Row Tampil Data -->
<div class="row">
    <div class="col-lg-12 col-md-13 col-sm-12">
      <div class="d-flex justify-content-sm-center"><h1 class="my-5" style="color:#6cf5ff;">TAMPIL DATA</h1></div>
    </div>
  </div>

    <div class="col-lg-12">
      <table class="table table-dark table-hover" style="background-color: #121b24;" >
        <thead style="color: #6cf5ff ;">
            <tr >
                <th scope="col">#</th>
                <th scope="col">Waktu</th>
                <th scope="col">Plat Nomor</th>
                <th scope="col">Berat</th>
                <th scope="col">Berat Berlebih</th>
                <th scope="col">Panjang</th>
                <th scope="col">Lebar</th>
                <th scope="col">Tinggi</th>
                <th scope="col">Pelanggaran</th>
                <th scope="col">Foto</th>
            </tr>
        </thead>
        <tbody style="color: #6cf5ff ;">
            @foreach ($data['results'] as $wim )

          <tr>
              <th scope="row">1</th>
              <td>{{ $wim["dificulty"] }}</td>
              <td></td>
              <td>5000 KG</td>
              <td>2000 KG</td>
              <td>12,1 M</td>
              <td>3.5 m</td>
              <td>5.6 M</td>
              <td>Over Weight</td>
              <td><img src="{{ asset('image/plat_22.jpeg') }}" style="width: 150px;"></td>
          </tr>
          <tr>
              <th scope="row">2</th>
              <td>03-2022 12.50</td>
              <td>BZ 2020 RFT</td>
              <td>3000 KG</td>
              <td>0 KG</td>
              <td>10,1 M</td>
              <td>3.5 m</td>
              <td>4.6 M</td>
              <td>Over Height</td>
              <td><img src="{{ asset('image/plat_23.jpeg') }}" style="width: 150px;"></td>
          <tr>
              <th scope="row">3</th>
              <td>05-2022 11.30</td>
              <td>A 2211 RF</td>
              <td>4000 KG</td>
              <td>2000 KG</td>
              <td>14,1 M</td>
              <td>5.5 m</td>
              <td>7.6 M</td>
              <td>Normal</td>
              <td><img src="{{ asset('image/plat_24.jpeg')}}" style="width: 150px;"></td>
          <tr>
              <th scope="row">4</th>
              <td>08-2022 20.30</td>
              <td>BF 1221 RFD</td>
              <td>3500 KG</td>
              <td>1500 KG</td>
              <td>12,1 M</td>
              <td>3.5 m</td>
              <td>5.6 M</td>
              <td>Over Weight</td>
              <td><img src="{{ asset('image/plat_25.jpeg') }}" style="width: 150px;"></td>
          <tr>
              <th scope="row">5</th>
              <td>01-2022 15.30</td>
              <td>BS 2013 DA</td>
              <td>5000 KG</td>
              <td>2000 KG</td>
              <td>15,5 M</td>
              <td>6.4 m</td>
              <td>7.2 M</td>
              <td>Normal</td>
              <td><img src="{{ asset('image/plat_26.jpeg') }}" style="width: 150px;"></td>
          </tr>
          @endforeach
      </tbody>
      </table>
    </div>

@endsection






@extends('layouts.nav')

@section('content')
<!--begin::Row-->
<div class="row g-5 g-xl-8">

    <!--begin::Tables Widget 11-->
    <div class="card mb-5 mb-xl-8" style="background-color: #242263;">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1" style="color: white;">Tampil Data Losarang</span>
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
                    <input type="date" class="form-control" name="start_date">
                    {{-- <input type="text" class="form-control form-control-solid ps-10 h-md-35px" name="search" value="" placeholder="Search" /> --}}
                </div>
                <div class="position-relative w-md-155px me-md-2">
                    <input type="date" class="form-control" name="end_date">
                    {{-- <input type="text" class="form-control form-control-solid ps-10 h-md-35px" name="search" value="" placeholder="Search" /> --}}
                </div>
                <!--end::Input group-->
                <!--begin:Action-->
                <div class="d-flex align-items-center">
                    <button type="submit" class="btn btn-primary me-5 ">Search</button>
                </div>

                <!--end:Action-->
            </div>
        </form>
            {{-- End Form Search --}}

        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-3" >
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table align-middle gs-0 gy-4" style="color: white;">
                    <!--begin::Table head-->
                    @foreach ($data as $wim )


                    <thead>
                        <tr class="fw-bolder text-muted text-center" style="vertical-align: middle; background-color: #302e74;">
                            <th rowspan="5" class="min-w-50px">#</th>
                            <th rowspan="5" class="min-w-125px">Waktu</th>
                            <th colspan="5" class="min-w-125px">Lidar</th>
                            <th colspan="3" class="min-w-125px">WIM</th>
                            {{-- <th rowspan="2" class="min-w-125px">Foto Lidar</th> --}}
                            <th rowspan="2" class="min-w-125px">Foto Kendaraan</th>
                            {{-- <th rowspan="2" class="min-w-125px">Foto Plat Nomor</th> --}}
                        </tr>
                        <tr class="fw-bolder text-muted text-center" style="vertical-align: middle; background-color: #302e74;">
                            <th class="min-w-125px"></th>
                            <th class="min-w-125px">Standar</th>
                            <th class="min-w-125px">Pengukuran</th>
                            <th class="min-w-125px">Deviasi</th>
                            <th class="min-w-125px">Presentase</th>
                            <th class="min-w-125px">Berat</th>
                            <th class="min-w-125px">JBI</th>
                            <th class="min-w-125px">Kecepatan</th>
                        </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody class="">
                        <tr>
                            <td rowspan="4">
                                <div class="d-flex justify-content-center">
                                    <p>{{ $loop->iteration }}</p>
                                </div>
                            </td>
                            <td rowspan="4">
                                <div class="d-flex justify-content-center text-center">
                                    <p>{{ $wim->WeighingDateTime }}</p>
                                </div>
                            </td>
                            <th class="fw-bolder text-muted text-center" style="vertical-align: middle; background-color: #302e74;">
                                <div class="d-flex justify-content-center">
                                    <p>Panjang</p>
                                </div>
                            </th>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <p>9,31 m</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <p>9,31 m</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <p>0 m</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <p>0 %</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <p>{{ $wim->Weight }}</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <p>{{ $wim->LimitWeight }}</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <p>{{ $wim->Speed }}</p>
                                </div>
                            </td>
                            {{-- <td rowspan="4">
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_share_earn" style="background: transparent">
                                        <img src="{{ asset('assets/img/lidar.jpeg') }}" width="170">
                                      </button>

                                      <!--begin::Modal - Share & Earn-->
								<div class="modal fade" id="kt_modal_share_earn" tabindex="-1" aria-hidden="true">
									<!--begin::Modal dialog-->
									<div class="modal-dialog modal-dialog-centered mw-650px">
										<!--begin::Modal content-->
										<div class="modal-content">
                                            <img src="{{ asset('assets/img/lidar.jpeg') }}" width="650">
										</div>
										<!--end::Modal content-->
									</div>
									<!--end::Modal dialog-->
								</div>
								<!--end::Modal - Share & Earn-->

                                </div>
                            </td> --}}
                            <td rowspan="4">
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_share_earn{{ $wim->id }}" style="background: transparent">
                                        <img src="{{ asset($wim->Image) }}" width="180">
                                      </button>

                                      <!--begin::Modal - Share & Earn-->
								<div class="modal fade" id="kt_modal_share_earn{{ $wim->id }}" tabindex="-1" aria-hidden="true">
									<!--begin::Modal dialog-->
									<div class="modal-dialog modal-dialog-centered mw-750px">
										<!--begin::Modal content-->
										<div class="modal-content">
                                            <img src="{{ asset($wim->Image) }}" width="750">
										</div>
										<!--end::Modal content-->
									</div>
									<!--end::Modal dialog-->
								</div>
								<!--end::Modal - Share & Earn-->

                                </div>
                            </td>
                            {{-- <td rowspan="4">
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_share_earn" style="background: transparent">
                                        <img src="{{ asset('assets/img/plat_13.jpeg') }}" width="170">
                                      </button>

                                      <!--begin::Modal - Share & Earn-->
								<div class="modal fade" id="kt_modal_share_earn" tabindex="-1" aria-hidden="true">
									<!--begin::Modal dialog-->
									<div class="modal-dialog modal-dialog-centered mw-650px">
										<!--begin::Modal content-->
										<div class="modal-content">
                                            <img src="{{ asset('assets/img/plat_13.jpeg') }}" width="650">
										</div>
										<!--end::Modal content-->
									</div>
									<!--end::Modal dialog-->
								</div>
								<!--end::Modal - Share & Earn-->

                                </div>
                            </td> --}}
                        </tr>

                        <tr>
                            <th class="fw-bolder text-muted text-center" style="vertical-align: middle; background-color: #302e74;">
                                <div class="d-flex justify-content-center">
                                    <p>Lebar</p>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex justify-content-center">
                                    <p>2,3 m</p>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex justify-content-center">
                                    <p>2,3 m</p>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex justify-content-center">
                                    <p>0,04 m</p>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex justify-content-center">
                                    <p>2,34 %</p>
                                </div>
                            </th>
                            <th class="fw-bolder text-muted text-center" style="vertical-align: middle; background-color: #302e74;">
                                <div class="d-flex justify-content-center">
                                    <p>Berat Berlebih</p>
                                </div>
                            </th>
                            <th class="fw-bolder text-muted text-center" style="vertical-align: middle; background-color: #302e74;">
                                <div class="d-flex justify-content-center">
                                    <p>Presentase</p>
                                </div>
                            </th>
                        </tr>

                        <tr>
                            <th class="fw-bolder text-muted text-center" style="vertical-align: middle; background-color: #302e74;">
                                <div class="d-flex justify-content-center">
                                    <p>Tinggi</p>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex justify-content-center">
                                    <p>3,65 m</p>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex justify-content-center">
                                    <p>3,40 m</p>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex justify-content-center">
                                    <p>0 m</p>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex justify-content-center">
                                    <p>0 %</p>
                                </div>
                            </th>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <p>5000 KG</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <p>0 %</p>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                    <!--end::Table body-->
                    @endforeach
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>
    <!--end::Tables Widget 11-->




    {{-- <!--begin::Tables Widget 11-->
    <div class="card mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">New Arrivals</span>
                <span class="text-muted mt-1 fw-bold fs-7">Over 500 new products</span>
            </h3>
            <div class="card-toolbar">
                <a href="#" class="btn btn-sm btn-light-primary">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                <span class="svg-icon svg-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                    </svg>
                </span>
                <!--end::Svg Icon-->New Member</a>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-3">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                        <tr class="fw-bolder text-muted bg-light">
                            <th class="ps-4 min-w-325px rounded-start">Product</th>
                            <th class="min-w-125px">Price</th>
                            <th class="min-w-125px">Deposit</th>
                            <th class="min-w-200px">Agent</th>
                            <th class="min-w-150px">Status</th>
                            <th class="min-w-200px text-end rounded-end"></th>
                        </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-50px me-5">
                                        <img src="assets/media/stock/600x400/img-26.jpg" class="" alt="" />
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Sant Extreanet Solution</a>
                                        <span class="text-muted fw-bold text-muted d-block fs-7">HTML, JS, ReactJS</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$2,790</a>
                                <span class="text-muted fw-bold text-muted d-block fs-7">Paid</span>
                            </td>
                            <td>
                                <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$520</a>
                                <span class="text-muted fw-bold text-muted d-block fs-7">Rejected</span>
                            </td>
                            <td>
                                <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Bradly Beal</a>
                                <span class="text-muted fw-bold text-muted d-block fs-7">Insurance</span>
                            </td>
                            <td>
                                <span class="badge badge-light-primary fs-7 fw-bold">Approved</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />
                                            <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
                                            <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
                                            <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-50px me-5">
                                        <img src="assets/media/stock/600x400/img-3.jpg" class="" alt="" />
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Telegram Development</a>
                                        <span class="text-muted fw-bold text-muted d-block fs-7">C#, ASP.NET, MS SQL</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$4,790</a>
                                <span class="text-muted fw-bold text-muted d-block fs-7">Paid</span>
                            </td>
                            <td>
                                <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$240</a>
                                <span class="text-muted fw-bold text-muted d-block fs-7">Rejected</span>
                            </td>
                            <td>
                                <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Chris Thompson</a>
                                <span class="text-muted fw-bold text-muted d-block fs-7">NBA Player</span>
                            </td>
                            <td>
                                <span class="badge badge-light-danger fs-7 fw-bold">In Progress</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />
                                            <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
                                            <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
                                            <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-50px me-5">
                                        <img src="assets/media/stock/600x400/img-9.jpg" class="" alt="" />
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Payroll Application</a>
                                        <span class="text-muted fw-bold text-muted d-block fs-7">PHP, Laravel, VueJS</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$4,390</a>
                                <span class="text-muted fw-bold text-muted d-block fs-7">Paid</span>
                            </td>
                            <td>
                                <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$593</a>
                                <span class="text-muted fw-bold text-muted d-block fs-7">Rejected</span>
                            </td>
                            <td>
                                <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Zoey McGee</a>
                                <span class="text-muted fw-bold text-muted d-block fs-7">Ruby Developer</span>
                            </td>
                            <td>
                                <span class="badge badge-light-success fs-7 fw-bold">Success</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />
                                            <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
                                            <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
                                            <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-50px me-5">
                                        <img src="assets/media/stock/600x400/img-18.jpg" class="" alt="" />
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">HR Management System</a>
                                        <span class="text-muted fw-bold text-muted d-block fs-7">Python, PostgreSQL, ReactJS</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$7,990</a>
                                <span class="text-muted fw-bold text-muted d-block fs-7">Paid</span>
                            </td>
                            <td>
                                <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$980</a>
                                <span class="text-muted fw-bold text-muted d-block fs-7">Rejected</span>
                            </td>
                            <td>
                                <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Brandon Ingram</a>
                                <span class="text-muted fw-bold text-muted d-block fs-7">Insurance</span>
                            </td>
                            <td>
                                <span class="badge badge-light-info fs-7 fw-bold">Rejected</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />
                                            <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
                                            <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
                                            <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-50px me-5">
                                        <img src="assets/media/stock/600x400/img-8.jpg" class="" alt="" />
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Telegram Mobile</a>
                                        <span class="text-muted fw-bold text-muted d-block fs-7">HTML, JS, ReactJS</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$5,790</a>
                                <span class="text-muted fw-bold text-muted d-block fs-7">Paid</span>
                            </td>
                            <td>
                                <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$750</a>
                                <span class="text-muted fw-bold text-muted d-block fs-7">Rejected</span>
                            </td>
                            <td>
                                <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Natali Trump</a>
                                <span class="text-muted fw-bold text-muted d-block fs-7">Insurance</span>
                            </td>
                            <td>
                                <span class="badge badge-light-warning fs-7 fw-bold">Approved</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />
                                            <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
                                            <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
                                            <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                            </td>
                        </tr>
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>
    <!--end::Tables Widget 11--> --}}
</div>
<!--end::Container-->
@endsection
