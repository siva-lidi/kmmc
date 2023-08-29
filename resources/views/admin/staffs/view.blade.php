<x-admin.master>
@section('content')
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex">
                <h6 class="text-white text-capitalize ps-3">Staffs</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Id</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Staff Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Gender</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Department</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Assign</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($staffs as $staff)
                    <tr>
                      <td class="align-middle text-center">{{$staff->id}}</td>
                      <td>{{$staff->staffname}}</td>
                      <td>{{$staff->sex}}</td>
                      <td class="text-center">{{$staff->department}}</td>
                      <td class="text-center">
                        <a href="{{route('assign-shift.create',$staff->id)}}" class="btn btn-primary">Assign</a>
                      </td>
                    </tr>
                    @endforeach
                    <tr>
                </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
</x-admin.master>