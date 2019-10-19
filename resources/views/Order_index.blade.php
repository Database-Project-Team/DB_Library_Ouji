<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">



  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-master.css" rel="stylesheet">
  <style>
    table,
    th,
    td {
      border: 1px solid black;
    }

    body {
      margin-top: 30px;
    }
  </style>`
  <title>BLACK_UNICORN</title>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <font color="white" class="navbar-brand">BLACK_UNICORN</font>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Order</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Stock-in</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Employee Resource Management</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <h1 class="display-4 text-center mb-4">ORDER</h1>
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              &nbsp;&nbsp;<div class="btn btn-success" id="show_" color="white">Company</div>&nbsp;&nbsp;
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-info" type="button">Search</button>
              </span>
            </div>
          </div>
        </div>
        <div id="search">
          <div class="select">
            <a onclick="ss0('Company')" class="btn btn-primary btn-sm" id="s0" href="#">Company</a>&nbsp;
            <a onclick="ss0('Contact')" class="btn btn-primary btn-sm" id="s1" href="#">Contact</a>&nbsp;
            <a onclick="ss0('Country')" class="btn btn-primary btn-sm" id="s2" href="#">Country</a>&nbsp;
          </div>
        </div><br>

        <div class="card my-4">
          <table><br>
            <tr style="background-color: black;color: white;">
              <th height="50">
              <center><font size="3">orderNumber</font></center>
              </th>
              <th  width="10%">
              <center><font size="3">orderDate</font></center>
              </th>
              <th>
              <center><font size="3">requiredDate</font></center>
              </th>
              <th>
              <center><font size="3">shippedDate</font></center>
              </th>
              <th>
              <center><font size="3">status</font></center>
              </th>
              <th width="35%">
              <center><font size="3">comments</font></center>
              </th>
              <th width="10%">
              <center><font size="3">contactFirstName</font></center>
              </th>
              <th width="10%">
              <center><font size="3">contactLastName</font></center>
              </th>
              <th width="5%">
              <center><font size="3">Edit</font></center>
              </th>
              <th width="5%">
                <center><font size="3">Delete</font></center>
              </th>
            </tr>
            @foreach($data as $a)
            <tr>
              
              <td><center>{{ $a->orderNumber }}</center></td>
              <td><center>{{ $a->orderDate }}</center></td>
              <td><center>{{ $a->requiredDate }}</center></td>
              <td><center>{{ $a->shippedDate }}</center></td>
              <td><center>{{ $a->status }}</center></td>
              <td>&nbsp;{{ $a->comments }}</td>
              <td><center>{{ $a->contactFirstName }}</center></td>
              <td><center>{{ $a->contactLastName }}</center></td>
              <td><center><a href="#"><img src="img/edit.png" width="40" height="40" alt="edit"></a></center></td>
              <td><center><a href="#"><img src="img/del.png" width="40" height="40" alt="delete"></a></center></td>
              <!-- @if($a->status === 'In Progress') -->
              <!-- @endif -->
            </tr>
            @endforeach 
          </table><br>
        </div>
      </div>
    </div>
    <table>
  </div>

  <footer class="py-5 bg-dark">
    <div class="container">
      <form action="/action_page.php">
        <center><font color="white">Company:</font>
        <input type="text" name="Company">&nbsp;&nbsp;&nbsp;
        <font color="white">Contact:</font>
        <input type="text" name="Contact">&nbsp;&nbsp;&nbsp;
        <font color="white">Country:</font>
        <input type="text" name="Country">&nbsp;&nbsp;
        <input type="submit" value="Add">
      </form>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/forOrder.js"></script>
</body>

</html>