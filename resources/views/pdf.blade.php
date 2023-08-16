<!DOCTYPE html>
<html>
<head>
    <title>Images to PDF</title>
    <style>
        img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    @foreach ($imagePaths as $imagePath)
        <img src="{{ $imagePath }}" alt="Image">
        <br>
    @endforeach
</body>
</html>
