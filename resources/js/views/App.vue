<template>
<div class="container">
    <h2>guest page of boolpress</h2>
    <Posts />
</div>
  
</template>

<script>
import Posts from '../components/Posts.vue';

export default {
    name: "App",
    components: {
         Posts, 
         },
};
</script>

<style>

</style>