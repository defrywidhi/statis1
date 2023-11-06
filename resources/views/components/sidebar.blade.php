<link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"
    />
  
  <nav
id="sidenav-1"
class="absolute left-0 top-0 z-[1035] h-full w-60 -translate-x-full overflow-hidden bg-white shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] data-[te-sidenav-hidden='false']:translate-x-0 "
data-te-sidenav-init
data-te-sidenav-hidden="true"
data-te-sidenav-position="absolute">

<div class="hidden border-b lg:block dark:border-neutral-700/70 border-neutral-200 text-black"></div>

        <div class="flex items-center justify-between px-8 py-5">
            <div class="flex items-center mr-5">
            <div class="mr-5">
                <div class="inline-block relative shrink-0 cursor-pointer rounded-[.95rem]">
                <img >
                </div>
            </div>
            <div class="mr-2 ">
                <a href="/nilai" class="dark:hover:text-primary hover:text-primary transition-colors duration-200 ease-in-out text-[1.075rem] font-medium dark:text-dark text-secondary-inverse ">Defry Widhi</a>
                <span class="text-secondary-dark dark:text-gray-700 font-medium block text-[0.85rem]">Student</span>
            </div>
            </div>
        </div>

        <hr class="hidden border-b lg:block dark:border-neutral-700/70 border-neutral-200"></hr>

        <div class="relative pl-3 my-5 ">
            <div class="flex flex-col w-full font-medium">

            <div
            class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-black"
            onclick="dropdown()"
          >
            <div class="flex justify-between w-full items-center">
              <span class="text-sm ml-4 text-black font-bold">Pengolahan Data</span>
              <span class="text-sm rotate-180" id="arrow">
                <i class="bi bi-chevron-down"></i>
              </span>
            </div>
          </div>
          <div
            class="text-left text-sm mt-2 w-4/5 mx-auto text-black"
            id="submenu"
          >
          <a href="/nilai">
            <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
              Data Tunggal
            </h1>
          </a>
          <a href="frekuensi">
            <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
              Data Distribusi Frekuensi
            </h1>
          </a>
          <a href="tabelDeskripsi">
            <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
              Tabel Deskrpsi Data
            </h1>
          </a>
          <a href="/dataBergolong">
            <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
              Data Bergolong
            </h1>
          </a>
          <a href="/tabelChi">
            <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
              Table Chi
            </h1>
          </a>
          </div>
          <script type="text/javascript">
            function dropdown() {
              document.querySelector("#submenu").classList.toggle("hidden");
              document.querySelector("#arrow").classList.toggle("rotate-0");
            }
            dropdown();
      
            function openSidebar() {
              document.querySelector(".sidebar").classList.toggle("hidden");
            }
          </script>
</nav>
<!-- Sidenav -->

<!-- Toggler -->
<button
class="mt-10 ml-3 inline-block rounded bg-white px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-primary-700 hover:shadow-lg"
data-te-sidenav-toggle-ref
data-te-target="#sidenav-1"
aria-controls="#sidenav-1"
aria-haspopup="true">
<span class="block [&>svg]:h-5 [&>svg]:w-5 [&>svg]:text-black">
  <svg
    xmlns="http://www.w3.org/2000/svg"
    viewBox="0 0 24 24"
    fill="currentColor"
    class="h-5 w-5">
    <path
      fill-rule="evenodd"
      d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
      clip-rule="evenodd" />
  </svg>
</span>
</button>
