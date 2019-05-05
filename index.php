
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ATN company</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    .row.content {height: 1500px}
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }    
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      	<a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span>ATN company</a>
    </div>
    <ul class="nav navbar-nav">
    </ul>
    <ul class="nav navbar-nav navbar-right">
    </ul>
  </div>
</nav>
<div class="container-fluid">
 	 <div class="row content">
   		 <div class="col-sm-3 sidenav">
     		 <div class="panel panel-primary">
     			<div class="panel-heading">Staff Add</div>
     			<div class="panel-body">
           	<form action="handling.php" method="post" enctype="MULTIPLE/form-data">
             	<div class="form-group">
               	<label for="email">Full Name:</label>
               	<input type="text" name="fullname" class="form-control">
            	</div>
             	<div class="form-group">
               	<label for="pwd">Email:</label>
              	<td><input type="text" name="email" class="form-control"></td>
              </div>
             	<div class="form-group">
               	<label for="pwd">Address:</label>
               	<td><input type="text" name="address" class="form-control"></td>
             	</div>
              <input type="submit" class="btn btn btn-success" name="them" id="them" value="Add">
            </form>
      		</div>
     		</div>
    	</div>

	    <div class="col-sm-9">
	      	<div class="panel panel-primary">
	      		<div class="panel-heading">Staff management</div>
	      		<div class="panel-body">
              <form class="form-inline md-form form-sm mt-0" action="./search.php">
                <button class="w3-btn w3-blue w3-round-xxlarge">Search</button>
                <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search name" aria-label="Search name" id="search" name="Search">
              </form>
              <p>&nbsp;</p>                              
					    <table class="table table-striped table-hover table-bordered">
  		          <thead>
  		            <tr>
  		              <th>Full Name</th>
  		              <th>Email</th>
  		              <th>Address</th>
  		              <th>Action</th>
  		            </tr>
  		          </thead>
  		          <tbody>
  				        <?php
  				        require_once('./dbconnector.php');
  	              $cn = new DBConnector();
  	              $sql="Select * from student1";
  	              $rows = $cn->runQuery($sql);
  	              foreach ($rows as $r) {
  				        ?>				
  							  <tr>
  								  <td><?=$r['fullname']?></td>
  								  <td><?=$r['email']?></td>
  								  <td><?=$r['address']?></td>
  								  <td>
                      <a href="edit.php?id=<?=$r['id']?>" class="edit" title="Edit" data-toggle="tooltip">
                        <i class="material-icons">&#xE254;</i>
                      </a>
                      <a href="handling.php?id=<?=$r['id']?>" class="delete" title="Delete" data-toggle="tooltip">
                        <i class="material-icons">&#xE872;</i>
                      </a>  
                    </td>
  							 </tr>
  							  <?php } ?>
  						  </tbody>					
              </table>        	
            </div>
	        </div>
	     </div>
   	</div>
</div>
<footer class="container-fluid">
  <p>copy: ATN company</p>
</footer>

</body>
</html>
