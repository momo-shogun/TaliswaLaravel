@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="admin-dashboard container-fluid py-4">
        <div class="row mb-4">
            <div class="col-12">
                <h1 class="h3 mb-1">Welcome, Admin 👋</h1>
                <p class="text-muted mb-0">
                    Here is an overview of your Talisva content.
                </p>
            </div>
        </div>

        <div class="row g-3 mb-4">
            <div class="col-md-4">
                <div class="admin-card card shadow-sm h-100">
                    <div class="card-body">
                        <h2 class="card-title h6 text-muted text-uppercase mb-2">Team Members</h2>
                        <p class="display-6 mb-0">{{ $teamMemberCount }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="admin-card card shadow-sm h-100">
                    <div class="card-body">
                        <h2 class="card-title h6 text-muted text-uppercase mb-2">Winery Slides</h2>
                        <p class="display-6 mb-0">{{ $winerySlideCount }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="admin-card card shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title h6 text-muted text-uppercase mb-2">Quick actions</h2>
                        <div class="d-flex flex-wrap gap-2">
                            <a href="{{ route('admin.winery-slides.create') }}" class="btn btn-sm btn-dark">
                                + Add winery slide
                            </a>
                            <a href="{{ route('admin.team-members.create') }}" class="btn btn-sm btn-outline-secondary">
                                + Add team member
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

