<style>
  .invalid-feedback {
    color: red;
  }
</style>

<h1>Add Student</h1>

<div style="margin:20px 0;">
  <a href="/student/create">
    <button>
      Add Student
    </button>
  </a>

  <a href="/student-list">
    <button>
      View Students
    </button>
  </a>
</div>

<form method="post" action="/student/create">
  @csrf
  <div>
    <label for="name">Name</label>
    <input type="text" placeholder="Name" id="name" name="name" value="{{ old('name') }}">
    @if ($errors->has('name'))
    <span class="invalid-feedback">
      <strong>{{ $errors->first('name') }}</strong>
    </span>
    @endif
  </div>

  <div>
    <label for="email">Email Address</label>
    <input type="email" placeholder="Email Address" id="email" name="email" value="{{ old('email') }}">
    @if ($errors->has('email'))
    <span class="invalid-feedback">
      <strong>{{ $errors->first('email') }}</strong>
    </span>
    @endif
  </div>

  <div>
    <label for="phone">Phone Number</label>
    <input type="text" placeholder="Phone Number" id="phone" name="phone" value="{{ old('phone') }}">
    @if ($errors->has('phone'))
    <span class="invalid-feedback">
      <strong>{{ $errors->first('phone') }}</strong>
    </span>
    @endif
  </div>

  <div>
    <label for="faculty">Faculty</label>
    <select name="faculty" id="faculty">
      <option value="">Select faculty</option>
      @if($faculties)
      @foreach($faculties as $faculty)
      <option value="{{$faculty->id}}">{{$faculty->name}}</option>
      @endforeach
      @endif
    </select>
    @if ($errors->has('phone'))
    <span class="invalid-feedback">
      <strong>{{ $errors->first('phone') }}</strong>
    </span>
    @endif
  </div>
  <button>Add</button>
</form>