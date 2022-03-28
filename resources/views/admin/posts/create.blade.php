@extends('layouts.app')

@section('content')
    <h1>Nuovo Post</h1>
    <hr>
    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="title" class="form-label">Title Post</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="image" class="form-label">Image URL</label>
                    <input type="url" class="form-control" id="image" name="image" placeholder="Insert Image URL">
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="content" class="form-label">Description</label>
                    <textarea class="form-control" id="content" name="content" rows="5" placeholder="Insert post description"></textarea>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Create</button>
            </div>
        </div>
    </form>
@endsection
