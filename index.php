<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Taskmagnet</title>
    <link rel="stylesheet" href="indexes.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="forphp.js"></script>
</head>
<body>
<h1 class="titlehead">TaskMagnet</h1>

<div class="line-frame"></div>

<div class="ventureshape">
<input type="text" id="VentureTitle" name="VentureTitle" class="venturetitle"><br><br>


        <div class="venturecontrols">

        <input type="color" class="colorpicker" id="favcolor" name="favcolor" value="#ff0000"><br><br>
        

        <button id="saveBtn" class="saveventure">Save</button>

        </div>
    </div>
    

    <div class="line-frame"></div>

    <div class="pluscontainer">
        <span>+</span>
      </div>

<!-- Ventures list container -->
<div id="venturesList" class="venturesList"></div>


<script src="script.js"></script>
     
</body>
</html>

