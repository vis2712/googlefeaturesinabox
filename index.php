<!DOCTYPE html>
<html>
<body>

<h1>The input src attribute</h1>

<p>Click on the image, and the input will be sent to a page on the server called "/action_page.php".</p>

<form action="/avatar.php">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <input type="image" src="image.jpg" alt="Submit" width="48" height="48">
</form>

<p><b>Note:</b> The image input type sends the X and Y coordinates of the click that activated the image button as default.</p>

</body>
</html>
