<!DOCTYPE html>
<html>
<head>
<style>
.button {
  color: white;
  width: 30%;
  height: 15px;
  padding: 8px 10px 20px;
  display: inline-block;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Lista klientów banku</h2>

<table>
  <tr>
    <th>id</th>
    <th>Name</th>
    <th>email</th>
    <th>Action</th>
  </tr>
  @foreach($users as $user)
  <tr>
    <td>{{$user -> id }}</td>
    <td>{{$user -> name }}</td>
    <td>{{$user -> email }}</td>
    <td>
      <!-- Edytowanie użytkownika -->
      <a href="/editUser/{{$user->id}}"><button class="button button1">Edit</button></a>

      <!-- Usuwanie użytkownika -->
      <form action="deleteUser/{{ $user->id }}" method="POST">
        {{csrf_field()}}
        {{method_field('DELETE')}}
        <button type="submit" class="button button2">DELETE</button>
      </form>
    </td>
  </tr>
  @endforeach
</table>

</body>
</html>
