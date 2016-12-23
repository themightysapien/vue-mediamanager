<template>
    <div>
        <a class="btn btn-primary" v-on:click="showModal = true">Click To Upload</a>

        <modal v-if="showModal" @close="showModal = false"></modal>
    </div>

</template>


<script>
import Modal from './Modal.vue';
export default {
  name: 'uploader',
  components : {
    Modal
  },
  props : ['title', 'uploadUrl', 'name', 'multiple'],
  data () {
    return {
      showModal :false,
    }
  }
}



</script>

<style>
</style>
