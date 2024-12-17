<from action="/submit" method="POST">
    @csrf <!-- CSRF token for security against cross-site request forgery attacks-->
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <button type="submit">Submit</button>
</from>
