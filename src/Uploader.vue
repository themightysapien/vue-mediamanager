<template>
    <div>
        <a class="btn btn-primary" v-on:click="showModal = true">Click To Upload</a>

        <modal v-if="showModal" @close="showModal = false" title="Uploader"></modal>
    </div>

</template>


<script>
import Modal from './Modal.vue';
export default {
  name: 'uploader',
  components : {
    Modal
  },
  props : ['title', 'url'],
  data () {
    return {
      msg: 'Welcome to Your Vue.js App',
      showModal :false,
    }
  }
}



</script>

<style>
</style>
