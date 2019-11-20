<template>
  
</template>

<script>
export default {
  data() {
    return {
      cities: [],
      zones: [],
      condition: false
    };
  },
  mounted() {
    axios
      .get("/cities")
      .then(response => {
        this.cities = response.data;
      })
      .catch(error => console.log(error));
  },

  methods: {
    getZones(city) {
      this.condition = true;
      console.log(city);
      axios
        .get(`/${city}/zones`)
        .then(response => {
          this.zones = response.data;
        })
        .catch(error => console.log(error));
    }
  }
};
</script>

<style  lang="scss">
</style>
