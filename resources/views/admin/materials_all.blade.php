@extends('layouts.app')

@section('content')
<div class="container justify-content-center">

<table class="table">
        <thead>
          <tr>
            <th scope="col">material id</th>
            <th scope="col">name</th>
            <th scope="col">title</th>
            <th scope="col">edit</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($materials as $material)
          <tr>
            <th scope="row">{{ $material->id }}</th>
            <td>{{ $material->material_title }} </td>
            <td>{{ $material->material_description }}</td>
            <td><a role='button' class="btn btn-success btn-sm" href="{!! route('materials.show', ['material' => $material->id]) !!}">edit</a></td>
          </tr>
        @endforeach
        </tbody>
</table>

</div>

@endsection
