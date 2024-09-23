@extends('Admin.layouts.master')
@section('content')

    <!-- Site Content Wrapper -->
    <div class="dt-content-wrapper">

        <!-- Site Content -->
        <div class="dt-content">

          <!-- Page Header -->
          <div class="dt-page__header">
            <h1 class="dt-page__title">Product</h1>
          </div>
          <!-- /page header -->

          <!-- Grid -->
          <div class="row">

            <!-- Grid Item -->
            <div class="col-xl-12">

              <!-- Card -->
              <div class="dt-card">

                <!-- Card Header -->
                <div class="dt-card__header">

                  <!-- Card Heading -->
                  <div class="dt-card__heading">
                    <h3 class="dt-card__title">Create Product</h3>
                  </div>
                  <!-- /card heading -->

                </div>
                <!-- /card header -->

                <!-- Card Body -->
                <div class="dt-card__body">
                    @include('Admin.layouts.alerts')
                  <!-- Form -->
                  <form method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
                    @csrf
                    <!-- Form Group -->
                    @include('Admin.product.form')
                    <!-- /form group -->
                    <!-- Form Group -->
                    <div class="form-group mb-0">
                      <button type="submit" class="btn btn-primary text-uppercase">Create Product</button>
                    </div>
                    <!-- /form group -->

                  </form>
                  <!-- /form -->

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

      </div>
      <!-- /site content wrapper -->


@endsection
