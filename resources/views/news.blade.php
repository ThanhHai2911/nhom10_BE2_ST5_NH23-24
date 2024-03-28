<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  border: 1px solid #e7e7e7;
  background-color: #f3f3f3;
}

li {
  float: left;
}

li a {
  display: block;
  color: #666;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #ddd;
}

li a.active {
  color: white;
  background-color: #04AA6D;
}
</style>
</head>
<body>
   
<ul>
  <li><a class="active" href="{{route('navbar',['name' => 'index'])}}">Home</a></li>
  <li><a href="{{route('navbar',['name' => 'news'])}}">News</a></li>
  <li><a href="{{route('navbar',['name' => 'contact'])}}">Contact</a></li>
  <li><a href="{{route('navbar',['name' => 'about'])}}">About</a></li>
</ul>
    

<h2>Đây là trang {{$name}}</h2>

</body>
</html>


