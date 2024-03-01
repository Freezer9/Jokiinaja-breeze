<div class="bg-white shadow-md rounded my-6">
    <table class="min-w-max w-full table-auto">
        <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-center">#</th>
                <th class="py-3 px-6 text-center">Invoice No</th>
                <th class="py-3 px-6 text-center">Transaction Date</th>
                <th class="py-3 px-6 text-center">Client Name</th>
                <th class="py-3 px-6 text-center">Total Price</th>
                <th class="py-3 px-6 text-center">Status</th>
            </tr>
        </thead>
        <tbody class="text-gray-600 text-sm font-light">
            @foreach($transactions as $index => $transaction)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6 text-center">{{ $index + 1 }}</td>
                    <td class="py-3 px-6 text-center">{{ $transaction->invoice->invoice_name }}</td>
                    <td class="py-3 px-6 text-center">{{ $transaction->created_at }}</td>
                    <td class="py-3 px-6 text-center">{{ $transaction->nickname }}</td>
                    <td class="py-3 px-6 text-center">Rp. {{ number_format($transaction->invoice->total_amount , 0, ',', '.') }}</td>
                    <td class="py-3 px-6 text-center">{{ $transaction->invoice->transaction_status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
