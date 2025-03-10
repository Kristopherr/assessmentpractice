<?php
include 'database/config.php';
include 'components/header.php';
?>
<div class="font-sans ">
      <div class="grid lg:grid-cols-2 items-center lg:gap-y-6 bg-blue-500">
        <div class="max-lg:order-1 max-lg:text-center sm:p-12 p-4">
          <h2 class="text-gray-800 lg:text-5xl text-3xl font-bold lg:!leading-[56px]">Harmony Hub</h2>
          <p class="text-gray-800 mt-6 text-base leading-relaxed">Laboris qui Lorem ad tempor ut reprehenderit. Nostrud anim nulla officia ea sit deserunt. Eu eu quis anim aute Laboris qui Lorem ad tempor ut reprehenderit.</p>
          <button type='button'
            class="bg-transparent border-2 border-gray-800 mt-12 transition-all text-gray-800 font-bold text-sm rounded-md px-6 py-2.5">Get Started</button>
        </div>

        <div class="lg:h-[480px] flex items-center">
          <img src="assets/images/yes.jpeg" class="w-full h-full object-cover" alt="Dining Experience" />
        </div>
      </div>

      <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-6 px-4 my-12">
        <div class="bg-gray-100 p-6 rounded-md">
          <svg xmlns="http://www.w3.org/2000/svg" fill="#007bff" class="w-10 h-10 mb-4 inline-block bg-white p-2 rounded-md" viewBox="0 0 32 32">
            <path d="M28.068 12h-.128a.934.934 0 0 1-.864-.6.924.924 0 0 1 .2-1.01l.091-.091a2.938 2.938 0 0 0 0-4.147l-1.511-1.51a2.935 2.935 0 0 0-4.146 0l-.091.091A.956.956 0 0 1 20 4.061v-.129A2.935 2.935 0 0 0 17.068 1h-2.136A2.935 2.935 0 0 0 12 3.932v.129a.956.956 0 0 1-1.614.668l-.086-.091a2.935 2.935 0 0 0-4.146 0l-1.516 1.51a2.938 2.938 0 0 0 0 4.147l.091.091a.935.935 0 0 1 .185 1.035.924.924 0 0 1-.854.579h-.128A2.935 2.935 0 0 0 1 14.932v2.136A2.935 2.935 0 0 0 3.932 20h.128a.934.934 0 0 1 .864.6.924.924 0 0 1-.2 1.01l-.091.091a2.938 2.938 0 0 0 0 4.147l1.51 1.509a2.934 2.934 0 0 0 4.147 0l.091-.091a.936.936 0 0 1 1.035-.185.922.922 0 0 1 .579.853v.129A2.935 2.935 0 0 0 14.932 31h2.136A2.935 2.935 0 0 0 20 28.068v-.129a.956.956 0 0 1 1.614-.668l.091.091a2.935 2.935 0 0 0 4.146 0l1.511-1.509a2.938 2.938 0 0 0 0-4.147l-.091-.091a.935.935 0 0 1-.185-1.035.924.924 0 0 1 .854-.58h.128A2.935 2.935 0 0 0 31 17.068v-2.136A2.935 2.935 0 0 0 28.068 12ZM29 17.068a.933.933 0 0 1-.932.932h-.128a2.956 2.956 0 0 0-2.083 5.028l.09.091a.934.934 0 0 1 0 1.319l-1.511 1.509a.932.932 0 0 1-1.318 0l-.09-.091A2.957 2.957 0 0 0 18 27.939v.129a.933.933 0 0 1-.932.932h-2.136a.933.933 0 0 1-.932-.932v-.129a2.951 2.951 0 0 0-5.028-2.082l-.091.091a.934.934 0 0 1-1.318 0l-1.51-1.509a.934.934 0 0 1 0-1.319l.091-.091A2.956 2.956 0 0 0 4.06 18h-.128A.933.933 0 0 1 3 17.068v-2.136A.933.933 0 0 1 3.932 14h.128a2.956 2.956 0 0 0 2.083-5.028l-.09-.091a.933.933 0 0 1 0-1.318l1.51-1.511a.932.932 0 0 1 1.318 0l.09.091A2.957 2.957 0 0 0 14 4.061v-.129A.933.933 0 0 1 14.932 3h2.136a.933.933 0 0 1 .932.932v.129a2.956 2.956 0 0 0 5.028 2.082l.091-.091a.932.932 0 0 1 1.318 0l1.51 1.511a.933.933 0 0 1 0 1.318l-.091.091A2.956 2.956 0 0 0 27.94 14h.128a.933.933 0 0 1 .932.932Z" data-original="#000000" />
            <path d="M16 9a7 7 0 1 0 7 7 7.008 7.008 0 0 0-7-7Zm0 12a5 5 0 1 1 5-5 5.006 5.006 0 0 1-5 5Z" data-original="#000000" />
          </svg>
          <h3 class="text-lg font-bold mb-2 text-gray-800">Customization</h3>
          <p class="text-sm text-gray-600">Tailor your blog page to suit your needs.</p>
          <a href='<?=ROOT_DIR?>register' class="text-blue-600 font-bold inline-block text-sm mt-4 hover:underline">Sign Up</a>
        </div>
        <div class="bg-gray-100 p-6 rounded-md">
          <svg xmlns="http://www.w3.org/2000/svg" fill="#007bff" class="w-10 h-10 mb-4 inline-block bg-white p-2 rounded-md" viewBox="0 0 512.001 512.001">
            <path d="M271.029 0c-33.091 0-61 27.909-61 61s27.909 61 61 61 60-27.909 60-61-26.909-61-60-61zm66.592 122c-16.485 18.279-40.096 30-66.592 30-26.496 0-51.107-11.721-67.592-30-14.392 15.959-23.408 36.866-23.408 60v15c0 8.291 6.709 15 15 15h151c8.291 0 15-6.709 15-15v-15c0-23.134-9.016-44.041-23.408-60zM144.946 460.404 68.505 307.149c-7.381-14.799-25.345-20.834-40.162-13.493l-19.979 9.897c-7.439 3.689-10.466 12.73-6.753 20.156l90 180c3.701 7.423 12.704 10.377 20.083 6.738l19.722-9.771c14.875-7.368 20.938-25.417 13.53-40.272zM499.73 247.7c-12.301-9-29.401-7.2-39.6 3.9l-82 100.8c-5.7 6-16.5 9.6-22.2 9.6h-69.901c-8.401 0-15-6.599-15-15s6.599-15 15-15h60c16.5 0 30-13.5 30-30s-13.5-30-30-30h-78.6c-7.476 0-11.204-4.741-17.1-9.901-23.209-20.885-57.949-30.947-93.119-22.795-19.528 4.526-32.697 12.415-46.053 22.993l-.445-.361-21.696 19.094L174.28 452h171.749c28.2 0 55.201-13.5 72.001-36l87.999-126c9.9-13.201 7.2-32.399-6.299-42.3z" data-original="#000000" />
          </svg>
          <h3 class="text-lg font-bold mb-2 text-gray-800">Support</h3>
          <p class="text-sm text-gray-600">24/7 customer support for all your inquiries.</p>
          <a href='<?=ROOT_DIR?>contact' class="text-blue-600 font-bold inline-block text-sm mt-4 hover:underline">Contact Us</a>
        </div>
      </div>
    </div>
<div class="font-sans bg-white p-4">
      <div class="md:max-w-5xl max-w-xl mx-auto">
        <div class="grid md:grid-cols-2 gap-12">
          <div class="text-left">
            <h2 class="text-gray-800 text-2xl font-bold mb-4">Elevate Your Online Presence</h2>
            <p class="mb-4 text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin aliquam, ipsum vel iaculis bibendum, justo turpis ullamcorper mauris, non aliquam nisi purus vel nisl. Integer efficitur turpis in bibendum tincidunt.</p>
            <p class="text-sm text-gray-500">Nulla facilisi. Vestibulum fringilla leo et purus consectetur, vel tincidunt dolor rhoncus. In hac habitasse platea dictumst. Fusce vel sodales elit. Suspendisse potenti. Sed eget consequat nisi.</p>
          </div>
          <div class="max-h-72">
            <img src="assets/images/djdj.jpg" alt="Placeholder Image" class="rounded-lg object-contain w-full h-full" />
          </div>
        </div>
        <hr class="border-gray-300 my-12" />
        <div class="grid md:grid-cols-2 gap-12">
          <div class="max-h-72 max-md:order-1">
            <img src="assets/images/audio.jpg" alt="Placeholder Image" class="rounded-lg object-contain w-full h-full" />
          </div>
          <div class="text-left">
            <h2 class="text-gray-800 text-2xl font-bold mb-4">Your Success, Our Commitment</h2>
            <p class="mb-4 text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin aliquam, ipsum vel iaculis bibendum, justo turpis ullamcorper mauris, non aliquam nisi purus vel nisl. Integer efficitur turpis in bibendum tincidunt.</p>
            <p class="text-sm text-gray-500">Nulla facilisi. Vestibulum fringilla leo et purus consectetur, vel tincidunt dolor rhoncus. In hac habitasse platea dictumst. Fusce vel sodales elit. Suspendisse potenti. Sed eget consequat nisi.</p>
          </div>
        </div>
      </div>
    </div>
<?php
include 'components/footer.php';
?>