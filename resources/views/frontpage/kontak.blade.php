<x-homelayout>
    <section id="contact" class="py-16 bg-gray-200">
        <div class="container mx-auto px-4">
          <h2 class="text-3xl font-bold text-teal-600 text-center mb-8">Contact</h2>
          <div class="max-w-xl mx-auto">
            <form class="bg-gray-100 p-8 rounded-lg shadow-lg">
              <div class="mb-4">
                <label class="block text-gray-700 mb-2">Name</label>
                <input type="text" class="w-full p-3 rounded-lg border border-gray-300" placeholder="Nama Lengkap">
              </div>
              <div class="mb-4">
                <label class="block text-gray-700 mb-2">Email</label>
                <input type="email" class="w-full p-3 rounded-lg border border-gray-300" placeholder="Email Anda">
              </div>
              <div class="mb-4">
                <label class="block text-gray-700 mb-2">Message</label>
                <textarea class="w-full p-3 rounded-lg border border-gray-300" rows="4" placeholder="Tulis pesan Anda..."></textarea>
              </div>
              <button type="submit" class="w-full bg-teal-600 text-white py-3 rounded-lg font-semibold">Send Message</button>
            </form>
          </div>
        </div>
      </section>
</x-homelayout>