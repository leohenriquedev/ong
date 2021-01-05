<template>
  <div> 
      
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <div class="container-fluid">
        <a class="navbar-brand" :href="'/'">Ong</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" :href="'/client/new'">Novo Cliente</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" :href="'/provider/new'">Novo Fornecedor</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
      
  </div>
</template>