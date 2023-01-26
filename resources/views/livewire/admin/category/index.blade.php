<div class="row">
    <div class="col-md-12">
        @if (session('message'))
            <div class="alert alert-success">{{ @session('message') }}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h4>Category
                    <a href="{{ url('admin/category/create') }}" class="btn btn-sm btn-primary float-end">Add Category</a>
                </h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $key)
                            <tr>
                                <td>{{ $key->id }}</td>
                                <td>{{ $key->name }}</td>
                                <td>{{ $key->status == 0 ? 'Hidden' : 'Visible' }}</td>
                                <td>
                                    <a href="{{ url('admin/category/' . $key->id . '/edit') }}"
                                        class="btn btn-primary">EDIT</a>
                                    <a href="" class="btn btn-danger">DELETE</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
                <div>
                    {{ $categories->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
