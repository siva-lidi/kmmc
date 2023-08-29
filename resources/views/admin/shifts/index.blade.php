<x-admin.master>
@section('content')
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex">
                <h6 class="text-white text-capitalize ps-3">Shifts</h6>
                <a href="{{route('shift.create')}}" class="btn btn-success ms-auto me-3">Add Shift</a>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Id</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Shift Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">In-Time</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Out-Time</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created By</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created On</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Edit</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($shifts as $shift)
                    <tr>
                      <td class="align-middle text-center">{{$shift->id}}</td>
                      <td class="align-middle text-center">{{$shift->name}}</td>
                      <td class="align-middle text-center">{{$shift->start_time}}</td>
                      <td class="align-middle text-center">{{$shift->end_time}}</td>
                      <td class="align-middle text-center">{{$shift->created_by}}</td>
                      <td class="align-middle text-center">{{$shift->created_at}}</td>
                      <td class="text-center">
                        <a href="{{route('shift.edit',$shift->id)}}" class="btn btn-primary">Edit</a>
                      </td>
                      <td class="text-center">
                        <form method="POST" action="{{route('shift.delete',$shift->id)}}">
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