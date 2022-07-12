<template>
  <div class="container">
    <h2>posts list</h2>
    <div class="row row-cols-3">

    <!-- single post -->
    <div v-for="post in posts" :key="post.id" class="col">
    <div class="card" >
  <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
  <div class="card-body">
    <h5 class="card-title">{{ post.title }}</h5>
    <p class="card-text">{{ post.content }}</p>
  </div>
  <!-- <ul class="list-group list-group-flush">
    <li class="list-group-item">Cras justo odio</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div> -->
    </div>
    </div>
  </div>
</template>

<script>
import Axios from 'axios';

export default {
    name: 'Posts',
    data() {
        return {
            posts: []
        }
    },
    created() {
        this.getPosts();
    },
    methods: {
        getPosts() {
            Axios.get('http://127.0.0.1:8000/api/posts').then(resp => {
                this.posts = resp.data.results;
            });
        }
    }

};
</script>

<style>

</style>