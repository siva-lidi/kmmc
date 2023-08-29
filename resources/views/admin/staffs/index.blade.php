<x-admin.master>
@section('content')
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex">
                <h6 class="text-white text-capitalize ps-3">Staffs</h6>
                <a href="{{route('staff.create')}}" class="btn btn-success ms-auto me-3">Add Staff</a>
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
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Added by</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Added On</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Edit</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($staffs as $staff)
                    <tr>
                      <td class="align-middle text-center">{{$staff->id}}</td>
                      <td>{{$staff->staffname}}</td>
                      <td>{{$staff->sex}}</td>
                      <td class="text-center">{{$staff->department}}</td>
                      <td>created by</td>
                      <td>{{$staff->joindate}}</td>
                      <td class="text-center">
                        <a href="{{route('staff.edit',$staff->id)}}" class="btn btn-primary">Edit</a>
                      </td>
                      <td class="text-center">
                        <form method="POST" action="{{route('staff.delete',$staff->id)}}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
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