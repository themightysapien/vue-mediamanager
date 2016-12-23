<template>
    <form method="post" action="">
        <div class="form-group">
            <label for="exampleInputFile">Choose File</label>
            <input type="file" id="exampleInputFile">
            <p class="help-block"></p>
        </div>
    </form>
</template>

<script>
export default {
  props: {
    title: {
      type: String,
      default: 'Upload file',
    },
    name: {
      type: String,
      default: 'file',
    }
  },

  components: {
  },
  data() {
    return {

    }
  },
  ready() {
  },
  init() {
  },
  beforeDestroy() {
    this.active = false;
    this.files = [];
  },

  watch: {
  },

  methods: {
  }
}
</script>