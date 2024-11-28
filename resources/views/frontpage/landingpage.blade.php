<x-homelayout>
    <container>
        <!-- Hero Section -->
        <section id="home" class="bg-cover bg-center h-screen flex items-center justify-center" style="background-image: url('https://source.unsplash.com/1600x900/?coffee,drinks');">
          <div class="bg-black bg-opacity-50 p-10 rounded-lg text-center">
            <h1 class="text-4xl font-bold text-white">Welcome To Coffdrin</h1>
            <p class="text-white mt-4">Find your drinks or coffie to makes your day.</p>
            <a href="{{ route('produk') }}" class="mt-6 inline-block bg-teal-600 text-white px-6 py-3 rounded-lg text-lg font-semibold">Our Product</a>
          </div>
        </section>
        </container>
</x-homelayout>