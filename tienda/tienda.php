<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../output.css">
  <link rel="stylesheet" href="../css/styles.css"> 
    <title>Tienda de Tecnología</title>
    <link rel="stylesheet" href="css/styles_tienda.css">
    <link rel="stylesheet" href="https://preline.co/assets/css/main.min.css">
</head>


<body>
    <!-- ========== HEADER ========== -->
  <header class="bg-transparent flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full py-7">
    <nav class="relative max-w-7xl w-full flex flex-wrap md:grid md:grid-cols-12 basis-full items-center px-4 md:px-6 md:px-8 mx-auto" aria-label="Global">
      <div class="md:col-span-3">
        <!-- Logo -->
       <img src="../img/logo/mylogo.svg" alt="">
        <!-- End Logo -->
      </div>

      <!-- Button Group -->
      <div class="flex items-center gap-x-2 ms-auto py-1 md:ps-6 md:order-3 md:col-span-3">
        <button type="button" class="py-2 px-3 bg-mylile inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-gray-200 text-black hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:hover:bg-white/10 dark:text-white dark:hover:text-white">
          Inicio de sesion
        </button>
       

        <div class="md:hidden">
          <button type="button" class="hs-collapse-toggle size-[38px] flex justify-center items-center text-sm font-semibold rounded-xl border border-gray-200 text-black hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-700 dark:hover:bg-neutral-700" data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
            <svg class="hs-collapse-open:hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="3" x2="21" y1="6" y2="6" />
              <line x1="3" x2="21" y1="12" y2="12" />
              <line x1="3" x2="21" y1="18" y2="18" />
            </svg>
            <svg class="hs-collapse-open:block hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 6 6 18" />
              <path d="m6 6 12 12" />
            </svg>
          </button>
        </div>
      </div>
      <!-- End Button Group -->

      <!-- Collapse -->
      <div id="navbar-collapse-with-animation" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block md:w-auto md:basis-auto md:order-2 md:col-span-6">
        <div class="flex flex-col gap-y-4 gap-x-0 mt-5 md:flex-row md:justify-center md:items-center md:gap-y-0 md:gap-x-7 md:mt-0">
          <div>
            <a class="relative inline-block text-black before:absolute before:bottom-0.5 before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-mylile dark:text-white" href="/course-software-design/pages/home.html" aria-current="page">Ejercicios</a>
          </div>
          <div>
            <a class="inline-block text-black hover:text-gray-600 dark:text-white dark:hover:text-neutral-300" href="#">Registro</a>
          </div>
          <div>
            <a class="inline-block text-black hover:text-gray-600 dark:text-white dark:hover:text-neutral-300" href="#">Servicios</a>
          </div>
          <div>
            <a class="inline-block text-black hover:text-gray-600 dark:text-white dark:hover:text-neutral-300" href="#">Landing page</a>
          </div>
          
        </div>
      </div>
      <!-- End Collapse -->
    </nav>
  </header>
  <!-- ========== END HEADER ========== -->
  <main id="content">
  <div class="max-w-7xl px-4 lg:px-6 lg:px-8 py-12 lg:py-24 mx-auto ">
      <div class="mb-6 sm:mb-10 max-w-2xl text-center mx-auto mt-24">
        <h1 class="font-medium text-black text-2xl sm:text-4xl dark:text-white">
          Eccomerce Don Pepito
        </h1>
      </div>
        <form action="operaciones.php" method="post" class="w-5/6 mx-auto">
          
            <div class="mb-3">
              <label for="exampleInputtext1" class="form-label">Nombre del Cliente:</label>
              <input type="text" id="cliente" name="cliente" class="form-control rounded-lg border-gray-200" aria-describedby="textHelp" placeholder="Ingrese el nombre" required>
            </div>

            <div class="mb-3 flex-col flex ">
              <label for="" class="form-label">Horas trabajadas</label>
              <select id="producto" name="producto" class="form-control rounded-lg border-gray-200" required>
                <option value="Lavadora LG|1250.00">Lavadora LG - S/ 1250.00</option>
                <option value="Micrófono Shure|890.00">Micrófono Shure - S/ 890.00</option>
                <option value="Refrigeradora Samsung|1650.00">Refrigeradora Samsung - S/ 1650.00</option>
                <option value="Microondas|450.00">Microondas - S/ 450.00</option>
                <option value="TV LED 70''|2250.00">TV LED 70'' - S/ 2250.00</option>
                <option value="Licuadora Oster|184.00">Licuadora Oster - S/ 184.00</option>
                <option value="Luz LED|35.00">Luz LED - S/ 35.00</option>
                <option value="Tostadora|98.99">Tostadora - S/ 98.99</option>
                <option value="Cocina LG|760.00">Cocina LG - S/ 760.00</option>
                <option value="Cámara Web Logitech C920|500.00">Cámara Web Logitech C920 - S/ 500.00</option>
            </select>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Cantidad</label>
                <input type="number" class="form-control rounded-lg border-gray-200" id="tarifaHoras" name="cantidad" min="1" placeholder="Cantidad" required>
              </div>
    
    
           
            <button type="submit" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-gray-500 text-gray-500 hover:border-gray-800 hover:text-gray-800 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-400 dark:text-neutral-400 dark:hover:text-neutral-300 dark:hover:border-neutral-300">
              Crear Cotizacion
            </button>
          
          </form>

    
    </div>
</main>
    <!-- JS PLUGINS -->
  <!-- Required plugins -->
  <script src="https://cdn.jsdelivr.net/npm/preline/dist/preline.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
