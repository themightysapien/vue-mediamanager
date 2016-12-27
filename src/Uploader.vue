<template>
    <div>
        <a class="btn btn-primary" v-on:click="toggleModal()">Click To Upload</a>

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

    }
  },
  computed: {
    showModal : function(){
        return this.$store.state.showModal
        /*doneTodosCount () {
            return this.$store.getters.doneTodosCount
        }*/
    }

    /*uploaded (data){
         console.log(this.items);

        this.items.push(data);
    }*/
  },
  methods : {
    toggleModal (){
        this.$store.commit('changeModalState');
    }
  }
}







</script>

<style>
    a { cursor : pointer;}



</style>
