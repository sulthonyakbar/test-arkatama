<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Arkatama</title>
</head>
<body>
    <form method="post" action="{{ route('pengguna.input') }}">
        @csrf
        <label for="data-pengguna">Input Data : </label>
        <input type="text" name="data-pengguna" placeholder="CUT MINI 28 BANDA ACEH" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>