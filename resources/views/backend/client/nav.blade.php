{{-- @php
    dd($resp);
@endphp --}}

<div class="row">
    <div class="col-md-12">
        <div class="nav-align-top">
            <ul class="nav nav-pills flex-column flex-sm-row mb-6 gap-sm-0 gap-2">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('users/details') ? 'active' : '' }}" href="{{route('admin.users.details', ['client_id' => $client['id']])}}"><i
                            class="icon-base ti tabler-users icon-sm me-1_5"></i> Summary</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.users.edit') ? 'active' : '' }}"
                        href="{{ route('admin.users.edit', $client['id']) }}">
                        <i class="icon-base ti tabler-users icon-sm me-1_5"></i> Profile
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ request()->routeIs('admin.users.contact') ? 'active' : '' }}" href="{{route('admin.users.contact', $client['id'])}}"><i
                            class="icon-base ti tabler-layout-grid icon-sm me-1_5"></i> Contacts </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.users.products') ? 'active' : '' }}" href="{{ route('admin.users.products', ['clientId' => $client['id']]) }}"><i
                            class="icon-base ti tabler-link icon-sm me-1_5"></i>Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.users.invoices') ? 'active' : '' }}" href="{{ route('admin.users.invoices', ['clientid' => $client['id']]) }}"><i
                            class="icon-base ti tabler-link icon-sm me-1_5"></i>Invoices</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.users.domains') ? 'active' : '' }}" href="{{ route('admin.users.domains', ['clientid' => $client['id']]) }}"><i
                            class="icon-base ti tabler-link icon-sm me-1_5"></i>Domain</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.users.billableitem') || request()->routeIs('admin.users.add.billableitem') ? 'active' : '' }}" href="{{ route('admin.users.billableitem', ['clientid' => $client['id']]) }}"><i
                            class="icon-base ti tabler-link icon-sm me-1_5"></i>Billable Items</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.users.transaction') || request()->routeIs('admin.users.addtransaction') || request()->routeIs('admin.users.transaction.edit') || request()->routeIs('admin.users.transaction.update')  ? 'active' : '' }}" href="{{ route('admin.users.transaction', ['clientid' => $client['id']]) }}"><i
                            class="icon-base ti tabler-link icon-sm me-1_5"></i>Transactions</a>
                </li>
            </ul>
        </div>
    </div>
</div>
