<template>
    <div class="row block mb-5 mt-5">
      <div class="col-md-6 col-md-offset-3">
          <input type="text" class="form-control h-30" placeholder="Rechercher un médicament"  @input="onInput"/>
      </div>
    </div>
</template>

<script>
export default {
  methods: {
    onInput(event) {
      this.$emit("input", event.target.value);
    }
  }
};
</script>
