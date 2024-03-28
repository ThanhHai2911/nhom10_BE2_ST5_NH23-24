<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up Form</title>
<style>
  /* Basic CSS styling for the form */
  body {
    font-family: Arial, sans-serif;
  }
  form {
    max-width: 400px;
    margin: 0 auto;
  }
  input[type="text"], input[type="email"], input[type="password"], input[type="date"], select {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    box-sizing: border-box;
  }
  input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  input[type="submit"]:hover {
    background-color: #45a049;
  }
</style>
</head>
<body>

<form action="{{url('process')}}" method="post">
@csrf
  <h2>Sign Up</h2>
  <label for="fullname">Full Name</label>
  <input type="text" id="fullname" placeholder="FullName" name="fullname" required>

  <label for="email">Email</label>
  <input type="email" id="email"  placeholder="Email" name="email" required>

  <label for="password">Password</label>
  <input type="password" id="password"  placeholder="password" name="password" required>

  <label for="dob">Date of Birth</label>
  <input type="date" id="dob" name="dob" required>

  <label for="gender">Gender</label>
  <select id="gender" name="gender" required>
    <option value="" disabled selected>Select your gender</option>
    <option value="male">Male</option>
    <option value="female">Female</option>
    <option value="other">Custom</option>
  </select>

  <input type="submit" value="Sign Up">
</form>

</body>
</html>
