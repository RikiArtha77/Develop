<x-homelayout>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold text-center mb-6">Shopping Cart</h1>

        <!-- Cart Items -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <!-- Item 1 -->
            <div class="flex items-center border-b border-gray-200 pb-4 mb-4">
                <img src="https://via.placeholder.com/80" alt="Espresso" class="w-20 h-20 rounded-md mr-4">
                <div class="flex-grow">
                    <h2 class="text-lg font-semibold">Espresso</h2>
                    <p class="text-gray-500">Rp 20,000</p>
                    <div class="flex items-center mt-2">
                        <button class="px-2 py-1 bg-gray-300 rounded">-</button>
                        <span class="px-3">1</span>
                        <button class="px-2 py-1 bg-gray-300 rounded">+</button>
                    </div>
                </div>
                <div class="text-right">
                    <p class="text-lg font-semibold">Rp 20,000</p>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="flex items-center border-b border-gray-200 pb-4 mb-4">
                <img src="https://via.placeholder.com/80" alt="Latte" class="w-20 h-20 rounded-md mr-4">
                <div class="flex-grow">
                    <h2 class="text-lg font-semibold">Latte</h2>
                    <p class="text-gray-500">Rp 25,000</p>
                    <div class="flex items-center mt-2">
                        <button class="px-2 py-1 bg-gray-300 rounded">-</button>
                        <span class="px-3">1</span>
                        <button class="px-2 py-1 bg-gray-300 rounded">+</button>
                    </div>
                </div>
                <div class="text-right">
                    <p class="text-lg font-semibold">Rp 25,000</p>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="flex items-center border-b border-gray-200 pb-4 mb-4">
                <img src="https://via.placeholder.com/80" alt="Cappuccino" class="w-20 h-20 rounded-md mr-4">
                <div class="flex-grow">
                    <h2 class="text-lg font-semibold">Cappuccino</h2>
                    <p class="text-gray-500">Rp 30,000</p>
                    <div class="flex items-center mt-2">
                        <button class="px-2 py-1 bg-gray-300 rounded">-</button>
                        <span class="px-3">1</span>
                        <button class="px-2 py-1 bg-gray-300 rounded">+</button>
                    </div>
                </div>
                <div class="text-right">
                    <p class="text-lg font-semibold">Rp 30,000</p>
                </div>
            </div>
        </div>

        <!-- Summary -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <div class="flex justify-between items-center mb-3">
                <span class="text-gray-700">Subtotal</span>
                <span class="text-lg font-semibold">Rp 75,000</span>
            </div>
            <div class="flex justify-between items-center mb-3">
                <span class="text-gray-700">Pajak (10%)</span>
                <span class="text-lg font-semibold">Rp 7,500</span>
            </div>
            <div class="flex justify-between items-center border-t border-gray-200 pt-3">
                <span class="text-gray-700 font-bold">Total</span>
                <span class="text-xl font-bold">Rp 82,500</span>
            </div>
        </div>

        <!-- Checkout Button -->
        <div class="text-center">
            <button class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 rounded-lg">
                Pay
            </button>
        </div>
    </div>
</x-homelayout>