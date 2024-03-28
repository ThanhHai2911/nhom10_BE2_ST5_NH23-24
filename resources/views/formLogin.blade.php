<!DOCTYPE html>
<html>
<head>
<style> 
input[type=text],[type=submit] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
</style>
</head>
<body>



<form action="{{url ('dangnhap') }}" method="post">
{{csrf_field()}}
  <label for="fname">Tên </label>
  <input type="text"  name="name" required>
  <label for="lname">Password</label>
  <input type="text" name="password" required>
  <input type="submit" value="Submit" >
</form>

</body>
</html>


