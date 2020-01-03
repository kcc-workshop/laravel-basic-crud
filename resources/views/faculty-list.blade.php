<style>
  table {

    border-spacing: 0px;
    border: 1px solid black;
  }

  table tr th,
  td {
    cell-spacing: 0;
    padding: 10px;
    border: 1px solid black;
  }
</style>

<h1>Faculty List</h1>

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

<table>
  <tr>
    <th>SN</th>
    <th>Name</th>
    <th>Action</th>
  </tr>

  @if($faculties)

  @foreach($faculties as $faculty)
  <tr>
    <td>{{ $faculty->id }}</td>
    <td>{{ $faculty->name}}</td>
    <td>
      <a href="#">View</a>
      <a href="#">Edit</a>
      <a onClick="confirmDelete(this.id)" id="{{$faculty->id}}" href="javascript:void(0)">Delete</a>
    </td>
  </tr>
  @endforeach

  @else
  <tr colspan="5">
    <td>No faculty record found</td>
  </tr>
  @endif
</table>


<script>
  function confirmDelete(id) {
    let del = confirm();

    if (del) {
      // window.location.href = '/student/remove/' + id
    }
  }
</script>