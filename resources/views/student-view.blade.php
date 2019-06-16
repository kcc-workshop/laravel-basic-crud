<h1>Student Details</h1>

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

<h3><b>Name : </b> {{$student->name}}</h3>
<h3><b>Email Address : </b> {{$student->email}}</h3>
<h3><b>Phone Number : </b> {{$student->phone}}</h3>