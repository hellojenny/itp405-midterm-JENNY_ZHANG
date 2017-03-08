<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
  </head>
  <body>
    <h1>Admin</h1>
    @if (session('successStatus'))
    <p>{{session('successStatus')}} {{ $user->name }}</p>
    @endif
    <p>...</p>
  </body>
</html>
