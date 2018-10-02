@extends('layouts.master') 
@section('content')
<table>
    <thead>
        <tr>
            <th>Task</th>
            <th>Assigned to</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td><a href="">Loose weight - 10kg</a></td>
            <td>Eclair Doe</td>
            <td><a title="edit" href=""><i class="material-icons">edit</i></a></td>
            <td><a title="delete" href=""><i class="material-icons">delete_forever</i></a></td>
        </tr>
        <tr>
            <td><a href=""><strike>Order 20 bottles of coke.</strike></a></td>
            <td>Jane Doe</td>
            <td><a title="edit" href=""><i class="material-icons">edit</i></a></td>
            <td><a title="delete" href=""><i class="material-icons">delete_forever</i></a></td>
        </tr>
        <tr>
            <td><a href="">Cut the lawn</a></td>
            <td>John Doe</td>
            <td><a title="edit" href=""><i class="material-icons">edit</i></a></td>
            <td><a title="delete" href=""><i class="material-icons">delete_forever</i></a></td>
        </tr>
        <tr>
            <td><a href="">Find a job</a></td>
            <td>Peter Doe</td>
            <td><a title="edit" href=""><i class="material-icons">edit</i></a></td>
            <td><a title="delete" href=""><i class="material-icons">delete_forever</i></a></td>
        </tr>
    </tbody>
</table>
<br><br><br>
<ul class="pagination">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
</ul>
<br><br><br>
<form class="col s12">
    <div class="row">
        <div class="input-field col s12">
            <input id="task" type="text" class="validate">
            <label for="task">New task</label>
        </div>
    </div>
    <div class="input-field col s12">
        <select>
            <option value="" disabled selected>Assign to:</option>
            <option value="1">To myself</option>
            <option value="2">Jane Doe</option>
            <option value="3">John Doe</option>
            <option value="4">Peter Doe</option>
            <option value="5">Johnathan Doe</option>
        </select>
        <label>Assign Task</label>
    </div>
    <a class="waves-effect waves-light btn">Add new task</a>
</form>
<br><br><br>
<ul class="collection with-header">
    <li class="collection-header">
        <h4>My Coworkers</h4>
    </li>
    <li class="collection-item">
        <div>John Doe<a href="#!" class="secondary-content">Delete</a></div>
    </li>
    <li class="collection-item">
        <div>Jane Doe<a href="#!" class="secondary-content">Delete</a></div>
    </li>
    <li class="collection-item">
        <div>Peter Doe<a href="#!" class="secondary-content">Delete</a></div>
    </li>
    <li class="collection-item">
        <div>Johnathan Doe<a href="#!" class="secondary-content">Delete</a></div>
    </li>
</ul>
@endsection