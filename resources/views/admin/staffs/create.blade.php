<x-admin.master>
@section('content')
<div class="container mx-auto">
        <div class="row">
          <div class="col-lg-8 col-md-12 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom mt-5">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Add Staff</h4>
                </div>
              </div>
              <div class="card-body">
              <form method="POST" action="{{route('staff.store')}}" class="row">
                @csrf
                <div class="input-group input-group-outline my-3">
                <label for="name" class="form-label">Staff Name</label>
                <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="input-group input-group-outline my-3">
                <label for="department" class="form-label">Staff Department</label>
                <input type="text" class="form-control" name="department" id="department">
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

