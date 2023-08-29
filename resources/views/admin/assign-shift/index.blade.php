<x-admin.master>
@section('content')
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex">
                <h6 class="text-white text-capitalize ps-3">Assigned Shifts</h6>
                <a href="{{route('staffs.view')}}" class="btn btn-success ms-auto me-3">Assign Shift</a>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Staff Id</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Staff Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Shift</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Starting-time</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ending-time</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Starting-date</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ending-date</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created by</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created On</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Edit</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($assignedShifts as $assignedShift)
                    <tr>
                      <td class="align-middle text-center">{{$assignedShift->id}}</td>
                      <td class="align-middle text-center">{{$assignedShift->staff_id}}</td>
                      <td>{{$assignedShift->staffname}}</td>
                      <td class="align-middle text-center">{{$assignedShift->shift_name}}</td>
                      <td class="align-middle text-center">{{$assignedShift->shift_starting_time}}</td>
                      <td class="align-middle text-center">{{$assignedShift->shift_ending_time}}</td>
                      <td class="align-middle text-center">{{$assignedShift->shift_starting_date}}</td>
                      <td class="align-middle text-center">{{$assignedShift->shift_ending_date}}</td>
                      <td class="align-middle text-center">{{$assignedShift->created_by}}</td>
                      <td class="align-middle text-center">{{$assignedShift->created_at->diffForHumans()}}</td>
                      <td class="text-center">
                        <a href="{{route('assign-shift.edit',$assignedShift->id)}}" class="btn btn-primary">Edit</a>
                      </td>
                      <td class="text-center">
                        <form method="POST" action="{{route('assign-shift.delete',$assignedShift->id)}}">
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