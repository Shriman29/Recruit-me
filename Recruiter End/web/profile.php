

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Inconsolata&family=Oswald:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="profile.css">
  <link rel="icon" type="image/x-icon" href="../resources/logo.png">
<style>
 

</style>
</head>
<body>
	
      <div class="container-fluid px-0">
        <nav class="navbar navbar-expand-sm  py-0 px-0"> <a class="navbar-brand" href="#"><img id="logo" src="../resources/logo.png" width="50px"> &nbsp;&nbsp;&nbsp;<b>RECRUIT ME</b></a> <span class="v-line"></span> <button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active"> <a class="nav-link" href="home.html">Home</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="recruits.html">Recruits</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="requests.html">Requests</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">Find and Hire</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="community.html">Community</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="profile.html">Profile</a> </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<div class="profile">
<div class="avatar">
    <img src="..\extras\logo.jpg" alt="icon" width="120px" height="120px">
</div>
<div class="content" >
    <h2>Company Profile</h2>


<table id="customers">
  <tr>
    <td>Company Name</td>
    <td><?php echo $_POST['cname'];?></td>

  </tr>
  <tr>
    <td>Service</td>
    <td><?php echo $_POST['stream'];?></td>

  </tr>
  <tr>
    <td>Mail to</td>
    <td><a href="mailto:<?php echo $_POST['email'];?>">Send email</a></td>

  </tr>
  <tr>
    <td>Head Quarters</td>
    <td><?php echo $_POST['cadd'];?></td>

  </tr>
  <tr>
    <td>Branches</td>
    <td>Bangalore,Pune,Hyderabad,Delhi</td>

  </tr>
  <tr>
    <td>Website</td>
    <td><a href="https://www.wbx.com/" target="_blank"<?php echo $_POST['website'];?></a></td>

  </tr>
  <tr>
    <td>Contact</td>
    <td><?php echo $_POST['oname'];?></td>

  </tr>

</table>
<div class="icons">
            <a href="" class="da fa fa-twitter" target="_blank"></a>
             <a href="" class="da fa fa-instagram" target="_blank"></a>
            <a href="" class="da fa fa-github" target="_blank"></a>

            <a href="" class="da fa fa-linkedin" target="_blank"></a>
</div>
<div class="btn success">
<a href="edit.html" ><i class="fa fa-pencil"></i>  Edit</a>
</div>
</div>
</body>
</html>
