@extends("Dashboards.SuperAdminDash.layout.app-layout")
@section("content")
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">All Experts</h4>
            <p class="card-description">
              Add class <code>.table</code>
            </p>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($experts as $expert)
                  <tr>
                    <td>{{ $expert->name }}</td>
                    <td>{{ $expert->email }}</td>
                    <td>{{ $expert->phone }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection
