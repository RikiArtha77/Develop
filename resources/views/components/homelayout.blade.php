<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coffdrin</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

  <!-- Navbar -->
  <nav class="bg-white shadow-lg">
    <div class="container mx-auto px-4">
      <div class="flex justify-between items-center py-4">
        <a href="landing" class="text-2xl font-bold text-teal-600">Coffdrin</a>
        <div class="hidden md:flex space-x-6">
          <a href="{{ route('landing') }}" class="text-gray-600 hover:text-teal-600">Home</a>
          <a href="{{ route('produk') }}" class="text-gray-600 hover:text-teal-600">Product</a>
          <a href="{{ route('package') }}" class="text-gray-600 hover:text-teal-600">Package</a>
          <a href="{{ route('cart') }}" class="text-gray-600 hover:text-teal-600">Shoping Cart</a>
          <a href="{{ route('kontak') }}" class="text-gray-600 hover:text-teal-600">Contact</a>
        </div>
        <button class="md:hidden text-gray-600 focus:outline-none">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </div>
  </nav>

  <container>
    {{ $slot }}
  </container>

  <!-- Tentang Kami Footer-->
  <footer>
  <section id="about" class="py-16 bg-white">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold text-teal-600 mb-8">About Us</h2>
      <p class="text-gray-700 max-w-2xl mx-auto">We are a beverage and coffee shop dedicated to serving the best drinks for every customer. From hand-picked coffees to fresh cold drinks, we have something for every taste.</p>
    </div>
  </section>
  </footer>
</body>
</html>