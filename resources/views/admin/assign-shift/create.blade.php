<x-admin.master>
@section('content')
<div class="container mx-auto">
        <div class="row">
          <div class="col-lg-8 col-md-12 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom mt-5">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Assign Shift</h4>
                </div>
              </div>
              <div class="card-body">
              <form method="POST" action="{{ route('assign-shift.store') }}" class="row">
                  @csrf
                  <div class="form-group my-3 col-md-6 col-lg-6">
                      <label for="staff_id" class="form-label">Staff Id</label>
                      <input type="text" class="form-control border ps-2 shadow" name="staff_id" id="staff_id" value="{{$staff->id}}">
                  </div>
                  <div class="form-group my-3 col-md-6 col-lg-6">
                      <label for="staffname" class="form-label">Staff Name</label>
                      <input type="text" class="form-control border ps-2 shadow" name="staffname" id="staffname" value="{{$staff->staffname}}">
                  </div>
                  <div class="form-group my-3">
                      <label for="shift_name" class="form-label">Shift</label>
                      <select name="shift_name" id="shift_name" class="form-select border ps-2 shadow">
                          <option selected>Select shift</option>
                          @foreach($shifts as $shift)
                              <option value="{{$shift->id}}" id="shift_id">{{$shift->name}}</option>
                          @endforeach
                      </select>
                  </div>
                  <div id="shift-date" class="row">
                      <div class="form-group my-3 col-md-6 col-lg-6">
                          <label for="shift_starting_date">Starting Date</label>
                          <input type="date" min="{{$cuDate}}" name="shift_starting_date" id="shift_starting_date" class="form-control border ps-2 shadow">
                          @if(session('error'))
                          <p class="text-danger">
                              {{ session('error') }}
                          </p>
                          @elseif(session('invalid-shift'))
                          <p class="text-danger">
                              {{ session('invalid-shift') }}
                          </p>
                          @endif
                      </div>
                      <div class="form-group my-3 col-md-6 col-lg-6">
                          <label for="shift_ending_date">Ending Date</label>
                          <input type="date" name="shift_ending_date" id="shift_ending_date" class="form-control border ps-2 shadow">
                      </div>
                  </div>
                  <div class="form-group">
                      <button class="btn btn-primary w-100" type="submit">Add Staff</button>
                  </div>
              </form>
              </div>
            </div>
          </div>
        </div>
</div>
@endsection
</x-admin.master>

