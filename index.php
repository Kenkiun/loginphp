<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="icon" type="image/png" href="/image/login.png" />
  <link rel="stylesheet" src="">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>



<body class="bg-slate-200 h-screen grid place-content-center">
  <form name="form" action="login.php" method="POST" onsubmit="return isvalid()" class="grid gap-5 w-[230px] border-1 bg-gray-400 p-6 rounded-sm">
      <legend class="text-center text-xl font-semibold">Login</legend>
    <div class="grid gap-2 truncate">
      <label for="username">Username <br> (Email Address):</label>
      <input type="email" id="username" name="username" required>
    </div>
    <div class="grid gap-2 truncate">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>
    </div>
    <!-- <label for="message">Message:</label>
  <textarea id="message" name="message" rows="5" cols="30"></textarea> -->
    <div class=" text-center border-2 border-slate-500 hover:border-amber-400 mt-3 w-32 mx-auto">
      <input type="submit" value="Login" name="submit">
    </div>
  </form>

</body>
</html>