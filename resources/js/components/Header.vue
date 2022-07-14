<template>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <span class="navbar-brand" href="#">Boolpress</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <router-link class="nav-item nav-link active" :to="{name: 'home'}">Home </router-link>

       <router-link class="nav-item nav-link active" :to="{name:'about'}">About </router-link>

        <router-link class="nav-item nav-link active" :to="{name:'posts'}">Posts </router-link>

        <router-link class="nav-item nav-link active" :to="{name:'blog'}">Blog </router-link>

    </div>
  </div>
</nav>
  </header>
</template>

<script>
export default {
    name: "Header"
}
</script>

<style>

</style>