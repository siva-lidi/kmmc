<x-admin.master>
@section('content')
<div class="container mx-auto">
        <div class="row">
          <div class="col-lg-8 col-md-12 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom mt-5">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Update Shift</h4>
                </div>
              </div>
              <div class="card-body">
              <form method="POST" action="{{route('shift.update',$shift->id)}}" class="row">
                @csrf
                @method('PUT')
                <div class="form-group my-3">
                <label for="name" class="form-label">Shift Name</label>
                <input type="text" class="form-control border ps-2 shadow" name="name" id="name" value="{{$shift->name}}">
                </div>
                <div class="form-group col-lg-6 col-md-6 my-3">
                <label for="start_time" class="form-label">Starting Time</label>
                <input type="text" class="form-control border ps-2 shadow" name="start_time" id="start_time" value="{{$shift->start_time}}">
                </div>
                <div class="form-group col-lg-6 col-md-6 my-3">
                <label for="end_time" class="form-label">Ending Time</label>
                <input type="text" class="form-control border ps-2 shadow" name="end_time" id="end_time" value="{{$shift->end_time}}">
                </div>
                <div class="form-group">
                <button class="btn btn-primary w-100" type="submit">Update</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
</div>
@endsection
</x-admin.master>

