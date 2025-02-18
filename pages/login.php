<?php
include 'database/config.php';
include 'components/header.php';
?>
<!-- page -->
<main
  class="mx-auto flex min-h-screen w-full items-center justify-center bg-gray-900 text-white"
>
  <!-- component -->
  <section class="flex w-[30rem] flex-col space-y-10">
    <div class="text-center text-4xl font-medium">Log In</div>

  <form class="flex w-[30rem] flex-col space-y-10" action='loginController' method='post'>
    <div
      class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500"
    >
      <input name="username" type="text" placeholder="Username"
        class="w-full border-none bg-transparent outline-none placeholder:italic focus:outline-none"
      />
    </div>

    <div
      class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500"
    >
      <input name='password'
        type="password"
        placeholder="Password"
        class="w-full border-none bg-transparent outline-none placeholder:italic focus:outline-none"
      />
    </div>

    <button type='submit' class="transform rounded-sm bg-indigo-600 py-2 font-bold duration-300 hover:bg-indigo-400">
      LOG IN
    </button>
</form>

    <a
      href="#"
      class="transform text-center font-semibold text-gray-500 duration-300 hover:text-gray-300"
      >FORGOT PASSWORD?</a
    >

    <p class="text-center text-lg">
      No account?
      <a
        href="<?=ROOT_DIR?>register"
        class="font-medium text-indigo-500 underline-offset-4 hover:underline"
        >Create One</a
      >
    </p>
  </section>
</main>
<?php if (isset($_SESSION['status_message'])) : ?>
<div class="status-message"><?= $_SESSION['status_message'] ?></div>
<?php unset($_SESSION['status_message']) ?> <?php endif ?>
<?php
include 'components/footer.php';
?>