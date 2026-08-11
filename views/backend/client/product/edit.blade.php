@extends('backend.layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        {{-- Header Section --}}
        <div class="d-flex justify-content-between align-items-center py-3 mb-4">
            <div>
                <h4 class="fw-bold mb-0">
                    <span class="text-muted fw-light">Clients /</span> Add New Client
                </h4>
                <p class="mb-0 text-muted">Create a new client account in the system</p>
            </div>
            <div>
                <a href="{{ route('admin.users.index') }}" class="btn btn-outline-secondary me-2">
                    <i class="ti ti-arrow-left me-1"></i> Back to List
                </a>

            </div>
        </div>
        <div class="contentarea" id="contentarea">
            <div style="float:left;width:100%;">
                <h1>Add New Order</h1>

                <form method="post" action="{{ route('admin.orders.store') }}" id="orderfrm">
                    @csrf
                    <input type="hidden" name="submitorder" value="true">

                    <div class="row">
                        <div class="col-md-8">

                            {{-- TOP ORDER TABLE --}}
                            <div class="table-responsive">
                                <table class="form" width="100%" cellspacing="2" cellpadding="3">
                                    <tbody>
                                        <tr>
                                            <td width="130" class="fieldlabel">Client</td>
                                            <td class="fieldarea">
                                                <div style="max-width:400px" class="form-field-width-container">
                                                    <select id="selectUserid" name="clientid" class="form-control"
                                                        style="max-width:400px;">
                                                        <option value=""></option>
                                                        <optgroup label="Active">
                                                        @foreach($clients as $c)
                                                            @if(($c['status'] ?? '') === 'Active')
                                                            <option value="{{ $c['id'] }}"
                                                                    @selected((int)($c['id'] ?? 0) === (int)($clientId ?? 0))
                                                                    data-email="{{ $c['email'] ?? '' }}">
                                                                {{ trim(($c['firstname'] ?? '').' '.($c['lastname'] ?? '')) }}
                                                                @if(!empty($c['companyname'])) ({{ $c['companyname'] }}) @endif
                                                                - #{{ $c['id'] }}
                                                            </option>
                                                            @endif
                                                        @endforeach
                                                        </optgroup>

                                                        <optgroup label="Inactive">
                                                        @foreach($clients as $c)
                                                            @if(($c['status'] ?? '') !== 'Active')
                                                            <option value="{{ $c['id'] }}"
                                                                    @selected((int)($c['id'] ?? 0) === (int)($clientId ?? 0))
                                                                    data-email="{{ $c['email'] ?? '' }}">
                                                                {{ trim(($c['firstname'] ?? '').' '.($c['lastname'] ?? '')) }}
                                                                @if(!empty($c['companyname'])) ({{ $c['companyname'] }}) @endif
                                                                - #{{ $c['id'] }}
                                                            </option>
                                                            @endif
                                                        @endforeach
                                                        </optgroup>

                                                    </select>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="fieldlabel">Payment Method</td>
                                            <td class="fieldarea">
                                                <select name="paymentmethod" class="form-control select-inline">
                                                    @foreach($paymethodMethods as $m)
                                                    <option value="{{ $m['module'] ?? $m['displayname'] }}">
                                                        {{ $m['displayname'] ?? $m['module'] }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>



                                        <tr>
                                            <td class="fieldlabel">Order Status</td>
                                            <td class="fieldarea">
                                                <select name="orderstatus" class="form-control select-inline">
                                                    <option value="Pending" selected>Pending</option>
                                                    <option value="Active">Active</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="fieldlabel"></td>
                                            <td class="fieldarea">
                                                <label class="checkbox-inline"><input type="checkbox"
                                                        name="adminorderconf" checked> Order Confirmation</label>
                                                <label class="checkbox-inline"><input type="checkbox"
                                                        name="admingenerateinvoice" checked> Generate Invoice</label>
                                                <label class="checkbox-inline"><input type="checkbox"
                                                        name="adminsendinvoice" checked> Send Email</label>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            {{-- PRODUCTS --}}
                            <div id="products">
                                <div id="ord0" class="product" data-index="0">
                                    <p><b>Product/Service</b></p>

                                    <div class="table-responsive">
                                        <table class="form" width="100%" cellspacing="2" cellpadding="3">
                                            <tbody>
                                                <tr>
                                                    <td width="130" class="fieldlabel">Product/Service</td>
                                                    <td class="fieldarea">
                                                        <select name="pid[]" id="pid0"
                                                            class="form-control select-inline pid"
                                                            onchange="loadproductoptions(this)">
                                                            <option value="">None</option>
                                                            @foreach($mainproducts as $group => $items)
                                                            <optgroup label="{{ $group }}">
                                                                @foreach($items as $p)
                                                                <option value="{{ $p['pid'] }}">{{ $p['name'] }}
                                                                </option>
                                                                @endforeach
                                                            </optgroup>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="fieldlabel">Domain</td>
                                                    <td class="fieldarea">
                                                        <div class="domain-feedback hidden">
                                                            <i class="far fa-exclamation-triangle"></i> Not a domain
                                                        </div>
                                                        <input type="text" name="domain[]"
                                                            class="form-control input-300 domain-input"
                                                            onkeyup="handleProductDomainInput(this)">
                                                        <span class="whoisresult" id="whoisresult0"></span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="fieldlabel">Billing Cycle</td>
                                                    <td class="fieldarea">
                                                        <select name="billingcycle[]"
                                                            class="form-control select-inline billingcycle"
                                                            id="billingcycle0" onchange="updatesummary();">
                                                            <option value="Free Account">Free</option>
                                                            <option value="One Time">One Time</option>
                                                            <option value="Monthly" selected>Monthly</option>
                                                            <option value="Quarterly">Quarterly</option>
                                                            <option value="Semi-Annually">Semi-Annually</option>
                                                            <option value="Annually">Annually</option>
                                                            <option value="Biennially">Biennially</option>
                                                            <option value="Triennially">Triennially</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr id="addonsrow0" style="display:none;">
                                                    <td class="fieldlabel">Addons</td>
                                                    <td class="fieldarea" id="addonscont0"></td>
                                                </tr>

                                                <tr>
                                                    <td class="fieldlabel">Quantity</td>
                                                    <td class="fieldarea">
                                                        <input type="text" name="qty[]" value="1"
                                                            class="form-control input-50 qty" onkeyup="updatesummary()">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="fieldlabel">Price Override</td>
                                                    <td class="fieldarea">
                                                        <input type="text" name="priceoverride[]"
                                                            class="form-control input-100 input-inline priceoverride"
                                                            onkeyup="updatesummary()">
                                                        <span class="text-muted">(Only enter to manually override
                                                            default product pricing)</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div id="productconfigoptions0"></div>

                                    <div class="mt-2">
                                        <button type="button"
                                            class="btn btn-danger btn-sm remove-product d-none">Remove</button>
                                    </div>
                                </div>
                            </div>

                            <p class="add-actions">
                                <a href="#" class="btn btn-default btn-sm addproduct">Add Another Product</a>
                            </p>

                            {{-- DOMAIN REGISTRATION --}}
                            <p><b>Domain Registration</b></p>

                            <div id="domains">
                                <div class="domain-block" data-index="0">
                                    <div class="table-responsive">
                                        <table class="form tbl-domain-config" width="100%" cellspacing="2"
                                            cellpadding="3">
                                            <tbody>
                                                <tr>
                                                    <td width="130" class="fieldlabel">Registration Type</td>
                                                    <td class="fieldarea">
                                                        <label class="radio-inline">
                                                            <input type="radio" name="regaction[0]" value=""
                                                                class="domain-reg-action" checked>
                                                            None
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="regaction[0]" value="register"
                                                                class="domain-reg-action">
                                                            Registration
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="regaction[0]" value="transfer"
                                                                class="domain-reg-action">
                                                            Transfer
                                                        </label>
                                                    </td>
                                                </tr>

                                                <tr class="domain-row d-none">
                                                    <td class="fieldlabel">Domain</td>
                                                    <td class="fieldarea">
                                                        <input type="text" name="regdomain[]"
                                                            class="form-control input-300 input-reg-domain">
                                                        <span class="required-field-indication text-warning hidden">*
                                                            Indicates a required field</span>
                                                        <span class="invalid-tld text-danger hidden">TLD/Extension not
                                                            configured for sale.</span>
                                                    </td>
                                                </tr>

                                                <tr class="period-row d-none">
                                                    <td class="fieldlabel">Registration Period</td>
                                                    <td class="fieldarea">
                                                        <select name="regperiod[]" class="form-control select-inline"
                                                            onchange="updatesummary()">
                                                            @for($i=1;$i<=10;$i++) <option value="{{ $i }}">{{ $i }}
                                                                Year</option>
                                                                @endfor
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="domain-eppcode d-none">
                                                    <td class="fieldlabel">EPP Code</td>
                                                    <td class="fieldarea">
                                                        <input type="text" name="eppcode[]"
                                                            class="form-control input-150">
                                                    </td>
                                                </tr>

                                                <tr class="addons-domain-row d-none">
                                                    <td class="fieldlabel">Domain Addons</td>
                                                    <td class="fieldarea">
                                                        <label class="checkbox-inline"><input type="checkbox"
                                                                name="dnsmanagement[0]" value="1"
                                                                onchange="updatesummary()"> DNS Management</label>
                                                        <label class="checkbox-inline"><input type="checkbox"
                                                                name="emailforwarding[0]" value="1"
                                                                onchange="updatesummary()"> Email Forwarding</label>
                                                        <label class="checkbox-inline"><input type="checkbox"
                                                                name="idprotection[0]" value="1"
                                                                onchange="updatesummary()"> ID Protection</label>
                                                    </td>
                                                </tr>

                                                <tr class="price-over-row d-none">
                                                    <td class="fieldlabel">Registration Price Override</td>
                                                    <td class="fieldarea">
                                                        <input type="text" name="domainpriceoverride[0]"
                                                            class="form-control input-100 input-inline"
                                                            oninput="updatesummary()">
                                                        <span class="text-muted">(Only enter to manually override
                                                            default pricing)</span>
                                                    </td>
                                                </tr>

                                                <tr class="renew-over-row d-none">
                                                    <td class="fieldlabel">Renewal Price Override</td>
                                                    <td class="fieldarea">
                                                        <input type="text" name="domainrenewoverride[0]"
                                                            class="form-control input-100 input-inline"
                                                            oninput="updatesummary()">
                                                        <span class="text-muted">(Only enter to manually override
                                                            default pricing)</span>
                                                    </td>
                                                </tr>

                                                <tr class="idn-language-selector d-none">
                                                    <td class="fieldlabel">IDN Language</td>
                                                    <td class="fieldarea">
                                                        <select name="idnlanguage[0]"
                                                            class="form-control select-inline">
                                                            <option value="">Choose IDN Language</option>
                                                            <option value="ben">Bengali</option>
                                                            <option value="eng">English</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="mt-2">
                                        <button type="button"
                                            class="btn btn-danger btn-sm remove-domain d-none">Remove</button>
                                    </div>
                                </div>
                            </div>

                            <p class="add-actions">
                                <a href="#" class="btn btn-default btn-sm adddomain">Add Another Domain</a>
                            </p>

                            {{-- Domain Contact --}}
                            <div id="domainContactContainer" style="display:none;">
                                <p><b>Domain Registration Contact</b></p>
                                <p class="text-muted">
                                    Defines the name and address information to use for all domain registrations within
                                    this order.
                                </p>

                                <div class="table-responsive">
                                    <table class="form" width="100%" cellspacing="2" cellpadding="3">
                                        <tbody>
                                            <tr>
                                                <td width="130" class="fieldlabel">Choose Contact</td>
                                                <td class="fieldarea">
                                                    <select name="contactid" id="inputContactID"
                                                        class="form-control select-inline"></select>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>

                        {{-- RIGHT: SUMMARY --}}
                        <div class="col-md-4">
                            <div id="ordersumm">
                                <div class="ordersummarytitle">Order Summary</div>
                                <div id="ordersummary">
                                    <table>
                                        <tbody id="summaryBody">
                                            <tr class="item">
                                                <td colspan="2">
                                                    <div class="itemtitle" align="center">No Items Selected</div>
                                                </td>
                                            </tr>
                                            <tr class="subtotal">
                                                <td>Sub Total</td>
                                                <td class="alnright">$0.00 USD</td>
                                            </tr>
                                            <tr class="total">
                                                <td width="140">Total</td>
                                                <td class="alnright">$0.00 USD</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="ordersummarytitle">
                                <input type="submit" value="Submit Order »" id="btnSubmit" class="btn btn-primary"
                                    style="font-size:20px;padding:12px 30px;">
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    /* minimal UI pack (WHMCS-like) */
    table.form {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0 10px;
    }

    table.form td.fieldlabel {
        width: 170px;
        white-space: nowrap;
        font-weight: 700;
        color: #344054;
        padding: 8px 12px 0 0;
        vertical-align: top;
    }

    table.form td.fieldarea {
        vertical-align: top;
    }

    .select-inline {
        max-width: 270px;
    }

    .input-50 {
        max-width: 90px;
    }

    .input-100 {
        max-width: 160px;
    }

    .input-150 {
        max-width: 220px;
    }

    .input-300 {
        max-width: 320px;
    }

    .checkbox-inline,
    .radio-inline {
        display: inline-flex;
        gap: .45rem;
        align-items: center;
        margin-right: 14px;
        margin-bottom: 6px;
    }

    .btn-default {
        background: #F2F4F7;
        border: 1px solid #D0D5DD;
        color: #344054;
        border-radius: 8px;
    }

    .btn-default:hover {
        background: #E9EDF3;
    }

    #ordersumm {
        border: 1px solid #EAECF0;
        border-radius: 14px;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 1px 2px rgba(16, 24, 40, .06);
    }

    .ordersummarytitle {
        background: #F9FAFB;
        border-bottom: 1px solid #EAECF0;
        padding: 12px 14px;
        font-weight: 800;
    }

    #ordersummary td {
        padding: 10px 14px;
    }

    .alnright {
        text-align: right;
    }

    .hidden {
        display: none !important;
    }

    .domain-feedback {
        display: inline-flex;
        gap: .4rem;
        align-items: center;
        color: #B42318;
        margin: 0 0 6px 0;
        font-size: 13px;
    }

    .add-actions {
        padding: 10px 0 5px 20px;
        margin: 0;
    }

    .add-actions img {
        display: none;
    }

    .add-actions a::before {
        content: "+";
        display: inline-flex;
        width: 18px;
        height: 18px;
        align-items: center;
        justify-content: center;
        border-radius: 6px;
        margin-right: 8px;
        font-weight: 900;
        border: 1px solid #D0D5DD;
        background: #fff;
    }

</style>
@endpush

@push('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    // dummy hooks (replace with your actual ajax loaders later)
    window.loadproductoptions = window.loadproductoptions || function () {};
    window.handleProductDomainInput = window.handleProductDomainInput || function () {};

    function money(n) {
        return '$' + (Number(n || 0).toFixed(2)) + ' USD';
    }

    function updatesummary() {
        let itemsHtml = '';
        let sub = 0;

        // products
        $('#products .product').each(function () {
            const pidSel = $(this).find('select.pid option:selected').text().trim();
            const pidVal = $(this).find('select.pid').val();
            if (!pidVal) return;

            const qty = Number($(this).find('input.qty').val() || 1);
            const domain = ($(this).find('input.domain-input').val() || '').trim();
            const cycle = ($(this).find('select.billingcycle').val() || '').trim();
            const priceOv = ($(this).find('input.priceoverride').val() || '').trim();

            // demo pricing: override থাকলে সেটাই, না থাকলে 1.00
            const unit = priceOv !== '' ? Number(priceOv) : 1.00;
            const line = unit * qty;
            sub += line;

            itemsHtml += `
        <tr class="item">
          <td colspan="2">
            <div class="itemtitle">${qty} x ${escapeHtml(pidSel)}</div>
            ${escapeHtml(cycle)} ${domain ? ' - ' + escapeHtml(domain) : ''}
            <div class="itempricing">${money(line)}</div>
          </td>
        </tr>
      `;
        });

        // domain reg summary (simple)
        $('#domains .domain-block').each(function () {
            const idx = $(this).data('index');
            const action = $(this).find('input.domain-reg-action:checked').val();
            if (!action) return;

            const dom = ($(this).find('input[name="regdomain[]"]').val() || '').trim();
            if (!dom) return;

            // demo domain price 2.00
            const line = 2.00;
            sub += line;

            itemsHtml += `
        <tr class="item">
          <td colspan="2">
            <div class="itemtitle">Domain ${escapeHtml(action)}: ${escapeHtml(dom)}</div>
            <div class="itempricing">${money(line)}</div>
          </td>
        </tr>
      `;
        });

        if (!itemsHtml) {
            itemsHtml = `
        <tr class="item">
          <td colspan="2"><div class="itemtitle" align="center">No Items Selected</div></td>
        </tr>
      `;
        }

        const total = sub;
        $('#summaryBody').html(`
      ${itemsHtml}
      <tr class="subtotal"><td>Sub Total</td><td class="alnright">${money(sub)}</td></tr>
      <tr class="total"><td width="140">Total</td><td class="alnright">${money(total)}</td></tr>
    `);
    }

    function escapeHtml(str) {
        return String(str || '').replace(/[&<>"']/g, (m) => ({
            '&': '&amp;',
            '<': '&lt;',
            '>': '&gt;',
            '"': '&quot;',
            "'": '&#039;'
        } [m]));
    }

    // select2 init
    $(function () {
        $('#selectUserid').select2({
            placeholder: 'Start Typing to Search Clients',
            width: '400px',
            allowClear: true
        });
        $('#promodd').select2({
            width: '340px'
        });

        updatesummary();
    });

    // ADD PRODUCT (clone clean)
    $(document).on('click', '.addproduct', function (e) {
        e.preventDefault();
        const next = $('#products .product').length;

        const $tpl = $('#ord0').clone();
        $tpl.attr('id', 'ord' + next).attr('data-index', next);

        // clear values
        $tpl.find('select.pid').attr('id', 'pid' + next).val('');
        $tpl.find('.whoisresult').attr('id', 'whoisresult' + next).text('');
        $tpl.find('input.domain-input').val('');
        $tpl.find('select.billingcycle').attr('id', 'billingcycle' + next).val('Monthly');
        $tpl.find('input.qty').val('1');
        $tpl.find('input.priceoverride').val('');

        // remove config options area id
        $tpl.find('[id^="productconfigoptions"]').attr('id', 'productconfigoptions' + next).html('');

        // addons row ids
        $tpl.find('#addonsrow0').attr('id', 'addonsrow' + next).hide();
        $tpl.find('#addonscont0').attr('id', 'addonscont' + next).html('');

        // show remove btn
        $tpl.find('.remove-product').removeClass('d-none');

        $('#products').append($tpl);
        updatesummary();
    });

    // REMOVE PRODUCT
    $(document).on('click', '.remove-product', function () {
        $(this).closest('.product').remove();
        updatesummary();
    });

    // DOMAIN reg toggle
    function toggleDomainRows($block) {
        const action = $block.find('input.domain-reg-action:checked').val();

        const $domainRow = $block.find('.domain-row');
        const $periodRow = $block.find('.period-row');
        const $addonsRow = $block.find('.addons-domain-row');
        const $priceOver = $block.find('.price-over-row');
        const $renewOver = $block.find('.renew-over-row');
        const $idnRow = $block.find('.idn-language-selector');
        const $eppRow = $block.find('.domain-eppcode');

        if (!action) {
            $domainRow.addClass('d-none');
            $periodRow.addClass('d-none');
            $addonsRow.addClass('d-none');
            $priceOver.addClass('d-none');
            $renewOver.addClass('d-none');
            $idnRow.addClass('d-none');
            $eppRow.addClass('d-none');
            return;
        }

        $domainRow.removeClass('d-none');
        $periodRow.removeClass('d-none');
        $addonsRow.removeClass('d-none');
        $priceOver.removeClass('d-none');
        $renewOver.removeClass('d-none');

        // transfer হলে epp show
        if (action === 'transfer') {
            $eppRow.removeClass('d-none');
        } else {
            $eppRow.addClass('d-none');
            $block.find('input[name="eppcode[]"]').val('');
        }

        // idn optional (আপনি চাইলে condition দিন)
        $idnRow.addClass('d-none');
    }

    $(document).on('change', '.domain-reg-action', function () {
        const $block = $(this).closest('.domain-block');
        toggleDomainRows($block);
        updatesummary();
    });

    // ADD DOMAIN
    $(document).on('click', '.adddomain', function (e) {
        e.preventDefault();
        const next = $('#domains .domain-block').length;

        const $tpl = $('#domains .domain-block').first().clone();
        $tpl.attr('data-index', next);

        // rename indexed names: regaction[next], dnsmanagement[next], etc
        $tpl.find('input.domain-reg-action').each(function () {
            $(this).attr('name', 'regaction[' + next + ']');
            $(this).prop('checked', false);
        });
        $tpl.find('input.domain-reg-action[value=""]').prop('checked', true);

        $tpl.find('input[name="regdomain[]"]').val('');
        $tpl.find('select[name="regperiod[]"]').val('1');
        $tpl.find('input[name="eppcode[]"]').val('');

        $tpl.find('input[name^="dnsmanagement"]').attr('name', 'dnsmanagement[' + next + ']').prop('checked',
            false);
        $tpl.find('input[name^="emailforwarding"]').attr('name', 'emailforwarding[' + next + ']').prop(
            'checked', false);
        $tpl.find('input[name^="idprotection"]').attr('name', 'idprotection[' + next + ']').prop('checked',
            false);

        $tpl.find('input[name^="domainpriceoverride"]').attr('name', 'domainpriceoverride[' + next + ']').val(
            '');
        $tpl.find('input[name^="domainrenewoverride"]').attr('name', 'domainrenewoverride[' + next + ']').val(
            '');
        $tpl.find('select[name^="idnlanguage"]').attr('name', 'idnlanguage[' + next + ']').val('');

        // hide rows default
        $tpl.find(
                '.domain-row,.period-row,.addons-domain-row,.price-over-row,.renew-over-row,.idn-language-selector,.domain-eppcode'
            )
            .addClass('d-none');

        // show remove
        $tpl.find('.remove-domain').removeClass('d-none');

        $('#domains').append($tpl);
        updatesummary();
    });

    // REMOVE DOMAIN
    $(document).on('click', '.remove-domain', function () {
        $(this).closest('.domain-block').remove();
        updatesummary();
    });

    // update summary when changing inputs
    $(document).on('keyup change', '#orderfrm input, #orderfrm select', function () {
        // avoid heavy spam for select2 search input
        updatesummary();
    });

</script>
@endpush
