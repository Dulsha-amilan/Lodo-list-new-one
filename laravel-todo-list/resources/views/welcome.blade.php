<x-guest-layout>
    <!-- Top content starts here -->
    <div class="relative sm:flex sm:justify-center sm:items-center">
        <div id="lottie-container" style="width: 500px; height: 500px;"></div>
        <div>
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
            Regain <mark class="px-2 text-white bg-blue-600 rounded dark:bg-blue-500">ToDo Application</mark> over your days
        </h1>
        <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">
        Welcome User
        </p>
        
<p class="mb-3 text-gray-500 dark:text-gray-400"></p>
<p class="text-gray-500 dark:text-gray-400">Organize your life and stay on top of your tasks with our easy-to-use ToDo application.<br> Whether you’re managing daily chores, tracking work projects, or setting personal goals,<br> our app helps you keep everything in one place.</p>
<p class="text-gray-500 dark:text-gray-400">
    <b><br> Contact Us</b><br/>

Have questions or feedback?<br/>
 Get in touch with us at:

Email: support@example.com
Phone: [123-456-7890]</p>
    </div>
    </div>
    
 
    

    <!-- Main content starts here -->
    
    <!-- Main content ends here -->

    <!-- Lottie Animation Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var animationContainer = document.getElementById('lottie-container');
            lottie.loadAnimation({
                container: animationContainer,
                renderer: 'svg',
                loop: true,
                autoplay: true,
                path: '{{ asset('animation/dd.json') }}' // Path to your animation JSON file
            });
        });
    </script>
    <br><br><br><br><br>
  <!-- Footer starts here -->
  <footer class="bg-gray-800 text-white py-6">
    <div class="container mx-auto text-center">
        <p class="text-base">&copy; {{ date('Y') }} Your Company Name. All rights reserved.</p>
    </div>
</footer>

        <!-- Footer ends here -->

</x-guest-layout>
