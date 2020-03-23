<html>
<head>
  <style>
table {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

 td, th {
  border: 1px solid #ddd;
  padding: 8px;
}

 tr:nth-child(even){background-color: #f2f2f2;}

 tr:hover {background-color: #ddd;}

 th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
input[type=submit] {
  width: 10%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin-left: 88%;
  margin-top: 12px ;

  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 40%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 2px solid  #ddd;
  border-radius: 5px;
  margin-bottom: 12px;
  margin-left: 60%;

}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}

</style>
  
</head>
<body>
  <form action="/accueil">
<input type="submit" value="new cv" >
</form>

<table id="myTable">
  <tr>
    <th>Nom</th>
    <th>Prenom</th>
   
    <th>Email</th>
  </tr>
  
     @foreach($prof as $pro )
     <tr>
    <td>{{$pro->nom}}</td>
    <td>{{$pro->prenom}}</td>
    <td>{{$pro->email}} <a href="{{ url('modif/'.$pro->id.'/edit')}}" class="btn btn-success">modifier</a>
</td>
  </tr>
    @endforeach
  </table>
</body>
</html>