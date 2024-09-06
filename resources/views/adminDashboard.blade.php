<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centered Text</title>
    <style>
        body {
            font-family: Arial, sans-serif; /* Optional: Sets a clean font */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh; /* Ensures the content is centered vertically */
        }
        .centertext {
            text-align: center;
            margin: 10px; /* Optional: Adds space around text */
        }
    </style>
</head>
<body>
    <div class="centertext">
        <!-- Add any content here if needed -->
    </div>
    <h1 class="centertext">Admin Dashboard</h1>
    <h3 class="centertext">This is Admin Dashboard</h3>

   <!-- <a href="{{route('ADGroute') }}">Gallery</a> -->

   <form action=" {{ route('ADGroute') }}" method="get">
    <button type="submit" >Gallery</button>
   </form>
</body>
</html>
