@extends('layouts.app')

@section('view_menu')

<div class="container mt-3">
    <table class="centered highlight" >
        <thead>
            <tr>
                <th>Menu Name</th>
                <th>Created At</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
      @foreach($menus as $menu)

       <tbody>
            <tr>
                <td>{{$menu->menu_name}}</td>
                <td>{{$menu->created_at}}</td>
                <td><a href="{{ route('menu.edit', ['id' => $menu->id]) }}"><i class="small material-icons">edit</i></a></td>
                <td><a  href="{{ route('menu.confirm', ['id' => $menu->id]) }}"><i class="small material-icons">delete</i></a></td>
            </tr>
        </tbody>
        
       @endforeach
        
    </table>


</div>

@endsection
