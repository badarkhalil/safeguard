@extends('Admin.layouts.master')
@section("content")
  <!-- Site Content Wrapper -->
  <div class="dt-content-wrapper">

    <!-- Site Content -->
    <div class="dt-content">

      <!-- Grid -->
      <div class="row">

        <!-- Grid Item -->
        <div class="col-xl-3 col-sm-6">

          <!-- Chart Card -->
          <div class="dt-card dt-chart dt-card__full-height">

            <!-- Chart Header -->
            <div class="dt-chart__header">
              <div class="style-default style-crypto">
                <h2>{{ App\Models\User::all()->count() }}</h2>
                @php
                $countToday = \App\Models\User::whereDate('created_at', \Carbon\Carbon::today())->get()
                    ->count();
                $countYesterday = \App\Models\User::whereDate('created_at', \Carbon\Carbon::yesterday())->get()
                    ->count();
                if ($countYesterday !== 0) {
                    $percentageChange = (($countToday - $countYesterday) / $countYesterday) * 100;
                } else {
                    $percentageChange = ($countToday !== 0) ? 100 : 0;
                }
            @endphp
                <div class="trending-section text-success">
                  <h4>{{ $percentageChange }}%</h4>
                  <i class="icon icon-menu-up"></i>
                </div>

                <p>Safeguard Users</p>
              </div>
            </div>
            <!-- /chart header -->

            <!-- Action Tools -->
            <div class="action-tools">
              <i class="icon icon-bitcoin icon-3x text-primary"></i>
            </div>
            <!-- /action tools -->

            <!-- Chart Body -->
            <div class="dt-chart__body">
              <canvas class="rounded-xl" id="chart-active-users" height="96" data-shadow="yes"></canvas>
            </div>
            <!-- /chart body -->

          </div>
          <!-- /chart card -->

        </div>
        <!-- /grid item -->

        <!-- Grid Item -->
        <div class="col-xl-3 col-sm-6">

          <!-- Chart Card -->
          <div class="dt-card dt-chart dt-card__full-height">

            <!-- Chart Header -->
            <div class="dt-chart__header">
              <div class="style-default style-crypto">
                <h2>{{ App\Models\Product::all()->count() }}</h2>

                <div class="trending-section text-success">
                  <h4></h4>
                  <i class="icon icon-menu-up"></i>
                </div>

                <p>Total Active Products</p>
              </div>
            </div>
            <!-- /chart header -->

            <!-- Action Tools -->
            <div class="action-tools">
              <i class="icon icon-etherium icon-3x text-primary"></i>
            </div>
            <!-- /action tools -->

            <!-- Chart Body -->
            <div class="dt-chart__body">
              <canvas class="rounded-xl" id="chart-extra-revenue" height="96" data-shadow="yes"></canvas>
            </div>
            <!-- /chart body -->

          </div>
          <!-- /chart card -->

        </div>
        <!-- /grid item -->

        <div class="col-xl-6"></div>

        <!-- Grid Item -->
        <div class="col-xl-12">

          <!-- Card -->
          <div class="dt-card dt-card__full-height">

            <!-- Card Header -->
            <div class="dt-card__header">

              <!-- Card Heading -->
              <div class="dt-card__heading">
                <h3 class="dt-card__title">User Registration Graph</h3>
              </div>
              <!-- /card heading -->

              <!-- Card Tools -->
              <div class="dt-card__tools">
              </div>
              <!-- /card tools -->

            </div>
            <!-- /card header -->

            <!-- Chart Body -->
            <div class="dt-chart__body">
              <canvas height="100" id="chart-balance-history"></canvas>
            </div>
            <!-- /chart body -->

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
      Copyright Safeguard © {{ Carbon\Carbon::now()->year }}
    </footer>
    <!-- /footer -->

  </div>
  <!-- /site content wrapper -->
@endsection
@section('script')
    <script>
        @php
        function fillMissingMonths($monthlyCounts)
        {
            $filledArray = [];
            for ($i = 1; $i <= 12; $i++) {
                $filledArray[$i] = $monthlyCounts[$i] ?? 0;
            }
            return array_values($filledArray);
        }
        function generateGradientColors()
        {
            $gradientColors = [
                'rgba(56, 170, 229, 0.9)',
                'rgba(245, 252, 253, 0.9)',
            ];
            return $gradientColors;
        }
            $currentYear = now()->year;
            $monthlyUserCounts = App\Models\User::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
                ->whereYear('created_at', $currentYear)
                ->groupBy('month')
                ->orderBy('month')
                ->pluck('count', 'month');
            $graphData = [
                'labels' => ['', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec', ''],
                'datasets' => [
                    [
                        'label' => 'Active users',
                        'data' => fillMissingMonths($monthlyUserCounts->toArray()),
                        'pointRadius' => 0,
                        'backgroundColor' => generateGradientColors(),
                        'borderWidth' => 2,
                        'borderColor' => '#10316B',
                        'hoverBorderColor' => '#10316B',
                        'pointBorderWidth' => 0,
                        'pointHoverBorderWidth' => 0,
                    ]
                ]
            ];
        @endphp
        var ctxBalanceHistory = document.getElementById('chart-balance-history').getContext('2d');
        var graphData = @json($graphData);
        console.log(graphData);
        new Chart(ctxBalanceHistory, {
            type: 'line',
            data: graphData
        });
    </script>
@endsection
