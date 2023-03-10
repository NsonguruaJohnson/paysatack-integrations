<x-guest-layout>
    <div>
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center">
            </div>
            <div class="mt-8 flow-root">
                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg px-6 py-6">
                            <form action="{{ route('payment.store') }}" class="min-w-full space-y-6 px-4" method="POST">
                                @csrf
                                <div>
                                    <label className="block text-sm font-medium leading-6 text-gray-700">
                                        Email
                                    </label>
                                    <div className="mt-2">
                                        <input id="email" name="email" type="email" autoComplete="email"
                                            placeholder="Email" class="block w-full" required />
                                    </div>
                                </div>

                                <div>
                                    <label className="block text-sm font-medium leading-6 text-gray-700">
                                        Amount
                                    </label>
                                    <div className="mt-2">
                                        <input id="text" name="amount" type="number" placeholder="Amount"
                                            class="block w-full" required />
                                    </div>
                                </div>

                                <div class="flex space-x-6">
                                    <a href="{{ route('payment.index') }}">
                                        <button type="button"
                                            class="block rounded-md bg-indigo-600 py-2 px-3 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                            Back
                                        </button>
                                    </a>
                                    <button type="submit"
                                        class="block rounded-md bg-green-600 py-2 px-3 text-center text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">
                                        Pay
                                    </button>
                                </div>


                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
