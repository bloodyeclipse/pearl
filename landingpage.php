<!DOCTYPE html>

<html>

<head>
  <title>Hello!</title>

    <style>
  #myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 0%;
  min-height: 00%;
}

/* Add some content at the bottom of the video/page */
.content {
  position: fixed;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

/* Style the button used to pause/play the video */
#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}</style>
</head>

<body>

<video autoplay muted loop id="myVideo">
  <source src="video3.mp4" type="video/mp4">
</video>

<!-- Optional: some overlay text to describe the video -->
<div class="content">

  <!-- Use a button to pause/play the video with JavaScript -->
  <button id="myBtn" onclick="myFunction()">Admin Login</button>
  <button id="myBtn" onclick="myFunction()">Security Login</button>
  <button id="myBtn" onclick="myFunction()">Tenant Login</button>
</div>
<script>

function myFunction() {
 
}
</script>

</body>
</html>