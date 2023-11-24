<template>
  <!-- <div id="app"> -->
    <div class="navbar">
 
    </div>
    <main class="" >
      <RouterView />
    </main>
  <!-- </div> -->
</template>

<style>
.navbar {

  color: #fff;
  position: fixed;
  top:10px;
  right: 10%;
  z-index: 1000;
  display: block;
  padding: 10px;
  
}

.nav {
  display: flex;
  justify-content: center;
  list-style: none;
  padding: 0;
 
}

.nav-link {
  text-decoration: none;
  color: #000000;
  margin: 0 10px;
  display: block;
}
</style>