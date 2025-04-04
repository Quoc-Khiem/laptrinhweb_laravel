@extends('dashboard')

@section('content')
<div class="mb-3 card-header text-center">
            <a href="#" class="text-decoration-none text-dark mx-2">Home</a> |
            <a href="#" class="text-decoration-none text-dark fw-bold mx-2">Đăng xuất</a>
        </div>
    <main class="container text-center mt-4">
        <h3 class="fw-bold">Danh sách user</h3>

        <div class="table-responsive">
            <table class="table table-bordered text-center align-middle">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $index => $user)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="{{ route('user.updateUser', ['id' => $user->id]) }}" class="text-dark">Edit</a> |
                                <a href="{{ route('user.readUser', ['id' => $user->id]) }}" class="text-dark">View</a> |
                                <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}" class="text-dark">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <nav>
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>

        <div class="mt-3 text-center card-header">
            <p class="text-muted">Lập trình web © 01/2024</p>
        </div>
    </main>
@endsection
