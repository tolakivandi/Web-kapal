<?php
    require_once "../inc/config.php";
    $results_1 = mysqli_query($connection, "SELECT * FROM dpi");
    $results_2 = mysqli_query($connection, "SELECT * FROM pemilik");
    $results_3 = mysqli_query($connection, "SELECT * FROM alat_tangkap");
    
    $items_1 = [];
    $items_2 = [];
    $items_3 = [];

    while($result = mysqli_fetch_array($results_1)) {
        $items_1[] = $result;
    }
    while($result = mysqli_fetch_array($results_2)) {
        $items_2[] = $result;
    }
    while($result = mysqli_fetch_array($results_3)) {
        $items_3[] = $result;
    }
?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Kapal</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <nav class="bg-orange-300 text-white py-4">
    <div class="container mx-auto flex flex-wrap items-center justify-between">
      <a href="" class="flex h-max items-center gap-3 font-semibold">
        <img src="../images/logo-pens.png" alt="" class="w-16">
        PENS SUMENEP
        </a>
        <button data-collapse-toggle="mobile-menu" type="button" class="md:hidden ml-3 text-gray-400 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 rounded-lg inline-flex items-center justify-center" aria-controls="mobile-menu-2" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div class="hidden md:block w-full md:w-auto" id="mobile-menu">
        <ul class="flex-col md:flex-row flex md:space-x-8 mt-4 md:mt-0 md:text-sm md:font-medium">
            <li>
            <a href="../index.php" class="bg-blue-700 md:bg-transparent text-white block pl-3 pr-4 py-2 md:p-0 rounded focus:outline-none" aria-current="page">Home</a>
            </li>
            <li>
            <a href="../dpi/dpi.php" class="text-white hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">DPI</a>
            </li>
            <li>
            <a href="../pemilik/pemilik.php" class="text-white hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">Pemilik</a>
            </li>
            <li>
            <a href="../alat_tangkap/alat_tangkap.php" class="text-white hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">Alat tangkap</a>
            </li>
            <li>
            <a href="kapal.php" class="text-white hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">Kapal</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
  <!-- component -->
<form method="post" action="../function/kapal/create_kapal.php" class="w-full overflow-scroll h-screen bg-gradient-to-r from-blue-100 via-purple-100 to-pink-100 p-4 flex items-center justify-center" >
    <div class="bg-white py-6 px-10 sm:max-w-md w-full rounded">
        <div class="sm:text-3xl text-2xl font-semibold text-center text-sky-600  mb-12">
            Create kapal 
        </div>
        <div class="flex flex-col gap-7">
            <div>
                 <input type="text" class="focus:outline-none border-b w-full pb-2 border-sky-400 placeholder-gray-500" name="nama_kapal"  placeholder="Name "/>
            </div>
            <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="id_dpi">
                <option selected>Pilih DPI</option>
                <?php foreach($items_1 as $x) : ?>
                <option value="<?= $x["id_dpi"] ?>"><?= $x["nama_dpi"]?></option>
                <?php endforeach ?>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
            <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="id_pemilik">
                <option selected>Pilih Pemilik</option>
                <?php foreach($items_2 as $x) : ?>
                <option value="<?= $x["id_pemilik"] ?>"><?= $x["nama_pemilik"]?></option>
                <?php endforeach ?>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
            <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="id_alat_tangkap">
                <option selected>Pilih Alat Tangkap</option>
                <?php foreach($items_3 as $x) : ?>
                <option value="<?= $x["id_alat_tangkap"] ?>"><?= $x["nama_alat_tangkap"]?></option>
                <?php endforeach ?>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
            <div class="flex justify-center my-6">
                <button class=" rounded-full  p-3 w-full sm:w-56   bg-gradient-to-r from-sky-600  to-teal-300 text-white text-lg font-semibold " type="submit" >
                    Add Kapal
                </button>
            </div>
        </div>
    </div>
</form>
</body>
</html>