@extends('layouts.app')

@section('content')
    <div class="container">
        <header>
            <h1>I miei post</h1>
        </header>
        <main>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Updated at</th>
                        <th scope="col">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $post)
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->slug }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td>{{ $post->updated_at }}</td>
                            <td>
                                <a href="{{ route('admin.posts.show', $post->id) }}"><button
                                        class="btn btn-sm btn-primary">Vedi</button></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">
                                <h3>Non ci sono post da mostrare</h3>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </main>
    </div>
@endsection
