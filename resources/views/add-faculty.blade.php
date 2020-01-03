<style>
  .invalid-feedback {
    color: red;
  }
</style>

<h1>Add Faculty</h1>

<div style="margin:20px 0;">
  <a href="/faculty/create">
    <button>
      Add Faculty
    </button>
  </a>

  <a href="/faculty-list">
    <button>
      View Faculty
    </button>
  </a>
</div>

<form method="post" action="/faculty/create">
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
  <button>Add</button>
</form>