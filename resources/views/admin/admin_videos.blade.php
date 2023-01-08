@extends('admin.admin')

@section('content')
@include('admin.adminheader')
<div class="admin--content-dashboard">

    @include('admin.adminsidbar')
    <div class="admin-main-content">
        <div class="blogform-flex">
            <li><a href="/admin_video_add">Add Video</a></li>

        </div>
        <div class="event-table">
            <table class="table">
                <thead>
                    <tr>

                        <th scope="col">Video Name</th>

                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($video as $v)
                    <tr>
                        <td>{{$v->title}}</td>
                        <td><a href="/deletev/{{$v->id}}" class="admin-delete">Edite</a></td>

                    </tr>
                    @empty

                    @endforelse


                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
