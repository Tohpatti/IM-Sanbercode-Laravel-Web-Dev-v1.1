<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
</head>
<body>
    <form action="{{route('greeting')}}" method="post">
        @csrf
        <label for="first_name">First name</label>
        <input type="text" id="first_name" name="first_name" required>
        <br><br>
        <label for="last_name">Last name</label>
        <input type="text" id="last_name" name="last_name" required>
        <br><br>
        <label for="">Gender:</label> <br>
        <input type="radio" name="gender" value="Male">Male <br>
        <input type="radio" name="gender" value="Female">Female <br>
        <input type="radio" name="gender" value="Other">Other <br>
        <br><br>
        <label for="">Nationality</label> <br>
        <select name="nationality" id="nationality">
            <option value="Indonesian">Indonesian</option>
            <option value="Singaporean">Singaporean</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Australian">Australian</option>
        </select>
        <br><br>
        <label for="language">Language Spoken:</label> <br>
        <input type="checkbox" name="languages" value="Indonesia">Bahasa Indonesia <br>
        <input type="checkbox" name="languages" value="English">English <br>
        <input type="checkbox" name="languages" value="Other">Other <br>
        <br><br>
        <label for="bio">Bio:</label> <br>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea>
        <br><br>
        {{-- <a href="{{url('/greeting')}}"> --}}
        <input type="submit" value="Sign Up">
        {{-- </a> --}}
    </form>
</body>
</html>