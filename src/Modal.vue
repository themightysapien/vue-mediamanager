<template>
    <transition name="modal">
        <div class="modal-mask">
            <div class="modal-wrapper">
                <div class="modal-container">

                    <div class="modal-header">
                        <h3>{{ getTitle() }}</h3>
                    </div>

                    <div class="modal-body">
                        <file-upload post-action="/post.method" put-action="/put.method"></file-upload>
                    </div>

                    <div class="modal-footer">

                        <button class="btn btn-danger pull-right" @click="$emit('close')">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </transition>

</template>
<script>
const UPLOADER = 'uploader';
const LISTING = 'listing';
import FileUpload from './FileUpload.vue';
export default{
    name : 'modal',
    props : ['title', 'url'],
    data(){
        return{
            state : {
                view : UPLOADER
            }
        }
    },
    components:{
        FileUpload
    },
    methods :{
        getTitle (){
         return this.title != 'undefined' ? this.title : 'Uploader'
        }
    }
}


</script>


<style>
.modal-mask {
  position: fixed;
  z-index: 9998;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, .5);
  display: table;
  transition: opacity .3s ease;
}

.modal-wrapper {
  display: table-cell;
  vertical-align: middle;
}

.modal-container {
  /*width: 90%;
  margin: -20% auto 0px;
  padding: 20px 30px;
  background-color: #fff;
  border-radius: 2px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, .33);
  transition: all .3s ease;
  font-family: Helvetica, Arial, sans-serif;*/
  background-color:white;
    height: 100%;
    position:relative;
    margin:0px auto;
    padding:0px 3em;
    @media (min-width: 60em) {
      height:75%;
  	 margin:5% auto;
  	 max-height: 57em;
      max-width:66em;
      width:85%;
  	}
	> iframe, > div{
		border:none;
		width:100%;
		height:100%;
    }
}
.modal-header {
    <!--position:absolute;
    top:0px;-->
    min-height:10%;
    width:100%;
}

.modal-footer {
    <!--position:absolute;
    bottom:0px;-->
    min-height:10%;
    width:100%;
}
.modal-body {
    overflow-y: scroll;
    -webkit-overflow-scrolling: touch;
    min-height:200px;

}

.modal-header h3 {

}

.modal-body {
  margin: 20px 0;
}


/*
 * The following styles are auto-applied to elements with
 * transition="modal" when their visibility is toggled
 * by Vue.js.
 *
 * You can easily play with the modal transition by editing
 * these styles.
 */

.modal-enter {
  opacity: 0;
}

.modal-leave-active {
  opacity: 0;
}

.modal-enter .modal-container,
.modal-leave-active .modal-container {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}





</style>