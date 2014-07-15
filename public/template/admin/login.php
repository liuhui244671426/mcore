<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>admin index login</title>
<link rel="stylesheet" href="cxx/admin/css/admin.css">
</head>
<body class="admin-login" onload="run();">
<img id="background" alt="admin-background" src="" />
<div class="login">

    <form action="index.php?m=admin&c=admin&a=login" method="post">
        <a href="javascript:;" title="enter">enter</a>
        <input type="type" placeholder="name" name="name">
        <input type="password" placeholder="password" name="password">
        <input type="submit" value="login"/>
    </form>

</div>
<script src="cxx/admin/js/rainyday.min.js"></script>
<script>
function run() {
  var image = document.getElementById('background');
  image.onload = function() {
    var engine = new RainyDay({
      image: this
    });
    engine.rain([ [1, 2, 8000] ]);
    engine.rain([ [3, 3, 0.88], [5, 5, 0.9], [6, 2, 1] ], 100);
  };
  image.crossOrigin = 'anonymous';
  image.src = 'cxx/admin/img/admin-bg.jpg';
}
</script>
</body>
</html>
