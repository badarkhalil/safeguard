@extends('Admin.layouts.master')
@section('content')

    <!-- Site Content Wrapper -->
    <div class="dt-content-wrapper">

        <!-- Site Content -->
        <div class="dt-content">

          <!-- Page Header -->
          <div class="dt-page__header">
            <h1 class="dt-page__title">View Products</h1>
          </div>
          <!-- /page header -->

          <!-- Grid -->
          <div class="row">

            <!-- Grid Item -->
            <div class="col-xl-12">

              <!-- Entry Header -->
              <div class="dt-entry__header">

                <!-- Entry Heading -->
                <div class="dt-entry__heading">
                  <h3 class="dt-entry__title">View Products</h3>
                </div>
                <!-- /entry heading -->

              </div>
              <!-- /entry header -->

              <!-- Card -->
              <div class="dt-card">
                @include('Admin.layouts.alerts')
                <!-- Card Body -->
                <div class="dt-card__body">

                  <!-- Tables -->
                  <div class="table-responsive">

                    <table id="data-table" class="table table-striped table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>QR</th>
                        <th>Image</th>
                        <th>Action </th>
                      </tr>
                      </thead>
                      <tbody>
                        @foreach ($products as $product)
                            <tr class="gradeC">
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->product_name }}</td>
                                <td>{{ $product->product_description }}</td>
                                <td>{{ $product->qr_number }}</td>
                                <td>
                                    <img height="50" width="50" class="rounded" src="{{ asset('storage') }}/{{ $product->product_image }}" alt="">
                                </td>
                                <td>
                                    <div class="dropdown mr-2 mb-2 d-inline-block ">
                                        <!-- Dropdown Button -->
                                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        </button>
                                        <!-- /dropdown button -->
                                        <!-- Dropdown Menu -->
                                        <div class="dropdown-menu " x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 36px, 0px);">
                                        <a class="dropdown-item" href="{{ route('product.edit',$product->id) }}">Edit</a>
                                        <!-- Hidden form for deleting a campaign -->
                                        <form id="delete-form" action="{{ route('product.destroy',$product->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>

                                        <!-- Delete link -->
                                        <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">
                                            Delete
                                        </a>

                                        </div>
                                        <!-- /dropdown menu -->

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                      </tbody>
                      <tfoot>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>QR</th>
                        <th>Image</th>
                        <th>Action </th>
                      </tr>
                      </tfoot>
                    </table>

                  </div>
                  <!-- /tables -->

                </div>
                <!-- /card body -->

              </div>
              <!-- /card -->

            </div>
            <!-- /grid item -->

          </div>
          <!-- /grid -->

        </div>
        <!-- /site content -->

        <!-- Footer -->
        <footer class="dt-footer">
          Copyright Company Name © 2019
        </footer>
        <!-- /footer -->

      </div>
      <!-- /site content wrapper -->

@endsection
