@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Category
                        <a href="{{ url('admin/category') }}" class="btn btn-sm btn-primary text-white float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/category/' . $category->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Slug</label>
                                <input type="text" class="form-control" name="slug"value="{{ $category->slug }}">
                                @error('slug')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Description</label>
                                <textarea class="form-control" name="description" id="" cols="30" rows="3">{{ $category->description }}</textarea>
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Image</label>
                                <input type="file" class="form-control" name="image">
                                <img src="{{ asset('/uploads/category/' . $category->image) }}" alt=""
                                    height="100px">
                                @error('image')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Status</label><br>
                                <input type="checkbox" name="status" {{ $category->status == 1 ? 'checked' : '' }}>
                                @error('status')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                {{-- <select class="form-control selectric" name="status" id="">
                                    <option value="1">Aktif</option>
                                    <option value="0">Tidak Aktif</option>
                                </select> --}}
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Meta Title</label>
                                <input type="text" class="form-control" name="meta_title"
                                    value="{{ $category->meta_title }}">
                                @error('meta_title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Meta Keyword</label>
                                <textarea class="form-control" name="meta_keyword" id="" cols="30" rows="3">{{ $category->meta_keyword }}</textarea>
                                @error('meta_keyword')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Meta Description</label>
                                <textarea class="form-control" name="meta_description" id="" cols="30" rows="3">{{ $category->meta_description }}</textarea>
                                @error('meta_description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit" class="btn btn-primary text-white float-end">SAVE</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
