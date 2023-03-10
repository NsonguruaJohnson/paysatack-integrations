<x-guest-layout>
    <div>
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-base font-semibold leading-6 text-gray-900">Payments</h1>
                    <p class="mt-2 text-sm text-gray-700">A list of all Payments</p>
                </div>
                <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                    <a href="{{ route('payment.create') }}">
                        <button type="button"
                            class="block rounded-md bg-indigo-600 py-2 px-3 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Make Payment
                        </button>
                    </a>
                </div>
            </div>
            <div class="mt-8 flow-root">
                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                            Email
                                        </th>
                                        <th scope="col"
                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Amount
                                        </th>
                                        <th scope="col"
                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">View
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    @forelse ($data as $transaction)
                                        <tr>
                                            <td
                                                class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                {{ $transaction['customer']['email'] }}
                                            </td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                N{{ number_format($transaction['amount'] / 100, 2) }}</td>

                                            <td
                                                class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                                <a href="{{ route('payment.view', ['id' => $transaction['id']]) }}"
                                                    class="text-indigo-600 hover:text-indigo-900">
                                                    View
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <p>No plan created yet</p>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
