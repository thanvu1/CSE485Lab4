@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('success'))
            <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const alert = document.getElementById('success-alert');
                    if (alert) {
                        // Tự động ẩn sau 5 giây (5000ms)
                        setTimeout(() => {
                            alert.classList.remove('show');
                            alert.classList.add('fade');
                            alert.style.display = 'none';
                        }, 5000);
                    }
                });
            </script>
            <h1>Reader List</h1>
        <a href="{{ route('readers.create') }}" class="btn btn-primary mb-3">Add New Reader</a>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Birthday</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($readers as $reader)
            <tr>
                <td>{{ $stt++ }}</td>
                <td>{{ $reader->name }}</td>
                <td>{{ $reader->birthday }}</td>
                <td>{{ $reader->address }}</td>
                <td>{{ $reader->phone }}</td>
                <td>
                    <a href="{{ route('readers.show', $reader->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('readers.edit', $reader->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <button
                            class="btn btn-danger btn-sm"
                            data-bs-toggle="modal"
                            data-bs-target="#confirmDeleteModal"
                            data-id="{{ $reader->id }}"
                            data-name="{{ $reader->name }}"
                            data-address="{{ $reader->address }}"
                            data-phone="{{ $reader->phone }}">
                            Delete
                    </button>
                </td>
            </tr>
            @endforeach

            <!-- Modal Xác Nhận Xóa -->
            <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="confirmDeleteModalLabel">Confirm Delete</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to delete this reader?
                            <p><strong>Name:</strong> <span id="readerName"></span></p>
                            <p><strong>Address:</strong> <span id="readerAddress"></span></p>
                            <p><strong>Phone:</strong> <span id="readerPhone"></span></p>
                        </div>
                        <div class="modal-footer">
                            <form id="deleteReaderForm" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Yes, Delete</button>
                            </form>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const deleteButtons = document.querySelectorAll('[data-bs-target="#confirmDeleteModal"]');

                    deleteButtons.forEach(button => {
                        button.addEventListener('click', function () {
                            const readerId = this.getAttribute('data-id');
                            const readerName = this.getAttribute('data-name');
                            const readerAddress = this.getAttribute('data-address');
                            const readerPhone = this.getAttribute('data-phone');

                            document.getElementById('readerName').textContent = readerName;
                            document.getElementById('readerAddress').textContent = readerAddress;
                            document.getElementById('readerPhone').textContent = readerPhone;

                            const deleteForm = document.getElementById('deleteReaderForm');
                            deleteForm.action = `/readers/${readerId}`;
                        });
                    });
                });
            </script>
            </tbody>
        </table>

        {{-- Phân trang --}}
            <div class="d-flex justify-content-center">
                {{ $readers->links() }}
            </div>
    </div>
@endsection
