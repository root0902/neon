<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        div.row {
  width: 400px;
  display: none;
  opacity: 0;
}

ul.list-unstyled {
  float: left;
  width: 30%;
}

#multicol-menu li.dropdown:hover {
  display: block;
  opacity: 1;
}
    </style>
  </head>
  <body>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <nav class="navbar navbar-default" style="width:100%">
            <div class="container"> 
                <ul class="nav navbar-nav">
                    <li><a href=""><span class="glyphicon glyphicon-home"></span></a></li>
                    <li ><a id="firstid" href="#">FOR HIM</a></li>
                    <li><a href="#" >FOR HER</a></li>
                    <li><a href="#">FOR KIDS</a></li>
                    <li><a href="#">PERSONALIZED</a></li>
                    <li><a href="#">BIRTHDAYS</a></li>
                    <li><a href="#">NOVELTY</a></li>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">EXPERIENCES</a></li>
                    <li><a href="#">OCCASIONS</a></li>
                    <li><a href="#">NEW</a></li>

                </ul>

                <ul id="multicol-menu" class="nav pull-right">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">MultiCol Menu <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <div class="row" style="width: 400px;">
                        <ul class="list-unstyled col-md-4">
                            <li><a href="#">A</a></li>
                            <li><a href="#">B</a></li>
                            <li><a href="#">C</a></li>
                        </ul>
                        <ul class="list-unstyled col-md-4">
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                        <ul class="list-unstyled col-md-4">
                            <li><a href="#">a</a></li>
                            <li><a href="#">b</a></li>
                            <li><a href="#">c</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
            </div>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
