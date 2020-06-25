<div class="card mb-3">
  <img src="http://inventain.com/wp-content/uploads/2020/01/Children-And-Education-Are-Important-768x403.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of Mentors</h5>
    <p class="card-text">This is the information about list of mentors in the system</p>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">CNE</th>
      <th scope="col">FirstName</th>
      <th scope="col">SecondName</th>
      <th scope="col">Age</th>
      <th scope="col">Subjects</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  @foreach($mentors as $mentor)
    <tr>
      <td>{{ $mentor->cne }}</td>
      <td>{{ $mentor->firstName }}</td>
      <td>{{ $mentor->secondName }}</td>
      <td>{{ $mentor->age }}</td>
      <td>{{ $mentor->subject }}</td>
      <td>
        <a href="{{url('/edit/'.$mentor->id)}}" class="btn btn-sm btn-warning">Edit</a>
        <a href="{{url('/delete/'.$mentor->id)}}" class="btn btn-sm btn-danger">Delete</a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>

  </div>
</div>

