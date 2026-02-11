<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Illuminate\View\View;

/**
 * Admin: list of subscribers (footer newsletter signups).
 */
class SubscriberController extends Controller
{
    /**
     * Display list of subscribed emails.
     */
    public function index(): View
    {
        $subscribers = Subscriber::orderByDesc('created_at')->get();

        return view('admin.subscribed.index', [
            'subscribers' => $subscribers,
        ]);
    }
}
