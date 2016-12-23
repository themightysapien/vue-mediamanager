<template>
    <div>
        <form method="post" v-bind:action="uploadUrl" v-on:submit="uploadFile" enctype="multipart/form-data">
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
  methods: {
    uploadFile : function(e){
        var form = e.target;
        var config = {
                url: this.uploadUrl,
                data: new FormData(form),
                method: 'post',
                processData: false,
                contentType: false
            };
        var submitBtn = $(form).find('[type=submit]');
        submitBtn.prop('disabled', true).val('Uploading...');
        var component = this;
        $.post(config).done(function (response) {

            submitBtn.prop('disabled', false).val('Upload');
            form.reset();
            component.$emit('uploaded', response.data);
        }).fail(function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        });

        e.preventDefault();
        return false;



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
  }

}





</script>