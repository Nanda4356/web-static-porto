<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Projects</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.18/dist/full.css" rel="stylesheet" type="text/css" />
</head>

<style>
    @media(max-width: 640px) {
        .kartu {
            width: 100%;
            height: 100vh;
            margin-left: 150px;
        }
    }
</style>

<body>

  <div class="kartu min-h-screen flex flex-col items-center py-10 px-4">
    <h1 class="text-4xl font-bold text-center mb-8">My Projects</h1>
    <div class="flex flex-wrap justify-center gap-6">

      <!-- CARD 1 -->
      <div class="card bg-base-100 shadow-md lg:w-150 sm:w-200">
        <figure class="px-10 pt-10">
          <img src="../assets/images/tugas/eccommerce.png" alt="E-Commerce Project" class="rounded-xl" />
        </figure>
        <div class="card-body items-center text-center">
          <h2 class="card-title">E-Commerce</h2>
          <p>Website toko online sederhana menggunakan HTML, CSS, dan JavaScript.</p>
          <div class="card-actions">
            <button class="btn btn-primary">View Project</button>
          </div>
        </div>
      </div>

      <!-- CARD 2 -->
      <div class="card bg-base-100 shadow-md lg:w-150 sm:w-200">
        <figure class="px-10 pt-10">
          <img src="../assets/images/tugas/figma.png" alt="Project 2" class="rounded-xl" />
        </figure>
        <div class="card-body items-center text-center">
          <h2 class="card-title">UI/UX</h2>
          <p>Project figma membuat aplikasi editor</p>
          <div class="card-actions">
            <button class="btn btn-primary">View Project</button>
          </div>
        </div>
      </div>

      <!-- CARD 3 -->
      <div class="card bg-base-100 shadow-md lg:w-150 sm:w-200">
        <figure class="px-10 pt-10">
          <img src="../assets/images/tugas/berita.png" alt="Project 3" class="rounded-xl" />
        </figure>
        <div class="card-body items-center text-center">
          <h2 class="card-title">Website Statis</h2>
          <p>Project HTML-CSS membuat website berita</p>
          <div class="card-actions">
            <button class="btn btn-primary">View Project</button>
          </div>
        </div>
      </div>

    </div>
  </div>

</body>

</html>
