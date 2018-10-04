<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>To-Do App</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>

<body>

    <div class="container">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <h5>Logged in as <strong class="purple-text text-darken-3">{{ Auth::user()->name }}  </strong> <button type="submit"
                    class="btn-small waves-effect waves-light btn">Logout</button></h5>
        </form>
        @isAdmin @if($invitations->count()>0)
        <ul class="collapsible">
            <li>
                <div class="collapsible-header">
                    <i class="material-icons">person_add</i> Invitations
                    <span class="new badge red">{{ $invitations->count() }}</span></div>
                <div class="collapsible-body">
                    @foreach($invitations as $invitation)
                    <p>
                        <span class="red-text">
                            <strong>{{ $invitation->worker->name }} <a href="{{ route('acceptInvitation', ['id'=>$invitation->id]) }}">Accept</a> | <a href="{{ route('denyInvitation', ['id'=>$invitation->id]) }}">Deny</a> </strong>
                        </span>
                    </p>
                    @endforeach
                </div>
            </li>
        </ul>
        @endif @endisAdmin
        <h1 class="center-align blue-text text-darken-4">To-Do List</h1>

        @yield('content')
        <br><br><br>
    </div>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.collapsible').collapsible();
        });
        $(document).ready(function () {
            $('select').formSelect();
        });
    </script>

</body>

</html>