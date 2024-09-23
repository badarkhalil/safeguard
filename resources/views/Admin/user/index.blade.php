@extends('Admin.layouts.master')
@section('content')

    <!-- Site Content Wrapper -->
    <div class="dt-content-wrapper">

        <!-- Site Content -->
        <div class="dt-content">

          <!-- Page Header -->
          <div class="dt-page__header">
            <h1 class="dt-page__title">View Users</h1>
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
                  <h3 class="dt-entry__title">View Users</h3>
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
                        <th>Email</th>
                      </tr>
                      </thead>
                      <tbody>
                        @foreach ($users as $user)
                            <tr class="gradeC">
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                        @endforeach
                      </tbody>
                      <tfoot>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
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
