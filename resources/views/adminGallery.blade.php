<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Gallery</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .gallery-title {
            text-align: center;
            margin: 20px 0;
            color: #333;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 15px;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .gallery-item {
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .gallery-item img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }

        .gallery-item img:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <h1 class="gallery-title">Admin Gallery</h1>
    <div class="gallery">
        <form action="{{ route('ADform') }}" method="post">
            @csrf
            <input type="text" name="StudentName" placeholder="Student Name" required>
            <input type="email" name="StudentEmail" placeholder="Email" required>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>
