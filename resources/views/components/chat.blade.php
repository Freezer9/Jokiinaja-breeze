<!-- Header -->
<form action="" class="flex-grow p-6 overflow-y-auto" method="post">
  <div class="bg-tridary text-center justify-center max-w-full pt-3 pb-3 rounded-t-xl border">
    <h1 class="text-white text-xl font-semibold text-center">Chat with Seller</h1>
  </div>
  <div class="border pt-3 max-h-96 overflow-y-auto">

        <!-- Chat Messages -->

        <!-- User Message -->
        <div class="flex items-start justify-end mb-4">
          <div class="bg-gray-200 text-gray-700 p-3 rounded-lg">
            <p class="mb-1">{{ 'Message '}}</p>
            <span class="text-sm">{{ 'Time '}}</span>
          </div>
          <img src="/build/img/buyer.png" alt="User Avatar" class="w-10 h-10 rounded-full ml-3">
        </div>

        <!-- Seller Message -->
        <div class="flex items-end mb-4">
          <img src="/build/img/seller.png" alt="Seller Avatar" class="w-10 h-10 rounded-full mr-3">
          <div class="bg-blue-500 text-white p-3 rounded-lg">
            <p class="mb-1">{{ 'Message '}}</p>
            <span class="text-sm">{{ 'Time '}}</span>
          </div>
        </div>
    
  </div>

  <!-- Chat Input -->
  <div class="flex bg-gray-200 py-4 px-6 border rounded-b-xl">
    <input type="text" name="message" placeholder="Type your message..." required class="text-black flex-grow bg-white border border-gray-300 rounded-full px-4 py-2 focus:outline-none">
    <button id="sendChatButton" class="bg-blue-500 text-white px-4 py-2 rounded-full ml-4">Send</button>
  </div>

</form>