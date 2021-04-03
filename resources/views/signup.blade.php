<form action="/signup" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="first_name">
    <input type="file" name="profile_picture">
    <input type="submit">
</form>