<template>
    <div>
        <form method="post" v-bind:action="uploadUrl">
            <div class="form-group">
                <label for="exampleInputFile">Choose File</label>
                <input type="file" id="exampleInputFile"
                       v-bind:name="name"
                       v-bind:multiple="multiple"
                >
                <p class="help-block"></p>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="save" value="Upload">
            </div>
        </form>
    </div>
</template>

<script>
export default {
  props: {
    name: {
      type: String,
      required: true
    },
    uploadUrl: {
      type: String,
      required: true
    },
    multiple: {
      type: Boolean,
      default : false
    },
  },
  data() {
    return {

    }
  },
  ready() {
  },
  init() {
  console.log(this.name);
  console.log(this.multiple);
  console.log(this.uploadUrl);
  },
  beforeDestroy() {

  },

  watch: {
  },

  methods: {
  }
}



</script>