<x-guest-layout>
    <div>
        <div class="overflow-hidden bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-base font-semibold leading-6 text-gray-900">Payment Information</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">Payment details listed below.</p>
            </div>
            <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                <dl class="sm:divide-y sm:divide-gray-200">
                    <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Email</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                            {{ $data['customer']['email'] }}
                        </dd>
                    </div>
                    <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Amount</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                            N{{ number_format($data['amount'] / 100, 2) }}
                        </dd>
                    </div>
                </dl>

                <div class="flex mx-6 my-6">
                    <a href="{{ route('payment.index') }}">
                        <button type="button"
                            class="block rounded-md bg-indigo-600 py-2 px-3 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Back
                        </button>
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-guest-layout>
