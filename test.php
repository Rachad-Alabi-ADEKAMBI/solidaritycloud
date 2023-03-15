<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Letter by Letter Display</title>
    <style>
    #display {
        font-size: 36px;
        font-weight: bold;
        text-align: center;
    }
    </style>
</head>

<body>
    <div id="display"></div>
    <script>
    var word = "EXAMPLE"; // The word to be displayed
    var index = 0; // The current letter index
    var interval = setInterval(function() {
        document.getElementById("display").textContent += word[index++];
        if (index >= word.length) index = 0;
    }, 100); // Display each letter for 2 seconds
    </script>
</body>

</html>