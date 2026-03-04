<!DOCTYPE html>
<html>
<head>
    <title>Laravel File Upload</title>
</head>
<body>

<h2>Upload File</h2>

@if(session('success'))
<p style="color:green">{{ session('success') }}</p>
@endif

<form action="/upload-file" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file">
    <button type="submit">Upload</button>
</form>

</body>
</html>