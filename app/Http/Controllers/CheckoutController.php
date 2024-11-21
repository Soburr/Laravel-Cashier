<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $plan = 'price_1QNHWE2LxA1Y0Tv0iVjh1fDw')
    {
        return $request->user()
        ->newSubscription('prod_RFn66oyLnCBf9J', $plan)
        ->checkout([
            'success_url' => route('success'),
            'cancel_url' => route('dashboard')
        ]);
    }
}
