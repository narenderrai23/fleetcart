<?php

namespace Modules\Admin\Http\Controllers\Admin;

use Illuminate\Http\Response;
use Modules\User\Entities\User;
use Modules\Order\Entities\Order;
use Modules\Product\Entities\Product;
use Modules\Product\Entities\SearchTerm;
use Illuminate\Database\Eloquent\Collection;

class DashboardController
{
    /**
     * Display the dashboard with its widgets.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin::dashboard.index', [
            'totalSales' => Order::totalSales(),
            'totalProducts' => Product::withoutGlobalScope('active')->count(),
            'totalCustomers' => User::totalCustomers(),
            'latestSearchTerms' => $this->getLatestSearchTerms(),
        ]);
    }


    private function getLatestSearchTerms()
    {
        return SearchTerm::latest('updated_at')->take(5)->get();
    }


    /**
     * Get latest five orders.
     *
     * @return Collection
     */
    private function getLatestOrders()
    {
        return Order::select([
            'id',
            'customer_first_name',
            'customer_last_name',
            'total',
            'status',
            'created_at',
        ])->latest()->take(5)->get();
    }

}
