@extends('layouts.admin')

@section('title', 'Team Members - Admin')

@section('content')
    <section class="py-4">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1 class="h4 mb-0">Team Members</h1>
                <a href="{{ route('admin.team-members.create') }}" class="btn btn-sm btn-dark">
                    + Add Member
                </a>
            </div>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @if ($members->isEmpty())
                <p>No team members found. Click “Add Member” to create one.</p>
            @else
                <div class="table-responsive">
                    <table class="table table-striped align-middle">
                        <thead>
                        <tr>
                            <th scope="col">Order</th>
                            <th scope="col">Name</th>
                            <th scope="col">Role</th>
                            <th scope="col">Image</th>
                            <th scope="col">Updated</th>
                            <th scope="col" class="text-end">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($members as $member)
                            <tr>
                                <td>{{ $member->sort_order }}</td>
                                <td>{{ $member->name }}</td>
                                <td>{{ $member->role ?? '—' }}</td>
                                <td style="width: 120px;">
                                    @if ($member->image_path)
                                        <img
                                            src="{{ asset('storage/' . $member->image_path) }}"
                                            alt="{{ $member->name }}"
                                            class="img-fluid rounded"
                                        >
                                    @endif
                                </td>
                                <td>{{ $member->updated_at?->format('Y-m-d H:i') }}</td>
                                <td class="text-end">
                                    <a href="{{ route('admin.team-members.edit', $member) }}" class="btn btn-sm btn-outline-secondary">
                                        Edit
                                    </a>
                                    <form
                                        action="{{ route('admin.team-members.destroy', $member) }}"
                                        method="POST"
                                        class="d-inline"
                                        onsubmit="return confirm('Are you sure you want to delete this team member?');"
                                    >
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </section>
@endsection

