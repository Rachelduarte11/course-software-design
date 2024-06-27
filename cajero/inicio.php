<?php

require 'db.php';

// Inicializar $cuenta como null antes de la consulta
$cuenta = null;

$sql = "SELECT saldo_soles, saldo_dolares FROM cuentas WHERE id = 1"; 
$resultado = $conexion->query($sql);

if ($resultado && $resultado->num_rows > 0) {
    $cuenta = $resultado->fetch_assoc();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../output.css">
  <link rel="stylesheet" href="../css/styles.css"> 
    <title>Servicios</title>
    <script src="https://kit.fontawesome.com/812c8ee19a.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Favicon -->
<link rel="shortcut icon" href="../img/logo/my-logotipo.png">

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://preline.co/assets/css/main.min.css">
    <link rel="stylesheet" href="css/inicio.css">
    <script src="../js/jquery.js"></script>
    <script src="../js/validation.js"></script>
</head>

<body>

    <!-- INICIO DE MENÚ -->
 <!-- ========== HEADER ========== -->
 <header class="bg-transparent flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full py-7">
    <nav class="relative max-w-7xl w-full flex flex-wrap justify-between  basis-full items-center px-4 md:px-6 md:px-8 mx-auto" aria-label="Global">
      <div class="md:col-span-3">
        <!-- Logo -->
       <img src="../img/logo/mylogo.svg" class="w-48" alt="">
        <!-- End Logo -->
      </div>

      <!-- Button Group -->
      <div class="flex items-center gap-x-2 ms-auto py-1 md:ps-6 md:order-3 md:col-span-3">
       
       

        <div class="md:hidden">
          <button type="button" class="hs-collapse-toggle size-[38px] flex justify-end items-center text-sm font-semibold rounded-xl border border-gray-200 text-black hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-700 dark:hover:bg-neutral-700" data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
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
        <button type="button" class="py-2 px-3 bg-mylile inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-gray-200 text-black hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:hover:bg-white/10 dark:text-white dark:hover:text-white">
          Cambiar Clave
        </button>
        <a href="../pages/home.html">
        <button type="button" class="py-2 px-3 bg-purple-200 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-purple-400 text-black hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:hover:bg-white/10 dark:text-white dark:hover:text-white">
          Volver a inicio
        </button>
        </a>
      </div>
      <!-- End Button Group -->
   
    </nav>
</header >

    <!-- SECOND SECTION -->
     
    <div class="section-2 p-8">
    <div class="border-b border-gray-200 dark:border-neutral-700 mt-24 mx-auto w-5/6">
  <nav class="flex space-x-1" aria-label="Tabs" role="tablist">
    <button type="button" class="hs-tab-active:bg-white hs-tab-active:border-b-transparent hs-tab-active:text-blue-600 dark:hs-tab-active:bg-neutral-800 dark:hs-tab-active:border-b-gray-800 dark:hs-tab-active:text-white -mb-px py-3 px-4 inline-flex items-center gap-x-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-t-lg hover:text-gray-700 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-neutral-700 dark:text-neutral-400 active" id="card-type-tab-item-1" data-hs-tab="#card-type-tab-preview" aria-controls="card-type-tab-preview" role="tab">
      Inicio
    </button>
    <button type="button" class="hs-tab-active:bg-white hs-tab-active:border-b-transparent hs-tab-active:text-blue-600 dark:hs-tab-active:bg-neutral-800 dark:hs-tab-active:border-b-gray-800 dark:hs-tab-active:text-white -mb-px py-3 px-4 inline-flex items-center gap-x-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-t-lg hover:text-gray-700 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-neutral-700 dark:text-neutral-400" id="card-type-tab-item-2" data-hs-tab="#card-type-tab-2" aria-controls="card-type-tab-2" role="tab">
     Depósito
    </button>
    <button type="button" class="hs-tab-active:bg-white hs-tab-active:border-b-transparent hs-tab-active:text-blue-600 dark:hs-tab-active:bg-neutral-800 dark:hs-tab-active:border-b-gray-800 dark:hs-tab-active:text-white -mb-px py-3 px-4 inline-flex items-center gap-x-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-t-lg hover:text-gray-700 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-neutral-700 dark:text-neutral-400" id="card-type-tab-item-3" data-hs-tab="#card-type-tab-3" aria-controls="card-type-tab-3" role="tab">
     Retiro
    </button>
    <button type="button" class="hs-tab-active:bg-white hs-tab-active:border-b-transparent hs-tab-active:text-blue-600 dark:hs-tab-active:bg-neutral-800 dark:hs-tab-active:border-b-gray-800 dark:hs-tab-active:text-white -mb-px py-3 px-4 inline-flex items-center gap-x-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-t-lg hover:text-gray-700 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-neutral-700 dark:text-neutral-400" id="card-type-tab-item-4" data-hs-tab="#card-type-tab-4" aria-controls="card-type-tab-4" role="tab">
     Saldo
    </button>
   
  </nav>
</div>

<div class="mt-3">
  <div id="card-type-tab-preview" role="tabpanel" aria-labelledby="card-type-tab-item-1">
 <!--
  Heads up! 👋

  This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
-->

<section class="w-5/6 mx-auto">
  <div class="max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
    <div class="grid grid-cols-1 gap-y-8 lg:grid-cols-2 lg:items-center lg:gap-x-16">
      <div class="mx-auto max-w-lg text-center lg:mx-0 ltr:lg:text-left rtl:lg:text-right">
        <h2 class="text-3xl font-bold sm:text-4xl">Bienvenido a Banco Solidez</h2>

        <p class="mt-4 text-gray-600">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut vero aliquid sint distinctio
          iure ipsum cupiditate? Quis, odit assumenda? Deleniti quasi inventore, libero reiciendis
          minima aliquid tempora. Obcaecati, autem.
        </p>

        <a
          href="#"
          class="mt-8 inline-block rounded bg-indigo-600 p-8 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-yellow-400"
        >
         Comienza hoy
        </a>
      </div>

      <div class="grid grid-cols-2 gap-4 sm:grid-cols-3">
        <a
          class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
          href="#"
        >
          <span class="inline-block rounded-lg bg-gray-50 p-3">
            <svg
              class="h-6 w-6"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
              <path
                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
              ></path>
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
              ></path>
            </svg>
          </span>

          <h2 class="mt-2 font-bold">Préstamos Personales y Comerciales</h2>

          <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
          Para tus proyectos personales o para impulsar tu negocio.
          </p>
        </a>

        <a
          class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
          href="#"
        >
          <span class="inline-block rounded-lg bg-gray-50 p-3">
            <svg
              class="h-6 w-6"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
              <path
                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
              ></path>
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
              ></path>
            </svg>
          </span>

          <h2 class="mt-2 font-bold">Tarjetas de Crédito</h2>

          <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
          Beneficios exclusivos
          </p>
        </a>

        <a
          class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
          href="#"
        >
          <span class="inline-block rounded-lg bg-gray-50 p-3">
            <svg
              class="h-6 w-6"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
              <path
                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
              ></path>
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
              ></path>
            </svg>
          </span>

          <h2 class="mt-2 font-bold">Inversiones y Ahorros</h2>

          <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
          Diversifica tu portafolio.
          </p>
        </a>

        <a
          class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
          href="#"
        >
          <span class="inline-block rounded-lg bg-gray-50 p-3">
            <svg
              class="h-6 w-6"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
              <path
                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
              ></path>
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
              ></path>
            </svg>
          </span>

          <h2 class="mt-2 font-bold">Accountant</h2>

          <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
            Lorem ipsum dolor sit amet consectetur.
          </p>
        </a>

       
       
      </div>
    </div>
  </div>
</section>
  </div>

  <div id="card-type-tab-2" class="hidden" role="tabpanel" aria-labelledby="card-type-tab-item-2">
    <!-- ========== MAIN CONTENT ========== -->
    <form action="deposito.php" method="POST" class="w-5/6 mx-auto">
    <div class="mb-3 ">
              <label for="exampleInputtext1" class="form-label">Monto</label>
              <input type="text" name="monto" class="form-control rounded-lg border-gray-400" id="nombre" aria-describedby="textHelp" placeholder="Ingrese el nombre" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Horas trabajadas</label>
              <select name="moneda" id="moneda" class="list rounded-lg border-gray-400 w-full" > 
                    <option value="soles">Soles</option>
                    <option value="dolares">Dólares</option>
                </select>
            </div>
    
            <button type="submit" class="py-3 px-4 bg-green-100 inline-flex  bg-mylile items-center gap-x-2 text-sm font-semibold rounded-lg border border-gray-500 text-gray-500 hover:border-gray-800 hover:text-gray-800 disabled:opacity-50 disabled:pointer-events-none ">
             Depositar
            </button>
            </form>

</div>
  <div id="card-type-tab-3" class="hidden" role="tabpanel" aria-labelledby="card-type-tab-item-3">
  <form action="retiro.php" method="POST" class="w-5/6 mx-auto">
    <div class="mb-3 ">
              <label for="exampleInputtext1" class="form-label">Monto</label>
              <input type="text" name="monto" class="form-control rounded-lg border-gray-400" id="nombre" aria-describedby="textHelp" placeholder="Ingrese el nombre" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Horas trabajadas</label>
              <select name="moneda" id="moneda" class="list rounded-lg border-gray-400 w-full" > 
                    <option value="soles">Soles</option>
                    <option value="dolares">Dólares</option>
                </select>
            </div>
    
            <button type="submit" class="py-3 px-4 bg-green-100 inline-flex  bg-mylile items-center gap-x-2 text-sm font-semibold rounded-lg border border-gray-500 text-gray-500 hover:border-gray-800 hover:text-gray-800 disabled:opacity-50 disabled:pointer-events-none ">
             Retirar
            </button>
            </form>
  </div>


  <div id="card-type-tab-4" class="hidden" role="tabpanel" aria-labelledby="card-type-tab-item-4">
  <div class="w-5/6 mx-auto">
        <div class="contenido">
            <div class="left1"></div>
            <div class="right">
            <h2>CONSULTA DE SALDO</h2>
            <?php if ($cuenta): ?>
        <p class="saldo">Saldo en Soles: <?php echo $cuenta['saldo_soles']; ?></p>
        <p>Saldo en Dólares: <?php echo $cuenta['saldo_dolares']; ?></p>
    <?php else: ?>
        <p>No se encontró la cuenta o no tiene saldo.</p>
    <?php endif; ?>
    <a href="inicio.php" class="obtn">Volver</a>

        </div>
        </div>
    </div>
    
   
    

  </div>    
</div>
 <!-- JS PLUGINS -->
  <!-- Required plugins -->
  <script src="https://cdn.jsdelivr.net/npm/preline/dist/preline.min.js"></script>
 
</body>

</html>